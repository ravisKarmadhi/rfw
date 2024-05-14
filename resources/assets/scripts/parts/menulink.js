export class Menulink {
    init() {
        var links = $(".menulinks a");
        $(window).scroll(function () {
            var fromTop = $(this).scrollTop();
            var foundActive = false;
            links.each(function () {
                var section = $($(this).attr("href"));
                if (
                    section.position().top <= fromTop &&
                    section.position().top + section.outerHeight() > fromTop
                ) {
                    links.each(function () {
                        $(this).parent().removeClass("active");
                    });
                    $(this).parent().addClass("active");
                    foundActive = true;
                }
            });
            if (!foundActive) {
                links.parent().removeClass("active");
            }
        });


        $(".menulinks a").on("click", function (event) {
            event.preventDefault();
            var target = $($(this).attr("href"));
            if (target.length) {
                $('html, body').scrollTop(target.offset().top + 10);
            }
        });
        $(document).ready(function () {
            $('#open-explore').click(function () {
                $('.menulinks').toggleClass('d-none');
                $('#open-explore img').toggleClass('rotate-circle-negative-full');

            })
        });

    }
}