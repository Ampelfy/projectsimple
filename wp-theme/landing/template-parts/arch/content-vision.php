<div class="under-top-section">
  <div class="page-container">
    <?php if( get_field('vision_s2_title')) { ?>
      <h2 class="ut__title  title_bg_letter c-light-green">
        <?php the_field('vision_s2_title'); ?>
      </h2>
    <?php } ?>

    <?php if( have_rows("vision_s2_infos") ): ?>
      <div class="ut_blocks_wrapper">
        <?php $i=1; ?>
        <?php while( have_rows('vision_s2_infos') ): the_row(); ?>
            <div class="ut_block  <?= ($i % 2 == 0) ? ('even' . ' bl' . $i) : ('odd' . ' bl' .$i) ?>">
              <?php the_sub_field('vision_s2_info');?>
            </div>
          <?php $i++; ?>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</div>


<div class="wide-page-container">
<div class="vision-content  page-container">
  <?php if( have_rows('vision_s_gw') ):

  // Loop through rows.
  while ( have_rows('vision_s_gw') ) : the_row();

  // Case section Green
  if( get_row_layout() == 'vision_s_green' ): ?>
    <div class="vision-row row-green">
      <?php if( have_rows("s_green_slider") ): ?>
        <div class="vision-slider_wrapper">
          <div class="vision-slider">
            <?php while( have_rows('s_green_slider') ): the_row(); ?>
              <div class="vision-slide" style="background-image: url(<?php the_sub_field('is_g_image'); ?>)">
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      <?php endif; ?>
      <div class="vision_info">
        <?php if( get_sub_field('s_green_title')) { ?>
          <h2 class="v__title  title_bg_letter c-green2">
            <?php the_sub_field('s_green_title'); ?>
          </h2>
        <?php } ?>
        <?php if( get_sub_field('s_green_txt')) { ?>
          <div class="v__txt  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <?php the_sub_field('s_green_txt'); ?>
          </div>
        <?php } ?>
      </div>
    </div>

  <?// Case section White
  elseif( get_row_layout() == 'vision_s_white' ): ?>
    <div class="vision-row row-white">
      <?php if( have_rows("s_white_slider") ): ?>
        <div class="vision-slider_wrapper">
          <div class="vision-slider">
            <?php while( have_rows('s_white_slider') ): the_row(); ?>
              <div class="vision-slide" style="background-image: url(<?php the_sub_field('is_w_image'); ?>)">
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      <?php endif; ?>
      <div class="vision_info">
        <?php if( get_sub_field('s_white_title')) { ?>
          <h2 class="v__title  title_bg_letter c-light-pink">
            <?php the_sub_field('s_white_title'); ?>
          </h2>
        <?php } ?>
        <?php if( get_sub_field('s_white_txt')) { ?>
          <div class="v__txt  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <?php the_sub_field('s_white_txt'); ?>
          </div>
        <?php } ?>
      </div>
    </div>

  <?php endif;

  // End loop.
  endwhile;

  // No value.
  else :
  // Do something...
  endif; ?>
</div>
</div>



