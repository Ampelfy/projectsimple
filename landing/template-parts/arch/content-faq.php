<div class="faq_section__wrapper">
  <?php if( get_field('web_faq_title')) { ?>
    <h2 class="faq_title  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
      <?php the_field('web_faq_title'); ?>
    </h2>
  <?php } ?>


  <div class="faq_item__wrapper">
    <?php if( have_rows('web_faq_items') ):  ?>
      <?php while( have_rows('web_faq_items') ): the_row(); ?>
        <div class="faq_item   wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0.5s">
          <?php if( get_sub_field('web_faq_question')) { ?>
            <div class="faq_item__question">
              <?php the_sub_field('web_faq_question') ?>

              <span class="faq-icon_wrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-arrow.png" alt="expand" class="faq_icon-open"/>
              </span>
            </div>
          <?php } ?>

          <?php if( get_sub_field('web_faq_answer')) { ?>
            <div class="faq_item__answer">
              <?php the_sub_field('web_faq_answer') ?>
            </div>
          <?php } ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>