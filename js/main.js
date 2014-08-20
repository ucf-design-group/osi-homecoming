


////////////////
// Navigation //
////////////////

// Use this variable to set the breakpoint at which the menu changes.
var breakPoint = 700;


// This function uses CSS classes to change the appearance of the menu.
function adjustNav() {

	if ($(document).width() < breakPoint) {

		$("nav.main-menu").removeClass("full").addClass("compact");
		$("nav.main-menu ul").hide();
	}

	else {

		$("nav.main-menu").removeClass("compact").addClass("full");
		$("nav.main-menu ul").show();
	}
}

// When the document loads, adjust the nav and add click handlers for the
// mobile view of the menu.

$(document).ready(function () {

	// ---------- EVENT PAGE TILES ---------- //

	var largeUp = false;

	$('.moreinfo--l').mouseleave(function(){
			if(largeUp == true){
				$(this).animate({height: "50px"});
				$(this).removeClass('moreinfo--open');
				$('.moreinfo').children('.arrowspan').html('<i class="fa fa-arrow-circle-up"></i>');
				largeUp = false;
			}
	});

	$('.moreinfo--l').click(function(){
		if(largeUp == false){
			$(this).animate({height: "79.7%"});
			$(this).addClass('moreinfo--open');
			$('.moreinfo--open').children('.arrowspan').html('<i class="fa fa-arrow-circle-down"></i>');
			largeUp = true;
		} else if(largeUp == true){
			$(this).animate({height: "50px"});
			$(this).removeClass('moreinfo--open');
			$('.moreinfo').children('.arrowspan').html('<i class="fa fa-arrow-circle-up"></i>');
			largeUp = false;
		}
	});

	var smallUp = false;

	$('.moreinfo--s').mouseleave(function(){
			if(smallUp == true){
				$(this).animate({height: "28px"});
				$(this).removeClass('moreinfo--open');
				$('.moreinfo').children('.arrowspan').html('<i class="fa fa-arrow-circle-up"></i>');
				smallUp = false;
			}
	});

	$('.moreinfo--s').click(function(){
		if(smallUp == false){
			$(this).animate({height: "79.7%"});
			$(this).addClass('moreinfo--open');
			$('.moreinfo--open').children('.arrowspan').html('<i class="fa fa-arrow-circle-down"></i>');
			smallUp = true;
		} else if(smallUp == true){
			$(this).animate({height: "28px"});
			$(this).removeClass('moreinfo--open');
			$('.moreinfo').children('.arrowspan').html('<i class="fa fa-arrow-circle-up"></i>');
			smallUp = false;
		}
	});

	// ---------- EVENT PAGE TILES ---------- //





	adjustNav();

	//Start Timer Countdown on Splash Page
	countdownTimer();

	// Adjust video bg for mobile styles
	allowDesktopBGVidLoad();
	responsiveBgVideo();

	// Check if .fancybox or .fbalbum is being used on the page, if not don't run call function
	if ($(".fancybox, .fbalbum").length > 0){

	// Call Fancybox
	$(".fancybox, .fbalbum").fancybox();

	}

	$(".menu-toggle").click(function (evt) {

		$("nav.main-menu ul").slideToggle();
		evt.preventDefault();
	})

	setInterval(function() { countdownTimer(); }, 1000);

});


// On window resize, reevaluate the view of the navigation.
$(window).resize(function () {

	adjustNav();
	responsiveBgVideo();

});



// Facebook Script for share button.
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));



function responsiveBgVideo () {

	$(".bgvid").each(function () {

		width = $(this).width();
		totalWidth = $(this.parentElement).width();

		$(this.parentElement).scrollLeft((width - totalWidth) / 2);
	});
}

// Remove videobg on mobile

function allowDesktopBGVidLoad () {

	// Check if .bgvideo is on the page, if not don't run this function
	if ($(".bgvid").length > 0){

		// If screen resolution is Greater then 600 create source element
		if ( $(window).width() > 600) { 
			     

			// Add source 1 from array on Splash.php
			var source = document.createElement('source');
				source.src = sourceArray[0].source;
				source.type = sourceArray[0].type;

			// Add source 2 from array on Splash.php
			var source2 = document.createElement('source');
				source2.src = sourceArray[1].source;
				source2.type = sourceArray[1].type;

			// Append source elements to HTML5 bg video tag
			document.getElementById("bgvid").appendChild(source);
			document.getElementById("bgvid").appendChild(source2);

		}
	}
}
       


//Countdown Timer



function countdownTimer() {

	var endTime = new Date("19 October 2014");			
	endTime = (Date.parse(endTime) / 1000);

	var now = new Date();
	now = (Date.parse(now) / 1000);

	var timeLeft = endTime - now;

	var days = Math.floor(timeLeft / 86400); 
	var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
	var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
	var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

	if (hours < "10") { hours = "0" + hours; }
	if (minutes < "10") { minutes = "0" + minutes; }
	if (seconds < "10") { seconds = "0" + seconds; }

	$("#days").html(days + "<span class='countdown-label'>Days</span>");
	$("#hours").html(hours + "<span class='countdown-label'>Hours</span>");
	$("#minutes").html(minutes + "<span class='countdown-label'>Minutes</span>");
	$("#seconds").html(seconds + "<span class='countdown-label'>Seconds</span>");		

}




// --------------------------------------------- //
// --------------------------------------------- //
// ------------- EVENTS PAGE TILE -------------- //
// --------------------------------------------- //
// --------------------------------------------- //