<?php if( get_field('page_top_img')) { ?>
<div class="page-banner__wrapper">
  <div class="bg__img" style="background-image: url(<?php the_field('page_top_img');?>)">
  </div>
</div>
<?php } else { ?>
<div class="page-banner__wrapper">
  <div class="bg__color">
  </div>
</div>
<?php } ?>
