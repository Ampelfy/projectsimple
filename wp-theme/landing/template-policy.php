<?php
/*
 * Template Name: Policy
 */
?>
<?php get_header(); ?>

<main id="main" class="page-main single-page policy" role="main">
  <div class="page-wrapper">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <section class="single_content  page-container">
        <h1 class="single_title">
          <?php the_title(); ?>
        </h1>

        <div class="single_top-info">
           <div class="info__date">Updated <?php the_date('Y-m-d'); ?></div>
        </div>

        <?php if( get_the_post_thumbnail_url()) { ?>
          <div class="page-banner__wrapper">
            <div class="bg__img" style="background-image: url(<?php the_post_thumbnail_url();?>)">
            </div>
          </div>
        <?php } ?>

        <div class="single_content__text">
          <?php the_content(); ?>

          <div id="back-top"><a href="#top"></a></div>
        </div>
      </section>

    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
