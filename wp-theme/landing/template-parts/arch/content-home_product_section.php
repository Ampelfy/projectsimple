<div class="shop-gallery">
  <div id="nestedGrid" class="shop-gallery-grid masonry js-masonry js-images-loaded  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">


    <?php if( have_rows('home_discover_images') ): ?>
      <?php while( have_rows('home_discover_images') ): the_row(); ?>
        <div class="gallery-item  masonry__item js-masonry-item">
          <img src="<?php the_sub_field('home_di_img'); ?>" alt="image" />

          <div class="item_info__wrapper">
          <?php if(get_sub_field('home_di_text')) {?>
            <div class="item_info">
              <?php the_sub_field('home_di_text'); ?>
            </div>
          <?php } ?>

          <?php if(get_sub_field('home_di_btn_txt')) {?>
            <div class="item__btn">
              <a href="<?php the_sub_field('home_di_btn_link'); ?>" class="btn btn-pr">
                <?php the_sub_field('home_di_btn_txt'); ?>
              </a>
            </div>
          <?php } ?>
          </div>


        </div>
      <?php endwhile; ?>
    <?php endif; ?>



  </div>
</div>



