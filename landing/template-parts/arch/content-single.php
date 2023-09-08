<div class="single_content__wrapper   page-container wow fadeIn" data-wow-duration="1.1s" data-wow-delay="0.6s">
  <div class="single_content__text">
    <h1 class="single_title  wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0.4s">
      <?php the_title(); ?>
    </h1>

    <?php the_content(); ?>

<!--    <div class="single_navigation">-->
<!--      --><?php //the_post_navigation2(
//          array(
//              'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Volgende »', 'theme' ) . '</span><span class="nav-arrow next-arrow"></span> ',
//              'prev_text' => '<span class="nav-arrow prev-arrow"></span><span class="meta-nav" aria-hidden="true">' . __( '« Vorige', 'theme' ) . '</span> ' . '<br/>')
//      );?>
<!--    </div>-->

    <div class="single-post_share_wrapper">
      <div class="single-post_share">
        <span class="single-post_share__title">DELEN OP</span>

        <?php $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $url_encode = htmlentities(urlencode($url));
        ?>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url_encode ;?>&t=<?php htmlentities(the_title());?>" target="_blank">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-fb-black.svg" alt="facebook"/>
        </a>

        <a class='in-share-button' href='https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $url_encode; ?>' target="_blank">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-insta-black.svg" alt="linkedin"/>
        </a>
      </div>
    </div>
  </div>

  <?php $postImg = get_the_post_thumbnail_url();
  if($postImg) {?>
  <div class="single_content__img">
    <div class="bg__img" style="background-image: url(<?php echo $postImg;?>)">
    </div>
  </div>
  <?php } ?>
</div>

