<div class="resellers-list__wrapper">
  <?php if( have_rows('resellers_list') ): ?>
    <div class="resellers-list">
      <?php while( have_rows('resellers_list') ): the_row(); ?>

        <div class="reseller-item">
          <?php if(get_sub_field('reseller_item_title')) { ?>
            <div class="h1_title  wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
              <?php the_sub_field('reseller_item_title'); ?>
            </div>
          <?php } ?>

          <?php if(get_sub_field('reseller_item_data')) { ?>
            <div class="item__content  wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
              <?php the_sub_field('reseller_item_data'); ?>
            </div>
          <?php } ?>
        </div>

      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div>
