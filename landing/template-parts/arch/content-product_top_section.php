<div class="page-top__wrapper product_top">
  <?php if(get_field('product_top_image')) {?>
    <div class="page-top__img">
      <div class="bg__img" style="background-image: url(<?php the_field('product_top_image');?>)">
      </div>
    </div>
  <?php } ?>
</div>