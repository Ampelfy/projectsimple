<div class="instagram-section__wrapper  page-container">
  <?php if(get_field('home_insta_title')) { ?>
    <div class="instagram-info  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
      <div class="instagram-icon_wrapper">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-insta-black.svg" alt="instagram"/>
      </div>
      <div class="instagram-text_wrapper">
        <div class="instagram-text_text"><?php the_field('home_insta_title'); ?></div>
      </div>
    </div>
  <?php } ?>
  <?php if( get_field('home_insta_shortcode')) { ?>
  <div class="instagram-shortcode">
    <?php
    $insta = get_field('home_insta_shortcode');
    echo do_shortcode($insta); ?>
  </div>
  <?php } ?>

  <?php if( get_field('home_insta_btn_text')) { ?>
    <div class="insta__btn">
      <a href="<?php the_field('home_insta_btn_link'); ?>" target="_blank" class="btn"><?php the_field('home_insta_btn_text'); ?></a>
    </div>
  <?php } ?>

</div>