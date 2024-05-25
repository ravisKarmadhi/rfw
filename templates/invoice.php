<?php
/*
 * Template Name: invoice
 */
$my_account_left_sidebar_menu = get_field('my_account_left_sidebar_menu','option');
$body_background_color = get_field('body_background_color');
$background_color_body = "";
if($body_background_color == 'skin'): 
  $background_color_body = "bgcream-content-img";
elseif($body_background_color == 'black'):
  $background_color_body = "bg-2C2924";
elseif($body_background_color == 'yellow'):
  $background_color_body = "bg-BDA673";
endif;
$heading = get_field('heading');
$content = get_field('content');
?>

<main class="<?php echo $background_color_body; ?>">
    <section class="dpt-200 dpb-155">
        <div class="container px-p-0">
            <div class="tabs d-flex flex-wrap">
              <?php if(!empty($my_account_left_sidebar_menu)): ?>
                <div class="col-lg-3 col-12 pe-lg-2 tmb-40 px-p-p">
                    <div class="tabs-navigation radius-5 col-lg-10 col-12 px-3 dpt-30 dpb-30 position-sticky">
                        <ul id="tabs-nav" class="list-none ps-0 dmb-100">
                          <?php foreach($my_account_left_sidebar_menu as $my_account_left_sidebar_menu_custom): 
                          if(!empty($my_account_left_sidebar_menu_custom['link']['url'])):
                            $target_1 = ($my_account_left_sidebar_menu_custom['link']['target'] == "_blank") ? "_blank" : "";   
                          ?>
                            <li class="d-flex align-items-center px-3 dpt-10 dpb-10"><a href="<?php echo $my_account_left_sidebar_menu_custom['link']['url']; ?>" class="text-decoration-none d-inline-block classic font-16 leading-24 text-white"><?php echo $my_account_left_sidebar_menu_custom['link']['title']; ?></a></li>
                          <?php 
                          endif;  
                        endforeach;
                          ?>
                        </ul>
                        <div class="px-3">
                            <a href="<?php echo wp_logout_url( get_permalink() ); ?>" class="classic font-15 leading-16 text-white">Logout</a>
                        </div>
                    </div>
                </div>
              <?php endif; ?>
                <div id="tabs-content" class="col-lg-9 col-12">
                    <div id="tab1" class="tab-content px-p-p">
                        <div class="invoice-info radius-5 dmb-30 dpt-60 dpb-50 tpt-40 tpb-35">
                            <?php if(!empty($heading)): ?>
                                <div class="classic font-30 leading-30 text-FFFAF6 dmb-25 res-font-28"><?php echo $heading; ?></div>
                            <?php endif; ?>
                            <?php if(!empty($content)): ?>
                            <div class="classic font-15 leading-26 text-FFFAF6 res-font-14 res-leading-24">
                                <?php echo $content; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="payment-info dpt-50 dpb-35 px-lg-5 px-4 radius-5">
                                <div class="classic font-30 leading-40 text-FFFAF6 dmb-35">Payment Info</div>
                                <div>
                                    <div class="d-flex align-items-center py-4 payment-row">
                                        <div class="col-6 classic font-15 leading-16 text-FFFAF6 res-font-13 res-leading-16">Card Holder Name</div>
                                        <div class="col-6 classic font-15 leading-16 text-FFFAF6 text-end res-font-13 res-leading-16">MISS H SMITH</div>
                                    </div>
                                    <div class="d-flex align-items-center py-4 payment-row">
                                        <div class="col-6 classic font-15 leading-16 text-FFFAF6 res-font-13 res-leading-16">Card Number</div>
                                        <div class="col-6 classic font-15 leading-16 text-FFFAF6 text-end res-font-13 res-leading-16">XXXX XXXX XXXX 0308</div>
                                    </div>
                                    <div class="d-flex align-items-center py-4 payment-row">
                                        <div class="col-6 classic font-15 leading-16 text-FFFAF6 res-font-13 res-leading-16">CSV</div>
                                        <div class="col-6 classic font-15 leading-16 text-FFFAF6 text-end res-font-13 res-leading-16">031</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prev-next-div d-lg-none col-12 d-flex align-items-center dmt-70">
                            <div class="col-6"></div>
                            <div class="col-6 text-end">
                                <a href="" class="d-inline-block classic font-20 leading-30 text-FFFAF6">Next</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-content px-p-p">
                        <div class="invoice-info radius-5 dmb-30 dpt-60 dpb-50">
                            <div class="classic font-30 leading-30 text-FFFAF6 dmb-25 res-font-28">Wedding Planner</div>
                            <div class="classic font-15 leading-26 text-FFFAF6 dmb-25 res-font-14 res-leading-24">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore  et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat
                            </div>
                            <a href="" class="text-decoration-none btnA bgdark-BDA673-btn classic font-14 leading-16 w-172px h-44px">Link To Google Form</a>
                        </div>
                        <div class="prev-next-div d-lg-none col-12 d-flex align-items-center dmt-70">
                            <div class="col-6">
                                <a href="" class="d-inline-block classic font-20 leading-30 text-FFFAF6">Go back</a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="" class="d-inline-block classic font-20 leading-30 text-FFFAF6">Next</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="tab-content">
                        <div class="dpt-50">
                            <div class="classic font-36 leading-40 text-FFFAF6 dmb-30 px-p-p">Suppliers and Contacts</div>
                            <div class="supplier-category d-flex align-items-center pe-lg-0 overflow-x-auto dmb-55">
                                <button data-filter="all"
                                    class="supplier-button transition classic font-12 leading-16 spacing-1_2 text-uppercase border-0 text-nowrap text-FFFAF6 px-3 mx-2 active">
                                    TOP RATED
                                </button>
                                <button data-filter="supplier-1"
                                    class="supplier-button transition classic font-12 leading-16 spacing-1_2 text-uppercase border-0 text-nowrap text-FFFAF6 px-3 mx-2">
                                    FILTER 1
                                </button>
                                <button data-filter="supplier-2"
                                    class="supplier-button transition classic font-12 leading-16 spacing-1_2 text-uppercase border-0 text-nowrap text-FFFAF6 px-3 mx-2">
                                    FILTER 2
                                </button>
                                <button data-filter="supplier-3"
                                    class="supplier-button transition classic font-12 leading-16 spacing-1_2 text-uppercase border-0 text-nowrap text-FFFAF6 px-3 mx-2">
                                    FILTER 3
                                </button>
                            </div>
                            <div class="px-p-p">
                                <div class="supplier-item dpt-35 dpb-30 tpt-0 tpb-0 px-lg-4 bg-312D27 dmb-10 supplier-1 res-bg-transparent">
                                    <div class="d-flex flex-wrap align-items-center ps-lg-2">
                                        <div class="col-lg-2 col-10 tmb-20">
                                            <div class="classic font-15 leading-16 text-FFFAF6 mb-lg-4 mb-3 text-decoration-underline">Name</div>
                                            <div class="classic font-18 leading-20 text-FFFAF6">Supplier Name</div>
                                        </div>
                                        <div class="col-lg-2 col-12 tmb-20 order-3 order-lg-0">
                                            <div class="classic font-15 leading-16 text-FFFAF6 mb-lg-4 mb-3 text-decoration-underline">Sector</div>
                                            <div class="classic font-18 leading-20 text-FFFAF6">Sector Name</div>
                                        </div>
                                        <div class="col-lg-2 col-12 tmb-20 order-4 order-lg-0">
                                            <div class="classic font-15 leading-16 text-FFFAF6 mb-lg-4 mb-3 text-decoration-underline">Contact</div>
                                            <div class="classic font-18 leading-20 text-FFFAF6">01235 67890</div>
                                        </div>
                                        <div class="col-lg-3 col-12 order-5 order-lg-0">
                                            <div class="classic font-15 leading-16 text-FFFAF6 mb-lg-4 mb-3 text-decoration-underline">Email Address</div>
                                            <div class="classic font-18 leading-20 text-FFFAF6">jasonbourne@hotmail.co.uk</div>
                                        </div>
                                        <div class="col-lg-2 col-12 order-7 order-lg-0 tmt-30">
                                            <a href="" class="text-decoration-none btnA bgdark-BDA673-btn h-44px w-120px classic font-14 leading-16 ms-auto res-w-100">Read More</a>
                                        </div>
                                        <div class="col-lg-1 col-2 order-2 order-lg-0">
                                            <div class="review-star d-flex ms-auto">
                                                <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/star.svg" alt="" class="w-100">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-12 order-6 order-lg-0">
                                            <div class="supplier-social mt-lg-4 tmt-40 d-flex align-items-center">
                                                <div class="supplier-social-item d-flex align-items-center justify-content-center rounded-circle me-2">
                                                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/footer-insta-white.svg" alt="">
                                                </div>
                                                <div class="supplier-social-item d-flex align-items-center justify-content-center rounded-circle me-2">
                                                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/footer-fb-white.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab4" class="tab-content">
                        <h2>Jay</h2>
                        <p>"I don't care if she's my cousin or not, I'm gonna knock those boots again tonight."</p>
                    </div>
                </div> <!-- END tabs-content -->
            </div>
        </div>
    </section>
</main>
