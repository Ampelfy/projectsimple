<div class="wide-page-container">
  <div class="vision-top__wrapper  page-container">

    <div class="vision-top_info">
      <?php if( get_field('vision_s1_txt')) { ?>
        <div class="vision-top__txt  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
          <?php the_field('vision_s1_txt'); ?>
        </div>
      <?php } ?>
    </div>


    <?php if( have_rows("vision_s1_slider") ): ?>
      <div class="vision-top-slider_wrapper">
        <div class="vision-top-slider">
          <?php while( have_rows('vision_s1_slider') ): the_row(); ?>
            <div class="vision-top-slide" style="background-image: url(<?php the_sub_field('s1_slider_img'); ?>)">
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    <?php endif; ?>

  </div>
</div>