<div class="discover__wrapper">

  <?php $i = 1; ?>
    <?php if( have_rows('discover_items') ): ?>
      <?php while( have_rows('discover_items') ): the_row(); ?>

      <?php
        if( get_row_layout() == 'discover_items4' ):
        ?>


        <?php if( have_rows('discover_items4_item') ): ?>

        <div class="discover-gallery-grid masonry js-masonry js-images-loaded<?php echo $i;?>">
        <?php while( have_rows('discover_items4_item') ): the_row(); ?>

            <div class="gallery-item block4 masonry__item js-masonry-item">
              <?php if(get_sub_field('discover_items4_img')) { ?>
                <img src="<?php the_sub_field('discover_items4_img'); ?>" alt="image" />
              <?php } else { ?>
                <div class="gallery-item_bg"></div>
              <?php } ?>


              <div class="item_info__wrapper" style="background-color: <?php the_sub_field('discover_items4_bg'); ?> ">
                <?php if(get_sub_field('discover_items4_txt')) {?>
                  <div class="item_info">
                    <?php the_sub_field('discover_items4_txt'); ?>
                  </div>
                <?php } ?>

                <?php if(get_sub_field('discover_items4_btn_txt')) {?>
                  <div class="item__btn">
                    <a href="<?php the_sub_field('discover_items4_btn_link'); ?>" class="btn btn-pr">
                      <?php the_sub_field('discover_items4_btn_txt'); ?>
                    </a>
                  </div>
                <?php } ?>
              </div>
            </div>

        <?php endwhile; ?>
        </div>
          <?php $i++;?>
        <?php endif; ?>
          <?php
        // Case:layout.
        elseif( get_row_layout() == 'discover_item1' ):
        // Do something... ?>
         <div class="gallery-item block1">
           <?php if(get_sub_field('discover_item1_img')) { ?>
             <img src="<?php the_sub_field('discover_item1_img'); ?>" alt="image" />
           <?php } else { ?>
              <div class="gallery-item_bg"></div>
           <?php } ?>

            <div class="item_info__wrapper" style="background-color: <?php the_sub_field('discover_item1_bg'); ?> ">
              <?php if(get_sub_field('discover_item1_txt')) {?>
                <div class="item_info">
                  <?php the_sub_field('discover_item1_txt'); ?>
                </div>
              <?php } ?>

              <?php if(get_sub_field('discover_item1_btn_txt')) {?>
                <div class="item__btn">
                  <a href="<?php the_sub_field('discover_item1_btn_link'); ?>" class="btn btn-pr">
                    <?php the_sub_field('discover_item1_btn_txt'); ?>
                  </a>
                </div>
              <?php } ?>
            </div>
          </div>

        <?php endif;
        ?>

      <?php endwhile; ?>
    <?php endif; ?>

</div>



