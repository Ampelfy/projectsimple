<div class="graphic_section__wrapper page-container">

  <div class="content-info_wrapper">

    <div class="content-info">
      <?php if( get_field('home_s1_subtitle')) { ?>
        <div class="content__sub-title   wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.5s">
          <?php the_field('home_s1_subtitle'); ?>
        </div>
      <?php } ?>
      <?php if( get_field('home_s1_title')) { ?>
        <h2 class="h2_title_Marcel content__title   wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.5s">
          <?php the_field('home_s1_title'); ?>
        </h2>
      <?php } ?>

      <?php if( get_field('home_s1_text')) { ?>
        <div class="content__text   wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.6s">
          <?php the_field('home_s1_text'); ?>
        </div>
      <?php } ?>

      <div class="content__btns">
        <?php if( get_field('home_s1_text_btn1')) { ?>
          <a href="<?php the_field('home_s1_link_btn1'); ?>" class="btn btn-black-border">
            <?php the_field('home_s1_text_btn1');?>
          </a>
        <?php } ?>
        <?php if( get_field('home_s1_text_btn2')) { ?>
          <a href="<?php the_field('home_s1_link_btn2'); ?>" class="btn btn-black-border">
            <?php the_field('home_s1_text_btn2');?>
          </a>
        <?php } ?>
      </div>
      <?php if( get_field('home_s1_link_contact')) { ?>
        <a href="<?php the_field('home_s1_link_contact'); ?>" class="content__contact-link">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-arrow.png" alt="arrow">
          CONTACTEER ONS
        </a>
      <?php } ?>
    </div>


    <?php if( have_rows('home_s1_imgs') ):  ?>
    <div class="content-slider_wrapper">
      <div class="section-slider">
        <?php while( have_rows('home_s1_imgs') ): the_row(); ?>
          <?php $imgS1 = get_sub_field('home_s1_img'); ?>
          <?php if( $imgS1 ) { ?>
            <div class="slide_img" style="background-image:url(<?php echo $imgS1;?>)"></div>
          <?php }; ?>
        <?php endwhile; ?>
      </div>
    </div>
    <?php endif; ?>

  </div>

</div>

