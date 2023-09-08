<?php $args = array(
'post_type' => 'logo-slider',
'post_status' => 'publish'
);

$loopLogo = new WP_Query( $args );

if($loopLogo) {
  while ( $loopLogo->have_posts() ) : $loopLogo->the_post(); ?>
<div class="logos__wrapper">
  <div class="page-container">
    <?php if( have_rows("slider_logo") ): ?>
      <div class="logo-slider_wrapper">
        <div class="logo-slider">
          <?php while( have_rows('slider_logo') ): the_row(); ?>
            <div class="logo-slide">
              <?php if( get_sub_field('logo')) { ?>
                <img src="<?php the_sub_field('logo'); ?>" alt="logo images"/>
              <?php } ?>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>
<?php endwhile;
} ?>
<?php wp_reset_postdata(); ?>