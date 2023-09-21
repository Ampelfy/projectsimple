<div class="referenties-top__wrapper">
  <?php if(get_field('referenties_top_title')) {?>
  <h2 class="referenties-top_title"><?php the_field('referenties_top_title'); ?></h2>
  <?php } ?>

  <?php wp_nav_menu( array( 'theme_location' => 'menu-referenties', 'menu_class' => 'referenties-nav__list', 'container' => false ) ); ?>
</div>

