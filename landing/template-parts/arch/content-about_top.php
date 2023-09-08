<div class="about-top__wrapper  page-container">

  <div class="about-top_info">
    <?php if( get_field('about_top_title')) { ?>
      <h2 class="about-top__title  title_bg_letter c-dark-green">
        <?php the_field('about_top_title'); ?>
      </h2>
    <?php } ?>

    <?php if( get_field('about_top_txt')) { ?>
      <div class="about-top__txt  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.5s">
        <?php the_field('about_top_txt'); ?>
      </div>
    <?php } ?>
  </div>


  <?php if( have_rows("about_top_infos") ): ?>
    <div class="top-info_wrapper">
      <div class="top-info-blocks">
        <?php while( have_rows('about_top_infos') ): the_row(); ?>
        <div class="top-info-block">
          <?php if( get_sub_field('about_ti_img')) { ?>
            <div class="block__img" style="background-image: url(<?php the_sub_field('about_ti_img'); ?>)">
            </div>
          <?php } ?>
          <div class="block-content">
            <?php if( get_sub_field('about_ti_title')) { ?>
              <div class="block__title  wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0.5s">
                <?php the_sub_field('about_ti_title'); ?>
              </div>
            <?php } ?>
            <?php if( get_sub_field('about_ti_txt')) { ?>
              <div class="block__txt  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.6s">
                <?php the_sub_field('about_ti_txt'); ?>
              </div>
            <?php } ?>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

</div>

