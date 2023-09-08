<div class="top-section__wrapper">
  <?php if( get_field('team_top_img') ): ?>

    <div class="top-section_bg" style="background-image: url(<?php the_field('team_top_img'); ?>)">
    </div>

    <?php if(get_field('team_top_text')) { ?>
    <div class="top-section_content_wrapper  page-container">
      <div class="top-section_content  wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
        <?php the_field('team_top_text'); ?>
      </div>
    </div>
    <?php } ?>

  <?php endif; ?>
</div>