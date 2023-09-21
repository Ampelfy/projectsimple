<div class="home-s3__wrapper">
  <div class="page-container">

    <div class="contents3_wrapper">
      <?php if( get_field('home_s3_image')) { ?>
      <div class="bg__img" style="background-image: url(<?php the_field('home_s3_image');?>)">
      </div>
      <?php } ?>

      <div class="content-info">
        <?php if( get_field('home_s3_heading')) { ?>
          <h2 class="h2_title   wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <?php the_field('home_s3_heading'); ?>
          </h2>
        <?php } ?>

        <?php if( get_field('home_s3_txt')) { ?>
          <div class="info_text   wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <?php the_field('home_s3_txt'); ?>
          </div>
        <?php } ?>


        <?php if( get_field('home_s3_btn_text')) { ?>
          <a href="<?php the_field('home_s2_btn_link'); ?>" class="btn">
            <?php the_field('home_s3_btn_text');?>
          </a>
        <?php } ?>
      </div>
    </div>

  </div>
</div>
