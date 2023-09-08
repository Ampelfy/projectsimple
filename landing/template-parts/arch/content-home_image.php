<?php if(get_field('hp_main_image')) {?>
<div class="home_img__wrapper">
  <div class="bg__img" style="background-image: url(<?php the_field('hp_main_image');?>)">
  </div>
</div>
<?php } ?>