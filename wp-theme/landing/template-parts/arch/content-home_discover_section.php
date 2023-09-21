<div class="home_discover__wrapper">
  <?php if(get_field('home_discover_title')) {?>
    <h2 class="hb__title  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
      <?php the_field('home_discover_title'); ?>
    </h2>
  <?php } ?>

  <?php if(get_field('home_discover_info')) {?>
    <div class="hb__text  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
      <?php the_field('home_discover_info'); ?>
    </div>
  <?php } ?>

  <?php if(get_field('home_discover_btn_txt')) {?>
    <div class="hb__btn  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.6s">
      <a href="<?php the_field('home_discover_btn_link'); ?>" class="btn">
        <?php the_field('home_discover_btn_txt'); ?>
      </a>
    </div>
  <?php } ?>

</div>

