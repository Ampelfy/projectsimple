<div class="wide-page-container">
  <div class="support-top__wrapper  page-container">

    <div class="support-top_info">
      <?php if( get_field('support_s1_title')) { ?>
        <h2 class="support-top__title  title_bg_letter c-pink">
          <?php the_field('support_s1_title'); ?>
        </h2>
      <?php } ?>
      <?php if( get_field('support_s1_txt')) { ?>
        <div class="support-top__txt  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <?php the_field('support_s1_txt'); ?>
        </div>
      <?php } ?>
    </div>


    <?php if( have_rows("support_s1_slider") ): ?>
      <div class="support-top-slider_wrapper">
        <div class="support-top-slider">
          <?php while( have_rows('support_s1_slider') ): the_row(); ?>
              <div class="support-top-slide" style="background-image: url(<?php the_sub_field('s1_slider_img'); ?>)">
              </div>
          <?php endwhile; ?>
        </div>
      </div>
    <?php endif; ?>

  </div>
</div>