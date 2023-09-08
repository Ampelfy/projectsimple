<div class="page-container">

<h2 class="history_main-title  title_bg_letter c-green2"><?php the_title(); ?></h2>

<div class="history-content">

  <?php if( get_field('h_top_image')) { ?>
    <div class="history_logo">
      <img src="<?php the_field('h_top_image') ?>" alt="small logo" />
    </div>
  <?php } ?>

  <div class="history-content_rows">
    <div class="history_timeline" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/images/timeline.svg')">
    </div>

    <!--  row 1-->
  <div class="history_row hr-1">
    <?php if( get_field('h_s1_year')) { ?>
      <div class="h_year">
        <?php the_field('h_s1_year'); ?>
      </div>
    <?php } ?>

    <div class="h_info_wrapper">
      <?php if( get_field('h_s1_info')) { ?>
        <div class="h_info  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
          <?php the_field('h_s1_info'); ?>
        </div>
      <?php } ?>

      <?php if( have_rows("h_s1_photo_box") ): ?>
      <?php while( have_rows('h_s1_photo_box') ): the_row(); ?>
        <?php if( get_sub_field('h_s1_photo')) { ?>
          <div class="h_img-box_wrapper">
          <div class="h_img-box" style="background-image: url(<?php the_sub_field('h_s1_photo'); ?>)">
            <div class="h__img-text"><?php the_sub_field('h_s1_photo_txt'); ?></div>
          </div>
          </div>
        <?php } ?>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

  <!--  row 2-->
  <div class="history_row hr-2">
    <?php if( get_field('h_s2_year')) { ?>
      <div class="h_year">
        <?php the_field('h_s2_year'); ?>
      </div>
    <?php } ?>

    <div class="h_info_wrapper">
      <?php if( get_field('h_s2_info')) { ?>
        <div class="h_info  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
          <?php the_field('h_s2_info'); ?>
        </div>
      <?php } ?>
    </div>
  </div>


  <!--  row 3-->
  <div class="history_row hr-3">
    <?php if( get_field('h_s3_year')) { ?>
      <div class="h_year">
        <?php the_field('h_s3_year'); ?>
      </div>
    <?php } ?>


    <div class="h_info_wrapper">
      <div class="h_img-box_wrapper">
        <?php if( get_field('h_s3_add_info')) { ?>
          <div class="h_add-info">
            <?php the_field('h_s3_add_info'); ?>
          </div>
        <?php } ?>

        <?php if( have_rows("h_s3_photo_box") ): ?>
          <?php while( have_rows('h_s3_photo_box') ): the_row(); ?>
            <?php if( get_sub_field('h_s3_photo')) { ?>
              <div class="h_img-box" style="background-image: url(<?php the_sub_field('h_s3_photo'); ?>)">
                <div class="h__img-text"><?php the_sub_field('h_s3_photo_txt'); ?></div>
              </div>
            <?php } ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>


      <?php if( get_field('h_s3_info')) { ?>
        <div class="h_info  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
          <?php the_field('h_s3_info'); ?>
        </div>
      <?php } ?>
    </div>
  </div>


    <!--  row 4-->
    <div class="history_row hr-4">
      <?php if( get_field('h_s4_year')) { ?>
        <div class="h_year">
          <?php the_field('h_s4_year'); ?>
        </div>
      <?php } ?>


      <div class="h_info_wrapper">
        <div class="h_img-box_wrapper">
          <?php if( get_field('h_s4_add_info')) { ?>
            <div class="h_add-info">
              <?php the_field('h_s4_add_info'); ?>
            </div>
          <?php } ?>

          <?php if( have_rows("h_s4_photo_box") ): ?>
          <div class="h_img-box_col">
            <?php while( have_rows('h_s4_photo_box') ): the_row(); ?>
              <?php if( get_sub_field('h_s4_photo')) { ?>
                <div class="h_img-box" style="background-image: url(<?php the_sub_field('h_s4_photo'); ?>)">
                  <div class="h__img-text"><?php the_sub_field('h_s4_photo_txt'); ?></div>
                </div>
              <?php } ?>
            <?php endwhile; ?>
          </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="h_info_wrapper hi_w2">
        <?php if( get_field('h_s4_info')) { ?>
          <div class="h_info  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <?php the_field('h_s4_info'); ?>
          </div>
        <?php } ?>
      </div>
    </div>


    <!--  row 5-->
    <div class="history_row hr-5">
      <?php if( get_field('h_s5_year')) { ?>
        <div class="h_year">
          <?php the_field('h_s5_year'); ?>
        </div>
      <?php } ?>

      <div class="h_info_wrapper">
        <?php if( get_field('h_s5_info')) { ?>
          <div class="h_info  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <?php the_field('h_s5_info'); ?>
          </div>
        <?php } ?>
      </div>
    </div>


    <!--  row 6-->
    <div class="history_row hr-6">
      <?php if( get_field('h_s6_year')) { ?>
        <div class="h_year">
          <?php the_field('h_s6_year'); ?>
        </div>
      <?php } ?>

      <div class="h_info_wrapper">
        <div class="h_img-box_wrapper">
          <?php if( have_rows("h_s6_photo_box") ): ?>
            <?php while( have_rows('h_s6_photo_box') ): the_row(); ?>
              <?php if( get_sub_field('h_s6_photo')) { ?>
                <div class="h_img-box" style="background-image: url(<?php the_sub_field('h_s6_photo'); ?>)">
                  <div class="h__img-text"><?php the_sub_field('h_s6_photo_txt'); ?></div>
                </div>
              <?php } ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>


        <?php if( get_field('h_s6_info')) { ?>
          <div class="h_info  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <?php the_field('h_s6_info'); ?>
          </div>
        <?php } ?>
      </div>
    </div>


    <!--  row 7-->
    <div class="history_row hr-7">
      <?php if( get_field('h_s7_year')) { ?>
        <div class="h_year">
          <?php the_field('h_s7_year'); ?>
        </div>
      <?php } ?>

      <div class="h_info_wrapper">
        <?php if( get_field('h_s7_info')) { ?>
          <div class="h_info  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <?php the_field('h_s7_info'); ?>
          </div>
        <?php } ?>

        <div class="h_img-box_wrapper">
          <?php if( have_rows("h_s7_photo_box") ): ?>
            <?php while( have_rows('h_s7_photo_box') ): the_row(); ?>
              <?php if( get_sub_field('h_s7_photo')) { ?>
                <div class="h_img-box" style="background-image: url(<?php the_sub_field('h_s7_photo'); ?>)">
                  <div class="h__img-text"><?php the_sub_field('h_s7_photo_txt'); ?></div>
                </div>
              <?php } ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>


  </div>
</div>
</div>




