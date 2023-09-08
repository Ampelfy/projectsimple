<div class="page-container ">

    <div class="home-top__wrapper">

        <div class="col_text">
            <?php if( get_field('s1_top_heading') || get_field('s1_top_smalltxt')) { ?>
            <h1 class="main_heading">
                <div class="main_heading__p1"><?php the_field('s1_top_heading'); ?></div>
                <span class="main_heading__p2">
                    <?php the_field('s1_top_heading2'); ?>

                    <?php if( get_field('s1_top_smalltxt')) { ?>
                        <span class="main_heading__small"><?php the_field('s1_top_smalltxt'); ?></span>
                    <?php } ?>
                </span>
            </h1>
            <?php } ?>
            <?php if( get_field('s1_top_txt')) { ?>
            <div class="home-top_text"><?php the_field('s1_top_txt'); ?></div>
            <?php } ?>

            <div class="cta-btns">
                <div class="btn-item-blog">
                    <?php $request_btn = get_field( 'request_btn' ); ?>
                    <?php if ( $request_btn ) { ?>
                    <a href="<?php echo $request_btn['url']; ?>"
                        target="<?php echo $request_btn['target']; ?>"><?php echo $request_btn['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>

        <?php if( get_field('s1_top_image')) { ?>
            <div class="col_img  desktop-view">
                <div class="home-top_img" style="background-image:url(<?php the_field('s1_top_image'); ?>);"></div> 
            </div>
        <?php } ?>
        <?php if( get_field('s1_top_image_m')) { ?>
            <div class="col_img mob-view">
                <div class="home-top_img" style="background-image:url(<?php the_field('s1_top_image_m'); ?>);"></div> 
            </div>
        <?php } ?>


    </div>
</div>