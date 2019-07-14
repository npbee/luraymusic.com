import { el, text, mount } from "redom";

const key = "TdBF8RdW7hqyAo1e";
const artistId = "5874619-luray";
const url = `https://api.songkick.com/api/3.0/artists/${artistId}/calendar.json?apikey=${key}`;
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
  const rows = events.map(buildRow);
  const thead = el(
    "thead",
    el("tr", [el("th", "Date"), el("th", "Location"), el("th", "Venue")])
  );
  const tbody = el("tbody", rows);

  return el("table", [thead, tbody]);
}

function buildRow(event) {
  const date = formatDate(event.start.date);
  const location = event.location.city;
  const venue = event.venue.displayName;
  const link = event.uri;
  const a = el(
    "div",
    el("a", { href: link, target: "_blank", rel: "noopener noreferrer" }, venue)
  );
  const row = el("tr", [el("td", date), el("td", location), el("td", a)]);

  return row;
}

function formatDate(datetime) {
  const date = new Date(datetime);
  const month = date.getMonth() + 1;
  const day = date.getDate();
  const year = date.getFullYear();

  return `${month}/${day}/${year}`;
}
