<div class="under-top-section">
  <?php if( get_field('about_photos_title')) { ?>
  <div class="page-container">
    <h2 class="ut__title  title_bg_letter c-light-orange">
      <?php the_field('about_photos_title'); ?>
    </h2>
  </div>
  <?php } ?>


  <?php if( have_rows("about_photos") ): ?>
    <div class="ut_images_wrapper">
    <div class="ut_images page-container">
      <?php $i=1; ?>
      <?php while( have_rows('about_photos') ): the_row(); ?>
        <div class="ut__img  uti-<?php echo $i;?>" style="background-image: url(<?php the_sub_field('ap_photo'); ?>)">
          <?php if( get_sub_field('ap_description')) { ?>
            <div class="ut__img-text  wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s"><?php the_sub_field('ap_description'); ?></div>
          <?php } ?>
        </div>
        <?php $i++; ?>
      <?php endwhile; ?>
    </div>
    </div>
  <?php endif; ?>

</div>


<div class="wide-page-container">
<div class="about-content  page-container">
  <?php if( have_rows('about_s_pw') ):

  // Loop through rows.
  while ( have_rows('about_s_pw') ) : the_row();

  // Case section White
  if( get_row_layout() == 'about_s_white' ): ?>
    <div class="about-row row-white">
      <?php if( have_rows("about_white_slider") ): ?>
        <div class="about-slider_wrapper">
          <div class="about-slider">
            <?php while( have_rows('about_white_slider') ): the_row(); ?>
              <div class="about-slide" style="background-image: url(<?php the_sub_field('aw_image'); ?>)">
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      <?php endif; ?>
      <div class="about_info">
        <?php if( get_sub_field('about_white_title')) { ?>
          <h2 class="a__title  title_bg_letter c-light-pink2">
            <?php the_sub_field('about_white_title'); ?>
          </h2>
        <?php } ?>
        <?php if( get_sub_field('about_white_txt')) { ?>
          <div class="a__txt  wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
            <?php the_sub_field('about_white_txt'); ?>
          </div>
        <?php } ?>
      </div>
    </div>

  <?// Case section Pink
  elseif( get_row_layout() == 'about_s_pink' ): ?>
    <div class="about-row row-pink">
      <?php if( have_rows("about_pink_slider") ): ?>
        <div class="about-slider_wrapper">
          <div class="about-slider">
            <?php while( have_rows('about_pink_slider') ): the_row(); ?>
              <div class="about-slide" style="background-image: url(<?php the_sub_field('ap_image'); ?>)">
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      <?php endif; ?>
      <div class="about_info">
        <?php if( get_sub_field('about_pink_title')) { ?>
          <h2 class="a__title  title_bg_letter c-dark-green">
            <?php the_sub_field('about_pink_title'); ?>
          </h2>
        <?php } ?>
        <?php if( get_sub_field('about_pink_txt')) { ?>
          <div class="a__txt  wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
            <?php the_sub_field('about_pink_txt'); ?>
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



