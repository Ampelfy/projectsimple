<?php if(get_field('home_parallax_img')) {?>
<div class="parallax__wrapper" id="scene">
  <img class="parallax-thumbnail" src="<?php the_field('home_parallax_img');?>" alt="image">
</div>
<?php } ?>