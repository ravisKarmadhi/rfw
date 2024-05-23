export class Button {
    init() {
        $(document).ready(function () {
            if ($('.view-gallery-sec').hasClass('bg-2D4232-sec')) {
                $('.view-gallery-sec .link:nth-child(odd)').addClass('bgdark-BDA673-btn');
                $('.view-gallery-sec .link:nth-child(even)').addClass('border-FFFAF6-btn');
            }
            if ($('.view-gallery-sec').hasClass('bg-FFFAF6-sec')) {
                $('.view-gallery-sec .link:nth-child(odd)').addClass('bg-BDA673-btn');
                $('.view-gallery-sec .link:nth-child(even)').addClass('border-8B6E3D-btn');
            }
            if ($('.view-gallery-sec').hasClass('bg-2C2924-sec')) {
                $('.view-gallery-sec .link:nth-child(odd)').addClass('bgdark-8B6E3D-btn');
                $('.view-gallery-sec .link:nth-child(even)').addClass('border-FFFAF6-btn');
                $('.view-gallery-sec').removeClass('dpt-160').addClass('dpt-220');
                $('.view-gallery-sec').removeClass('dpb-160').addClass('dpb-130');
                $('.view-gallery-sec').removeClass('tpt-105').addClass('tpt-200');
            }
        });

    }
}
