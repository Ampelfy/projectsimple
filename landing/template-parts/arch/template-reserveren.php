<?php
/*
 * Template Name: RESERVEREN
 */
?>
<?php get_header(); ?>

<main id="main" class="page-main reserve-page" role="main">
  <div class="page-wrapper">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <section class="reserve-content  page-container">
        <div class="reserve-content__wrapper">
          <?php the_content(); ?>
        </div>
      </section>

      <section class="bottom-img">
        <?php get_template_part( "template-parts/content", "bottom_img" ); ?>
      </section>

      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>


<?php get_footer(); ?>