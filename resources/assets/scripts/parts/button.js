export class Button {
    init() {
        $(document).ready(function () {
            if ($('.view-gallery-sec').hasClass('bg-2D4232-sec')) {
                $('.view-gallery-sec .link').addClass('bgdark-BDA673-btn');
            }

            if ($('.view-gallery-sec').hasClass('bg-FFFAF6-sec')) {
                $('.view-gallery-sec .link').addClass('bg-BDA673-btn');
            }
        });

    }
}
