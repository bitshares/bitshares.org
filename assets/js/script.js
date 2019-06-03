'use strict';

//----------------------------------------------------/
// TheSaaS
//----------------------------------------------------/
//
+function($, window){

  var thesaas = {
    name:       'TheSaaS',
    version:    '1.3.3',
  };

  thesaas.defaults = {
    googleApiKey: null,
    googleAnalyticsId: null,
    smoothScroll: true,
  }

  // Breakpoint values
  //
  thesaas.breakpoint = {
    xs: 576,
    sm: 768,
    md: 992,
    lg: 1200
  };


  // Config application
  //
  thesaas.config = function(options) {
    //$.extend(true, thesaas.defaults, options);

    // Rteurn config value
    if ( typeof options === 'string' ) {
      return thesaas.defaults[options];
    }


    // Save configs
    $.extend(true, thesaas.defaults, options);


    // Make necessary changes
    //
    if ( !thesaas.defaults.smoothScroll ) {
      SmoothScroll.destroy();
    }



    // Google map
    // 
    if ( $('[data-provide~="map"]').length && window["google.maps.Map"] === undefined ) {
      $.getScript("https://maps.googleapis.com/maps/api/js?key="+ thesaas.defaults.googleApiKey +"&callback=thesaas.map");
    }


    // Google Analytics
    //
    if ( thesaas.defaults.googleAnalyticsId ) {
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', thesaas.defaults.googleAnalyticsId, 'auto');
      ga('send', 'pageview');
    }

  }



  // Initialize the application
  //
  thesaas.init = function() {


    thesaas.topbar();
    thesaas.parallax();
    thesaas.carousel();
    thesaas.scrolling();
    thesaas.counter();
    thesaas.aos();
    thesaas.typed();
    thesaas.contact();
    thesaas.constellation();
    thesaas.shuffle();


    $(document).on('click', '[data-provide~="lightbox"]', lity);


    // Video-wrapper
    $(document).on('click', '.video-wrapper .btn', function(){
      var wrapper = $(this).closest('.video-wrapper');
      wrapper.addClass('reveal');

      if ( wrapper.find('video').length )
        wrapper.find('video').get(0).play();

      if ( wrapper.find('iframe').length ) {
        var iframe = wrapper.find('iframe');
        var src = iframe.attr('src');

        if ( src.indexOf('?') > 0 )
          iframe.get(0).src += "&autoplay=1";
        else
          iframe.get(0).src += "?autoplay=1";
      }
    });



    // Upload
    //
    $(document).on('click', '.file-browser', function() {
      var browser = $(this);
      var file = browser.closest('.file-group').find('[type="file"]');
      if ( browser.hasClass('form-control') ) {
        setTimeout(function(){
          file.trigger('click');
        },300);
      }
      else {
        //console.log( $browser.closest('.file-group').find('[type="file"]').length );
        file.trigger('click');
      }
    });

    // Event to change file name after file selection
    $(document).on('change', '.file-group [type="file"]', function(){
      var input = $(this);
      var filename = input.val().split('\\').pop();
      input.closest('.file-group').find('.file-value').val(filename).text(filename).focus();
    });



    // FadeOUt header
    $(window).on('scroll', function() {
      var st = $(this).scrollTop()-200;
      $('.header.fadeout').css('opacity', (1-st/ window.innerHeight ) );
    });



    // Drawer
    // 
    $(document).on( 'click', '.drawer-toggler, .drawer-close, .drawer-backdrop', function() {
      $('body').toggleClass( 'drawer-open' );
    } );


  };




  //----------------------------------------------------/
  // Parallax
  //----------------------------------------------------/
  thesaas.parallax = function() {

    $('[data-parallax]').each(function() {
      var parallax = $(this);
      var img = parallax.data('parallax');
      var speed = 0.3;

      if ( $(this).hasClass('header') ) {
        speed = 0.6;
      }

      parallax.parallax({
        imageSrc: img,
        speed: speed,
        bleed: 50
      });

    });
    
  }



  //----------------------------------------------------/
  // Google map
  //----------------------------------------------------/
  thesaas.map = function() {

    $('[data-provide~="map"]').each(function() {

      var setting = {
        lat: '',
        lng: '',
        zoom: 13,
        markerLat: '',
        markerLng: '',
        markerIcon: '',
        style: ''
      }

      setting = $.extend(setting, thesaas.getDataOptions($(this)));

      var map = new google.maps.Map( $(this)[0], {
        center: {
          lat: Number(setting.lat),
          lng: Number(setting.lng)
        },
        zoom: Number(setting.zoom)
      });

      var marker = new google.maps.Marker({
        position: {
          lat: Number(setting.markerLat),
          lng: Number(setting.markerLng)
        },
        map: map,
        animation: google.maps.Animation.DROP,
        icon: setting.markerIcon
      });

      var infowindow = new google.maps.InfoWindow({
        content: $(this).dataAttr('info', '')
      });

      marker.addListener('click', function() {
        infowindow.open(map, marker);
      });

      switch (setting.style) {
        case 'light':
          map.set('styles', [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]);
          break;

        case 'dark':
          map.set('styles', [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}])
          break;

        default:
          if ( Array.isArray(setting.style) ) {
            map.set('styles', setting.style);
          }
      }

    });

  }




  //----------------------------------------------------/
  // Carousel
  //----------------------------------------------------/
  thesaas.carousel = function() {

    $('.swiper-container').each(function(){
      var options = {
        autoplay: 3000,
        speed: 1000,
        loop: true,
        breakpoints: {
          // when window width is <= 640px
          480: {
            slidesPerView: 1
          }
        }
      };

      var swiper = $(this);

      if ( swiper.find('.swiper-button-next').length ) {
        options.nextButton = '.swiper-button-next';
      }

      if ( swiper.find('.swiper-button-prev').length ) {
        options.prevButton = '.swiper-button-prev';
      }

      if ( swiper.find('.swiper-pagination').length ) {
        options.pagination = '.swiper-pagination';
        options.paginationClickable = true;
      }

      options = $.extend( options, thesaas.getDataOptions(swiper));

      new Swiper ( swiper, options );
    });

  }




  //----------------------------------------------------/
  // Smooth scroll to a target element
  //----------------------------------------------------/
  thesaas.scrolling = function() {

    var topbar_height = 60;
    var html_body = $('html, body');

    // Back to top
    $(document).on( 'click', '.scroll-top', function() {
      html_body.animate({scrollTop : 0}, 600);
      $(this).blur();
      return false;
    });

    // Smoothscroll to anchor
    $(document).on('click', '[data-scrollto]', function(){
      var id = '#' + $(this).data('scrollto');
      if ( $(id).length > 0 ) {
        var offset = 0;
        if ( $('.topbar.topbar-sticky').length ) {
          offset = topbar_height;
        }
        html_body.animate({scrollTop: $(id).offset().top - offset}, 1000);
      }
      return false;
    });

    // Smoothscroll to anchor in page load
    var hash = location.hash.replace('#','');
    if (hash != '' && $("#"+hash).length > 0) {
      html_body.animate({scrollTop: $("#"+hash).offset().top - topbar_height}, 1000);
    }

  }





  //----------------------------------------------------/
  // jQuery CountTo and Count Down
  //----------------------------------------------------/
  thesaas.counter = function() {

    // CountTo
    var waypoints = $('[data-provide~="counter"]:not(.counted)').waypoint({
      handler: function(direction) {
        $(this.element).countTo().addClass('counted');
      },
      offset: '100%'
    });


    // Count Down - OLD
    /*
    $('[data-countdown]').each(function() {
      var format = '%D day%!D %H:%M:%S';
      var countdown = $(this);
      if ( countdown.hasDataAttr('format') )
        format = countdown.data('format');

      countdown.countdown( countdown.data('countdown'), function(event) {
        countdown.html(event.strftime( format ));
      } )

    });
    */

    // Count Down
    $('[data-countdown]').each(function() {
      var format = '';
      format += '<div class="row gap-items-3">';
      format += '<div class="col"><h5>%D</h5><small>Day%!D</small></div>';
      format += '<div class="col"><h5>%H</h5><small>Hour%!H</small></div>';
      format += '<div class="col"><h5>%M</h5><small>Minute%!M</small></div>';
      format += '<div class="col"><h5>%S</h5><small>Second%!S</small></div>';
      format += '</div>';

      if ( $(this).hasDataAttr('format') ) {
        format = $(this).data('format');
      }

      $(this).countdown( $(this).data('countdown'), function(event) {
        $(this).html(event.strftime( format ));
      } )

    });

  }




  //----------------------------------------------------/
  // Animate on scroll
  //----------------------------------------------------/
  thesaas.aos = function() {
    AOS.init({
      offset: 220,
      duration: 1500,
      disable: 'mobile',
      //startEvent: 'load',
    });

    // Preview fix which wasn't working very well
    /*
    $(window).on('load', function() {
      AOS.refresh();
    });
    */

    //$(window).on('resize', function () { AOS.refresh(); });
    //$(window).on('load', function() { setTimeout(AOS.refreshHard, 150); });

  }



  //----------------------------------------------------/
  // Topbar functionality
  //----------------------------------------------------/
  thesaas.topbar = function() {

    var body = $('body');
    $(window).on('scroll', function() {
      if ($(document).scrollTop() > 10) {
        body.addClass('body-scrolled');
      }
      else {
        body.removeClass('body-scrolled');
      }
    });


    // Open menu on click
    //
    $(document).on('click', '.nav-toggle-click .nav-link', function(e) {
      var link = $(this),
          item = link.closest('.nav-item'),
          siblings = item.siblings('.nav-item');

      if ( '#' == link.attr('href') ) {
        e.preventDefault();
      }
      
      siblings.removeClass('show');
      siblings.find('.nav-item.show').removeClass('show');
      item.toggleClass('show');
    });


    // Topbar toggler
    // 
    $(document).on('click', '.topbar-toggler', function(){
      //body.toggleClass('topbar-reveal').prepend('<div class="topbar-backdrop"></div>');
      body.toggleClass('topbar-reveal');
      $(this).closest('.topbar').prepend('<div class="topbar-backdrop"></div>');
    });

    $(document).on('click', '.topbar-backdrop', function(){
      body.toggleClass('topbar-reveal');
      $(this).remove();
    });


    // Dropdown for small screens
    //
    $(document).on('click', '.topbar-reveal .topbar-nav .nav-item > .nav-link', function(){
      var item = $(this),
          submenu = item.next('.nav-submenu');
      item.closest('.topbar-nav').find('.nav-submenu').not( submenu ).slideUp();
      submenu.slideToggle();
    });

    // Close nav if a scrollto link clicked
    //
    $(document).on('click', '.topbar-reveal .topbar-nav .nav-link', function(){
      if ( $(this).hasDataAttr('scrollto') ) {
        body.removeClass('topbar-reveal');
        $('.topbar-backdrop').remove();
      }
    });

  }



  //----------------------------------------------------/
  // Typed
  //----------------------------------------------------/
  thesaas.typed = function() {

    $('[data-type]').each(function(){
      var el = $(this);
      var strings = el.data('type').split(',');
      var options = {
        strings: strings,
        typeSpeed: 50,
        backDelay: 800,
        loop: true
      }

      options = $.extend( options, thesaas.getDataOptions(el) );

      el.typed(options);
    });

  }



  //----------------------------------------------------/
  // Contact form
  //----------------------------------------------------/
  thesaas.contact = function() {

    $(document).on('click', '#contact-send', function(){
      
      var name = $("#contact-name").val();
      var email = $("#contact-email").val();
      var message = $("#contact-message").val();
      var dataString = 'name=' + name + '&email=' + email + '&message=' + message;
      var validEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      var error = $('#contact-error');

      if (email.length < 1) {
        error.html('Please enter your email address.').fadeIn(500);
        return;
      }

      if (!validEmail.test(email)) {
        error.html('Please enter a valid email address.').fadeIn(500);
        return;
      }

      $.ajax({
        type: "POST",
        url: "assets/php/sendmail.php",
        data: dataString,
        success: function () {
          error.fadeOut(400);
          $('#contact-success').fadeIn(1000);
          $("#contact-name, #contact-email, #contact-message").val('');
        },
        error: function() {
          error.html('There is a problem in our email service. Please try again later.').fadeIn(500);
        }
      });
    });
  }




  //----------------------------------------------------/
  // Constellation
  //----------------------------------------------------/
  thesaas.constellation = function() {
    var color = 'rgba(255, 255, 255, .8)',
        distance = 120;

    if( $( window ).width() < 700) {
      distance = 90;
    }

    $('.constellation').each(function(){

      if ( 'dark' == $(this).data('color') ) {
        color = 'rgba(0, 0, 0, .5)';
      }

      $( this ).constellation({
        distance: distance,
        star: {
          color: color,
          width: 1
        },
        line: {
          color: color,
          width: 0.2
        }
      });
    });

  }



  //----------------------------------------------------/
  // Shuffle.js
  //----------------------------------------------------/
  thesaas.shuffle = function() {
    if ( undefined === window['shuffle'] || 0 === $('[data-provide="shuffle"]').length ) {
      return;
    }

    var Shuffle = window.shuffle;

    Shuffle.options.itemSelector = '[data-shuffle="item"]';
    Shuffle.options.sizer = '[data-shuffle="sizer"]';
    Shuffle.options.delimeter = ',';
    Shuffle.options.speed = 500;


    $('[data-provide="shuffle"]').each(function(){

      var list = $(this).find('[data-shuffle="list"]');
      var filter = $(this).find('[data-shuffle="filter"]');
      var shuffleInstance = new Shuffle(list);

      if ( filter.length ) {

        $(filter).find('[data-shuffle="button"]').each( function() {
          $(this).on('click', function() {
            var btn = $(this);
            var isActive = btn.hasClass('active');
            var btnGroup = btn.data('group');

            $(this).closest('[data-shuffle="filter"]').find('[data-shuffle="button"].active').removeClass('active');

            var filterGroup;
            if (isActive) {
              btn.removeClass('active');
              filterGroup = Shuffle.ALL_ITEMS;
            } else {
              btn.addClass('active');
              filterGroup = btnGroup;
            }

            shuffleInstance.filter(filterGroup);
          });
        });

      } //End if


      $( this ).imagesLoaded( function() {
        shuffleInstance.layout()
      } );


    });


  }




  // Convert data-attributes options to Javascript object
  //
  thesaas.getDataOptions = function(el, castList) {
    var options = {};

    $.each( $(el).data(), function(key, value){

      key = thesaas.dataToOption(key);

      // Escape data-provide
      if ( key == 'provide' ) {
        return;
      }

      if ( castList != undefined ) {
        var type = castList[key];
        switch (type) {
          case 'bool':
            value = Boolean(value);
            break;

          case 'num':
            value = Number(value);
            break;

          case 'array':
            value = value.split(',');
            break;

          default:

        }
      }

      options[key] = value;
    });

    return options;
  }


  // Convert fooBarBaz to foo-bar-baz
  //
  thesaas.optionToData = function(name) {
    return name.replace(/([A-Z])/g, "-$1").toLowerCase();
  }


  // Convert foo-bar-baz to fooBarBaz
  //
  thesaas.dataToOption = function(name) {
    return name.replace(/-([a-z])/g, function(x){return x[1].toUpperCase();});
  }



  window.thesaas = thesaas;
}(jQuery, window);




$(function() {
  thesaas.init();
});



// Check if an element has a specific data attribute
//
jQuery.fn.hasDataAttr = function(name) {
  return $(this)[0].hasAttribute('data-'+ name);
};



// Get data attribute. If element doesn't have the attribute, return default value
//
jQuery.fn.dataAttr = function(name, def) {
  return $(this)[0].getAttribute('data-'+ name) || def;
};



// Instance search
//
//$.expr[':'] -> $.expr.pseudos
jQuery.expr[':'].search = function(a, i, m) {
  return $(a).html().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
};

/*
  |--------------------------------------------------------------------------
  | ADDITIONAL SCRIPT CONFIGURATION 
  |--------------------------------------------------------------------------
  |
  | 
  */


$(function() {


  /*
  |--------------------------------------------------------------------------
  | Configure your website
  |--------------------------------------------------------------------------
  |
  | We provided several configuration variables for your ease of development.
  | Read their complete description and modify them based on your need.
  |
  */
 
  thesaas.config({

    /*
    |--------------------------------------------------------------------------
    | Google API Key
    |--------------------------------------------------------------------------
    |
    | Here you may specify your Google API key if you need to use Google Maps
    | in your application
    |
    | https://developers.google.com/maps/documentation/javascript/get-api-key
    |
    */

    googleApiKey: 'AIzaSyDRBLFOTTh2NFM93HpUA4ZrA99yKnCAsto',

    /*
    |--------------------------------------------------------------------------
    | Google Analytics Tracking
    |--------------------------------------------------------------------------
    |
    | If you want to use Google Analytics, you can specify your Tracking ID in
    | this option. Your key would be a value like: UA-12345678-9
    |
    */

    googleAnalyticsId: '',

    /*
    |--------------------------------------------------------------------------
    | Smooth Scroll
    |--------------------------------------------------------------------------
    |
    | If true, the browser's scrollbar moves smoothly on scroll and gives your
    | visitor a better experience for scrolling.
    |
    */
   
    smoothScroll: true

  });





  /*
  |--------------------------------------------------------------------------
  | Custom Javascript code
  |--------------------------------------------------------------------------
  |
  | Now that you configured your website, you can write additional Javascript
  | code below this comment. You might want to add more plugins and initialize
  | them in this file.
  |
  */
 

 
$(".has-submenu ul").hide();
$(".has-submenu > a").click(function() {
  $(this).next("ul").toggle();
});
    $("body").animate({ 
      'padding-top' : 0,
    }, "fast");
  }, 500)


  
 $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
  
/**** GO TO TOP BEGIN ***/

$(document).ready(function() {
	
  /******************************
      Reset Referal link
   ******************************/
   var rl = getParameterByName('r');
   if (rl != null)
   {
	   document.getElementById("walletLink1").href="https://wallet.bitshares.org/?r=" + rl; 
	   document.getElementById("walletLink2").href="https://walletbitshares.org/?r=" + rl; 
	   document.getElementById("walletLink3").href="https://walletbitshares.org/#/create-account/?r=" + rl; 
	   document.getElementById("walletLink4").href="https://walletbitshares.org/?r=" + rl; 
	   document.getElementById("walletLink5").href="https://walletbitshares.org/?r=" + rl; 
	   document.getElementById("walletLink6").href="https://walletbitshares.org/?r=" + rl; 
	   document.getElementById("walletLink7").href="https://walletbitshares.org/?r=" + rl; 	   
   }
	
  /******************************
      BOTTOM SCROLL TOP BUTTON
   ******************************/

  // declare variable
  var scrollTop = $(".scrollTop");

  $(window).scroll(function() {
	  
    // declare variable
    var topPos = $(this).scrollTop();

    // if user scrolls down - show scroll-to-top button
    if (topPos > 250) {
      $(scrollTop).css("opacity", "1");
    } else {
      $(scrollTop).css("opacity", "0");
    }
	
	// if user scrolls down - show move hamburger to align properly
	if (topPos > 0) {
	  $('.button_container').css("top", "20px"); //alert("hello");
    } else {
	  $('.button_container').css("top", "20px"); //alert("hello2");
    }
  }); // scroll END

  //Click event to scroll to top
  $(scrollTop).click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1000);
    return false;
  }); // click() scroll top EMD
  
  /******************************
      SET VIDEO Playback Rate
   ******************************/
/* 	var vid = document.getElementById("main-video");
	vid.playbackRate = .75;
 */
}); // ready() END
/**** GO TO TOP BUTTON END ***/

/**** FLIP BOXES ****/
        $('.cards').click(function(){
          $(this).toggleClass('flipped');
        });
		
		
/***** OVERLAY HAMBURGER BACKGROUND *******/
$('#toggle').click(function(event) {
	event.preventDefault();
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
      $('body').css("overflow", function(_,val){ 
           return val == "hidden" ? "scroll" : "hidden";
      });
  });
/***** END OVERLAY *****/

/***** OVERLAY MENU SYSTEM *******/
/* Thanks to the guys at https://tympanus.net/codrops/ */
var cbpHorizontalMenu = (function() {

	var $listItems = $( '#cbp-hrmenu > ul > li' ),
		$menuItems = $listItems.children( 'a.dropdown' ),
		$body = $( 'body' ),
		current = -1;

	function init() {
		$menuItems.on( 'click', open );
		$listItems.on( 'click', function( event ) { event.stopPropagation(); } );
	}

	function open( event ) {

		if( current !== -1 ) {
			$listItems.eq( current ).removeClass( 'cbp-hropen' );
		}

		var $item = $( event.currentTarget ).parent( 'li' ),
			idx = $item.index();

		if( current === idx ) {
			$item.removeClass( 'cbp-hropen' );
			current = -1;
		}
		else {
			$item.addClass( 'cbp-hropen' );
			current = idx;
			$body.off( 'click' ).on( 'click', close );
		}

		return false;

	}

	function close( event ) {
		$listItems.eq( current ).removeClass( 'cbp-hropen' );
		current = -1;
	}

	return { init : init };

})();
/***** END OVERLAY MENU SYSTEM *******/

/*Gets URL parameter by name for Referral Link*/
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

