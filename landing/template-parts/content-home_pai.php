<div class="home-s2__wrapper">
  <div class="page-container">
    <?php if( get_field('spai_heading')) { ?>
      <h2 class="s2_heading s2_heading-color"><?php the_field('spai_heading'); ?></h2>
    <?php } ?>

    <?php if( get_field('spai_txt')) { ?>
      <div class="s2_text"><?php the_field('spai_txt'); ?></div>
    <?php } ?>

    <div class="s2_list__wrapper">
      <?php if( have_rows('spai_blocks_list') ):  ?>
        <?php while( have_rows('spai_blocks_list') ): the_row(); ?>
          <div class="list_item">
            <?php if( get_sub_field('bl_heading')) { ?>
              <div class="item__mark" style="background-color: <?php the_sub_field('bl_color_mark') ?>;"></div>
              <h4 class="item__title"><?php the_sub_field('bl_heading') ?></h4>
              <?php if( get_sub_field('bl_text')) { ?>
                <div class="item__text">
                  <?php the_sub_field('bl_text') ?>
                </div>
              <?php } ?>
            <?php } ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
