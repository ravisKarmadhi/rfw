<!-- Modal -->

<div class="modal video-modal fade" id="videoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 rounded-0 bg-transparent">
            <div class="modal-body p-0 position-relative">
                <button class="p-0 bg-transparent border-0 pause-video mt-n5 bg-2D4232 rounded-circle p-2 position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/close-header.svg" class="" />
                </button>
                <video autoplay loop class="w-100 " id="myVideo">
                    <source src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/ForBiggerBlazes.mp4" type="video/mp4">
                </video>
                <!-- <iframe id="autoplay-video" class="w-100" src="https://www.youtube.com/embed/sNJZkxXjlVg?autoplay=0&mute=1&loop=1&background=1&controls=0&rel=0" allow="autoplay; fullscreen"></iframe> -->
            </div>
        </div>
    </div>
</div>