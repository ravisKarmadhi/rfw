<?php 
$white_logo = get_field('white_logo','option');
$white_small_logo = get_field('white_small_logo','option');
$black_logo = get_field('black_logo','option');
$black_small_logo = get_field('black_small_logo','option');
$menu = get_field('menu','option');
$button_1 = get_field('button_1','option');
$button_2 = get_field('button_2','option');
$login_button = get_field('login_button','option');
$header_color = get_field('header_color');
$header_color_main = "";
if($header_color == 'white'): 
$header_color_main = '';
else:
$header_color_main = 'header-black';
endif;
?>

<header class="header position-fixed top-0 w-100 dpt-50 tpt-70 dpb-30 <?php echo $header_color_main; ?>">
    <div class="header-section">
        <div class="container">
            <div class="d-flex">
                <div class="col-lg-3"></div>
                <div class="col-6 d-flex align-items-center justify-content-lg-center">
                    <a href="<?php echo get_home_url(); ?>" class="text-decoration-none d-inline-block header-logo">
                    <?php if(!empty($white_logo['url'])): ?>
                        <img src="<?php echo $white_logo['url']; ?>" alt="" class="head-white-logo w-100">
                    <?php endif; ?>
                    <?php if(!empty($black_logo['url'])): ?>
                        <img src="<?php echo $black_logo['url']; ?>" alt="" class="head-black-logo w-100">
                    <?php endif; ?>
                    <?php if(!empty($white_small_logo['url'])): ?>
                        <img src="<?php echo $white_small_logo['url']; ?>" alt="" class="head-fixed-logo w-100">
                        <img src="<?php echo $white_small_logo['url']; ?>" alt="" class="res-head-white-logo w-100">
                    <?php endif; ?>
                    <?php if(!empty($black_small_logo['url'])): ?>
                        <img src="<?php echo $black_small_logo['url']; ?>" alt="" class="res-head-black-logo w-100">
                    <?php endif; ?>
                    </a>
                </div>
                <div class="col-lg-3 col-6 d-flex align-items-center justify-content-end">
                    <a href="" class="text-decoration-none d-inline-flex align-items-center burger-menu-btn position-relative" data-bs-toggle="offcanvas" data-bs-target="#headerCanvas" aria-controls="headerCanvas">
                        <div class="burger-menu-line bg-white w-100"></div>
                    </a>
                    <div class="header-offcanvas offcanvas offcanvas-end bg-2C2924 res-w-100 border-0 dpt-75 tpt-70 dpb-50 overflow-auto" tabindex="-1" id="headerCanvas" aria-labelledby="headerCanvasLabel">
                        <div class="d-flex align-items-center justify-content-lg-end justify-content-between dmb-70">
                            <?php if(!empty($white_small_logo['url'])): ?>
                            <a href="<?php echo get_home_url(); ?>" class="text-decoration-none d-inline-block res-header-logo d-lg-none">
                                <img src="<?php echo $white_small_logo['url']; ?>" alt="">
                            </a>
                            <?php endif; ?>
                            <button type="button" class="canvas-close text-reset bg-transparent border-0 p-0 d-inline-block" data-bs-dismiss="offcanvas" aria-label="Close">
                                <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/close-header.svg" alt="">
                            </button>
                        </div>
                        <?php if(!empty($menu)): ?>
                        <nav class="navigation dmb-40 tmb-65">
                            <ul class="nav-menu ps-0 mb-0">
                                <?php foreach($menu as $menu_custom): 
                                if (!empty($menu_custom['link']['url'])) :
                                    $target_1 = ($menu_custom['link']['target'] == "_blank") ? "_blank" : "";    
                                ?>
                                <li class="d-flex dmb-30"><a href="<?php echo $menu_custom['link']['url']; ?>" target="<?php echo $target_1; ?>" class="text-decoration-none d-inline-block classic font-31 leading-40 fw-normal text-FFFAF6"><?php echo $menu_custom['link']['title']; ?></a></li>
                                <?php endif; 
                                endforeach; 
                                ?>
                            </ul>
                        </nav>
                        <?php endif; ?>
                        <div class="header-btn-group d-flex flex-wrap align-items-center dmb-50 tmb-0">
                                <?php
                                if (!empty($button_1['url'])) :
                                    $target_2 = ($button_1['target'] == "_blank") ? "_blank" : "";    
                                ?>
                            <a href="<?php echo $button_1['url']; ?>" target="<?php echo $target_2; ?>" class="text-decoration-none btnA border-FFFAF6-btn classic font-15 leading-20 text-FFFAF6 me-3 mb-3"><?php echo $button_1['title']; ?></a>
                            <?php endif; ?>
                            <?php
                                if (!empty($button_2['url'])) :
                                    $target_3 = ($button_2['target'] == "_blank") ? "_blank" : "";    
                                ?>
                            <a href="<?php echo $button_2['url']; ?>" target="<?php echo $target_3; ?>" class="text-decoration-none btnA border-FFFAF6-btn classic font-15 leading-20 text-FFFAF6 me-3 mb-3"><?php echo $button_2['title']; ?></a>
                            <?php endif; ?>
                        </div>
                        <?php
                        if (!empty($login_button['url'])) :
                            $target_2 = ($login_button['target'] == "_blank") ? "_blank" : "";    
                        ?>
                        <div class="header-login">
                            <a href="<?php echo $login_button['url']; ?>" target="<?php echo $target_4; ?>" class="text-decoration-none d-inline-flex align-items-center classic font-20 leading-28 text-FFFAF6">
                                <div class="header-login-img d-flex align-items-center justify-content-center rounded-circle me-3">
                                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/user.svg" alt="">
                                </div>
                                <?php echo $login_button['title']; ?>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>