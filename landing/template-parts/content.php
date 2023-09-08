<a href="<?php the_permalink();?>" id="post-<?php the_ID(); ?>" class="post-item">
  <div class="post_img" style="background-image: url(<?php the_post_thumbnail_url(); ?>;)"></div>
  <div class="post_content_wrapper">
    <?php if( get_field('choose_color_badge')) { ?>
      <div class="post__badge" style="background-color: <?php the_field('choose_color_badge'); ?>"></div>
    <?php } ?>
    <div class="post_content">
      <h3 class="post__title"><?php the_title();?></h3>
      <div class="post__excerpt"><?php the_excerpt(); ?></div>
    </div>
    <?php if( get_field('post_reading_time')) { ?>
      <div class="post__read-time">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-clock.svg" alt="icon read"/>
        <?php the_field('post_reading_time'); ?>
      </div>
    <?php } ?>
  </div>
</a>


