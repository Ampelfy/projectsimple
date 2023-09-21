<div class="work_project  masonry__item js-masonry-item">
  <img src="<?php the_post_thumbnail_url(); ?>" alt="portfolio image"/>
  <a href="<?php the_permalink(); ?>" class="work_project__overlay">
    <span class="work_project__title">
       <?php the_title();?>
    </span>
  </a>
</div>