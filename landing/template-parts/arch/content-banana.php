<div class="page-container">
  <div class="banana-section__wrapper">
    <?php if( get_field('banana_text_1')) { ?>
      <div class="banana-text text_1  wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="0.5s">
        <?php the_field('banana_text_1'); ?>
      </div>
    <?php } ?>
    <?php if( get_field('banana_bubble_text')) { ?>
      <div class="banana-bubble_text  wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="0.6s">
        <span><?php the_field('banana_bubble_text'); ?></span>
      </div>
    <?php } ?>
    <?php if( get_field('banana_text_2')) { ?>
      <div class="banana-text text_2  wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.6s">
        <?php the_field('banana_text_2'); ?>
      </div>
    <?php } ?>

    <?php $imageBanana = get_field('banana_img');?>
    <?php if($imageBanana) { ?>
      <img src="<?php echo $imageBanana; ?>" alt="team" class="banana_image__wrapper"/>
    <?php } ?>

    <?php if( get_field('banana_text_3')) { ?>
      <div class="banana-text text_3  wow fadeInRight" data-wow-duration="1.2s" data-wow-delay="0.7s">
        <?php the_field('banana_text_3'); ?>
      </div>
    <?php } ?>
    <?php if( get_field('banana_text_4')) { ?>
      <div class="banana-text text_4  wow fadeInRight" data-wow-duration="1.2s" data-wow-delay="0.7s">
        <?php the_field('banana_text_4'); ?>
      </div>
    <?php } ?>
  </div>
</div>