<div class="services-section__wrapper  page-container">
  <?php
  $postID = '';

  if (!is_front_page() && !is_home()) {
    $postID = $post->ID;
  }
  $args = array(
      'category_name' => 'services',
      'post_status' => 'publish',
      'post__not_in' => array($postID)
  );

  $loopServices = new WP_Query( $args );

  if($loopServices) { ?>
    <div class="service-item_list">
    <?php while ( $loopServices->have_posts() ) : $loopServices->the_post(); ?>
      <div class="service-item">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="service icon" class="service-item__img"/>
        <h3 class="service-item__title  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
          <?php the_title(); ?>
        </h3>
        <div class="service-item__text  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink();?>" class="service-item__link  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"> LESS MEER</a>
      </div>
    <?php endwhile; ?>
    </div>
    <?php } ?>
  <?php wp_reset_postdata(); ?>
</div>