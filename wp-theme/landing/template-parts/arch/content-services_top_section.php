<div class="service-top-section__wrapper">
  <div class="service-top__wrapper  page-container">
    <?php if(get_field('service_top_text')) {?>
      <div class="service-top_content__wrapper">
        <div class="service-top_content__text  wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0.4s">
          <?php the_field('service_top_text'); ?>


          <?php if(get_field('service_top_btn_text')) {?>
            <a href="<?php the_field('service_top_btn_link'); ?>" class="btn btn-white">
              <?php the_field('service_top_btn_text'); ?>
            </a>
          <?php } ?>
        </div>

      </div>
    <?php } ?>

    <?php if(get_field('service_top_img')) {?>
      <div class="service-top__img">
        <div class="bg__img" style="background-image: url(<?php the_field('service_top_img');?>)">
        </div>
      </div>
    <?php } ?>
  </div>
</div>