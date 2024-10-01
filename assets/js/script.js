$(document).ready(function() {
    // Select the h1 element by its tag name
    var heading = $('.hero-banner h1');

    // Add a class to the h1 element
    heading.addClass('highlight');

    const elementsToAnimate = $('p, h2, #main img');
    const observerOptions = { threshold: 0.5 };

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                activateAnimation($(entry.target));
            }
        });
    }, observerOptions);

    elementsToAnimate.each(function() {
        observer.observe($(this)[0]);
    });

    function activateAnimation(element) {
        if (element.prop('tagName').toLowerCase() === 'img') {
            element.addClass("scale-animation");
        } else {
            element.addClass("animate");
        }
        observer.unobserve(element[0]);
    }
});


$(document).ready(function(){
$('.input-container>p').each(function(){
    var contents = $(this).contents();
    $(this).replaceWith(contents)
});
	$('.chkbox p').each(function(){
    var contents = $(this).contents();
    $(this).replaceWith(contents)
});
});


$(document).ready(function(){
	$('ul > .menu-item-has-children').append('<span class="down-arrow"><i class="fa-solid fa-angle-down"></i></span>');
});


$(document).ready(function(){
$('.home-testi-slider').owlCarousel({
    loop:true,
    margin:0,
    nav: true, // Display navigation arrows
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"], // Custom navigation arrows
	items:1,
    dots:false
});
});









$(document).ready(function() {
    // Click event for the hamburger menu
    $(".hamburger").click(function(){
        $(this).toggleClass("is-active");
        $('.menusflex').toggleClass('active');
        $('body').toggleClass('active');

    });

    // Click event for the span elements
    $('.down-arrow').click(function(event) {
        event.stopPropagation(); // Prevents the event from bubbling up to the document

        var subMenu = $(this).siblings('.sub-menu');
        
        // Slide toggle for the clicked sub-menu with smooth animation
        subMenu.slideToggle(300);

        // Toggle 'sub-menu-active' class for the clicked sub-menu
        subMenu.toggleClass('sub-menu-active');

        // Slide up other sub-menus and remove 'sub-menu-active' class
        $('.sub-menu').not(subMenu).slideUp(300).removeClass('sub-menu-active');
    });

    // Click event to remove 'sub-menu-active' class from all sub-menus when clicking outside
    $(".hamburger").click(function() {
        $('.sub-menu').slideUp(300).removeClass('sub-menu-active');
    });
});



















 $(document).ready(function () {
 $(".testi-inner-boxes .coll-50").slice(0, 8).show();
        $("#loadMore").on("click", function(e){
          e.preventDefault();
          $(".testi-inner-boxes .coll-50:hidden").slice(0, 4).slideDown();
          if($(".testi-inner-boxes .coll-50:hidden").length == 0) {
            $("#loadMore").text("No More Testimonials");
          }
        });
  });
 $(document).ready(function () {
        // Select all elements with class 'coll-50' inside 'flex-area'
        var boxes = $('.testi-inner-boxes .coll-50 .testimonial-card');

        // Loop through the boxes
        for (var i = 0; i < boxes.length; i += 4) {
            // Apply red background to the second and third boxes
            if (i + 1 < boxes.length) {
                $(boxes[i + 1]).css('background-color', '#FCF0EF').hover(function () {
                    $(this).css('background-color', '#ffccc8');
                }, function () {
                    $(this).css('background-color', '#FCF0EF');
                });
            }
            if (i + 2 < boxes.length) {
                $(boxes[i + 2]).css('background-color', '#FCF0EF').hover(function () {
                    $(this).css('background-color', '#ffccc8');
                }, function () {
                    $(this).css('background-color', '#FCF0EF');
                });
            }

            // Apply green background to the first and fourth boxes
            if (i < boxes.length) {
                $(boxes[i]).css('background-color', '#F1F9F8').hover(function () {
                    $(this).css('background-color', '#76C2BD');
                }, function () {
                    $(this).css('background-color', '#F1F9F8');
                });
            }
            if (i + 3 < boxes.length) {
                $(boxes[i + 3]).css('background-color', '#F1F9F8').hover(function () {
                    $(this).css('background-color', '#76C2BD');
                }, function () {
                    $(this).css('background-color', '#F1F9F8');
                });
            }
        }
    });





// *****************  faq  *****************

$(document).ready(function() {
    function handlePanelClick(event) {
        var currentPanel = $(this);
        if (currentPanel.hasClass("active")) {
            currentPanel.removeClass("active");
        } else {
            showPanel(currentPanel);
        }
    }

    function showPanel(panel) {
        var expandedPanel = panel.parent().find(".active");
        if (expandedPanel.length > 0) {
            expandedPanel.removeClass("active");
        }
        panel.addClass("active");
    }

    $(".apps_panel").on("click", handlePanelClick);

    $(".apps_panel:first").addClass("active");
});







