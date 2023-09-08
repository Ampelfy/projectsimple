<div class="home-s4__wrapper">
  <div class="page-container">
    <?php if( get_field('home_s4_heading')) { ?>
      <h2 class="h2_title   wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <?php the_field('home_s4_heading'); ?>
      </h2>
    <?php } ?>
    <?php if( get_field('home_s4_txt')) { ?>
      <div class="info_text   wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
        <?php the_field('home_s4_txt'); ?>
      </div>
    <?php } ?>


    <?php if( get_field('home_s4_btn_text')) { ?>
      <a href="<?php the_field('home_s4_btn_link'); ?>" class="btn">
        <?php the_field('home_s4_btn_text');?>
      </a>
    <?php } ?>

  </div>
</div>
