<?php 
  $hUrl = $_SERVER['REQUEST_URI'] 
?>

<div class="home-board__wrapper">
  <div class="page-container">
    <?php if( get_field('s2_mainheading')) { ?>
      <h3 class="s2_heading-color"><?php the_field('s2_mainheading'); ?></h3>
    <?php } ?>


    <?php if( have_rows('s2_info_p1') ): ?>
    <div class="board_list__wrapper">
      <?php while( have_rows('s2_info_p1') ): the_row(); ?>
        <div class="list_item">
          <?php if( get_sub_field('info1_text')) { ?> 
              <div class="item__text">
                <?php the_sub_field('info1_text') ?>
              </div>
          <?php } ?>
        </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
   

    <?php if( get_field('s2_mainheading')) { 
      $show = get_field('s2_show');
      if ($show === 'image') {
      ?>
      <div class="s2_text hide-mobile">
		  
		  <div id="lottiefiles-animate"></div>
		  
		  <?php $image = get_field('s2_image');
		  if( !empty( $image ) ) { ?>
		  	<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		  <?php } ?>

      </div>
      <?php } else { 
        if( get_field('s2_video') ) { ?>
          <figure class="video-wrapper hide-mobile ">
            <video autoplay="true" loop="true" muted="true" preload="metadata" src="<?php the_field('s2_video'); ?>"></video>
          </figure>
        <?php } 
      } ?>
	  <?php $imageM = get_field('s2_image_m'); ?>
      <?php if( !empty( $imageM )) { ?>
        <div class="s2_text  hide-desktop">
			<img src="<?php echo esc_url($imageM['url']); ?>" alt="<?php echo esc_attr($imageM['alt']); ?>" />
        </div>
      <?php } ?>
    <?php } ?>

    <?php if( have_rows('s2_info_p2') ): ?>
      <div class="board_list__wrapper">
        <?php while( have_rows('s2_info_p2') ): the_row(); ?>
          <div class="list_item">
            <?php if( get_sub_field('info2_text')) { ?> 
                <div class="item__text">
                  <?php the_sub_field('info2_text') ?>
                </div>
            <?php } ?>
          </div>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
  </div>
</div>
