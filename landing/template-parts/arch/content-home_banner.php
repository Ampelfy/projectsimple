<div class="home-banner__wrapper">
    <?php if( get_field('home_main_image')) { ?>
    <div class="bg__img" style="background-image: url(<?php the_field('home_main_image');?>)">
    </div>

      <?php if(get_field('home_banner_logo')) { ?>
        <div class="top-section_content_wrapper  page-container">
          <div class="top-section_content  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="<?php the_field('home_banner_logo'); ?>" alt="banner logo">
            <?php if( get_field('home_s3_btn_text')) { ?>
              <a href="<?php the_field('home_logo_btn_link'); ?>" class="btn">
                <?php the_field('home_logo_btn_text');?>
              </a>
            <?php } ?>
          </div>
        </div>
      <?php } ?>


      <?php if( have_rows("banner_promotion") ): ?>
        <?php while( have_rows('banner_promotion') ): the_row(); ?>

          <div class="promo_content">
            <div class="promo_content__info  wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.6s">
              <?php if( get_sub_field('pr_title1')) { ?>
                <div class="promo_heading1"><?php the_sub_field('pr_title1'); ?></div>
              <?php } ?>
              <?php if( get_sub_field('pr_title2')) { ?>
                <div class="promo_text"><?php the_sub_field('pr_title2'); ?></div>
              <?php } ?>
              <?php if( get_sub_field('pr_btn_txt')) { ?>
                <a href="<?php the_sub_field('pr_btn_link'); ?>" class="btn">
                  <?php the_sub_field('pr_btn_txt');?>
                </a>
              <?php } ?>
            </div>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>


    <?php } ?>
</div>
