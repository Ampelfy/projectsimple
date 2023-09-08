<?php
/*
 * Template Name: Press & Photos
 */
?>
<?php get_header(); ?>
  <main id="main" class="page-main page-photopress" role="main">
    <div class="page-wrapper">
      <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <section class="page-content_section  page-container">
              <div class="wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.6s"><?php the_content(); ?></div>
            </section>

            <section class="bottom-img">
              <?php get_template_part( "template-parts/content", "bottom_img" ); ?>
            </section>

          <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </main>
<?php get_footer(); ?>

