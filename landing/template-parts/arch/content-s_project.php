<div class="service-item  masonry__item js-masonry-item">
  <div class="service__img">

    <?php $url = the_post_thumbnail_url();?>
    <a href="<?php echo $url; ?>" data-fancybox="gallery" data-caption="Caption for single image">
      <img src="<?php echo $url; ?>"  alt="Text_2" />
    </a>

  </div>
  <div class="service__title">
    <?php the_title(); ?>
  </div>
</div>