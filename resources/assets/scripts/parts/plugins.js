import "slick-carousel";

export class Plugins {

  init() {
    $('.related-slider').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      speed: 800,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
    });

    $('.events-card-slider').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      speed: 800,
      autoplay: true,
      autoplaySpeed: 2000,
      nextArrow: $(".events-card-btn .slick--next"),
      prevArrow: $(".events-card-btn .slick--prev"),
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToShow: 3,
          }
        }
      ]
    });
    $('.content-image').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      speed: 800,
      dots: false,
      autoplay: true,
      autoplaySpeed: 2000,
      nextArrow: '<button type="button" class="slick-next border-0 bg-transparent p-0"><svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" width="28" height="28"><title>Group 3120-svg</title><style>.s0 { fill: #bda673 } .s1 { fill: #fffaf6 } .s2 { fill: #8b6e3d }</style><g id="Group_3120"><g id="Group_3114"><path id="Ellipse_288" class="s0" d="m-22 28c-7.7 0-14-6.3-14-14 0-7.7 6.3-14 14-14 7.7 0 14 6.3 14 14 0 7.7-6.3 14-14 14z"/><g id="Group_3113"><path id="Path_12519" class="s1" d="m-26 13.8q0.1 0.1 0.1 0.1 0 0.1 0 0.1 0 0.1 0.1 0.1 0 0.1 0 0.1l4.2 4.9q0.2 0.3 0.5 0.3 0.3 0 0.5-0.2 0.3-0.2 0.3-0.5 0-0.3-0.2-0.5l-3.8-4.4 3.8-4.5q0.2-0.2 0.2-0.5 0-0.3-0.3-0.5-0.2-0.2-0.5-0.2-0.3 0-0.5 0.3l-4.2 4.9q0 0.1-0.1 0.1 0 0.1 0 0.1 0 0.1-0.1 0.2 0 0 0 0.1z"/></g></g><g id="Group_3115"><path id="Ellipse_288-2" class="s2" d="m14 0c7.7 0 14 6.3 14 14 0 7.7-6.3 14-14 14-7.7 0-14-6.3-14-14 0-7.7 6.3-14 14-14z"/><g id="Group_3113-2"><path id="Path_12519-2" class="s1" d="m17.7 14.3q0-0.1 0-0.1 0-0.1-0.1-0.1 0-0.1 0-0.1 0-0.1-0.1-0.1l-4.2-4.9q-0.2-0.3-0.5-0.3-0.3 0-0.5 0.2-0.2 0.2-0.3 0.5 0 0.3 0.2 0.5l3.9 4.5-3.9 4.4q-0.2 0.2-0.2 0.6 0 0.3 0.3 0.5 0.2 0.2 0.5 0.1 0.3 0 0.5-0.3l4.2-4.9q0.1 0 0.1-0.1 0-0.1 0.1-0.1 0-0.1 0-0.2 0 0 0-0.1z"/></g></g></g></svg></button>',
      prevArrow: '<button type="button" class="slick-prev border-0 bg-transparent p-0"><svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" width="28" height="28"><title>Group 3120-svg</title><style>.s0 { fill: #bda673 } .s1 { fill: #fffaf6 } .s2 { fill: #8b6e3d }</style><g id="Group_3120"><g id="Group_3114"><path id="Ellipse_288" class="s0" d="m-22 28c-7.7 0-14-6.3-14-14 0-7.7 6.3-14 14-14 7.7 0 14 6.3 14 14 0 7.7-6.3 14-14 14z"/><g id="Group_3113"><path id="Path_12519" class="s1" d="m-26 13.8q0.1 0.1 0.1 0.1 0 0.1 0 0.1 0 0.1 0.1 0.1 0 0.1 0 0.1l4.2 4.9q0.2 0.3 0.5 0.3 0.3 0 0.5-0.2 0.3-0.2 0.3-0.5 0-0.3-0.2-0.5l-3.8-4.4 3.8-4.5q0.2-0.2 0.2-0.5 0-0.3-0.3-0.5-0.2-0.2-0.5-0.2-0.3 0-0.5 0.3l-4.2 4.9q0 0.1-0.1 0.1 0 0.1 0 0.1 0 0.1-0.1 0.2 0 0 0 0.1z"/></g></g><g id="Group_3115"><path id="Ellipse_288-2" class="s2" d="m14 0c7.7 0 14 6.3 14 14 0 7.7-6.3 14-14 14-7.7 0-14-6.3-14-14 0-7.7 6.3-14 14-14z"/><g id="Group_3113-2"><path id="Path_12519-2" class="s1" d="m11 13.7q0 0.1 0 0.1 0 0.1 0.1 0.1 0 0.1 0 0.1 0 0.1 0.1 0.1l4.2 5q0.2 0.2 0.5 0.2 0.3 0 0.5-0.1 0.2-0.2 0.3-0.5 0-0.3-0.2-0.6l-3.9-4.4 3.9-4.5q0.2-0.2 0.2-0.5 0-0.3-0.3-0.5-0.2-0.2-0.5-0.2-0.3 0-0.5 0.3l-4.2 4.9q-0.1 0.1-0.1 0.1 0 0.1-0.1 0.2 0 0 0 0.1 0 0.1 0 0.1z"/></g></g></g></svg></button>'
    });
    $('.content-image-small').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      speed: 800,
      dots: false,
      autoplay: true,
      autoplaySpeed: 2000,
      nextArrow: '<button type="button" class="slick-next border-0 bg-transparent p-0"><svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" width="28" height="28"><title>Group 3120-svg</title><style>.s0 { fill: #bda673 } .s1 { fill: #fffaf6 } .s2 { fill: #8b6e3d }</style><g id="Group_3120"><g id="Group_3114"><path id="Ellipse_288" class="s0" d="m-22 28c-7.7 0-14-6.3-14-14 0-7.7 6.3-14 14-14 7.7 0 14 6.3 14 14 0 7.7-6.3 14-14 14z"/><g id="Group_3113"><path id="Path_12519" class="s1" d="m-26 13.8q0.1 0.1 0.1 0.1 0 0.1 0 0.1 0 0.1 0.1 0.1 0 0.1 0 0.1l4.2 4.9q0.2 0.3 0.5 0.3 0.3 0 0.5-0.2 0.3-0.2 0.3-0.5 0-0.3-0.2-0.5l-3.8-4.4 3.8-4.5q0.2-0.2 0.2-0.5 0-0.3-0.3-0.5-0.2-0.2-0.5-0.2-0.3 0-0.5 0.3l-4.2 4.9q0 0.1-0.1 0.1 0 0.1 0 0.1 0 0.1-0.1 0.2 0 0 0 0.1z"/></g></g><g id="Group_3115"><path id="Ellipse_288-2" class="s2" d="m14 0c7.7 0 14 6.3 14 14 0 7.7-6.3 14-14 14-7.7 0-14-6.3-14-14 0-7.7 6.3-14 14-14z"/><g id="Group_3113-2"><path id="Path_12519-2" class="s1" d="m17.7 14.3q0-0.1 0-0.1 0-0.1-0.1-0.1 0-0.1 0-0.1 0-0.1-0.1-0.1l-4.2-4.9q-0.2-0.3-0.5-0.3-0.3 0-0.5 0.2-0.2 0.2-0.3 0.5 0 0.3 0.2 0.5l3.9 4.5-3.9 4.4q-0.2 0.2-0.2 0.6 0 0.3 0.3 0.5 0.2 0.2 0.5 0.1 0.3 0 0.5-0.3l4.2-4.9q0.1 0 0.1-0.1 0-0.1 0.1-0.1 0-0.1 0-0.2 0 0 0-0.1z"/></g></g></g></svg></button>',
      prevArrow: '<button type="button" class="slick-prev border-0 bg-transparent p-0"><svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" width="28" height="28"><title>Group 3120-svg</title><style>.s0 { fill: #bda673 } .s1 { fill: #fffaf6 } .s2 { fill: #8b6e3d }</style><g id="Group_3120"><g id="Group_3114"><path id="Ellipse_288" class="s0" d="m-22 28c-7.7 0-14-6.3-14-14 0-7.7 6.3-14 14-14 7.7 0 14 6.3 14 14 0 7.7-6.3 14-14 14z"/><g id="Group_3113"><path id="Path_12519" class="s1" d="m-26 13.8q0.1 0.1 0.1 0.1 0 0.1 0 0.1 0 0.1 0.1 0.1 0 0.1 0 0.1l4.2 4.9q0.2 0.3 0.5 0.3 0.3 0 0.5-0.2 0.3-0.2 0.3-0.5 0-0.3-0.2-0.5l-3.8-4.4 3.8-4.5q0.2-0.2 0.2-0.5 0-0.3-0.3-0.5-0.2-0.2-0.5-0.2-0.3 0-0.5 0.3l-4.2 4.9q0 0.1-0.1 0.1 0 0.1 0 0.1 0 0.1-0.1 0.2 0 0 0 0.1z"/></g></g><g id="Group_3115"><path id="Ellipse_288-2" class="s2" d="m14 0c7.7 0 14 6.3 14 14 0 7.7-6.3 14-14 14-7.7 0-14-6.3-14-14 0-7.7 6.3-14 14-14z"/><g id="Group_3113-2"><path id="Path_12519-2" class="s1" d="m11 13.7q0 0.1 0 0.1 0 0.1 0.1 0.1 0 0.1 0 0.1 0 0.1 0.1 0.1l4.2 5q0.2 0.2 0.5 0.2 0.3 0 0.5-0.1 0.2-0.2 0.3-0.5 0-0.3-0.2-0.6l-3.9-4.4 3.9-4.5q0.2-0.2 0.2-0.5 0-0.3-0.3-0.5-0.2-0.2-0.5-0.2-0.3 0-0.5 0.3l-4.2 4.9q-0.1 0.1-0.1 0.1 0 0.1-0.1 0.2 0 0 0 0.1 0 0.1 0 0.1z"/></g></g></g></svg></button>'
    });
    $('.instagram-slider').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      arrows: false,
      speed: 1000,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 1299,
          settings: {
            slidesToShow: 4,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
          }
        }
      ]
    });

    // accommodation slider js
    $('.single-product-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      adaptiveHeight: true,
      infinite: false,
      useTransform: true,
      speed: 400,
      cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
    });
    $('.single-product-group')
      .on('init', function (event, slick) {
        $('.single-product-group .slick-slide.slick-current').addClass('is-active');
      })
      .slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        focusOnSelect: false,
        infinite: false,
        arrows: false,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 3,
            }
          }
        ]
      });

    $('.single-product-slider').on('afterChange', function (event, slick, currentSlide) {
      $('.single-product-group').slick('slickGoTo', currentSlide);
      var currrentNavSlideElem = '.single-product-group .slick-slide[data-slick-index="' + currentSlide + '"]';
      $('.single-product-group .slick-slide.is-active').removeClass('is-active');
      $(currrentNavSlideElem).addClass('is-active');
    });

    $('.single-product-group').on('click', '.slick-slide', function (event) {
      event.preventDefault();
      var goToSingleSlide = $(this).data('slick-index');

      $('.single-product-slider').slick('slickGoTo', goToSingleSlide);
    });
  }
  slickSLider() { }
}
