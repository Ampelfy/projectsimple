<div id="post-<?php the_ID(); ?>" class="blog-post post-thumb">
  <div class="post_img" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
  </div>

  <div class="post_content">
    <h3 class="post_title  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s"><?php the_title();?></h3>
    <div class="post_date  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s"><?php the_date(); ?></div>
    <div class="post_text  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.6s"><?php the_excerpt(); ?></div>
    <a href="<?php the_permalink();?>" class="post_link  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.6s">> lees meer</a>
  </div>
</div>


