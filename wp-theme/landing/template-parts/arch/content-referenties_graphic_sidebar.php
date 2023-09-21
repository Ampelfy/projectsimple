<div class="work_projects">
  <div class="dropdown-title">projecten</div>

  <ul class="portfolio-categories">
    <?php
    $categories = get_terms( 'grafisch_category', 'orderby=count&hide_empty=1');

    if( $categories ) {
      foreach( $categories as $cat ) {
        $arg_posts =  array(
            'posts_per_page' => -1,
            'post_type' => 'ref-grafisch-ontwerp',
            'post_status' => 'publish',
            'tax_query' => array(
                array(
                    'taxonomy' => 'grafisch_category',   // taxonomy name
                    'field' => 'term_id',           // term_id, slug or name
                    'terms' => $cat->term_id,       // term id, term slug or term name
                )
            )
        );?>

        <a href="<?php echo get_category_link( $cat->term_id ); ?>">
          <?php echo $cat->name; ?>
        </a>
        <?php $query1 = new WP_Query($arg_posts);
        if ($query1->have_posts() ) : ?>
          <ul class="cat-projects">
            <?php while ( $query1->have_posts() ) : $query1->the_post();
              $postID =  get_the_ID();
              $post_type = get_post_type( $postID );
              ?>
              <li>
                <a href="<?php the_permalink(); ?>"
                   data-id="<?php echo $postID;?>" data-post-type="<?php echo $post_type;?>">
                  <?php the_title(); ?>
                </a>
              </li>
            <?php endwhile; ?>

          </ul>
          <?php  wp_reset_postdata(); ?>
        <?php endif;
      }
    }
    ?>
  </ul>

</div>

