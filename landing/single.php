<?php get_header(); ?>

<main id="main" class="page-main single-page" role="main">
  <div class="page-wrapper">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <section class="single_content  page-container">
        <h1 class="single_title">
          <div id="back-page"><a href="#back" onclick="history.go(-1); return false;"></a></div>
          <?php the_title(); ?>
        </h1>

        <div class="single_top-info">
          <div class="info1">
              <?php if( get_field('post_author_photo') || get_field('post_author_name')) { ?>
                  <div class="post_author">
                      <?php if( get_field('post_author_photo')) { ?>
                          <div class="post__author-img" style="background-image: url(<?php the_field('post_author_photo'); ?>)"></div>
                      <?php } ?>

                      <?php if( get_field('post_author_name')) { ?>
                        <div class="post__author-name  <?php if(get_field('post_author_photo')) { echo 'authImg';} ?>">
                            <?php the_field('post_author_name'); ?>
                        </div>
                      <?php } ?>
                  </div>
              <?php } ?>
              <?php if( get_field('post_reading_time')) { ?>
                <div class="post__read-time  <?php if(get_field('post_author_photo')) { echo 'authImg';} ?>">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-clock.svg" alt="icon read"/>
                  <?php the_field('post_reading_time'); ?>
                </div>
              <?php } ?>
          </div>

          <div class="info2 post_share">
              <?php $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
              $url_encode = htmlentities(urlencode($url));
              $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$url_encode;
              ?>
              <a class='share-button' href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url_encode ;?>&t=<?php htmlentities(the_title());?>" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-fb.svg" alt="facebook"/>
              </a>

              <a class='share-button' href='https://twitter.com/share?url=<?php echo $url_encode; ?>&text=<?php htmlentities(the_title()); ?>&hashtags=kydrides' data-size='large'
                 data-hashtags="kydrides"
                 data-via="kydrides" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-twitter.svg" alt="twitter"/>
              </a>

              <a class='share-button' href='<?php echo $linkedInURL; ?>&amp;title=<?php echo htmlentities(the_title()); ?>' target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-in.svg" alt="linkedin"/>
              </a>
          </div>
        </div>

        <?php if( get_the_post_thumbnail_url()) { ?>
          <div class="page-banner__wrapper">
            <div class="bg__img" style="background-image: url(<?php the_post_thumbnail_url();?>)">
            </div>
          </div>
        <?php } ?>

        <div class="single_content__text">
          <?php the_content(); ?>

          <div id="back-top"><a href="#top"></a></div>
        </div>
      </section>

      <?php
      $args = array(
          'post_type' => 'bottom-sections',
          'post_status' => 'publish'
      );

      $loopBS = new WP_Query( $args );

      if($loopBS) {
        while ( $loopBS->have_posts() ) : $loopBS->the_post(); ?>

          <section class="s4_section">
            <?php get_template_part( "template-parts/content", "home_s4" ); ?>
          </section>

          <section class="s5_section">
            <?php get_template_part( "template-parts/content", "home_s5" ); ?>
          </section>

        <?php endwhile;
      } ?>
      <?php wp_reset_postdata(); ?>

    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
