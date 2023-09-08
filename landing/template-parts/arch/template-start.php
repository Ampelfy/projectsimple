<?php
/*
 * Template Name: START
 */
?>
<?php get_header(); ?>

<main id="main" class="page-main start-page" role="main">
  <div class="page-wrapper">


    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="main-nav_wrapper">
        <?php
        $args = array(
            'post_type' => 'logo',
            'post_status' => 'publish'
        );

        $loopLogoStart = new WP_Query( $args );

        if($loopLogoStart) {
          while ( $loopLogoStart->have_posts() ) : $loopLogoStart->the_post(); ?>
            <div class="start-logo">
              <?php if( get_field('start_logo') != '') { ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
                  <img src="<?php the_field('start_logo') ?>" alt="logo" />
                </a>
              <?php }  ?>
            </div>
          <?php endwhile;
        } ?>
        <?php wp_reset_postdata(); ?>


        <nav class="main-nav" role="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'menu-start', 'menu_class' => 'main-start__list', 'container' => false ) ); ?>

          <?php wp_nav_menu( array( 'theme_location' => 'menu-reserve', 'menu_class' => 'menu-reserve-nav__list', 'container' => false ) ); ?>

          <?php wp_nav_menu( array( 'theme_location' => 'menu-social', 'menu_class' => 'social-nav__list', 'container' => false ) ); ?>
        </nav>

      </div>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</main>


<?php get_footer(); ?>


