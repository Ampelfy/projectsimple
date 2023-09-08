<?php
/*
 * Template Name: Defaulf Page
 */
?>
<?php get_header(); ?>

<main id="main" class="page-main page-default" role="main">
  <div class="page-wrapper">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <section class="page_content">
          <div class="page_content_wrapper  page-container">

            <div class="content-info">
              <?php the_content(); ?>
            </div>

          </div>
        </section>

        <section class="home_bottom-img">
          <?php get_template_part( "template-parts/content", "footer_widget" ); ?>
        </section>

      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>


<?php get_footer(); ?>

