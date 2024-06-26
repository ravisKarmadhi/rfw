export class Filter {

    init() {
        jQuery(document).on("click", ".activity-category button.activity-button", function () {
            jQuery('.activity-category button.activity-button').removeClass('active');
            jQuery(this).addClass('active');
            call_gallery_filter();
        });
        function call_gallery_filter() {
            var is_sel = 0;
            var art_arr = [];
            var art_link = window.location.pathname + "?";
            var sel_filter = jQuery('.activity-category button.activity-button.active').attr('data-filter');
            if (sel_filter != '') {
                if (is_sel == 1) {
                    art_link += "&gallery_main=" + sel_filter;
                } else {
                    art_link += "gallery_main=" + sel_filter;
                    is_sel = 1;
                }
            }
            jQuery.get(art_link, function (res4) {
                jQuery(".filter-activity").html(jQuery(res4).find(".filter-activity").html());
            });
        }

        $(".activity-button").click(function () {
            $(this).toggleClass("active").siblings().removeClass("active");
        });


        $(".supplier-button").click(function () {
            var value = $(this).attr('data-filter');
            if (value == "all") {
                $('.supplier-item').show('500');
            }
            else {
                $(".supplier-item").not('.' + value).hide('1000');
                $('.supplier-item').filter('.' + value).show('1000');
            }
        });

        $(".supplier-button ").click(function () {
            $(this).toggleClass("active").siblings().removeClass("active");
        });
    }
}
