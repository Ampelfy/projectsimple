<?php if( have_rows("ssl_slides") ): ?>
      <div class="pr-slider_wrapper">
        <div class="pr-slider center">
          <?php while( have_rows('ssl_slides') ): the_row(); ?>
          
            <?php if( have_rows("slide_item") ): ?>
            <?php while( have_rows('slide_item') ): the_row(); ?>
            
            <div class="slide">
              <div class="cl cl-blue">
                <div class="sl__heading"><?php the_sub_field('slide_text');?></div>
				 <?php $image = get_sub_field('slide_img');
                 if( !empty( $image ) ): ?>
    				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				  <?php endif; ?>
                <!-- <div class="sl__img" style="background-image: url(<?php the_sub_field('slide_img'); ?>)"></div> -->
              </div>
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
