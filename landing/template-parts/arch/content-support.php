<div class="wide-page-container">
<div class="support-content  page-container">
  <?php if( have_rows('sections_2-5') ):

  // Loop through rows.
  while ( have_rows('sections_2-5') ) : the_row();

  // Case section 2
  if( get_row_layout() == 'section_2' ): ?>
    <div class="support-row row2">
      <div class="support_img">
        <div class="bg" style="background-image: url(<?php the_sub_field('support_s2_img');?>)"></div>
      </div>
      <div class="support_info">
        <?php if( get_sub_field('support_s2_title')) { ?>
          <h2 class="s__title  title_bg_letter c-green2">
            <?php the_sub_field('support_s2_title'); ?>
          </h2>
        <?php } ?>
        <?php if( get_sub_field('support_s2_txt')) { ?>
          <div class="s__txt  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <?php the_sub_field('support_s2_txt'); ?>
          </div>
        <?php } ?>
      </div>
    </div>

  <?// Case section 3
  elseif( get_row_layout() == 'section_3' ): ?>
    <div class="support-row row3">
      <div class="support_img">
        <div class="bg" style="background-image: url(<?php the_sub_field('support_s3_img');?>)"></div>
      </div>
      <div class="support_info">
        <?php if( get_sub_field('support_s3_title')) { ?>
          <h2 class="s__title  title_bg_letter c-light-pink">
            <?php the_sub_field('support_s3_title'); ?>
          </h2>
        <?php } ?>
        <?php if( get_sub_field('support_s3_txt')) { ?>
          <div class="s__txt  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <?php the_sub_field('support_s3_txt'); ?>
          </div>
        <?php } ?>
      </div>
    </div>

  <?// Case section 4
  elseif( get_row_layout() == 'section_4' ): ?>
    <div class="support-row row4">
      <div class="support_img">
        <div class="bg" style="background-image: url(<?php the_sub_field('support_s4_img');?>)"></div>
      </div>
      <div class="support_info">
        <?php if( get_sub_field('support_s4_title')) { ?>
          <h2 class="s__title  title_bg_letter c-green2">
            <?php the_sub_field('support_s4_title'); ?>
          </h2>
        <?php } ?>
        <?php if( get_sub_field('support_s4_txt')) { ?>
          <div class="s__txt  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <?php the_sub_field('support_s4_txt'); ?>
          </div>
        <?php } ?>
      </div>
    </div>

  <?// Case section 5
  elseif( get_row_layout() == 'section_5' ): ?>
    <div class="support-row row5">
      <div class="support_img">
        <div class="bg" style="background-image: url(<?php the_sub_field('support_s5_img');?>)"></div>
      </div>
      <div class="support_info">
        <?php if( get_sub_field('support_s5_title')) { ?>
          <h2 class="s__title   title_bg_letter c-red">
            <?php the_sub_field('support_s5_title'); ?>
          </h2>
        <?php } ?>
        <?php if( get_sub_field('support_s5_txt')) { ?>
          <div class="s__txt  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <?php the_sub_field('support_s5_txt'); ?>
          </div>
        <?php } ?>
      </div>
    </div>
  <?php endif;

  // End loop.
  endwhile;
  else :
  endif; ?>
</div>
</div>


<div class="page-container">
  <div class="sponsors-section">
    <?php if( get_field('support_sponsors_title')) { ?>
      <h2 class="sponsors__title  title_bg_letter c-light-pink">
        <?php the_field('support_sponsors_title'); ?>
      </h2>
    <?php } ?>

    <?php if( have_rows("support_sponsors_slider") ): ?>
      <div class="sponsors-slider_wrapper">
        <div class="sponsors-slider">
          <?php while( have_rows('support_sponsors_slider') ): the_row(); ?>
            <div class="ss-slide">
              <img src="<?php the_sub_field('ss_image'); ?>" alt="sponsor">
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>

