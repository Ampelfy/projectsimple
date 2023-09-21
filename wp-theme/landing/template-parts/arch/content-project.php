<div class="work_project">
  <h2 class="work_project__title">
     <?php the_title();?>
  </h2>
  <?php if( get_the_content()) { ?>
    <div class="project-description   wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.5s">
      <div class="project__text"><?php the_content(); ?></div>

      <?php if( get_field('project_text_btn')) { ?>
        <a href="http://<?php the_field('project_link_btn'); ?>" class="btn btn-black">
          <?php the_field('project_text_btn');?>
        </a>
      <?php } ?>
    </div>
  <?php } ?>

  <div class="work_project_gallery">
    <?php if( have_rows('project_gallery') ): ?>
      <?php while( have_rows('project_gallery') ): the_row(); ?>

        <?php if( get_row_layout() == 'full_width_block' ): ?>
          <?php get_template_part( "template-parts/int/fullimgtxt", "" ); ?>

        <?php elseif( get_row_layout() == 'small_width_block' ): ?>
          <?php get_template_part( "template-parts/int/smallimgs", "" ); ?>

        <?php elseif( get_row_layout() == '2height_block' ): ?>
          <?php get_template_part( "template-parts/int/height2imgs", "" ); ?>

        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>

</div>