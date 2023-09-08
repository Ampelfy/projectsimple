<?php
/*
 * Template Name: Posts (Blog)
 */
?>
<?php get_header(); ?>

	<main id="main" class="page-main blog" role="main">
      <div class="page-wrapper  page-container">

        <?php
        if ( have_posts() ) { ?>

          <div class="blog_title__wrapper">
            <h3 class="h3_title">
              <?php single_post_title(); ?>
            </h3>
          </div>

          <div class="blog_filter_wrapper">

              <?php
              $args = array(
                  'style'              => 'list',
                  'show_count'         => 0,
                  'hide_empty'         => 1,
                  'exclude'            => '1',
                  'hierarchical'       => 1,
                  'title_li'           => '',
                  'echo'               => 1,
                  'depth'              => 0
              );?>
              <ul class="category-list main-list">
                <?php wp_list_categories($args); ?>
                <li class="cat_show_all">
                  <a href="#" data-post="show_all" class="">All Posts</a>
                </li>
              </ul>

          </div>


          <div class="blog_posts_wrapper">
            <div class="blog_posts">
              <?php // Load posts loop.
              while ( have_posts() ) {
                the_post(); ?>

                  <?php get_template_part( 'template-parts/content' ); ?>

              <?php } ?>


            </div>
            <div id="back-top"><a href="#top"></a></div>
          </div>
          <?php
          // Previous/next page navigation.
//          the_post_navigation();
        }
        ?>
      </div>

      <?php
      $args = array(
          'post_type' => 'bottom-sections',
          'post_status' => 'publish'
      );

      $loopBS = new WP_Query( $args );

      if($loopBS) {
      while ( $loopBS->have_posts() ) : $loopBS->the_post(); ?>

      <section class="s4_section">
        <?php get_template_part( "template-parts/content", "home_s4" ); ?>
      </section>

      <section class="s5_section">
        <?php get_template_part( "template-parts/content", "home_s5" ); ?>
      </section>
        <div id="back-top2"><a href="#top"></a></div>

      <?php endwhile;
      } ?>
      <?php wp_reset_postdata(); ?>


	</main>

<?php get_footer(); ?>
