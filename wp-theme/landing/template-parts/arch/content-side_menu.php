<div class="side-menu   hide-mobile">

  <?php
  $args = array(
      'post_type' => 'logo',
      'post_status' => 'publish'
  );

  $loopLogo = new WP_Query( $args );

  if($loopLogo) {
    while ( $loopLogo->have_posts() ) : $loopLogo->the_post(); ?>
      <div class="header-logo">
        <?php if( get_field('site_logo') != '') { ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
            <img src="<?php the_field('site_logo') ?>" alt="logo" />
          </a>
        <?php }  else { ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="logo"/>
          </a>
        <?php } ?>
      </div>
    <?php endwhile;
  } ?>
  <?php wp_reset_postdata(); ?>


  <div class="side-nav__list-wrapper">
    <?php wp_nav_menu( array( 'theme_location' => 'menu-side', 'menu_class' => 'side-nav__list', 'container' => false ) ); ?>
  </div>
</div>
