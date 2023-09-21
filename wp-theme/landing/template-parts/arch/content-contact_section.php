<div class="page-container">
  <div class="contact-top_content">

    <div class="contact_info">
      <?php if( get_field('contact_info_1')) { ?>
        <div class="  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.4s">
          <?php the_field('contact_info_1'); ?>
        </div>
      <?php } ?>
    </div>

    <div class="contact_info2">
      <div class="ci_col1">
        <?php if( get_field('contact_info_col_1')) { ?>
          <div class="info2__cf1  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.4s">
            <?php the_field('contact_info_col_1'); ?>
          </div>
        <?php } ?>
        <?php if( get_field('contact_info_col_2')) { ?>
          <div class="info2__cf2  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.4s">
            <?php the_field('contact_info_col_2'); ?>
          </div>
        <?php } ?>
      </div>

      <div class="ci_col2">
      <?php if( get_field('contact_cf')) { ?>
        <?php $contact_cf = get_field('contact_cf'); ?>
        <div class="info2__cf3  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.4s">
          <?php echo do_shortcode($contact_cf); ?>
        </div>
      <?php } ?>
      </div>
    </div>

  </div>


<div class="contact-staff__wrapper">
  <?php if( have_rows('contact_staff') ): ?>
    <div class="contact-staff">
      <?php while( have_rows('contact_staff') ): the_row(); ?>

        <div class="staff-item">
          <?php if(get_sub_field('staff_photo')) { ?>
            <div class="si__img" style="background-image: url(<?php the_sub_field('staff_photo');?>)">
            </div>
          <?php } ?>

          <div class="staff-item_info">
            <?php if(get_sub_field('staff_name')) { ?>
              <div class="si__name">
                <?php the_sub_field('staff_name'); ?>
              </div>
            <?php } ?>
            <?php if(get_sub_field('staff_post')) { ?>
              <div class="si__post">
                <?php the_sub_field('staff_post'); ?>
              </div>
            <?php } ?>
            <?php if(get_sub_field('staff_post_info')) { ?>
              <div class="si__text">
                <?php the_sub_field('staff_post_info'); ?>
              </div>
            <?php } ?>
          </div>
        </div>

      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div>
</div>


