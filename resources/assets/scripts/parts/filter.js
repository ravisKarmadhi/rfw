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

        jQuery(document).on("click", ".faq-section .faq-category .faq-button", function () {
            call_faq_filter();
        });

        jQuery(document).on("keyup", ".faq-search input", function () {
        call_faq_filter();
        });
        
        function call_faq_filter() {
            var is_sel = 0;
            var art_arr = [];
            var art_link = window.location.pathname + "?";
            var s_txt = jQuery(".faq-search input").val();
            var sel_filter =  jQuery('.faq-section .faq-category .faq-button.active').attr('data-filter');

            if (sel_filter != '') {

                if (is_sel == 1) {
                art_link += "&faq_main=" + sel_filter;
                } else {
                art_link += "faq_main=" + sel_filter;
                is_sel = 1;
                }

            }
            if (is_sel == 1) {
                art_link += "&search_faq=" + s_txt;
            } else {
                art_link += "search_faq=" + s_txt;
                is_sel = 1;
            }
            jQuery.get(art_link, function (res4) {
                jQuery(".faq-activity").html(jQuery(res4).find(".faq-activity").html());
            });
        }
    }
}
