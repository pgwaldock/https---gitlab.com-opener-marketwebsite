
$(document).ready(function () {
    "use strict";

    var urlParams = function(sParam){
      var sPageURL = window.location.search.substring(1);
      var sURLVariables = sPageURL.split('&');
      for (var i = 0; i < sURLVariables.length; i++) {
          var sParameterName = sURLVariables[i].split('=');
          if (sParameterName[0] == sParam) {
              return sParameterName[1];
          }
      }
    };


    var updateLocaleSettings = function (region) {
        var phoneNumber;
        var contactEmail;

        if (region === "GB" || region === "gb") {
            phoneNumber = "0208 1338011";
            contactEmail = "help@kontainers.co.uk";
            $('.country-selector').removeClass('current-USA').addClass('current-UK');
            $(".k-contact-us-company-info").show();

            window.localStorage.setItem('phoneNumber', phoneNumber);
            window.localStorage.setItem('contactEmail', contactEmail);
        } else {
            phoneNumber = "844 - 459 - 8927";
            contactEmail = "help@kontainers.com";
            $('.country-selector').removeClass('current-USA').removeClass('current-UK').addClass('current-USA');
            $(".k-contact-us-company-info").hide();

            window.localStorage.setItem('phoneNumber', phoneNumber);
            window.localStorage.setItem('contactEmail', contactEmail);
        }

        $(".blog-tel a").html(phoneNumber);
        $(".blog-tel a").attr("href", "tel:" + phoneNumber);

        $(".action-phone a").html("<strong>Call</strong>" + phoneNumber);
        $(".action-phone a").attr("href", "tel:" + phoneNumber);

        $(".action-mail a").html("<strong>Email</strong>" + contactEmail);
        $(".action-mail a").attr("href", "mailTo:" + contactEmail);
    };

    var getGeoLookupLocaleValueInstance = function getGeoLookupLocaleValue() {
        if (!window.localStorage.getItem('localePreferenceSpecified')) {
          // GEO-IP lookup performed if not set previously or cleared
            $.ajax({url: "https://freegeoip.net/json/",
                    success: function (result) {
                window.localStorage.setItem('locale', result.country_code);
            },
                    complete: function () {
                updateLocaleSettings(window.localStorage.getItem('locale'));
            }});
        } else {
            updateLocaleSettings(window.localStorage.getItem('locale'));
        }
    };
    console.log('CCCC222')
    $('.UK-select').click(function (e) {
        console.log('CCC')
        e.preventDefault();
        updateLocaleSettings("GB");
        window.localStorage.setItem('locale', "GB");
        window.localStorage.setItem('localePreferenceSpecified', true);
    });

    $('.USA-select').click(function (e) {
        e.preventDefault();
        updateLocaleSettings("US");
        window.localStorage.setItem('locale', "US");
        window.localStorage.setItem('localePreferenceSpecified', true);
    });

    var testimonialAddClass = function (classToAdd, timeout) {
        if (timeout === "undefined") {
            timeout = 0;
        }
        setTimeout(function () {
            $('.quote-animator').addClass('show-quote ' + classToAdd);
        }, timeout);
    };

    var testimonialRemoveClass = function (classToRemove, timeout) {
        if (timeout === "undefined") {
            timeout = 0;
        }

        setTimeout(function () {
            $('.quote-animator').removeClass('show-quote ' + classToRemove);
        }, timeout);

    };

    window.onload = function() {
        if(window.localStorage.getItem('locale') === null){
          var local = urlParams('locale');
          updateLocaleSettings(local);
        }else{
          updateLocaleSettings(window.localStorage.getItem('locale'));
        }

        //preloader
        $('html').removeClass('bc_page_loading').addClass('bc_page_loaded');
        //  Testimonials - show in order
        testimonialAddClass('show-quote-one', 2500);
        testimonialRemoveClass('show-quote-one', 8500);
        testimonialAddClass('show-quote-two', 9500);
        testimonialRemoveClass('show-quote-two', 15500);
        testimonialAddClass('show-quote-three', 16500);
        testimonialRemoveClass('show-quote-three', 21500);
        testimonialAddClass('show-quote-four', 22500);
        testimonialRemoveClass('show-quote-four', 29500);
        // remove interaction lock
        testimonialRemoveClass('noninteractive', 29500);


    };

    /*---------- Testimonials ---------*/
    $('.quote-one').hover(function () {
        testimonialAddClass('show-quote-one');
    });
    $('.quote-one ').mouseleave(function () {
        testimonialRemoveClass('show-quote-one');
    });

    $('.quote-two .quote-logo').hover(function () {
        testimonialAddClass('show-quote-two');
    });
    $('.quote-two').mouseleave(function () {
        testimonialRemoveClass('show-quote-two');
    });

    $('.quote-three .quote-logo').hover(function () {
        testimonialAddClass('show-quote-three');
    });
    $('.quote-three').mouseleave(function () {
        testimonialRemoveClass('show-quote-three');
    });

    $('.quote-four .quote-logo').hover(function () {
        testimonialAddClass('show-quote-four');
    });
    $('.quote-four').mouseleave(function () {
        testimonialRemoveClass('show-quote-four');
    });

    /*-------------------------
     ---------- Modals ---------
     ---------------------------*/
    // demo signed in/ signed up demo - close modal
    $('.action_login').click(function () {
        $('.bclever-modal-bg,.bclever-modal').removeClass('bclever-modal-open');
        // change the menu to logged in state
        $('.btn_login').addClass('displayNone');
        $('.btn_logout,.btn_profile,.btn_messages,.btn_dash').removeClass('displayNone');
    });


    // modals general - close
    $('.close-bclever-modal').click(function () {
        $('.bclever-modal-bg').removeClass('bclever-modal-open');
        $('.bclever-modal').removeClass('bclever-modal-open');
    });

    // demo - go to url after delay
    $('.action_goToApp').click(function () {
        $('html').removeClass('bc_page_loaded').addClass('bc_page_loading');

        var localeValue = window.localStorage.getItem('locale');
        if (localeValue !== "GB") {
            localeValue = "us";
        }
        window.location.href = 'https://kontainers.io/quotes?quoteButtonClick=true&locale=' + localeValue;
    });
    $('.k-menu-quotes a').click(function (e) {
        e.preventDefault();
        $('.action_goToApp').click();
    });

    // hamburger button animate to close
    $('.bc_navbar').click(function () {
        $('#nav-toggle').toggleClass('close-icon');
        $('.bc_navbar').toggleClass('open-nav');
    });






  // intro video
    $('.intro-help').click(function () {
        $('.video_modal').addClass('videoOpen');
        // Inject the video
        document.getElementById('video-holder').innerHTML = '<iframe src="https://player.vimeo.com/video/126965017" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
    });
  // close Video
    $('.closeVideo').click(function () {
        $('.video_modal').removeClass('videoOpen');
        // delay video being removed until modal off screen and inject with nothing
        setTimeout(function () {
            document.getElementById('video-holder').innerHTML = '';
        }, 888);
    });
    // instantiate fullpage
    $('#fullpage').fullpage({anchors: ['Kontainers', 'TheFuture', 'Benefits', 'InstantQuotes'], menu: '#menu', scrollingSpeed: 2188});

    // country selector
    $(".country-selector").on({
        click: function () {
            // show countries list
            $(this).toggleClass("show-items");
        },
        mouseleave: function () {
          // hide countries list
            $(this).removeClass("show-items");
        }
    });
});
