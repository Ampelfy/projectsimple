<?php
  $args = array(
      'post_type' => 'contact',
      'post_status' => 'publish'
  );

  $loopContact = new WP_Query( $args );

  if($loopContact) {
  while ( $loopContact->have_posts() ) : $loopContact->the_post(); ?>
  <div class="contact-section__wrapper  page-container">
    <?php if( get_field('contact_title')) { ?>
      <h2 class="h2_title  wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.5s"><?php the_field('contact_title'); ?></h2>
    <?php } ?>

    <div class="contact_info__wrapper">
      <div class="contact_info  wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.5s">
        <?php if( get_field('contact_bubble_text')) { ?>
          <div class="contact_bubble-text">
            <?php the_field('contact_bubble_text'); ?>
          </div>
        <?php } ?>


          <div class="contact_info__text">
            <?php if( get_field('contact_info')) { ?>
            <div class="text1_part1"><?php the_field('contact_info'); ?></div>
            <div class="text1_part2"><?php the_field('contact_info2'); ?></div>
            <?php } ?>

            <?php get_template_part("template-parts/content", "social_links"); ?>
          </div>



      </div>

      <div class="contact-form__wrapper  wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
        <?php
        if( get_field('contact_form7')) {
          $contact_form_7 = get_field('contact_form7');?>
          <div class="contact-form">
            <?php echo do_shortcode( $contact_form_7); ?>
          </div>
        <?php } ?>
      </div>
    </div>

    <?php $imageContact = get_field('contact_image');?>
    <?php if( $imageContact) { ?>
      <img src="<?php echo $imageContact; ?>" alt="image" class="contact_image  wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="0.7s"/>
    <?php } ?>
  </div>
  <?php endwhile;
  } ?>
<?php $loopContact->wp_reset_postdata(); ?>