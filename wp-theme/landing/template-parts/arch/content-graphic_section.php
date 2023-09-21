<div class="graphic_content">
  <div class="content_info">
    <?php if( get_field('graphic_img')) { ?>
      <div class="info_img">
        <div class="bg__img" style="background-image: url(<?php the_field('graphic_img'); ?>)">
        </div>
      </div>
    <?php } ?>

    <?php if( get_field('graphic_txt')) { ?>
      <div class="info_text  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.4s">
        <?php the_field('graphic_txt'); ?>
      </div>
    <?php } ?>
  </div>

  <div class="content_info ci-2">
    <?php if( get_field('graphic_txt2')) { ?>
      <div class="info_text  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.4s">
        <?php the_field('graphic_txt2'); ?>
      </div>
    <?php } ?>

    <?php if( get_field('graphic_img2')) { ?>
      <div class="info_img">
        <div class="bg__img" style="background-image: url(<?php the_field('graphic_img2'); ?>)">
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<div class="graphic_list">
  <?php if( get_field('graphic_items2')) { ?>
    <div class="list__items  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.4s">
      <?php the_field('graphic_items2'); ?>
    </div>
  <?php } ?>
</div>





