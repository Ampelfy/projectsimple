<div class="home-s6__wrapper">
  <div class="page-container">
    <?php if( get_field('s6_heading')) { ?>
      <h2 class="s6_heading"><?php the_field('s6_heading'); ?>
        <?php if( get_field('s6_heading_uppertxt')) { ?>
          <span><?php the_field('s6_heading_uppertxt') ?></span>
        <?php } ?>
      </h2>
    <?php } ?>
    <div class="s6_row">
        <div class="s6_col-info">
            <?php if( get_field('s6_txt1')) { ?>
            <div class="s6_text"><?php the_field('s6_txt1'); ?></div>
            <?php } ?>

            <?php if( get_field('s6_txt2')) { ?>
            <div class="s6_quote s6_quote_desktop">
                <div class="quote__text"><?php the_field('s6_txt2'); ?></div>

                <?php if( have_rows('s6_author') ):  ?>
                <?php while( have_rows('s6_author') ): the_row(); ?>
                <div class="quote_author_wrapper">
                    <?php 
					$imageA = get_sub_field('s6_author_img');
					if($imageA) { ?>
                    <div class="quote__img">
                        <img src="<?php echo esc_url($imageA['url']); ?>" alt="<?php echo esc_attr($imageA['alt']); ?>" />
                    </div>
                    <?php } ?>

                    <?php if( get_sub_field('s6_author_txt')) { ?>
                    <div class="quote__name">
                        <?php the_sub_field('s6_author_txt'); ?>
                    </div>
                    <?php } ?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php } ?>
        </div>
        <div class="s6_col-gallery">
            <?php $images = get_field('s6_gallery');
            if( $images ): ?>
                <div class="s6_gallery">
                <?php foreach( $images as $image ): ?>
                    <img loading=lazy src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php if( get_field('s6_txt2')) { ?>
        <div class="s6_quote s6_quote_mobile">
            <div class="quote__text"><?php the_field('s6_txt2'); ?></div>

            <?php if( have_rows('s6_author') ):  ?>
            <?php while( have_rows('s6_author') ): the_row(); ?>
            <div class="quote_author_wrapper">
				<?php
				$imageAuthor = get_sub_field('s6_author_img');
				if($imageAuthor) { ?>
					<div class="quote__img">
						<img src="<?php echo esc_url($imageAuthor['url']); ?>" alt="<?php echo esc_attr($imageAuthor['alt']); ?>" />
					</div>
                <?php } ?>

                <?php if( get_sub_field('s6_author_txt')) { ?>
                <div class="quote__name">
                    <?php the_sub_field('s6_author_txt'); ?>
                </div>
                <?php } ?>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    <?php } ?>


  </div>
</div>
