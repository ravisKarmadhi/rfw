export class Filter {

    init() {
        $(document).ready(function () {
            $(".activity-button").click(function () {
                var value = $(this).attr('data-filter');
                if (value == "all") {
                    $('.filter-img').filter('.' + value).show('1000');
                    $(".filter-img").not('.' + value).hide('1000');
                } else {
                    $(".filter-img").not('.' + value).hide('1000');
                    $('.filter-img').filter('.' + value).show('1000');
                }
            });
            $(".activity-button").click(function () {
                $(this).toggleClass("active").siblings().removeClass("active");
            });


            $(".faq-button").click(function () {
                var value = $(this).attr('data-filter');
                if (value == "all") {
                  $('.faq-closet-item').show('500');
                }
                else {
                  $(".faq-closet-item").not('.' + value).hide('1000');
                  $('.faq-closet-item').filter('.' + value).show('1000');
                }
              });
            
              $(".faq-button").click(function () {
                $(this).toggleClass("active").siblings().removeClass("active");
            });
        })
    }
}
