//function sticky_relocate() {
//    var window_top = $(window).scrollTop();
//    var div_top = $('#sticky-anchor').offset().top;
//    $("#sticky").hide();
//    if (window_top > div_top && $(window).width() > 1024 && window.orientation != 0) {
//        $("#sticky").show();
//        $('#sticky').addClass('stick');
//        $('#sticky-anchor').height($('#sticky').outerHeight());
//    } else {
//        $('#sticky').removeClass('stick');
//        $('#sticky-anchor').height(0);
//    }
//}

function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    $("header").hide();
    if (window_top > div_top) {
        $("header").show();
        //        $('#sticky').addClass('stick');
        //        $('#sticky-anchor').height($('#sticky').outerHeight());
    } else {
        $("header").hide();
    }
}


$(function() {
    $(window).scroll(sticky_relocate);
    sticky_relocate();

    //window and animation items
    var animation_elements = $.find('.animation-element');
    var web_window = $(window);

    //check to see if any animation containers are currently in view
    function check_if_in_view() {
        //get current window information
        var window_height = web_window.height();
        var window_top_position = web_window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        //iterate through elements to see if its in view
        $.each(animation_elements, function() {

            //get the element sinformation
            var element = $(this);
            var element_height = $(element).outerHeight();
            var element_top_position = $(element).offset().top;
            var element_bottom_position = (element_top_position + element_height);

            //check to see if this current container is visible (its viewable if it exists between the viewable space of the viewport)
            if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
                element.addClass('in-view');
            } else {
                element.removeClass('in-view');
            }
        });

    }

    //on or scroll, detect elements in view
    $(window).on('scroll resize', function() {
            check_if_in_view();
        })
        //trigger our scroll event on initial load
    $(window).trigger('scroll');

    // youtube Play
    $('.show-modal').on('click', function() {
        $.showYtVideo({
            videoId: 'uVdV-lxRPFo'
        });
    });
});

$('.show-modal').on('click', function() {
    $.showYtVideo({
        videoId: 'uVdV-lxRPFo'
    });
});


$("ul#tabs li").click(function(e) {
    if (!$(this).hasClass("active")) {
        var tabNum = $(this).index();
        var nthChild = tabNum + 1;
        $("ul#tabs li.active").removeClass("active");
        $(this).addClass("active");
        $("ul#tab li.active").removeClass("active");
        $("ul#tab li:nth-child(" + nthChild + ")").addClass("active");
        if (nthChild == 1) {
            $("#buttonSwitch").attr('src', "images/btn/first-tab-indvl.png");
            $("#ind").css("font-weight", "bold");
            $("#stup").removeAttr('style');
        } else if (nthChild == 2) {
            $("#buttonSwitch").attr('src', "images/btn/second-tab-startup.png");
            $("#stup").css("font-weight", "bold");
            $("#ind").removeAttr('style');
        }
    }
});

$(function() {
    $("#ind").css("font-weight", "bold");
});

// REQUIRED: "jQuery Query Parser" plugin for Youtube Module.
// https://github.com/mattsnider/jquery-plugin-query-parser
// Minified version here:
(function($) {
    var pl = /\+/g,
        searchStrict = /([^&=]+)=+([^&]*)/g,
        searchTolerant = /([^&=]+)=?([^&]*)/g,
        decode = function(s) {
            return decodeURIComponent(s.replace(pl, " "));
        };
    $.parseQuery = function(query, options) {
        var match, o = {},
            opts = options || {},
            search = opts.tolerant ? searchTolerant : searchStrict;
        if ('?' === query.substring(0, 1)) {
            query = query.substring(1);
        }
        while (match = search.exec(query)) {
            o[decode(match[1])] = decode(match[2]);
        }
        return o;
    };
    $.getQuery = function(options) {
        return $.parseQuery(window.location.search, options);
    };
    $.fn.parseQuery = function(options) {
        return $.parseQuery($(this).serialize(), options);
    };
}(jQuery));

// YOUTUBE VIDEO CODE
$(document).ready(function() {




    var $root = $('html, body');
    $('a.menu').click(function() {
        $root.animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
        $('.navbar-collapse.in').collapse('hide');
        return false;
    });
    $('a.scrolldown').click(function() {
        $root.animate({
            scrollTop: $($.attr(this, 'href')).offset().top + 110
        }, 500);
        $('.navbar-collapse.in').collapse('hide');
        return false;
    });

    // BOOTSTRAP 3.0 - Open YouTube Video Dynamicaly in Modal Window
    // Modal Window for dynamically opening videos
    $('a[href^="http://www.youtube.com"]').on('click', function(e) {
        // Store the query string variables and values
        // Uses "jQuery Query Parser" plugin, to allow for various URL formats (could have extra parameters)
        var queryString = $(this).attr('href').slice($(this).attr('href').indexOf('?') + 1);
        var queryVars = $.parseQuery(queryString);

        // if GET variable "v" exists. This is the Youtube Video ID
        if ('v' in queryVars) {
            // Prevent opening of external page
            e.preventDefault();

            // Variables for iFrame code. Width and height from data attributes, else use default.
            var vidWidth = 768; // default
            var vidHeight = 576; // default
            if ($(this).attr('data-width')) {
                vidWidth = parseInt($(this).attr('data-width'));
            }
            if ($(this).attr('data-height')) {
                vidHeight = parseInt($(this).attr('data-height'));
            }
            var iFrameCode = '<iframe width="' + vidWidth + '" height="' + vidHeight + '" id="videoIframe" scrolling="no" allowtransparency="true" allowfullscreen="true" src="http://www.youtube.com/embed/' + queryVars['v'] + '?rel=0&wmode=transparent&showinfo=0" frameborder="0"></iframe>';

            // Replace Modal HTML with iFrame Embed
            $('#mediaModal .modal-body').html(iFrameCode);
            // Set new width of modal window, based on dynamic video content
            $('#mediaModal').on('show.bs.modal', function() {
                // Add video width to left and right padding, to get new width of modal window
                var modalBody = $(this).find('.modal-body');
                var modalDialog = $(this).find('.modal-dialog');
                var newModalWidth = vidWidth + parseInt(modalBody.css("padding-left")) + parseInt(modalBody.css("padding-right"));
                newModalWidth += parseInt(modalDialog.css("padding-left")) + parseInt(modalDialog.css("padding-right"));
                newModalWidth += 'px';
                // Set width of modal (Bootstrap 3.0)
                $(this).find('.modal-dialog').css('width', newModalWidth);
            });

            // Open Modal
            $('#mediaModal').modal();
        }
    });

    $('#closeVideo').on('click', function(e) {
        $('#mediaModal').modal('toggle');
        e.preventDefault;
    });

    // Clear modal contents on close. 
    // There was mention of videos that kept playing in the background.
    $('#mediaModal').on('hidden.bs.modal', function() {
        $('#mediaModal .modal-body').html('');
    });

});


window.onload = function(){
    //do work
                var w = $(window).width();
              if (w>=768) {

        $('#videoBg').append('<source src="images/home_page_video_x264_opt.mp4" type="video/mp4">');
         $('#videoBg').append('<source src="images/home_page_video_opt.ogv" type="video/ogg">');        
          $('#videoBg').append('<source src="images/home_page_video_opt.webm" type="video/webm">');
        // $('#videoBg').attr("src",'images/home_page_video_x264.mp4');
        $('#videoBg').load();
        $('#videoBg').attr("autoplay",true);
        if (w <= 1280){
        $('#journeyVideoHeader').css({"top":"15%"});
        }
    } else {
        $('#videoBg').css({"display":"none"});
    }
};
