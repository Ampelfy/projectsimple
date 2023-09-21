<?php
/*
 * Template Name: MENUKAART
 */
?>
<?php get_header(); ?>

<main id="main" class="page-main menu-page" role="main">
  <div class="page-wrapper">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <?php if( get_field('menu_top_text')) { ?>
    <section class="menu_top  page-container">
      <div class="content_text   wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
        <?php the_field('menu_top_text'); ?>
      </div>
    </section>
    <?php } ?>

    <section class="menu">
      <?php get_template_part( "template-parts/content", "menu" ); ?>
    </section>

    <section class="add-info  page-container">
      <?php if( get_field('menu_add_info')) { ?>
        <div class="info_text   wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
          <?php the_field('menu_add_info'); ?>
        </div>
      <?php } ?>


      <?php if( get_field('button_text')) { ?>
        <a href="<?php the_field('button_link'); ?>" class="btn">
          <?php the_field('button_text');?>
        </a>
      <?php } ?>
    </section>

    <section class="bottom-img">
      <?php get_template_part( "template-parts/content", "bottom_img" ); ?>
    </section>




    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</main>


<?php get_footer(); ?>


