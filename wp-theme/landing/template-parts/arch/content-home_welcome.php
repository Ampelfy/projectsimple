<div class="home-welcome_wrapper"  id="welcome">
  <div class="page-container">
    <div class="content-info">
      <?php if( get_field('home_s1_heading')) { ?>
        <h1 class="h1_title   wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <?php the_field('home_s1_heading'); ?>
        </h1>
      <?php } ?>

      <?php if( get_field('home_s1_txt')) { ?>
        <div class="content_text   wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
          <?php the_field('home_s1_txt'); ?>
        </div>
      <?php } ?>

      <div class="btn_wrapper">
        <?php if( get_field('home_s1_btn1_link')) { ?>
          <a href="<?php the_field('home_s1_btn1_link'); ?>" class="btn  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.5s">
            <?php the_field('home_s1_btn1_text');?>
          </a>
        <?php } ?>
        <?php if( get_field('home_s1_btn2_text')) { ?>
          <a href="<?php the_field('home_s1_btn2_link'); ?>" class="btn  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.5s">
            <?php the_field('home_s1_btn2_text');?>
          </a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

