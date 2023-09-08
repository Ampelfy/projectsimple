<div class="home-s4__wrapper">
  <div class="page-container">
    <?php if( get_field('s4_heading')) { ?>
      <h2 class="s4_heading"><?php the_field('s4_heading'); ?>
        <?php if( get_field('s4_heading_uppertxt')) { ?>
          <span><?php the_field('s4_heading_uppertxt') ?></span>
        <?php } ?>
      </h2>
    <?php } ?>

    <?php if( get_field('s4_txt1')) { ?>
      <div class="s4_text"><?php the_field('s4_txt1'); ?></div>
    <?php } ?>

    <div class="btn-item-blue">
      <?php $cbtn = get_field( 's4_btnt_xt' );
      $cbtnl = get_field( 's4_btnt_link' ); ?>
      <?php if ( $cbtn ) { ?>
        <a class="btn-blog-customization" href="<?php echo $cbtnl; ?>">
          <?php echo $cbtn; ?>
        </a>
      <?php } ?>
    </div>

    <?php if( get_field('s4_txt2')) { ?>
      <div class="s4_quote">
        <div class="quote__text"><?php the_field('s4_txt2'); ?></div>

        <?php if( have_rows('s4_author') ):  ?>
          <?php while( have_rows('s4_author') ): the_row(); ?>
          <div class="quote_author_wrapper">
            <?php 
			$image = get_sub_field('s4_author_img');
			if( $image ) { ?>
              <div class="quote__img">
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              </div>
            <?php } ?>

            <?php if( get_sub_field('s4_author_txt')) { ?>
              <div class="quote__name">
                <?php the_sub_field('s4_author_txt'); ?>
              </div>
            <?php } ?>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    <?php } ?>
  </div>
</div>
