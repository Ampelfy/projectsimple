<div class="team-section__wrapper  page-container">
  <?php if( get_field('team_title')) { ?>
    <h2 class="h2_title  wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.5s"><?php the_field('team_title'); ?></h2>
  <?php } ?>

  <?php if( get_field('team_text')) { ?>
    <div class="work_text  wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.6s"><?php the_field('team_text'); ?></div>
  <?php } ?>

    <?php if( have_rows('team_images') ):  ?>
        <div class="team_images">
         <?php while( have_rows('team_images') ): the_row(); ?>
            <?php $imageTeam = get_sub_field('team_image');?>
            <?php if( $imageTeam) { ?>
                 <div class="team_image__wrapper  wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.6s" style="background-image: url(<?php echo $imageTeam; ?>)">
                 </div>
            <?php } ?>
         <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>