<div class="page-container">
  <div class="home-orderlist__wrapper ">
    <?php if( get_field('s3s_heading')) { ?>
      <h2 class="ol_heading s2_heading-color"><?php the_field('s3s_heading'); ?></h2>
    <?php } ?>

    <?php if( get_field('s3s_subheading')) { ?>
      <div class="ol_subheading"><?php the_field('s3s_subheading'); ?></div>
    <?php } ?>

    <div class="ol_list__wrapper">
      <?php if( have_rows('s3s_ordered_list') ): 
        $i = 1;
        ?>
        <?php while( have_rows('s3s_ordered_list') ): the_row(); ?>
          <div class="list_item">
            
              <div class="item__num">
                <?php echo $i; ?>
              </div>
             
            <?php if( get_sub_field('or_text')) { ?> 
                <div class="item__text">
                  <?php the_sub_field('or_text') ?>
                </div>
            <?php } ?>
          </div>
        <?php
        $i++;
        endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
