<div class="single_top-section__wrapper">
  <?php $imagePost = get_the_post_thumbnail_url();?>
  <?php if( $imagePost) { ?>
    <div class="top-section_bg" style="background-image: url(<?php echo $imagePost;?>)">
    </div>
  <?php } ?>
</div>