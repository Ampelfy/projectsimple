<div class="home-posts__wrapper">
  <div class="home-posts_top  page-container">
    <?php if( get_field('home_posts_title')) { ?>
      <h2 class="h2_title">
       <?php the_field('home_posts_title'); ?>
      </h2>
    <?php } ?>
    <?php if( get_field('home_posts_txt')) { ?>
      <div class="posts_top__txt">
        <?php the_field('home_posts_txt'); ?>
      </div>
    <?php } ?>

  </div>


  <?php
  $args = array( 'posts_per_page' => '4', 'post_type' => 'post' );
  $recent_posts = new WP_Query($args);
  while( $recent_posts->have_posts() ) :
    $recent_posts->the_post() ?>
    <div class="home-post">
      <?php if ( has_post_thumbnail() ) : ?>
        <div class="home-post_img" style="background-image: url(<?php the_post_thumbnail_url();?>)"></div>
      <?php endif ?>

      <div class="home-post_info">
        <a href="<?php echo get_permalink(); ?>">
        <h4 class="post__title"><?php the_title(); ?></h4>
        <?php $content = get_the_content();
        $trimmed_content = wp_trim_words( $content, 40, '<a href="'. get_permalink() .'">  ... <span class="less-meer"> > LEES MEER</span></a>' );
        ?>
          <div class="post__txt"><?php echo $trimmed_content; ?></div>
        </a>
      </div>

      <a href="<?php echo get_permalink(); ?>">
      <div class="blue-block">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-plus.svg" alt="icon read more">
      </div>
      </a>
    </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); # reset post data so that other queries/loops work ?>

  <?php if( get_field('home_posts_btn_text')) { ?>
    <div class="posts__btn  page-container">
      <a href="<?php the_field('home_posts_btn_link'); ?>" class="btn"><?php the_field('home_posts_btn_text'); ?></a>
    </div>
  <?php } ?>
</div>
