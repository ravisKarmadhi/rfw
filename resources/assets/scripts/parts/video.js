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


        });

    }
}
