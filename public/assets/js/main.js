$(function() {

    // Tumblr
    var apiKey = 'qgvww1o5nwzS3Fyv8wnKXrMizEApuugmlZdeJvZHdh4M5yhLwd';
    var apiBase = 'http://api.tumblr.com/v2/blog/luraymusic.tumblr.com/posts?' +
        'api_key=' + apiKey;
    var limit = 5;
    var currentOffset = 0;
    var OFFSET_INC = 5;
    var tumblr = $('#tumblr');
    var loader = $('#loader');
    var loadMore = $('#load-more');
    var handledTypes = ['photo', 'video', 'text'];

    function renderDate(post) {
        var date = new Date(post.timestamp * 1000);
        var month = date.getMonth() + 1;
        var day = date.getDate();
        var year = date.getFullYear();
        var $date = $('<div/>', {
            class: 'post__date',
            text: month + '/' + day + '/' + year
        });

        return $date;
    }

    function renderLink(post) {
        var permalink = post.post_url;

        var $link = $('<a/>', {
            href: permalink,
            class: 'post__link',
            text: 'link'
        });

        return $link;
    }

    function renderPhotoPost(post) {
        var $photosContainer = $('<div/>', { class: 'photo-post' });
        var $caption = $('<div/>', {
            class: 'post__caption',
            html: post.caption
        });
        var $photos = post.photos.map(function(photo) {
            var finalUrl;
            var originalSize = photo.original_size.url;

            // First try to grab the 500 width photo
            var mediumSize = photo.alt_sizes.filter(function(photo) {
                return photo.width === 500;
            });

            if (mediumSize.length) {
                mediumSize = mediumSize[0].url;
            } else {
                mediumSize = null;
            }

            finalUrl = mediumSize || originalSize;

            return $('<img/>', { src: finalUrl });
        });

        $photosContainer.append($photos).append($caption);

        return $photosContainer;
    }

    function renderVideoPost(post) {
        var $container = $('<div/>', { class: 'video-post' });
        var $caption = $('<div/>', {
            class: 'post_caption',
            html: post.caption
        });
        var player = post.player.filter(function(player) {
            return player.width === 500;
        });

        var $player = $('<div/>', {
            class: 'post_player',
            html: player[0].embed_code
        });

        $container.append($player).append($caption);

        return $container;
    }

    function renderTextPost(post) {
        var $container = $('<div/>', { class: 'post_text' });
        var $body = $('<div/>', {
            class: 'post_body',
            html: post.body
        });

        $container.append($body);

        return $container;
    }

    function renderPost(post) {
        var $post = $('<div/>', {
            class: 'post'
        });

        var $date = renderDate(post);
        $post.append($date);

        var $content;

        if (post.type === 'photo') {
            $content = renderPhotoPost(post);
        } else if (post.type === 'video') {
            $content = renderVideoPost(post);
        } else if (post.type === 'text') {
            $content = renderTextPost(post);
        }

        $post.append($content);

        var $link = renderLink(post);
        $post.append($link);

        return $post;
    }

    function getPosts() {

        loader.show();

        var url = apiBase +
            '&limit=' + limit +
            '&offset=' + currentOffset;

        $.ajax({
            url: url,
            dataType: 'jsonp'
        })
        .then(function(data) {
            loader.hide();
            loadMore.show();
            var posts = data.response.posts;
            var renderedPosts = posts
                .filter(function(post) {
                    return handledTypes.indexOf(post.type) !== -1;
                }).map(renderPost);
            renderedPosts.forEach(function(renderedPost) {
                tumblr.append(renderedPost);
            });
        })
        .fail(function() {
            tumblr.html('' +
                '<p>There was a problem fetching the Tumblr posts!</p>' +
                '<p>Please try visiting the Tumblr directly at this location: ' +
                    '<a href="http://news.luraymusic.com">news.luraymusic.com</a></p>');
        });
    }

    // only on home page
    if (tumblr.length) {
        getPosts();

        loadMore.on('click', function(e) {
            currentOffset += OFFSET_INC;

            return getPosts();
        });
    }

    //Nav Toggle
    $('.nav-toggle').on('click', function() {
        $("#nav").toggleClass('nav--open');
        $(this).toggleClass("nav-toggle--open");
        return false;
    });




    //Tour Dates Review
    $('table tr').on('click', function(e) {
        if ($(this).hasClass('reviewed')) {
            var     review = "#" + $(this).attr("data-review"),
                  $rowPosition = $(this).position();
            $(this).toggleClass('active');
            $(review).css({
                left: "0",
                top: $rowPosition.top + $(this).height()
            }).slideToggle(100);
            e.preventDefault;
        }
    });

    //lightbox
    $('.lightbox-trigger').colorbox({
        scalePhotos: true,
        maxHeight: "100%",
        maxWidth: "100%",
        rel: "img"
    });

    /**********
     * $TABS
     **********/
    var $tabs = $('.tabs');

    $tabs.on('click', 'a', function(e) {
        var $link = $(this);
        var $links = $link.closest('ul').find('a');
        var targetHref = $link.attr('href');
        var $target = $(targetHref);
        var $contents = $target.closest('.tab__content').find('section');

        $links.each(function(index, link) {
            $(link).removeClass('tab--active');
        });

        $contents.each(function(index, content) {
            $(content).removeClass('tab--active');
        });

        $link.addClass('tab--active');
        $target.addClass('tab--active');

        if (history.pushState) {
            history.pushState(null, null, targetHref);
        }

        e.preventDefault();
    });

    if(window.location.hash) {
        var hash = window.location.hash;
        var $targetContent = $(hash);
        var $targetLink = $('[href=' + hash + ']');
        var $links = $targetLink.closest('ul').find('a');
        var $contents = $targetContent.closest('.tab__content').find('section');

        $links.each(function(index, link) {
            $(link).removeClass('tab--active');
        });

        $contents.each(function(index, content) {
            $(content).removeClass('tab--active');
        });

        $targetLink.addClass('tab--active');
        $targetContent.addClass('tab--active');

    }

    //PNG FALLBACK
    if(!Modernizr.svg) {
        $('img[src*="svg"]').attr('src', function() {
            return $(this).attr('src').replace('.svg', '.png');
        });
    }

});
