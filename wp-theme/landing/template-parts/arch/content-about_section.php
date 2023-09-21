<div class="home-about__wrapper page-container">

  <div class="content-info_wrapper">

    <div class="content-info">
      <?php if( get_field('home_about_subtitle')) { ?>
        <div class="content__sub-title   wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.5s">
          <?php the_field('home_about_subtitle'); ?>
        </div>
      <?php } ?>
      <?php if( get_field('home_about_title')) { ?>
        <h2 class="h2_title_Marcel content__title   wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.5s">
          <?php the_field('home_about_title'); ?>
        </h2>
      <?php } ?>

      <?php if( get_field('home_about_text')) { ?>
        <div class="content__text   wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.6s">
          <?php the_field('home_about_text'); ?>
        </div>
      <?php } ?>z
    </div>


    <?php if( have_rows('home_s2_imgs') ):  ?>
      <div class="content-slider_wrapper">
        <div class="section-slider">
          <?php while( have_rows('home_s2_imgs') ): the_row(); ?>
            <?php $imgS1 = get_sub_field('home_s2_img'); ?>
            <?php if( $imgS1 ) { ?>
              <div class="slide_img" style="background-image:url(<?php echo $imgS1;?>)"></div>
            <?php }; ?>
          <?php endwhile; ?>
        </div>
      </div>
    <?php endif; ?>

  </div>

</div>
