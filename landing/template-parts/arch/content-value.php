<div class="value_section__wrapper">
<div class="page-container">
  <?php if( get_field('value_title')) { ?>
    <h2 class="value_title">
      <?php the_field('value_title'); ?>
    </h2>
  <?php } ?>



    <?php if( have_rows('value_item') ):  ?>
    <div class="value_items__wrapper">
      <div class="swiper-container value_slider">
      <div class="swiper-wrapper">

        <?php while( have_rows('value_item') ): the_row(); ?>
        <div class="swiper-slide  value_item">

          <?php if( get_sub_field('value_item_image')) { ?>
            <div class="item__img" style="background-image: url(<?php the_sub_field('value_item_image'); ?>)"></div>
          <?php } ?>

            <div class="item_info">
              <?php if( get_sub_field('value_item_title')) { ?>
                <div class="item__title">
                  <?php the_sub_field('value_item_title') ?>
                </div>
              <?php } ?>
              <?php if( get_sub_field('value_item_text')) { ?>
                <div class="item__text">
                  <?php the_sub_field('value_item_text') ?>
                </div>
              <?php } ?>
            </div>

        </div>
        <?php endwhile; ?>

      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
      </div>
    </div>
    <?php endif; ?>


</div>
</div>