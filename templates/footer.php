<?php 
$soical_media = get_field('soical_media','option');
$let_chat = get_field('let_chat','option');
$check_availability_button = get_field('check_availability_button','option');
$phone_number = get_field('phone_number','option');
$email_id = get_field('email_id','option');
$address = get_field('address','option');
$address_link = get_field('address_link','option');
$website_design_by = get_field('website_design_by','option');
$links = get_field('links','option');
$website_design_logo = get_field('website_design_logo','option');
?>
<!-- other footer color class - white-footer , responsive yellow footer class - res-yellow-footer -->
<footer class="footer position-relative overflow-hidden <?php echo $footer_color_main; ?> <?php echo $footer_color_main_res; ?>">
    <div class="container px-p-0">
        <div class="instagram-section dmb-85 tmb-75">
            <div class="d-flex flex-wrap align-items-center justify-content-center dmb-30">
                <div class="footer-title classic font-28 leading-30 text-2C2924 me-lg-3 res-font-20 res-w-100 text-center tmb-10">Follow us @royleforestweddings</div>
                <?php if(!empty($soical_media)): ?>
                <div class="social-icons-group d-flex align-items-center justify-content-center res-w-100">
                    <?php foreach($soical_media as $soical_media_custom): 
                       if(!empty($soical_media_custom['link']['url'])): 
                        $target_5 = ($soical_media_custom['link']['target'] == "_blank") ? "_blank" : "";        
                    ?>
                    <a href="<?php echo $soical_media_custom['link']['url']; ?>" target="<?php echo $target_5; ?>" class="text-decoration-none social-item d-inline-flex align-items-center justify-content-center rounded-circle ms-2">
                        <img src="<?php echo $soical_media_custom['icon']['url']; ?>" alt="" class="black-icon">
                        <img src="<?php echo $soical_media_custom['icon_white']['url']; ?>" alt="" class="white-icon">
                    </a>
                    <?php endif; 
                    endforeach;
                    ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="instagram-slider">
                <div class="instagram-item">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/insta-1.png" alt="" class="h-100 w-100 object-cover">
                </div>
                <div class="instagram-item">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/insta-1.png" alt="" class="h-100 w-100 object-cover">
                </div>
                <div class="instagram-item">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/insta-1.png" alt="" class="h-100 w-100 object-cover">
                </div>
                <div class="instagram-item">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/insta-1.png" alt="" class="h-100 w-100 object-cover">
                </div>
                <div class="instagram-item">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/insta-1.png" alt="" class="h-100 w-100 object-cover">
                </div>
                <div class="instagram-item">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/insta-1.png" alt="" class="h-100 w-100 object-cover">
                </div>
            </div>
        </div>
        <div class="main-footer d-flex justify-content-between flex-wrap text-white dpb-75 tpb-30 px-p-p">
            <div class="col-xl-3 col-lg-4 col-12">
                <?php if(!empty($let_chat)): ?>
                    <div class="louise font-100 leading-105 text-FFFAF6 dmb-50 res-font-87 res-leading-90 tmb-45"><?php echo $let_chat; ?></div>
                <?php endif; ?>
                <?php if(!empty($check_availability_button['url'])): 
                 $target_1 = ($check_availability_button['target'] == "_blank") ? "_blank" : "";        
                ?>
                    <a href="<?php echo $check_availability_button['url']; ?>" target="<?php echo $target_1; ?>" class="text-decoration-none btnA bgdark-BDA673-btn w-204px classic font-16 leading-20 d-lg-flex d-none"><?php echo $check_availability_button['title']; ?></a>
                <?php endif; ?>
            </div>
            <div class="col-xl-9 col-lg-8 col-12 footer-details d-flex flex-column justify-content-between">
                <div class="d-flex flex-wrap tmb-40">
                    <?php if(!empty($links)): ?>
                    <ul class="col-lg-3 list-none mb-0 ps-0 footer-menu-links order-lg-0 order-1 res-w-100">
                        <?php foreach($links as $links_custom): 
                        if (!empty($links_custom['link']['url'])) :
                            $target_2 = ($links_custom['link']['target'] == "_blank") ? "_blank" : "";        
                        ?>
                        <li class="dmb-25 d-flex">
                            <a href="<?php echo $links_custom['link']['url']; ?>" target="<?php echo $target_2; ?>" class="text-decoration-none d-inline-block classic font-14 leading-16 fw-normal text-FFFAF6 opacity-58">
                            <?php echo $links_custom['link']['title']; ?>
                            </a>
                        </li>
                        <?php 
                        endif;
                        endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    <div class="footer-contact-group col-lg-9 col-12 d-flex flex-wrap">
                        <div class="col-xxl-5 col-12">
                            <?php if(!empty($phone_number)): ?>
                            <div class="footer-contact-item d-flex align-items-center dmb-20">
                                <div class="footer-contact-img d-flex align-items-center justify-content-center rounded-circle me-2">
                                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/contact-call.svg" alt="contact-call.svg">
                                </div>
                                <a href="tel:<?php echo $phone_number; ?>" class="text-decoration-none d-inline-block classic font-18 leading-26 text-FFFAF6 res-font-14 res-leading-20 ms-1 text-break"><?php echo $phone_number; ?></a>
                            </div>
                            <?php endif; ?>
                            <?php if(!empty($email_id)): ?>
                            <div class="footer-contact-item d-flex align-items-center dmb-20">
                                <div class="footer-contact-img d-flex align-items-center justify-content-center rounded-circle me-2">
                                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/contact-mail.svg" alt="contact-mail.svg">
                                </div>
                                <a href="mailto:<?php echo $email_id; ?>" class="text-decoration-none d-inline-block classic font-18 leading-26 text-FFFAF6 res-font-14 res-leading-20 ms-1 text-break"><?php echo $email_id; ?></a>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-xxl-7 col-12 tmb-65">
                            <?php if(!empty($address_link['url'])): 
                            $target_3 = ($address_link['target'] == "_blank") ? "_blank" : "";            
                            ?>
                            <div class="footer-location d-flex align-items-start dmb-20 tmb-45">
                                <div class="footer-contact-img d-flex align-items-center justify-content-center rounded-circle me-2">
                                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/contact-location.svg" alt="">
                                </div>
                                <div class="ms-1 d-inline-flex flex-column h-fit">
                                    <a href="<?php echo $address_link['url']; ?>" target="<?php echo $target_3; ?>" class="text-decoration-none d-inline-block classic font-18 leading-26 text-FFFAF6 res-font-14 res-leading-20 dmb-20 tmb-15"><?php echo $address; ?></a>
                                    <a href="<?php echo $address_link['url']; ?>" target="<?php echo $target_3; ?>" class="d-inline-block classic font-13 leading-16 fw-normal text-FFFAF6 res-font-14 res-leading-16 ms-1 opacity-52"><?php echo $address_link['title']; ?></a>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if(!empty($check_availability_button['url'])): 
                            $target_1 = ($check_availability_button['target'] == "_blank") ? "_blank" : "";        
                            ?>
                            <a href="<?php echo $check_availability_button['url']; ?>" class="text-decoration-none btnA bgdark-BDA673-btn w-204px classic font-16 leading-20 d-lg-none"><?php echo $check_availability_button['title']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php if(!empty($website_design_by['url'])): 
                $target_4 = ($website_design_by['target'] == "_blank") ? "_blank" : "";          
                ?>
                <div class="d-flex align-items-end justify-content-end w-100">
                    <a href="<?php echo $website_design_by['url']; ?>" class="text-decoration-none d-inline-flex design-text">
                        <img src="<?php echo $website_design_logo['url']?>" alt="">
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>