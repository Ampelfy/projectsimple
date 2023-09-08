<div class="work-section__wrapper  page-container">
  <?php if( get_field('work_title')) { ?>
    <h2 class="h2_title  wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.5s"><?php the_field('work_title'); ?></h2>
  <?php } ?>

  <div class="work_projects">
    <?php if (is_front_page() || is_home()) {
     $args = array(
      'exclude'      => array(3),
      'post_per_page' => '8',
    );
    } else {
      $args = array(
          'post_per_page' => -1
      );
    }
    $categories = get_categories($args);
    echo "<div class='portfolio-categories'>"; ?>
    <a href="#" class="sort-link active-filter  wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.5s">
      toon alles
    </a>
    <?php foreach ($categories as $category) { ?>
      <a href="<?php echo get_category_link($category->term_id);?>" class="sort-link  wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.5s">
        <?php echo $category->name; ?>
      </a>
    <?php }
    echo "</div>"; ?>

      <div class="work-gallery">
        <div id="nestedGrid" class="work-gallery-grid masonry js-masonry js-images-loaded  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">

         <?php
            $args = array(
                'post_status' => 'publish',
                'category__not_in' => array(3),
                'orderby'          => 'post_date',
                'order'            => 'rand'
            );

            $loopProjects = new WP_Query($args);
            shuffle( $loopProjects->posts );

            if ($loopProjects) {
              while ($loopProjects->have_posts()) : $loopProjects->the_post();
                get_template_part("template-parts/content", "work_project");
              endwhile;
            } ?>
            <?php wp_reset_postdata(); ?>

        </div>
      </div>

  </div>

</div>