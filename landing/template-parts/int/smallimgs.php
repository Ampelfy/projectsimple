<div class="small_width_block">
  <div class="block__wrapper">
    <?php if( have_rows("small_width_images") ): ?>
    <div class="images-list">
      <?php while( have_rows('small_width_images') ): the_row(); ?>
        <?php if(get_sub_field('block_sm_image')) {
          $small_img1 = get_sub_field('block_sm_image'); ?>
          <div class="small__img" style="background-image: url(<?php echo $small_img1; ?>)"></div>
        <?php } ?>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
</div>
