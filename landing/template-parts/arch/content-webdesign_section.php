<div class="webdesign_content">
  <?php if( get_field('web_txt')) { ?>
    <div class="info_text  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
      <?php the_field('web_txt'); ?>
    </div>
  <?php } ?>

  <?php if( get_field('web_img')) { ?>
    <div class="info_img  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.5s"">
      <img src="<?php the_field('web_img'); ?>" alt="image">
    </div>
  <?php } ?>
</div>
