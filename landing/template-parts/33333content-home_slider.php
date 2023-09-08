<?php if( have_rows("ssl_slides") ): ?>
      <div class="pr-slider_wrapper">
        <div class="pr-slider">
          <?php while( have_rows('ssl_slides') ): the_row(); ?>
          
            <?php if( have_rows("slide_item") ): ?>
            <?php while( have_rows('slide_item') ): the_row(); ?>
            
            <div class="slide">
                <div class="sl__heading"><?php the_sub_field('slide_text');?></div>
                <img src="<?php the_sub_field('slide_img'); ?>" alt="">
                <!-- <div class="sl__img" style="background-image: url(<?php the_sub_field('slide_img'); ?>)"></div> -->
            </div>
            
            <?php endwhile; ?>
            <?php endif; ?>

       
            <?php endwhile; ?>
        </div>

        <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
            <span class="slider__label sr-only">
        </div>
      </div>
  <?php endif; ?>
 