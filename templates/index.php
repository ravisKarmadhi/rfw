<?php
/*
  * Template Name: Page Builder
*/
$page_builder = get_field('page_builder');
?>
<main>
  <?php if (have_rows('page_builder')) :
    $i = 1;
    while (have_rows('page_builder')) : the_row();
      $i++;
      if (get_row_layout() == 'hero_section') :
        $hero_section_background_image = get_sub_field('background_image');
        $hero_section_top_heading = get_sub_field('top_heading');
        $hero_section_bottom_heading = get_sub_field('bottom_heading');
        $hero_section_button_1 = get_sub_field('button_1');
        $hero_section_button_2 = get_sub_field('button_2');
  ?>

        <section class="w-100 vh-100 position-relative overflow-hidden home-hero" id="hero-section-<?php echo $i; ?>">
          <?php if (!empty($hero_section_background_image['url'])) : ?>
            <img src="<?php echo $hero_section_background_image['url']; ?>" class="w-100 h-100 object-cover position-absolute top-0 start-0" alt="" />
          <?php endif; ?>
          <div class="position-absolute top-left-center z-2 w-100">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 mx-auto">
                  <div class="text-center dpt-30 tpt-25">
                    <?php if (!empty($hero_section_top_heading)) : ?>
                      <span class="text-FFFAF6 lh-1 font-150  louise res-font-96"><?php echo $hero_section_top_heading; ?></span>
                    <?php endif; ?>
                    <?php if (!empty($hero_section_bottom_heading)) : ?>
                      <span class="text-FFFAF6 lh-1 mt-lg-n3 mt-n2 d-block font-64 text-uppercase classic res-font-40"><?php echo $hero_section_bottom_heading; ?></span>
                    <?php endif; ?>
                    <div class="d-lg-flex align-items-center justify-content-center dmt-20 tmt-30">
                      <?php if (!empty($hero_section_button_1['url'])) :
                        $target_1 = ($hero_section_button_1['target'] == "_blank") ? "_blank" : "";
                      ?>
                        <a href="<?php echo $hero_section_button_1['url']; ?>" target="<?php echo $target_1; ?>" class="btnA bgdark-BDA673-btn text-decoration-none classic font-15 me-lg-2 mx-auto">
                          <?php echo $hero_section_button_1['title']; ?>
                        </a>
                      <?php endif; ?>
                      <?php if (!empty($hero_section_button_2['url'])) :
                        $target_2 = ($hero_section_button_2['target'] == "_blank") ? "_blank" : "";
                      ?>
                        <a href="<?php echo $hero_section_button_2['url']; ?>" target="<?php echo $target_2; ?>" class="btnA border-FFFAF6-btn text-decoration-none classic  font-15 ms-lg-2 tmt-10 mx-auto">
                          <?php echo $hero_section_button_2['title']; ?>
                        </a>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <?php elseif (get_row_layout() == 'bottom_fix_line') :
        $bottom_fix_line_text = get_sub_field('text');
        $bottom_fix_line_link = get_sub_field('link');
        if (!empty($bottom_fix_line_text)) :
        ?>
          <div class="bg-BDA673  lh-1 py-2 position-fixed z-2 bottom-0 left-0 w-100 text-center " id="bottom-home">
            <p class="text-decoration-none text-FFFAF6 classic fw-normal font-14 leading-20 col-9 mx-auto d-block">
              <?php echo $bottom_fix_line_text; ?>
              <?php if (!empty($bottom_fix_line_link['url'])) :
                $target_3 = ($bottom_fix_line_link['target'] == "_blank") ? "_blank" : "";
              ?>
                <span class="d-lg-inline-block d-block"> <a href="<?php echo $bottom_fix_line_link['url']; ?>" target="<?php echo $target_3; ?>" class="text-decoration-none text-FFFAF6 classic fw-normal font-14 lh-1"> <?php echo $bottom_fix_line_link['title']; ?> </a></span>
              <?php endif; ?>
            </p>
            <button class="bg-transparent p-0 bg-transparent border-0 position-absolute end-0 top-center me-4" id="close-bottom-home">
              <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/close.svg" class="" alt="" />
            </button>
          </div>
        <?php endif; ?>
      <?php elseif (get_row_layout() == 'left_right_image_content') :
        $left_right_image_content_background_color = get_sub_field('background_color');
        $left_right_image_content_left__right_image = get_sub_field('left__right_image');
        $left_right_image_content_heading = get_sub_field('heading');
        $left_right_image_content_content = get_sub_field('content');
        $left_right_image_content_button_1 = get_sub_field('button_1');
        $left_right_image_content_button_2 = get_sub_field('button_2');
        $left_right_image_content_lists = get_sub_field('lists');
        $left_right_image_content_video_image_select = get_sub_field('video_image_select');
        $left_right_image_content_image = get_sub_field('image');
        $left_right_image_content_video = get_sub_field('video');
        $left_right_image_content_youtube = get_sub_field('youtube');
        $left_right_image_content_vimeo = get_sub_field('vimeo');
        $master_slug_1 = str_replace(' ', '', $left_right_image_content_heading);
        $master_slug = str_replace(array('\'', '"', ',', ';', '<', '>', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '(', ')', '.', ','), '', $master_slug_1);
        $background_color = "";
        if ($left_right_image_content_background_color == 'skin') :
          $background_color = "bgcream-content-img";
        elseif ($left_right_image_content_background_color == 'black') :
          $background_color = "bgblack-content-img";
        elseif ($left_right_image_content_background_color == 'yellow') :
          $background_color = "bggold-content-img";
        elseif ($left_right_image_content_background_color == 'green') :
          $background_color = "bgdarkgeen-content-img";
        endif;
        $clas = ($left_right_image_content_left__right_image == 'left') ? "image-content-left " : "";
      ?>
        <section class="image-content overflow-hidden  position-relative <?php echo $clas; ?> <?php echo $background_color; ?> tpt-70" id="<?php echo $master_slug; ?>">
          <div class="container px-p-0">
            <div class="row ">
              <?php if ($left_right_image_content_left__right_image == 'left') : ?>
                <div class="col-lg-6 h-100 tmt-40  half-image">
                  <div class="content-image position-absolute start-0 top-0 p-relative h-100">
                    <div>
                      <img src="<?php echo $left_right_image_content_image['url']; ?>" class="w-100 h-100 object-cover" alt="" />
                      <?php if ($left_right_image_content_video_image_select == 'video' || $left_right_image_content_video_image_select == 'youtube' || $left_right_image_content_video_image_select == 'vimeo') : ?>
                        <button class="position-absolute top-left-center p-0 border-0 bg-transparent play-video-modal" data-bs-toggle="modal" data-bs-target="#videoModal<?php echo $i; ?>">
                          <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/play.svg" class="" alt="" />
                        </button>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 pe-lg-5 details-content d-flex flex-column justify-content-center ms-auto">
                  <div class="me-lg-4 px-p-p">
                    <div class="text classic fw-normal font-50 lh-1 leading-56 pe-lg-4 res-font-45"><?php echo $left_right_image_content_heading; ?></div>
                    <div class="text classic fw-normal font-15 leading-26 dmt-40 tmt-25"><?php echo $left_right_image_content_content; ?></div>
                    <?php if (!empty($left_right_image_content_lists)) : ?>
                      <ul class="ps-0 mb-0 row dmt-10">
                        <?php foreach ($left_right_image_content_lists as $left_right_image_content_lists_custom) :
                          if (!empty($left_right_image_content_lists_custom['list'])) : ?>
                            <li class="col-lg-6 list-none classic fw-normal font-15 text-FFFAF6 dmt-15">
                              <span class="font-12">•</span> <?php echo $left_right_image_content_lists_custom['list']; ?>
                            </li>
                        <?php endif;
                        endforeach;
                        ?>
                      </ul>
                    <?php endif; ?>
                  </div>
                  <div class="btns-row d-lg-flex align-items-center dmt-35 tmt-30 px-p-p">
                    <?php
                    if (!empty($left_right_image_content_button_1['url'])) :
                      $target_4 = ($left_right_image_content_button_1['target'] == "_blank") ? "_blank" : "";
                    ?>
                      <a href="<?php echo $left_right_image_content_button_1['url']; ?>" target="<?php echo $target_4; ?>" class="classic font-15 btnA text-capitalize text-decoration-none dmb-10">
                        <?php echo $left_right_image_content_button_1['title']; ?>
                      </a>
                    <?php endif; ?>
                    <?php
                    if (!empty($left_right_image_content_button_2['url'])) :
                      $target_5 = ($left_right_image_content_button_2['target'] == "_blank") ? "_blank" : "";
                    ?>
                      <a href="<?php echo $left_right_image_content_button_2['url']; ?>" target="<?php echo $target_5; ?>" class="classic font-15 btnA text-capitalize text-decoration-none dmb-10">
                        <?php echo $left_right_image_content_button_2['title']; ?>
                      </a>
                    <?php endif; ?>
                  </div>
                </div>
              <?php else : ?>
                <div class="col-lg-5 pe-lg-5 details-content d-flex flex-column justify-content-center">
                  <div class="me-lg-4 px-p-p">
                    <div class="text classic fw-normal font-50 lh-1 leading-56 pe-lg-4 res-font-45"><?php echo $left_right_image_content_heading; ?></div>
                    <div class="text classic fw-normal font-15 leading-26 dmt-40 tmt-25"><?php echo $left_right_image_content_content; ?></div>
                    <?php if (!empty($left_right_image_content_lists)) : ?>
                      <ul class="ps-0 mb-0 row dmt-10">
                        <?php foreach ($left_right_image_content_lists as $left_right_image_content_lists_custom) :
                          if (!empty($left_right_image_content_lists_custom['list'])) : ?>
                            <li class="col-lg-6 list-none classic fw-normal font-15 text-FFFAF6 dmt-15">
                              <span class="font-12">•</span> <?php echo $left_right_image_content_lists_custom['list']; ?>
                            </li>
                        <?php endif;
                        endforeach;
                        ?>
                      </ul>
                    <?php endif; ?>
                  </div>
                  <div class="btns-row d-lg-flex align-items-center dmt-35 tmt-30 px-p-p">
                    <?php
                    if (!empty($left_right_image_content_button_1['url'])) :
                      $target_4 = ($left_right_image_content_button_1['target'] == "_blank") ? "_blank" : "";
                    ?>
                      <a href="<?php echo $left_right_image_content_button_1['url']; ?>" target="<?php echo $target_4; ?>" class="classic font-15 btnA text-capitalize text-decoration-none dmb-10">
                        <?php echo $left_right_image_content_button_1['title']; ?>
                      </a>
                    <?php endif; ?>
                    <?php
                    if (!empty($left_right_image_content_button_2['url'])) :
                      $target_5 = ($left_right_image_content_button_2['target'] == "_blank") ? "_blank" : "";
                    ?>
                      <a href="<?php echo $left_right_image_content_button_2['url']; ?>" target="<?php echo $target_5; ?>" class="classic font-15 btnA text-capitalize text-decoration-none dmb-10">
                        <?php echo $left_right_image_content_button_2['title']; ?>
                      </a>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="col-lg-6 h-100 tmt-40  half-image">
                  <div class="content-image position-absolute p-relative end-0 top-0 h-100">
                    <div>
                      <img src="<?php echo $left_right_image_content_image['url']; ?>" class="w-100 h-100 object-cover" alt="" />
                      <?php if ($left_right_image_content_video_image_select == 'video' || $left_right_image_content_video_image_select == 'youtube' || $left_right_image_content_video_image_select == 'vimeo') : ?>
                        <button class="position-absolute top-left-center p-0 border-0 bg-transparent play-video-modal" data-bs-toggle="modal" data-bs-target="#videoModal<?php echo $i; ?>">
                          <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/play.svg" class="" alt="" />
                        </button>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </section>
        <?php if ($left_right_image_content_video_image_select == 'video' || $left_right_image_content_video_image_select == 'youtube' || $left_right_image_content_video_image_select == 'vimeo') : ?>
          <!-- Modal -->
          <div class="modal video-modal fade" id="videoModal<?php echo $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content border-0 rounded-0 bg-transparent">
                <div class="modal-body p-0 position-relative">
                  <button class="p-0 bg-transparent border-0 pause-video mt-n5 bg-2D4232 rounded-circle p-2 position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/close-header.svg" class="" />
                  </button>
                  <?php if ($left_right_image_content_video_image_select == 'video') :
                    if (!empty($left_right_image_content_video['url'])) :
                  ?>
                      <video autoplay loop class="w-100 " id="myVideo">
                        <source src="<?php echo $left_right_image_content_video['url'] ?>" type="video/mp4">
                      </video>
                    <?php endif; ?>
                    <?php elseif ($left_right_image_content_video_image_select == 'youtube') :
                    if (!empty($left_right_image_content_youtube['url'])) :
                    ?>
                      <iframe id="autoplay-video" class="w-100" src="<?php echo $left_right_image_content_youtube['url'] ?>" allow="autoplay; fullscreen"></iframe>
                    <?php endif; ?>
                    <?php elseif ($left_right_image_content_video_image_select == 'vimeo') :
                    if (!empty($left_right_image_content_vimeo['url'])) :
                    ?>
                      <iframe src="<?php echo $left_right_image_content_vimeo['url'] ?>" class="" width="100%" height="100%" frameborder="0" allow="fullscreen; picture-in-picture" allowfullscreen></iframe>
                  <?php endif;
                  endif; ?>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php elseif (get_row_layout() == 'all_side_image_section') :
        $all_side_image_section_background_color = get_sub_field('background_color');
        $all_side_image_section_top_left_image = get_sub_field('top_left_image');
        $all_side_image_section_top_right_image = get_sub_field('top_right_image');
        $all_side_image_section_bottom_left_image = get_sub_field('bottom_left_image');
        $all_side_image_section_bottom_right_image = get_sub_field('bottom_right_image');
        $all_side_image_section_top_heading = get_sub_field('top_heading');
        $all_side_image_section_bottom_heading = get_sub_field('bottom_heading');
        $all_side_image_section_content = get_sub_field('content');
        $all_side_image_section_button = get_sub_field('button');
        $all_side_image_section_download_brochure_button = get_sub_field('download_brochure_button');
        $all_side_image_section_form_text = get_sub_field('form_text');
        $background_color_all = "";
        if ($all_side_image_section_background_color == 'skin') :
          $background_color_all = "bg-FFFAF6-sec";
        elseif ($all_side_image_section_background_color == 'green') :
          $background_color_all = "bg-2D4232-sec";
        elseif ($all_side_image_section_background_color == 'yellow') :
          $background_color_all = "";
        endif;
      ?>
        <section class="view-gallery-sec <?php echo $background_color_all; ?>  dpt-160 tpt-105 dpb-160 overflow-hidden" id="image-section-<?php echo $i; ?>">
          <div class="container">
            <div class="row">
              <div class="col-lg-11 mx-auto position-relative">
                <div class="image-timeless">
                  <?php if (!empty($all_side_image_section_top_left_image['url'])) : ?>
                    <div class="first-img position-absolute top-0 start-0 dmt-65 tmt-5">
                      <img src="<?php echo $all_side_image_section_top_left_image['url']; ?>" class="w-100 h-100 object-cover transition" alt="" />
                    </div>
                  <?php
                  endif;
                  if (!empty($all_side_image_section_top_right_image['url'])) : ?>
                    <div class="second-img position-absolute top-0 end-0">
                      <img src="<?php echo $all_side_image_section_top_right_image['url']; ?>" class="w-100 h-100 object-cover transition" alt="" />
                    </div>
                  <?php
                  endif;
                  if (!empty($all_side_image_section_bottom_left_image['url'])) : ?>
                    <div class="third-img position-absolute bottom-0 ">
                      <img src="<?php echo $all_side_image_section_bottom_left_image['url']; ?>" class="w-100 h-100 object-cover transition" alt="" />
                    </div>
                  <?php
                  endif;
                  if (!empty($all_side_image_section_bottom_right_image['url'])) : ?>
                    <div class="four-img position-absolute end-0">
                      <img src="<?php echo $all_side_image_section_bottom_right_image['url']; ?>" class="w-100 h-100 object-cover transition" alt="" />
                    </div>
                  <?php endif; ?>
                </div>
                <div class="col-xl-5 mx-auto">
                  <div class="text-center dpt-55 tpt-175 dpb-350 tpb-250">
                    <span class="d-block louise font-137 lh-1 text res-font-105"><?php echo  $all_side_image_section_top_heading; ?></span>
                    <span class="classic font-87 text-uppercase lh-1 mt-lg-n5 mt-n4 d-block text res-font-48"><?php echo  $all_side_image_section_bottom_heading; ?></span>
                    <div class="dmt-15 tmt-25 classic font-15 text leading-26">
                      <?php echo $all_side_image_section_content; ?>
                    </div>
                    <?php
                    if (!empty($all_side_image_section_button['url'])) :
                      $target_6 = ($all_side_image_section_button['target'] == "_blank") ? "_blank" : "";
                    ?>
                      <a href="<?php echo $all_side_image_section_button['url']; ?>" target="<?php echo $target_6; ?>" class="btnA link text-decoration-none classic font-15 text-capitalize mx-auto dmt-15 tmt-25">
                        <?php echo $all_side_image_section_button['title']; ?>
                      </a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <?php elseif (get_row_layout() == 'want_to_download') :
        $want_to_download_heading = get_sub_field('heading');
        $want_to_download_button = get_sub_field('button');
      ?>
        <section class="want-brochure-sec" id="brochure-<?php echo $i; ?>">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-10 mx-auto">
                <div class="bg-2D4232 dpt-65 dpb-65 tpt-45 tpb-35">
                  <div class="d-lg-flex align-items-center justify-content-center">
                    <?php if (!empty($want_to_download_heading)) : ?>
                      <div class="classic text-capitalize text-center text-FFFAF6 font-31 res-font-26 lh-sm">
                        <?php echo $want_to_download_heading; ?>
                      </div>
                    <?php endif; ?>
                    <?php if (!empty($want_to_download_button['url'])) :
                      $target_7 = ($want_to_download_button['target'] == "_blank") ? "_blank" : "";
                    ?>
                      <a href="<?php echo $want_to_download_button['url']; ?>" target="<?php echo $target_7; ?>" class="classic font-15 btnA bg-FFFAF6-btn text-decoration-none ms-lg-5 me-lg-0 mx-auto tmt-20">
                        <?php echo $want_to_download_button['title']; ?>
                      </a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php elseif (get_row_layout() == 'event_section') :
        $event_section_heading = get_sub_field('heading');
        $event_section_items = get_sub_field('items');
        if (!empty($event_section_items)) :
        ?>
          <section class="overflow-hidden" id="event-<?php echo $i; ?>">
            <div class="container">
              <div class="row">
                <div class="dmb-35 d-flex align-items-center justify-content-between">
                  <?php if (!empty($event_section_heading)) : ?>
                    <div class="classic font-44 text-2C2924 res-font-31 lh-1"><?php echo $event_section_heading; ?></div>
                  <?php endif; ?>
                  <div class="d-lg-flex d-none align-items-center justify-content-end events-card-btn">
                    <button class="p-0 bg-transparent border-0 slick--prev rotate-circle-negative-full">
                      <img src="<?php get_home_url(); ?>/wp-content/uploads/2024/05/arrow-black.svg" class="" alt="" />
                    </button>
                    <button class="p-0 bg-transparent border-0 slick--next ms-3">
                      <img src="<?php get_home_url(); ?>/wp-content/uploads/2024/05/arrow-black.svg" class="" alt="" />
                    </button>
                  </div>
                </div>
                <div class="col-12 events-card-slider">
                  <?php foreach ($event_section_items as $event_section_items_custom) :
                    $id = $event_section_items_custom->ID;
                    $ntitle = $event_section_items_custom->post_title;
                    $content = $event_section_items_custom->post_excerpt;
                  ?>
                    <div class="single-events">
                      <a href="<?php echo get_permalink($id); ?>" class="d-block card-hover w-100 text-decoration-none">
                        <div class="events-img  overflow-hidden">
                          <img src="<?php echo get_the_post_thumbnail_url($id); ?>" class="w-100 h-100 object-cover img" alt="<?php echo $ntitle; ?>">
                        </div>
                        <div class="classic font-20 text-2C2924 dmt-35 lh-1"><?php echo $ntitle; ?></div>
                        <div class="classic font-15 text-2C2924 dmt-20 opacity-50"><?php echo $content; ?></div>

                        <div class="mt-3">
                          <img src="<?php get_home_url(); ?>/wp-content/uploads/2024/05/arrow-black.svg" class="" alt="" />
                        </div>
                      </a>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </section>
        <?php endif; ?>
        <?php elseif (get_row_layout() == 'our_history') :
        $our_history_heading = get_sub_field('heading');
        $our_history_items = get_sub_field('items');
        if (!empty($our_history_items)) :
        ?>
        <?php endif; ?>
        <?php elseif (get_row_layout() == 'two_block_section') :
        $two_block_section_items = get_sub_field('items');

        if (!empty($two_block_section_items)) :
        ?>
          <section id="two-block-<?php echo $i; ?>">
            <div class="container px-p-0">
              <div class="row mx-lg-n2">
                <?php foreach ($two_block_section_items as $two_block_section_items_custom) :
                  if (!empty($two_block_section_items_custom['heading'])) :
                ?>
                    <div class="col-lg-6 px-lg-2">
                      <div class="single-brochure w-100 position-relative">
                        <div class="brochure-img overflow-hidden card-hover w-100 h-100">
                          <img src="<?php echo $two_block_section_items_custom['image']['url']; ?>" class="w-100 h-100 object-cover img" alt="" />
                          <div class="position-absolute top-left-center w-100 text-center px-4">
                            <div class="louise text-FFFAF6 font-77 lh-1 res-font-40 res-classic"><?php echo $two_block_section_items_custom['heading']; ?></div>
                            <?php if (!empty($two_block_section_items_custom['button']['url'])) :
                              $target_8 = ($two_block_section_items_custom['button']['target'] == "_blank") ? "_blank" : "";
                            ?>
                              <a href="<?php echo $two_block_section_items_custom['button']['url']; ?>" target="<?php echo $target_8; ?>" class="btnA bgdark-BDA673-btn text-decoration-none classic font-15 mt-lg-3 mt-4 mx-auto">
                                <?php echo $two_block_section_items_custom['button']['title']; ?>
                              </a>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                <?php
                  endif;
                endforeach; ?>
              </div>
            </div>
          </section>
        <?php endif; ?>
        <?php elseif (get_row_layout() == 'map') :
        $map_iframe = get_sub_field('iframe');
        if (!empty($map_iframe)) :
        ?>

          <section id="map-<?php echo $i; ?>">
            <div class="container">
              <div class="map-section">
                <?php echo $map_iframe; ?>
              </div>
            </div>
          </section>
        <?php endif; ?>

      <?php elseif (get_row_layout() == 'middle_content') :
        $middle_content_heading = get_sub_field('heading');
        $middle_content_content = get_sub_field('content');
        $middle_content_button = get_sub_field('button');
      ?>
        <section class="explore-with-image" id="clearing-<?php echo $i; ?>">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-11 mx-auto text-center px-lg-2">
                <?php if (!empty($middle_content_heading)) : ?>
                  <div class="classic font-50 res-font-40 lh-1 text-2C2924 top-heading-explore"><?php echo $middle_content_heading; ?></div>
                <?php endif; ?>
                <?php if (!empty($middle_content_content)) : ?>
                  <div class="classic font-15 leading-28 text-2C2924 fw-normal dmt-25"><?php echo $middle_content_content; ?></div>
                <?php endif; ?>
                <?php if (!empty($middle_content_button['url'])) :
                  $target_9 = ($middle_content_button['target'] == "_blank") ? "_blank" : "";
                ?>
                  <a href="<?php echo $middle_content_button['url']; ?>" target="<?php echo $target_9; ?>" class="btnA bg-BDA673-btn text-decoration-none classic font-15 mx-auto dmt-25">
                    <?php echo $middle_content_button['title']; ?>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </section>

        <?php elseif (get_row_layout() == 'single_image') :
        $single_image = get_sub_field('image');
        if (!empty($single_image)) :
        ?>
          <section id="single-image-<?php echo $i; ?>">
            <div class="dmt-40 explore-image w-100 tmt-25">
              <img src="<?php echo $single_image['url']; ?>" class="w-100 h-100 object-cover" alt="" />
            </div>
          </section>
        <?php endif; ?>

      <?php elseif (get_row_layout() == 'included') :
        $included_heading = get_sub_field('heading');
        $included_content = get_sub_field('content');
      ?>
        <section class="bg-2D4232 dpt-195 tpt-95 dpb-195 tpb-105 position-relative overflow-hidden" id="included-<?php echo $i; ?>">
          <div class="position-absolute d-lg-block d-none top-0 end-0 w-100 logo-layer-included">
            <div class="container position-relative">
              <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/logo-layer.svg" class="position-absolute top-0 end-0" alt="" />
            </div>
          </div>
          <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/logo-layer-res.svg" class="position-absolute d-lg-none bottom-0  me-n4 mb-n4 end-0" alt="" />

          <div class="container">
            <div class="row">
              <div class="col-lg-6 text-center mx-auto">
                <?php if (!empty($included_heading)) : ?>
                  <div class="classic font-44 text-FFFAF6 res-font-40 lh-1 px-lg-0 px-5"><?php echo $included_heading; ?></div>
                <?php endif; ?>
                <?php if (!empty($included_content)) : ?>

                  <div class="dmt-35 tmt-20 classic font-15 text-FFFAF6 leading-28 px-2">
                    <?php echo $included_content; ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </section>
      <?php elseif (get_row_layout() == 'single_panel') :
        $single_panel_background_image = get_sub_field('background_image');
        $single_panel_heading = get_sub_field('heading');
        $single_panel_button = get_sub_field('button');
      ?>
        <section class="position-relative">
          <div class="container px-p-0">
            <?php if (!empty($single_panel_background_image)) : ?>
              <div class="row">
                <div class="col-lg-12 explore-banner position-relative">
                  <img src="<?php echo $single_panel_background_image['url']; ?>" class="w-100 h-100 object-cover" alt="" />
                  <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/explore-layer.svg" class="position-absolute h-100 top-0 start-0 d-lg-block d-none" alt="" />
                  <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/explore-layer-res.svg" class="position-absolute h-100 top-0 start-0 d-lg-none" alt="" />

                </div>
              </div>
            <?php endif; ?>
          </div>
          <div class="top-left-center w-100 position-absolute">
            <div class="container">
              <div class="col-lg-10 mx-auto d-lg-flex align-items-center justify-content-between">
                <div class="classic font-31 text-FFFAF6 lh-1 text-lg-start text-center"><?php echo $single_panel_heading; ?></div>
                <?php if (!empty($single_panel_button['url'])) :
                  $target_10 = ($single_panel_button['target'] == "_blank") ? "_blank" : "";
                ?>
                  <a href="<?php echo $single_panel_button['url']; ?>" target="<?php echo $target_10; ?>" class="btnA bg-FFFAF6 text-141414 text-decoration-none classic font-15 mx-lg-0 mx-auto dmt-25 tmt-15">
                    <?php echo $single_panel_button['title']; ?>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </section>
        <?php elseif (get_row_layout() == 'page_tabbing_for_section_scroll') :
        $page_tabbing_for_section_scroll_items = get_sub_field('items');
        if (!empty($page_tabbing_for_section_scroll_items)) :
        ?>
          <section class="bg-FFFAF6 position-fixed bottom-0 left-0 w-100 menu-bottom z-2">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <ul class="ps-0 mb-0 d-lg-flex d-none align-items-center justify-content-center menulinks">
                    <?php foreach ($page_tabbing_for_section_scroll_items as $page_tabbing_for_section_scroll_items_custom) :
                      if (!empty($page_tabbing_for_section_scroll_items_custom['heading'])) :
                    ?>
                        <li class="list-none lh-1 transition text-center">
                          <a href="<?php echo $page_tabbing_for_section_scroll_items_custom['id']; ?>" class="text-decoration-none transition classic lh-1 fw-normal font-15 res-font-20 text-capitalize">
                            <?php echo $page_tabbing_for_section_scroll_items_custom['heading']; ?>
                          </a>
                        </li>
                    <?php
                      endif;
                    endforeach; ?>
                  </ul>
                  <div class="d-lg-none text-center">
                    <button class=" p-0 bg-transparent border-0 classic font-17 text-FFFAF6 " id="open-explore">
                      Explore
                      <span class="ms-2">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/drop-down-2.svg" class="rotate-circle-negative-full transition" />
                      </span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <?php endif; ?>
      <?php elseif (get_row_layout() == 'full_video') :
        $full_video_image = get_sub_field('image');
        $full_video_video_options = get_sub_field('video_options');
        $full_video_video = get_sub_field('video');
        $full_video_youtube = get_sub_field('youtube');
        $full_video_vimeo = get_sub_field('vimeo');
      ?>
        <section>
          <div class="container px-p-0">
            <div class="row">
              <div class="col-12 video-img-play position-relative overflow-hidden">
                <?php if (!empty($full_video_image['url'])) : ?>
                  <img src="<?php echo $full_video_image['url']; ?>" class="w-100 h-100 object-cover" />
                  <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/video-layer.svg" class="position-absolute top-0 start-0" />
                <?php endif; ?>
                <?php if (!empty($full_video_video_options == 'video')) :
                  if (!empty($full_video_video['url'])) :
                ?>
                    <video muted loop class="w-100 h-100 object-cover" id="banner-video">
                      <source src="<?php echo $full_video_video['url'] ?>" type="video/mp4">
                    </video>
                    <div class="top-left-center position-absolute w-100 text-center">
                      <button class="btnA bg-BDA673 border-0 text-FFFAF6 text-decoration-none classic font-15 mx-auto" id="play-banner-video">
                        Play Video
                      </button>
                      <button class="btnA bg-BDA673 border-0 text-FFFAF6 text-decoration-none classic font-15 mx-auto d-none" id="pause-banner-video">
                        pause Video
                      </button>
                    </div>
                  <?php
                  endif;
                elseif ($full_video_video_options == 'youtube') :
                  if (!empty($full_video_youtube['url'])) :
                  ?>
                    <iframe class="w-100 h-100 object-cover" src="<?php echo $full_video_youtube['url'] ?>" allow="autoplay; fullscreen"></iframe>
                    <div class="top-left-center position-absolute w-100 text-center">
                      <button class="btnA bg-BDA673 border-0 text-FFFAF6 text-decoration-none classic font-15 mx-auto" id="play-banner-iframe">
                        Play Video
                      </button>
                    </div>
                  <?php
                  endif;
                elseif ($full_video_video_options == 'vimeo') :
                  if (!empty($full_video_vimeo['url'])) :
                  ?>
                    <iframe class="w-100 h-100 object-cover" src="<?php echo $full_video_vimeo['url']; ?>" allow="autoplay; fullscreen"></iframe>
                    <div class="top-left-center position-absolute w-100 text-center">
                      <button class="btnA bg-BDA673 border-0 text-FFFAF6 text-decoration-none classic font-15 mx-auto" id="play-banner-iframe">
                        Play Video
                      </button>
                    </div>
                <?php endif;
                endif;
                ?>
              </div>
            </div>
          </div>
        </section>
        <?php elseif (get_row_layout() == 'farmhouse') :
        $farmhouse_items = get_sub_field('items');
        if (!empty($farmhouse_items)) :
        ?>
          <section class="sleeps-sections">
            <div class="container px-p-0">
              <div class="row mx-n2">
                <?php foreach ($farmhouse_items as $farmhouse_items_custom) :
                  $id = $farmhouse_items_custom->ID;
                  $ntitle = $farmhouse_items_custom->post_title;
                  $content = $farmhouse_items_custom->post_excerpt;
                  $sleeps = get_field('sleeps', $id);
                ?>
                  <div class="col-lg-6 px-2">
                    <div class="single-sleeps w-100 overflow-hidden">
                      <a href="<?php echo get_permalink($id); ?>" class="w-100 h-100 card-hover position-relative d-block">
                        <img src="<?php echo get_the_post_thumbnail_url($id); ?>" class="w-100 h-100 img object-cover position-absolute top-0 start-0" alt="<?php echo $ntitle; ?>" />
                        <div class="bg-2C2924 w-100 h-100 position-absolute top-0 left-0 opacity-75"></div>

                        <div class="position-absolute top-0 dpt-125 tpt-00 left-center text-center col-lg-8 col-10 px-3 mx-auto single-sleeps-content">
                          <div class="d-flex align-items-center justify-content-center">
                            <div class="classic font-20 fw-normal text-FFFAF6 me-2"><?php echo $sleeps; ?></div>
                            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/05/user.svg" />
                          </div>
                          <div class="classic font-40 text-FFFAF6 lh-1 mt-4"><?php echo $ntitle; ?></div>
                          <div class="classic font-15 fw-normal text-FFFAF6 leading-26 mt-3"><?php echo $content; ?></div>

                          <button class="btnA border-0 p-0 bg-8B6E3D text-center text-FFFAF6 font-15 classic mx-auto dmt-30 tmt-20 d-block">
                            Take A Look Around
                          </button>
                        </div>
                      </a>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </section>
        <?php endif; ?>
      <?php elseif (get_row_layout() == 'left_right_image_content_8_4') :
        $left_right_image_content_8_4_sleep = get_sub_field('sleep');
        $left_right_image_content_8_4_heading = get_sub_field('heading');
        $left_right_image_content_8_4_content = get_sub_field('content');
        $left_right_image_content_8_4_button = get_sub_field('button');
        $left_right_image_content_8_4_images = get_sub_field('images');
      ?>
        <section class="image-content overflow-hidden  position-relative bgdarkgeen-content-img tpt-70" id="overview">
          <div class="container px-p-0">
            <div class="row ">
              <div class="col-lg-6 pe-lg-5 details-content d-flex flex-column justify-content-center">
                <div class="me-lg-5 px-p-p">
                  <div class="classic fw-normal font-20 text-FFFAF6 d-flex align-items-center dmb-30">
                    <?php if (!empty($left_right_image_content_8_4_sleep['text'])) : ?>
                      <span><?php echo $left_right_image_content_8_4_sleep['text']; ?></span>
                    <?php endif; ?>
                    <?php if (!empty($left_right_image_content_8_4_sleep['icon']['url'])) : ?>
                      <span><img src="<?php echo $left_right_image_content_8_4_sleep['icon']['url']; ?>" class="ms-2" alt="" /></span>
                    <?php endif; ?>
                  </div>
                  <?php if (!empty($left_right_image_content_8_4_heading)) : ?>
                    <div class="text classic fw-normal font-50 lh-1 leading-56 pe-lg-4 res-font-45 col-9"><?php echo $left_right_image_content_8_4_heading; ?></div>
                  <?php endif; ?>
                  <?php if (!empty($left_right_image_content_8_4_content)) : ?>
                    <div class="text classic fw-normal font-15 leading-26 dmt-40 tmt-25"><?php echo $left_right_image_content_8_4_content; ?></div>
                  <?php endif; ?>
                </div>
                <?php if (!empty($left_right_image_content_8_4_button['url'])) :
                  $target_11 = ($left_right_image_content_8_4_button['target'] == "_blank") ? "_blank" : "";
                ?>
                  <div class="btns-row d-lg-flex align-items-center dmt-35 tmt-30 px-p-p">
                    <a href="<?php echo $left_right_image_content_8_4_button['url']; ?>" target="<?php echo $target_11; ?>" class="classic font-15 btnA text-capitalize text-decoration-none dmb-10">
                      <?php echo $left_right_image_content_8_4_button['title']; ?>
                    </a>
                  </div>
                <?php endif; ?>
              </div>
              <?php if (!empty($left_right_image_content_8_4_images)) : ?>
                <div class="col-lg-4 h-100 tmt-40  half-image">
                  <div class="content-image-small position-absolute p-relative end-0 top-0 h-100">
                    <?php foreach ($left_right_image_content_8_4_images as $left_right_image_content_8_4_images_custom) :
                      if (!empty($left_right_image_content_8_4_images_custom['image']['url'])) :
                    ?>
                        <div>
                          <img src="<?php echo $left_right_image_content_8_4_images_custom['image']['url'] ?>" class="w-100 h-100 object-cover" alt="" />
                        </div>
                    <?php
                      endif;
                    endforeach; ?>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </section>
        <?php elseif (get_row_layout() == 'gallery') :
        $gallery_heading  = get_sub_field('heading');
        $args_gallery = array(
          'taxonomy' => 'gallery-type',
          'orderby' => 'name',
          'order'   => 'ASC',
          'hide_empty' => 1
        );

        $args_gallery_main = get_categories($args_gallery);

        $args_cat = [
          'post_type' => 'gallery',
          'posts_per_page' => -1,
          'orderby' => 'date',
          'order' => 'ASC'
        ];

        if (isset($_GET['gallery_main']) && !empty($_GET['gallery_main']) && $_GET['gallery_main'] != 'all') {

          $tax_query = array(
            array(
              'taxonomy' => 'gallery-type',
              'field' => 'slug',
              'terms' => explode(',', $_GET['gallery_main']),
            ),
          );
          $args_cat['tax_query'] = $tax_query;
        }

        $master = new WP_Query($args_cat);
        if ($master->have_posts()) :
        ?>
          <section class="gallery-section">
            <div class="container px-p-0">
              <?php if (!empty($gallery_heading)) : ?>
                <div class="font-60 leading-84 classic text-center tmb-45 dmb-60"><?php echo $gallery_heading; ?></div>
              <?php endif; ?>
              <div class="activity-category d-flex align-items-center overflow-x-auto pe-lg-0 tmb-25 dmb-5">
                <button data-filter="all" class="activity-button font-12 leading-16 spacing-1_2 classic text-uppercase bg-EBEBEB text-141414 px-3 border-0 text-nowrap mx-2 active">
                  View all
                </button>
                <?php foreach ($args_gallery_main as $cat) : ?>
                  <button data-filter="<?php echo $cat->slug; ?>" class="activity-button font-12 leading-16 spacing-1_2 classic text-uppercase bg-EBEBEB text-141414 px-3 border-0 text-nowrap mx-2">
                    <?php echo $cat->name; ?>
                  </button>
                <?php endforeach; ?>
              </div>
              <div class="filter-activity d-flex flex-wrap px-p-p tmb-50">
                <?php
                while ($master->have_posts()) : $master->the_post();
                  $id       = get_the_ID();
                  $ntitle   = get_the_title();
                ?>
                  <a data-bs-toggle="modal" data-bs-target="#galleryImage" class="filter-img px-1 px-lg-2 mt-2 mt-lg-3 all filter-1">
                    <img src="<?php echo get_the_post_thumbnail_url($id); ?>" alt="" class="w-100 h-100 object-cover">
                  </a>
                <?php endwhile;
                ?>

                <div class="modal galleryModal fade" id="galleryImage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="galleryImageLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <button type="button" class="close-icon mmb-175 tmb-50 d-lg-none d-inline-flex align-items-center justify-content-end border-0 bg-transparent" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21.952" height="21.953" viewBox="0 0 21.952 21.953">
                          <path id="noun_Close_961416" d="M12.483,10.976l9.47,9.47-1.507,1.507-9.47-9.47-9.47,9.47L0,20.446l9.47-9.47L0,1.507,1.507,0l9.47,9.47L20.446,0l1.507,1.507Z" fill="#fff" />
                        </svg>
                      </button>
                      <div class="modal-body">
                        <button type="button" class="position-absolute top-0 end-0 border-0 bg-transparent z-3 d-flex justify-content-end close-icon d-lg-block d-none" data-bs-dismiss="modal" aria-label="Close">
                          <svg xmlns="http://www.w3.org/2000/svg" width="21.952" height="21.953" viewBox="0 0 21.952 21.953">
                            <path id="noun_Close_961416" d="M12.483,10.976l9.47,9.47-1.507,1.507-9.47-9.47-9.47,9.47L0,20.446l9.47-9.47L0,1.507,1.507,0l9.47,9.47L20.446,0l1.507,1.507Z" fill="#fff" />
                          </svg>
                        </button>
                        <div id="carouselExampleFade" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel">
                          <div class="carousel-inner">
                            <?php
                            $i = 1;
                            while ($master->have_posts()) : $master->the_post();

                              $id       = get_the_ID();
                              $ntitle   = get_the_title();
                              $clss = ($i == 1) ? "active" : "";
                            ?>
                              <div class="carousel-item h-100 <?php echo $clss; ?>">
                                <img src="<?php echo get_the_post_thumbnail_url($id); ?>" alt="" class="w-100 h-100 object-cover">
                              </div>
                            <?php
                              $i++;
                            endwhile;
                            ?>
                          </div>
                          <div class="carousel-arrows w-100 position-absolute bottom-0 z-3 d-inline-flex justify-content-center tpt-35 dpb-45 tpb-0 p-initial">
                            <button class="carousel-control-prev carousel-arrow position-initial mx-1" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>
                            <button class="carousel-control-next carousel-arrow position-initial mx-1" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </section>


        <?php endif;
        wp_reset_postdata();
        ?>
      <?php elseif (get_row_layout() == 'spacing') :
        $desktop = get_sub_field('desktop');
        $tablet = get_sub_field('tablet');
        $mobile = get_sub_field('mobile');

        $desktop_mb = $desktop['margin_bottom'];
        $desktop_mb_main = (!empty($desktop['margin_bottom'])) ? " dpb-" : "";
        $tablet_mb = $tablet['margin_bottom'];
        $tablet_mb_main = (!empty($tablet['margin_bottom'])) ? " tpb-" : "";
        $mobile_mb = $mobile['margin_bottom'];
        $mobile_mb_main = (!empty($mobile['margin_bottom'])) ? " mpb-" : "";
      ?>
        <div class="spacing <?php echo $desktop_mb_main;
                            echo $desktop_mb;
                            echo $tablet_mb_main;
                            echo $tablet_mb;
                            echo $mobile_mb_main;
                            echo $mobile_mb; ?>"></div>
  <?php
      endif;
    endwhile;
  endif;
  ?>