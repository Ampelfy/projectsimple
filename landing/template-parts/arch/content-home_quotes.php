<div class="quotes__wrapper">
  <?php if( get_field('home_quote_img') ): ?>
    <div class="quotes_content">
      <div class="quotes_img" style="background-image: url(<?php the_field('home_quote_img'); ?>)">
      </div>

      <?php if(get_field('home_quote_text')) { ?>
        <div class="page-container">
          <div class="top-section_content">
            <?php if(get_field('home_quote_text')) { ?>
              <div class="top-text  wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
                <?php the_field('home_quote_text'); ?>
              </div>
            <?php } ?>
          </div>
        </div>
      <?php } ?>
    </div>
  <?php endif; ?>
</div>