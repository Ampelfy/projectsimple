<div class="home_content">
  <?php $img1 = get_field('hp_logo'); ?>
  <?php if( $img1 ) { ?>
    <div class="img-item  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
      <img src="<?php echo $img1; ?>" alt="main image">
    </div>
  <?php }; ?>

  <?php if( get_field('hp_text')) { ?>
    <div class="content__text   wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
      <?php the_field('hp_text'); ?>
    </div>
  <?php } ?>


  <?php if( get_field('hp_cf') ) {
    $cf = get_field('hp_cf');
    ?>
  <div class="cf  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.6s">
    <?php echo do_shortcode($cf); ?>
  </div>
  <?php } ?>


  <?php if( get_field('hp_add_info') ) { ?>
    <div class="add_info  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.6s">
      <?php the_field('hp_add_info'); ?>
    </div>
  <?php } ?>

</div>



