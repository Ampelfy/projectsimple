<div class="page-container">
  <div class="app_section__wrapper">

  <div class="app-info__wrapper">
    <?php if( get_field('app_title')) { ?>
      <h2 class="app_title">
        <?php the_field('app_title'); ?>
      </h2>
    <?php } ?>
    <?php if( get_field('app_text')) { ?>
      <div class="app_text">
        <?php the_field('app_text'); ?>
      </div>
    <?php } ?>
  </div>

  <?php if( get_field('faq_img')) { ?>
    <div class="app-img__wrapper">

    </div>
  <?php } ?>

  </div>
</div>