
// data aos

   AOS.init({
    duration: 1000,  
    once: false      
  });

// data aos
   
// svg
document.addEventListener('DOMContentLoaded', () => {
  const section = document.querySelector('.sec-2');
  const svgPath = section.querySelector('.draw path');

  // Create an Intersection Observer
  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Add the animate class to the SVG path when the section is in the viewport
          svgPath.classList.add('animate');
          // Stop observing after the animation starts
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.8 // Trigger when 10% of the section is visible
    }
  );

  // Observe the section
  observer.observe(section);
});
// svg
   
   $(document).ready(function () {
        var $slider = $('.step_slider');
        var $progressBar = $('.progress-fill.industrial');
        var $currentSlide = $('.current-slide.industrial');
        var $totalSlides = $('.total-slides.industrial');
        $slider.on('init reInit afterChange', function (event, slick, currentSlide) {
            var slideIndex = (currentSlide ? currentSlide : 0) + 1;
            $currentSlide.text(slideIndex.toString().padStart(2, '0'));
            $totalSlides.text(slick.slideCount.toString().padStart(2, '0'));
            var progress = (slideIndex / slick.slideCount) * 100;
            $progressBar.css('width', progress + '%');
        });
        $('.step_slider').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            autoplay: true,
            pauseOnHover: false,
            autoplaySpeed: 2000,
            responsive: [
                    { breakpoint: 1300, settings: { slidesToShow: 3 } },
                    { breakpoint: 1024, settings: { slidesToShow: 2 } },
                    { breakpoint: 768, settings: { slidesToShow: 1, autoplay: true } }
                ]
        });

        // testi slider
        function updateArrowState($slider, $prevArrow, $nextArrow) {
            const currentSlide = $slider.slick('slickCurrentSlide');
            const totalSlides = $slider.slick('getSlick').slideCount;
            const slidesToShow = $slider.slick('getSlick').options.slidesToShow;

            // Disable/Enable prev
            if (currentSlide === 0) {
                $prevArrow.addClass('arrow-disabled');
            } else {
                $prevArrow.removeClass('arrow-disabled');
            }

            // Disable/Enable next
            if (currentSlide >= totalSlides - slidesToShow) {
                $nextArrow.addClass('arrow-disabled');
            } else {
                $nextArrow.removeClass('arrow-disabled');
            }
        }

        function initSlickSlider(tabPane) {
            const $slider = $(tabPane).find('.test_slider');
            const $prevArrow = $(tabPane).find('.custom-prev');
            const $nextArrow = $(tabPane).find('.custom-next');

            if ($slider.hasClass('slick-initialized')) {
                $slider.slick('unslick');
            }

            $slider.slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: $prevArrow,
                nextArrow: $nextArrow,
                infinite: false,
                speed: 600,
                cssEase: 'linear',
                responsive: [
                    { breakpoint: 1280, settings: { slidesToShow: 3 } },
                    { breakpoint: 1024, settings: { slidesToShow: 2 } },
                    { breakpoint: 768, settings: { slidesToShow: 1, autoplay: true } },
                    { breakpoint: 576, settings: {slidesToShow: 1, autoplay: true , infinte: true, arows:false} },
                ]
            });

            // Run initially
            updateArrowState($slider, $prevArrow, $nextArrow);

            // Run after each slide change
            $slider.on('afterChange', function () {
                updateArrowState($slider, $prevArrow, $nextArrow);
            });
        }

        // Initialize on load
        initSlickSlider(document);

    });
