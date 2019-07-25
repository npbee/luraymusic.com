import { el, text, mount } from "redom";

const key = "TdBF8RdW7hqyAo1e";
const artistId = 5874619;
const url = `https://api.songkick.com/api/3.0/artists/${artistId}-luray/calendar.json?apikey=${key}`;
const showTarget = document.getElementById("show-dates");
const fallbackUrl = "https://www.songkick.com/artists/5874619-luray";

const loading = el("p", text("Loading..."));
const error = el(
  "p",
  { class: "fetch-error" },
  text("There was an error fetching the upcoming concerts. "),
  text("Please check the Songkick page directly at "),
  el("a", { href: fallbackUrl }, fallbackUrl)
);

fetchEvents();

function fetchEvents() {
  mount(showTarget, loading);

  function handleResponse(resp) {
    if (resp.resultsPage.status !== "ok") {
      mount(showTarget, error, loading, true);
      return;
    }

    const events = resp.resultsPage.results.event;
    const table = buildTable(events);

    mount(showTarget, table, loading, true);
  }

  try {
    fetch(url)
      .then(res => res.json())
      .then(handleResponse);
  } catch (err) {
    mount(showTarget, error, loading, true);
  }
}

function buildTable(events) {
  let support = [];
  const rows = events.map(function(event) {
    const eventSupport = parseEventSupport(event);

    if (eventSupport) {
      support.push(...eventSupport);
    }

    return buildRow(event, eventSupport);
  });
  const thead = el(
    "thead",
    el("tr", [el("th", "Date"), el("th", "Location"), el("th", "Venue")])
  );
  const tbody = el("tbody", rows);

  const table = el("table", [thead, tbody]);

  return el("div", [table]);
}

function buildRow(event, support) {
  const date = formatDate(event.start.date);
  const location = event.location.city;
  const venue = event.venue.displayName;
  const link = event.uri;
  const supportInfo =
    support.length >= 1
      ? el("div", { className: "support-row" }, joinSupport(support))
      : null;
  const a = el(
    "div",
    { className: "table-venue" },
    el(
      "a",
      { href: link, target: "_blank", rel: "noopener noreferrer" },
      venue
    ),
    supportInfo
  );
  const last = el("td", [a]);
  const row = el("tr", [el("td", date), el("td", location), last]);

  return row;
}

function formatDate(dateString) {
  const [year, month, day] = dateString.split(/\D/).map(s => parseInt(s));

  return `${month}/${day}/${year}`;
}

function parseEventSupport(event) {
  if (!event.performance) return;

  try {
    const performance = event.performance;
    const support = [];

    for (let i = 0; i < performance.length; i++) {
      const perf = performance[i];
      const artist = perf.artist;
      if (artist && artist.id !== artistId) {
        support.push({
          value: perf.artist.displayName,
        });
      }
    }

    return support;
  } catch (err) {
    return [];
  }
}

function joinSupport(supports) {
  let str = "";
  let needsSeparator = supports.length > 1;

  for (let i = 0; i < supports.length; i++) {
    const support = supports[i];
    str += support.value;

    if (needsSeparator) {
      if (i + 2 === supports.length) {
        str += ", and ";
      } else if (i + 1 < supports.length) {
        str += ",";
      }
    }
  }

  return `w/ ${str}`;
}
