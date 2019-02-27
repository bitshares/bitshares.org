//JSHint Validated Custom JS Code by Designova

/*global $:false */
/*global window: false */

(function(){
  "use strict";


$(function ($) {

     //Detecting viewpot dimension and calculating the adjustments of components   
     var vW = $(window).width();
     var vH = $(window).height();
     var vHperc25 = vH*25/100;
     var vHperc20 = vH*20/100;
     if(vW > 1400){
     $('#home').css('height', vH);
     $('#home').css('padding-top', vHperc20);
     }
    $('#welcome').css('min-height', vH);
    $('#welcome h1').css('margin-top', vHperc25);
     //Counting number of nav-items and adjusting the height accordingly
    var navCount = $('#sidebar-nav ul li').size();
    var navHeight = vH/navCount;
    //alert(navHeight);
    $('#sidebar-nav ul li').css('height',navHeight);

     
      
      
     //TWITTER INIT (Updated with compatibility on Twitter's new API):
     //PLEASE READ DOCUMENTATION FOR INFO ABOUT SETTING UP YOUR OWN TWITTER CREDENTIALS:
      $(function ($) {
          $('#ticker').tweet({
              modpath: './twitter/',
              count: 5,
              loading_text: 'loading twitter feed flame...',
              username:'designovastudio'
              /* etc... */
          });
        }); 


        //Setup Flickr Feed
  $('#flickr').jflickrfeed({
    limit: 12, //Number of images to be displayed
    qstrings: {
      id: '36587311@N08'//Change this to any Flickr Set ID as you prefer.
    },
    itemTemplate: '<div class="flickr-thumb flickr-photo"><a href="{{image_b}}" target="_blank"><img class="img-responsive" src="{{image_m}}" alt="{{title}}" /></a></div>'
  });
  

 //HOME PAGE 2 - TICKER
  var current = 1; 
  var height = $('.ticker').height(); 
  var numberDivs = $('.ticker').children().length; 
  var first = $('.ticker h1:nth-child(1)'); 
  setInterval(function() {
      var number = current * -height;
      first.css('margin-top', number + 'px');
      if (current === numberDivs) {
          first.css('margin-top', '0px');
          current = 1;
      } else {current++;}
  }, 2500); 


$('.carousel').carousel({
  interval: 2000
});


 
    
    //Nav highlight
    
    $('#mast-nav li > a').click(function(){
        $('#mast-nav li > a').removeClass('active');
        $(this).addClass('active');
    });

    $('.page-section').mouseenter(function(){
        var sectionId = $(this).attr('id');
        $('#mast-nav li > a').removeClass('active');
        $('#'+sectionId+'-linker').addClass('active');
    });

    //Parallax Init
    $(window).stellar({
        responsive: true,
        horizontalScrolling: false,
        parallaxBackgrounds: true,
        parallaxElements: true,
        hideDistantElements: true
    });




    //WAYPOINTS - INTERACTION
    //=======================

    //Triggering Navigation as Sticky when scrolled to second section:
    $('.navigation-fadeIn').waypoint(function (event, direction) {
        if (direction === 'down') {
            $('#sidebar-nav').addClass('show-nav');
        }
    }, { offset: 10 });

    //Triggering Navigation as Sticky when scrolled to second section:
    $('#metro-panel').waypoint(function (event, direction) {
        if (direction === 'down') {
          var nully ;
          nully = 1;
        } else {
            $('#sidebar-nav').removeClass('show-nav');
        }
    }, { offset: 10 });


    $('#about .welcome-text').waypoint(function (event, direction) {
        if (direction === 'down') {
            //Pie-Chart Invokes
      $(function() {
        $('.chart1').easyPieChart({
            barColor: '#FD5253',
            trackColor: '#ccc',
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: 15,
            size: 140,
            animate: 2000,
        });
        $('.chart2').easyPieChart({
            barColor: '#149CA8',
            trackColor: '#ccc',
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: 15,
            size: 140,
            animate: 2000,
        });
        $('.chart3').easyPieChart({
            barColor: '#7C9C71',
            trackColor: '#ccc',
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: 15,
            size: 140,
            animate: 2000,
        });
        $('.chart4').easyPieChart({
            barColor: '#CCB361',
            trackColor: '#ccc',
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: 15,
            size: 140,
            animate: 2000,
        });
});
        } 
    }, { offset: 10 });


//Slidebar Menu - State Changes
$('.sq-side-menu ul li a').click(function(){
  $('.sq-side-menu ul li a').removeClass(' sq-active');
  $(this).addClass(' sq-active');
});

$('.page-section, #home').mouseenter(function(){
  var activePageId = $(this).attr('id');
  $('.sq-side-menu ul li a').removeClass(' sq-active');
  $('#'+activePageId+'-link').addClass(' sq-active');
});


    
//Metro Panel - Rotating Tiles
  $('#metro-panel .thumb').on('rotate',function(){
    var thisOne = $(this);
    thisOne.addClass('active');
    var time =getRandomInt(3,10)*1000;
    setTimeout(function(){
      thisOne.removeClass('active');
    },time);
  });
  setInterval(function(){
    var thumbs = $('#metro-panel .thumb:not(.active)');
    $(thumbs[getRandomInt(0,thumbs.length)]).trigger('rotate');
  },3000);

  

//Custom functions 

/**
 * Returns a random integer between min and max
 * Using Math.round() will give you a non-uniform distribution!
 */
function getRandomInt (min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}



    
	
});


})();








	

