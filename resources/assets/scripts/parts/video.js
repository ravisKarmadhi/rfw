export class Video {
    init() {
        $(document).ready(function () {
            $(".play-video-modal").click(function () {
                $("#myVideo").get(0).play();
                $("#no-autoplay-video").addClass('d-none');
                $("#autoplay-video").removeClass('d-none');
            });
            $(".pause-video").click(function () {
                $("#myVideo").get(0).pause();
                $("#no-autoplay-video").removeClass('d-none');
                $("#autoplay-video").addClass('d-none');
            });

            $("#play-banner-video").click(function () {
                $("#banner-video").get(0).play();
                $("#play-banner-video").addClass('d-none');
                $(".video-img-play").addClass('video-img-pause');
            });
            $("#pause-banner-video").click(function () {
                $("#banner-video").get(0).pause();
                $("#play-banner-video").removeClass('d-none');
                $(".video-img-play").removeClass('video-img-pause');
            });
            $("#play-banner-iframe").click(function () {
                $("#play-banner-iframe").toggleClass('d-none');
            });
        });

    }
}
