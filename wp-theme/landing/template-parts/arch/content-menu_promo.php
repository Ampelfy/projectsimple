<div class="menu__wrapper   promo_menu">
  <div class="content_wrapper menu-in page-container">

    <div class="cp-2">
      <?php if( get_field('home_menu_mheading')) { ?>
        <h2 class="h2_title   wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <?php the_field('home_menu_mheading'); ?>
        </h2>
      <?php } ?>

      <?php if( have_rows('all_menu') ):  ?>
      <div class="menu_item_list">
        <?php $i = 1;?>
        <?php while( have_rows('all_menu') ): the_row(); ?>
          <?php if( get_sub_field('am_heading')) { ?>
            <div class="item__heading     wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0.5s" data-attr="item<?php echo $i++; ?>">
              <?php the_sub_field('am_heading') ?>
            </div>
          <?php } ?>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>

      <div class="content-col">
      <?php if( have_rows('all_menu') ):  ?>
        <?php $y = 1;?>
        <?php while( have_rows('all_menu') ): the_row(); ?>
          <div class="menu_item"  data-attr="item<?php echo $y++; ?>">
            <?php if( get_sub_field('am_heading')) { ?>
              <div class="item__heading">
                <?php the_sub_field('am_heading') ?>
              </div>
            <?php } ?>
            <?php if( have_rows('am_items') ):  ?>
            <div class="sub-items">
            <?php while( have_rows('am_items') ): the_row(); ?>
              <div class="item_content">
                <div class="item_info__wrapper">
                  <?php if( get_sub_field('am_item_name')) { ?>
                    <div class="item__name">
                      <?php the_sub_field('am_item_name') ?>
                    </div>
                  <?php } ?>
                  <?php if( get_sub_field('am_item_info')) { ?>
                    <div class="item__info">
                      <?php the_sub_field('am_item_info') ?>
                    </div>
                  <?php } ?>
                </div>

                <?php if( get_sub_field('am_item_price')) { ?>
                  <div class="item__price">
                    <?php the_sub_field('am_item_price') ?>
                  </div>
                <?php } ?>
              </div>
              <?php endwhile; ?>

              <?php if( get_sub_field('am_total_price')) { ?>
                <div class="total_price">
                  <?php the_sub_field('am_total_price'); ?>
                </div>
              <?php } ?>
            </div>
            <?php endif; ?>





            <?php if( get_sub_field('am_bestellen_btn_link')) { ?>
              <div class="btn_m_wrapper">
                <a href="<?php the_sub_field('am_bestellen_btn_link'); ?>" class="btn btn-black" id="orderPromo">
                  bestellen
                </a>
              </div>
            <?php } ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>


      <?php if( get_field('ta_btn_text')) { ?>
        <div class="btn_wrapper">
          <a href="<?php the_field('ta_btn_link'); ?>" class="btn btn-yellow" id="takeAway">
            <?php the_field('ta_btn_text');?>
          </a>
        </div>
      <?php } ?>
    </div>




    <?php if( have_rows('all_menu') ):  ?>
    <?php $z = 1;?>
    <div class="cp-1">
      <?php while( have_rows('all_menu') ): the_row(); ?>


        <?php if( have_rows('am_item_photo_gallery2') ): ?>
          <div class="gallery-item"  data-attr="item<?php echo $z++; ?>">
            <?php while ( have_rows('am_item_photo_gallery2') ) : the_row(); ?>


            <?php
            // Case: empty_block layout.
            if( get_row_layout() == 'empty_block' ): ?>
            <?php if(get_sub_field('ami2_empty')) { ?>
              <div class="gallery__empty"></div>
            <?php } ?>

            <?php // Case: image_block layout.
            elseif( get_row_layout() == 'image_block' ): ?>
            <?php if(get_sub_field('ami2_image')) { ?>
              <div class="gallery__img" style="background-image: url(<?php the_sub_field('ami2_image'); ?>)"></div>
            <?php } ?>

            <?php endif; ?>

            <?php endwhile; ?>
          </div>
         <?php  else : ?>

        <?php endif; ?>

      <?php endwhile; ?>
    </div>
    <?php endif; ?>

  </div>



<!--  2-->
  <div class="content_wrapper content_take-away  page-container">

    <div class="cp-2">

      <div class="take-away-col">
        <?php if( get_sub_field('ta_heading')) { ?>
          <div class="item__heading">
            <?php the_sub_field('ta_heading') ?>
          </div>
        <?php } ?>

        <?php if( get_field('ta_heading')) { ?>
          <div class="item__heading  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <?php the_field('ta_heading') ?>
          </div>
        <?php } ?>

        <?php if( have_rows('take_away_menu') ):  ?>
          <?php $y = 1;?>
          <?php while( have_rows('take_away_menu') ): the_row(); ?>
            <div class="menu_item"  data-attr="item<?php echo $y++; ?>">

              <?php if( have_rows('ta_items') ):  ?>
                <div class="sub-items">
                  <?php while( have_rows('ta_items') ): the_row(); ?>
                    <div class="item_content">
                      <div class="item_info__wrapper">
                        <?php if( get_sub_field('ta_item_name')) { ?>
                          <div class="item__name">
                            <?php the_sub_field('ta_item_name') ?>
                          </div>
                        <?php } ?>
                        <?php if( get_sub_field('ta_item_info')) { ?>
                          <div class="item__info">
                            <?php the_sub_field('ta_item_info') ?>
                          </div>
                        <?php } ?>
                      </div>

                      <?php if( get_sub_field('ta_item_price')) { ?>
                        <div class="item__price">
                          <?php the_sub_field('ta_item_price') ?>
                        </div>
                      <?php } ?>
                    </div>
                  <?php endwhile; ?>

                  <?php if( get_sub_field('ta_total_price')) { ?>
                    <div class="total_price">
                      <?php the_sub_field('ta_total_price'); ?>
                    </div>
                  <?php } ?>
                </div>


                <?php if( get_sub_field('ta_bestellen_btn_link')) { ?>
                  <div class="btn_m_wrapper">
                    <a href="<?php the_sub_field('ta_bestellen_btn_link'); ?>" class="btn btn-black" id="orderPromo">
                      bestellen
                    </a>
                  </div>
                <?php } ?>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>


      <div class="btn_wrapper">
        <a href="#" class="btn btn-yellow" id="backToMenu">
          Back
        </a>
      </div>
    </div>




    <?php if( have_rows('take_away_menu') ):  ?>
      <?php $z = 1;?>
      <div class="cp-1">
        <?php while( have_rows('take_away_menu') ): the_row(); ?>


          <?php if( have_rows('ta_item_photo_gallery2') ): ?>
            <div class="gallery-item"  data-attr="item<?php echo $z++; ?>">
              <?php while ( have_rows('ta_item_photo_gallery2') ) : the_row(); ?>


                <?php
                // Case: empty_block layout.
                if( get_row_layout() == 'empty_block2' ): ?>
                  <?php if(get_sub_field('ta2_empty')) { ?>
                    <div class="gallery__empty"></div>
                  <?php } ?>

                <?php // Case: image_block layout.
                elseif( get_row_layout() == 'image_block2' ): ?>
                  <?php if(get_sub_field('ta2_image')) { ?>
                    <div class="gallery__img" style="background-image: url(<?php the_sub_field('ta2_image'); ?>)"></div>
                  <?php } ?>

                <?php endif; ?>

              <?php endwhile; ?>
            </div>
          <?php  else : ?>

          <?php endif; ?>

        <?php endwhile; ?>
      </div>
    <?php endif; ?>


  </div>
</div>