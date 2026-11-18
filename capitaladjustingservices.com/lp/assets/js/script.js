// background cover
function initBgCover(context) {
    if (!context) context = jQuery('body');
    context.find('.bg-cover').each(function () {
        var holder = jQuery(this);
        var image = holder.find('> img').hide();
        var imageSrc = image.prop('src');
        holder.css({
            backgroundImage: 'url(' + imageSrc + ')',
        });
    });
}

// init function
jQuery(function () {
    initBgCover();
});

jQuery(document).ready(function () {
    //Banner Slider
    jQuery('.banner-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 7000,
        arrows: false,
        dots: true,
        adaptiveHeight: true
    });

    //Testimonials Slider
    jQuery('.testimonials-slider').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    adaptiveHeight: true,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });

    //Sticky Header
    jQuery(window).scroll(function () {
        var scroll = jQuery(window).scrollTop();
        if (scroll > 60) {
            jQuery('body').addClass('stick');
        }
        else {
            jQuery('body').removeClass('stick');
        }
    });

    //Menu Toggle
    jQuery('.toggleMenu').click(function () {
        jQuery('body').toggleClass('menuOpen');
        jQuery('.primary-menu').toggleClass('open');
    });
    jQuery('.primary-menu a').click(function () {
        jQuery('body').toggleClass('menuOpen');
        jQuery('.primary-menu').toggleClass('open');
    });

    /* Same Height */
    jQuery('.same-height').matchHeight();

    //Footer Toggle
    if (jQuery(window).width() < 576) {
        jQuery('.footerToggle').click(function () {
            jQuery(this).siblings().slideToggle();
            //e.preventDefault();
        });
    }

    /*========== Smooth Scroll  ==========
    var scroll = new SmoothScroll('a.js-scroll[href*="#"]', {
        speed: 2000,
        header: '.site-header'
    });*/

    jQuery('a.js-scroll[href*="#"]').on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            ///event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            jQuery('html, body').animate({
                scrollTop: jQuery(hash).offset().top - 100
            }, 1000, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});