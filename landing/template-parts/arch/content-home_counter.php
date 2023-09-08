<div class="counter__wrapper">

  <?php if( have_rows("home_count_items") ): ?>
    <div class="page-container">
      <div class="counter_list">
        <?php while( have_rows('home_count_items') ): the_row(); ?>
          <div class="counter_item">
            <?php if(get_sub_field('count_item_image')) { ?>
              <div class="item__img  wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
                <img src="<?php the_sub_field('count_item_image'); ?>" alt="image counter" />
              </div>
            <?php } ?>

            <?php if(get_sub_field('count_item_num')) { ?>
              <div class="item__num">
                <?php the_sub_field('count_item_num'); ?>
              </div>
            <?php } ?>
            <?php if(get_sub_field('count_item_text')) { ?>
              <div class="item__text">
                <?php the_sub_field('count_item_text'); ?>
              </div>
            <?php } ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

</div>