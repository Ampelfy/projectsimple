<div class="home-about__wrapper" id="topteam">
<div class="page-container">

  <div class="content-info">
    <?php if( get_field('home_about_subtitle')) { ?>
      <div class="content__sub-title   wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.5s">
        <?php the_field('home_about_subtitle'); ?>
      </div>
    <?php } ?>
    <?php if( get_field('home_about_title')) { ?>
      <h2 class="h2_title_Marcel content__title   wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.5s">
        <?php the_field('home_about_title'); ?>
      </h2>
    <?php } ?>

    <?php if( get_field('home_about_text')) { ?>
      <div class="content__text   wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.6s">
        <?php the_field('home_about_text'); ?>
      </div>
    <?php } ?>
  </div>


  <?php if( have_rows('home_about_imgs') ):  ?>
    <div class="content_images">
      <div class="grid masonry js-masonry js-images-loaded">
        <div class="grid-sizer"></div>
        <div class="grid-item"></div>
        <?php while( have_rows('home_about_imgs') ): the_row(); ?>
          <?php $imgS1 = get_sub_field('home_about_img'); ?>
          <?php if( $imgS1 ) { ?>
            <div class="img-item  masonry__item js-masonry-item">
              <img src="<?php echo $imgS1; ?>" alt="about image">
            </div>
          <?php }; ?>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>

</div>
</div>

