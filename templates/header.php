<!-- Modal -->

<div class="modal video-modal fade" id="videoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="mohea-dialog modal-dialog-centered modal-lg">
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
<!-- black header color class - header-black -->
<header class="header position-fixed top-0 w-100 dpt-50 tpt-70 dpb-30">
   <div class="header-section">
        <div class="container">
            <div class="d-flex">
                <div class="col-lg-3"></div>
                <div class="col-6 d-flex align-items-center justify-content-lg-center">
                    <a href="" class="text-decoration-none d-inline-block header-logo">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/logo-white.svg" alt="" class="head-white-logo w-100">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/logo-black.svg" alt="" class="head-black-logo w-100">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/res-white-logo.svg" alt="" class="head-fixed-logo w-100">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/res-white-logo.svg" alt="" class="res-head-white-logo w-100">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/res-black-logo.svg" alt="" class="res-head-black-logo w-100">
                    </a>
                </div>
                <div class="col-lg-3 col-6 d-flex align-items-center justify-content-end">
                    <a href="" class="text-decoration-none d-inline-flex align-items-center burger-menu-btn position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <div class="burger-menu-line bg-white w-100"></div>
                    </a>
                    <div class="header-offcanvas offcanvas offcanvas-end bg-2C2924 res-w-100 border-0 dpt-75 tpt-70 dpb-50 overflow-auto" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="d-flex align-items-center justify-content-lg-end justify-content-between dmb-70">
                            <a href="" class="text-decoration-none d-inline-block res-header-logo d-lg-none">
                                <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/res-white-logo.svg" alt="">
                            </a>
                            <button type="button" class="canvas-close text-reset bg-transparent border-0 p-0 d-inline-block" data-bs-dismiss="offcanvas" aria-label="Close">
                                <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/close-header.svg" alt="">
                            </button>
                        </div>
                        <nav class="navigation dmb-40 tmb-65">
                            <ul class="nav-menu ps-0 mb-0">
                                <li class="d-flex dmb-30"><a href="" class="text-decoration-none d-inline-block classic font-31 leading-40 fw-normal text-FFFAF6">The Venue</a></li>
                                <li class="d-flex dmb-30"><a href="" class="text-decoration-none d-inline-block classic font-31 leading-40 fw-normal text-FFFAF6">About Us</a></li>
                                <li class="d-flex dmb-30"><a href="" class="text-decoration-none d-inline-block classic font-31 leading-40 fw-normal text-FFFAF6">Our Gallery</a></li>
                                <li class="d-flex dmb-30"><a href="" class="text-decoration-none d-inline-block classic font-31 leading-40 fw-normal text-FFFAF6">Events</a></li>
                                <li class="d-flex dmb-30"><a href="" class="text-decoration-none d-inline-block classic font-31 leading-40 fw-normal text-FFFAF6">Accommodation</a></li>
                                <li class="d-flex dmb-30"><a href="" class="text-decoration-none d-inline-block classic font-31 leading-40 fw-normal text-FFFAF6">FAQs</a></li>
                            </ul>
                        </nav>
                        <div class="header-btn-group d-flex flex-wrap align-items-center dmb-50 tmb-0">
                            <a href="" class="text-decoration-none btnA border-FFFAF6-btn classic font-15 leading-20 text-FFFAF6 me-3 mb-3">Book A Visit</a>
                            <a href="" class="text-decoration-none btnA border-FFFAF6-btn classic font-15 leading-20 text-FFFAF6 me-3 mb-3">Download Brochure</a>
                        </div>
                        <div class="header-login">
                            <a href="" class="text-decoration-none d-inline-flex align-items-center classic font-20 leading-28 text-FFFAF6">
                                <div class="header-login-img d-flex align-items-center justify-content-center rounded-circle me-3">
                                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/user.svg" alt="">
                                </div>
                                Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</header>
