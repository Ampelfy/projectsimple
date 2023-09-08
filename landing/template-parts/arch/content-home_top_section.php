<?php if(get_field('home_top_image') || get_the_content()) { ?>
  <div class="home_top">

    <?php if(get_the_content()){ ?>
      <div class="home-top_video">
        <?php the_content(); ?>
      </div>
    <?php } else { ?>
      <div class="bg__img" style="background-image: url(<?php the_field('home_top_image'); ?>)">
      </div>
    <?php } ?>


    <?php if(get_field('home_top_text') || get_field('home_top_title1')) { ?>
      <div class="top-section_content_wrapper  page-container">
        <div class="top-section_content  wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.6s">
          <div class="top__title_wrapper">
            <div class="top__title"><?php the_field('home_top_title1'); ?></div>
            <?php if( have_rows("home_top_title2_var") ): ?>
              <div class="top__title  top__title2-slider">
                <?php while( have_rows('home_top_title2_var') ): the_row(); ?>
                  <?php if( get_sub_field('top_title2_option')) { ?>
                    <div class="top__slide">
                      <?php the_sub_field('top_title2_option'); ?>
                    </div>
                  <?php } ?>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </div>

          <div class="top__text"><?php the_field('home_top_text'); ?></div>

          <div class="top__btns">
            <?php if( get_field('home_top_text_btn1')) { ?>
              <a href="<?php the_field('home_top_link_btn1'); ?>" class="btn">
                <?php the_field('home_top_text_btn1');?>
              </a>
            <?php } ?>
            <?php if( get_field('home_top_text_btn2')) { ?>
              <a href="<?php the_field('home_top_link_btn2'); ?>" class="btn">
                <?php the_field('home_top_text_btn2');?>
              </a>
            <?php } ?>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
<?php } ?>



