<div class="tabs__wrapper">

  <?php if( get_field('home_tabs_maintitle') || get_field('home_tabs_maintext')) { ?>
    <div class="tabs_top_wrapper">
      <div class="page-container">
        <div class="tabs_top">
          <div class="tabs_top__title wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
            <h2><?php the_field('home_tabs_maintitle') ?></h2>
          </div>

          <?php if( get_field('home_tabs_maintext')) { ?>
            <div class="under_tabs_info_text wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.7s">
              <?php the_field('home_tabs_maintext') ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  <?php } ?>

  <div class="page-container">
    <?php if( have_rows("home_tabs_items") ): ?>
    <div class="tabs-title_wrapper">
      <?php while( have_rows('home_tabs_items') ): the_row(); ?>


          <div class="tab-title  wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.5s">
            <?php $iconService = get_sub_field('tab_image');?>
            <?php $iconServiceA = get_sub_field('tab_image_active');?>
            <?php if($iconService || $iconServiceA) { ?>
              <div class="tab-title__icon">
                <img src="<?php echo $iconService; ?>" alt="service icon" class="img-tab"/>
                <img src="<?php echo $iconServiceA; ?>" alt="service icon" class="img-tab_active"/>
              </div>
            <?php } ?>
          </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>



    <?php if( have_rows("home_tabs_items") ): ?>

    <?php while( have_rows('home_tabs_items') ): the_row(); ?>

    <div class="tab-content_wrapper tab-content_decktop  index-content">

      <div class="tab-content ">
        <div class="tab-content_description">
          <?php if( get_sub_field('tab_txt')) { ?>
            <div class="tab__text">
              <?php the_sub_field('tab_txt'); ?>
            </div>
          <?php } ?>
          <?php if( get_field('home_tabs_btn_text')) { ?>
            <div class="tab__btn">
              <a href="<?php the_field('home_tabs_btn_link'); ?>" class="btn btn-white"><?php the_field('home_tabs_btn_text'); ?></a>
            </div>
          <?php } ?>
        </div>
      </div>

    </div>
    <?php endwhile; ?>

    <?php endif; ?>
  </div>
</div>