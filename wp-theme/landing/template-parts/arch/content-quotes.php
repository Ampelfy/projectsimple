<div class="quotes__wrapper">
  <div class="page-container">
    <?php if( have_rows("quotes") ): ?>
      <div class="quotes-slider_wrapper">
        <div class="quotes-slider">
          <?php while( have_rows('quotes') ): the_row(); ?>

            <div class="quotes-slide">
              <div class="quotes-slide__info  wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.6s">
                <?php if( get_sub_field('quote')) { ?>
                  <div class="testimonials-slide__text"><?php the_sub_field('quote'); ?></div>
                <?php } ?>
              </div>
            </div>

          <?php endwhile; ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>