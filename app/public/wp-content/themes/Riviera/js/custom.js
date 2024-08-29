jQuery(document).ready(function(){

	//menu sticky
 	 /*var navHeight = jQuery(".Darken").height();
	 jQuery('.main-content').css('margin-top',navHeight);*/

	 jQuery(window).bind('scroll', function() {
	  var navHeight = jQuery(".Darken").height();
	  (jQuery(window).scrollTop() > navHeight) ? jQuery('.sticky').addClass('ToTop1') : jQuery('.sticky').removeClass('ToTop1');
	 });

	// testimonials
	var owl = jQuery('.testimo');
	    owl.owlCarousel({
	    margin: 50,
	    navText: ["<img src="+templateUrl+"'/images/left-a.png'>","<img src="+templateUrl+"'/images/right-a.png'>"],
	    loop: true,
	    rewind: true,
	    autoplay:true,
		  autoplayTimeout:2000,
	    navigation : true,
		  autoplayHoverPause:true,
	    responsive: {
	      0: {
	        items: 1
	      },
	      600: {
	        items: 2
	      },
	      1000: {
	        items: 3
	      }
	    }
  	})

	// blogs
	var owl = jQuery('.blogs');
	    owl.owlCarousel({
	    margin: 25,
	    loop: true,
	    navText: ["<img src="+templateUrl+"'/images/left-ared.png'>","<img src="+templateUrl+"'/images/right-ared.png'>"],
	    rewind: true,
	    autoplay:true,
	    autoplayTimeout:2000,
	    navigation : true,
	    autoplayHoverPause:true,
	    responsive: {
	      0: {
	        items: 1
	      },
	      600: {
	        items: 2
	      },
	      1000: {
	        items: 3
	      }
	    }
	})

	// blog
	var owl = jQuery('.news-new');
	      owl.owlCarousel({
	        margin: 40,
	        loop: true,
	        rewind: true,
	        autoplay:true,
	    	autoplayTimeout:2000,
	    	autoplayHoverPause:true,
	        responsive: {
	          0: {
	            items: 1
	          },
	          600: {
	            items: 2
	          },
	          1000: {
	            items: 3
	          }
	        }
	    })

});

/* Toggle navigation for Mobile */

// Select `.menu-toggle`
const menuToggle = document.querySelector('.menu-toggle');

// Select `#menu-header-menu`
const headerMenu = document.querySelector('#menu-header-menu');

// Check if both elements exist
if (menuToggle && headerMenu) {
  // Add click event listener to the .menu-toggle element
  menuToggle.addEventListener('click', function(event) {
    // Prevent default anchor action
    event.preventDefault();

    // Toggle the `.menu-header-menu--is-visible` class on `#menu-header-menu`
    headerMenu.classList.toggle('menu-header-menu--is-visible');

    // Update `aria-expanded` attribute based on the visibility state
    const isExpanded = headerMenu.classList.contains('menu-header-menu--is-visible');
    menuToggle.setAttribute('aria-expanded', isExpanded);
  });
}

