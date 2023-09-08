<?php if( get_field('news_title')) { ?>
  <div class="page-container">
    <h2 class="home-news_title  title_bg_letter">
        <?php the_field('news_title'); ?>
    </h2>
  </div>
<?php } ?>

<div class="home-news__wrapper">
<div class="page-container">
  <div class="home-news_container">
    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3
    );

    $loopHomeNews = new WP_Query( $args );

    if($loopHomeNews) {
    while ( $loopHomeNews->have_posts() ) : $loopHomeNews->the_post(); ?>

      <div class="home-mews_item">
        <div class="item__img" style="background-image: url(<?php the_post_thumbnail_url(); ?>)" alt="news image">
        </div>
        <div class="item_content  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.5s">
          <h3 class="item__title"><?php the_title(); ?></h3>
          <div class="item__text"><?php the_excerpt(); ?></div>
          <a href="<?php the_permalink(); ?>" class="item__link">Lees meer</a>
        </div>

      </div>

    <?php endwhile;
    } ?>
  <?php $loopHomeNews->wp_reset_postdata(); ?>
  </div>
  </div>
</div>