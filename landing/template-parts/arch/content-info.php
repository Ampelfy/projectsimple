<div class="page-container">
<div class="info_block_section__wrapper">


  <?php if( get_field('info_block_title')) { ?>
    <h2 class="info__title hide-desktop">
      <?php the_field('info_block_title'); ?>
    </h2>
  <?php } ?>

  <?php if( get_field('info_block_img')) { ?>
    <div class="info_image__wrapper">
      <div class="info__image" style="background-image: url(<?php the_field('info_block_img') ?>)">

        <?php if( get_field('info_block_img_txt1') || get_field('info_block_img_txt2')) { ?>
          <div class="info__image-icon">
            <?php if( get_field('info_block_img_txt1')) { ?>
              <span class="ic-txt"><?php the_field('info_block_img_txt1'); ?></span>
            <?php } ?>
            <?php if( get_field('info_block_img_icon')) { ?>
              <span class="ic-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="icon"/></span>
            <?php } ?>
            <?php if( get_field('info_block_img_txt2')) { ?>
              <span class="ic-txt"><?php the_field('info_block_img_txt2'); ?></span>
            <?php } ?>
          </div>
          <?php } ?>

      </div>
    </div>
  <?php } ?>


  <div class="info_block">
    <?php if( get_field('info_block_title')) { ?>
      <h2 class="info__title  hide-mobile">
        <?php the_field('info_block_title'); ?>
      </h2>
    <?php } ?>

    <?php if( get_field('info_block_text')) { ?>
      <div class="info__text">
        <?php the_field('info_block_text'); ?>
      </div>
    <?php } ?>
  </div>


</div>
</div>