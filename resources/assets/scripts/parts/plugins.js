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
  }
  slickSLider() { }
}
