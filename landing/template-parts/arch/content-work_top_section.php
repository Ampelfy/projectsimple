<div class="work-top__wrapper">
  <?php if(get_field('work_top_title')) {?>
  <h3 class="work-top_title"><?php the_field('work_top_title'); ?></h3>
  <?php } ?>

  <?php wp_nav_menu( array( 'theme_location' => 'menu-work', 'menu_class' => 'work-nav__list', 'container' => false ) ); ?>
</div>

