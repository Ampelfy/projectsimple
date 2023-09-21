<div class="single_content__wrapper  wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.6s">

  <h2 class="single_main-title  wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0.4s">
    <span>SHOP / </span><?php the_title(); ?>
  </h2>

  <?php
  $args = array(
      'post_type' => 'product',
      'post_status' => 'publish'
  );

  $loopProd = new WP_Query( $args );

  if($loopProd) { ?>
    <ul class="shop_product-list">
      <?php while ( $loopProd->have_posts() ) : $loopProd->the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </li>

      <?php endwhile; ?>
    </ul>
  <?php } ?>
  <?php wp_reset_postdata(); ?>

  <div class="shop_product__top">
    <h1 class="product_title"><?php echo the_title(); ?></h1>
    <?php if(get_the_excerpt()) { ?>
      <div class="top_description"><?php echo the_excerpt(); ?></div>
    <?php } ?>
  </div>


  <div class="single_product__info">
    <?php if(get_field('product_sub_title')) {?>
      <div class="product_sub-title">
        <?php the_field('product_sub_title'); ?>
      </div>
    <?php } ?>

    <?php the_content(); ?>


    <?php if(get_field('product_img_badge')) {?>
      <div class="product_img_badge" style="display: none">
        <?php the_field('product_img_badge'); ?>
      </div>
    <?php } ?>
  </div>

  <div class="single-product_gallery">
    <div class="shop-gallery-grid masonry js-masonry js-images-loaded  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
      <?php if( have_rows('product_gallery') ): ?>
        <?php while( have_rows('product_gallery') ): the_row(); ?>
          <div class="gallery-item  masonry__item js-masonry-item">
            <img src="<?php the_sub_field('product_gallery_img'); ?>" alt="image" />
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

</div>


