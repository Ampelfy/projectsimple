<?php
$args = array(
    'post_type' => 'footer-widget',
    'post_status' => 'publish'
);

$loopFooter2 = new WP_Query( $args );

if($loopFooter2) {
  while ( $loopFooter2->have_posts() ) : $loopFooter2->the_post(); ?>
    <?php if( get_field('footer_widget_img')) { ?>
    <div class="botimg__wrapper"  style="background-image: url(<?php the_field('footer_widget_img');?>)">
    </div>
    <?php } ?>
  <?php endwhile;
} ?>
<?php wp_reset_postdata(); ?>
