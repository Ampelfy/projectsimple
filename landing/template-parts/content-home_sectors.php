<div class="sectors_wrapper  wow fadeInUp"  data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="sectors_container  page-container">

        <?php if( get_field('home_sectors_heading')) { ?>
            <h2 class="sectors__heading h2_title">
                <span><?php the_field('home_sectors_heading');?></span>
            </h2>
        <?php } ?>


        <div class="slider_list">
            <?php if( have_rows("home_sectors_list") ): ?>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                <?php while( have_rows('home_sectors_list') ): the_row(); ?>
                <div class="swiper-slide  ">
                    <div class="sl_item  Tswiper-zoom-container">
                    <div class="s__img  " style="background-image: url(<?php the_sub_field('sectorl_img'); ?>)"></div>
                    <?php if( get_sub_field('sectorl_description')) { ?>
                        <div class="stxt-wrapper">
                            <div class="s__txt"><?php the_sub_field('sectorl_description');?></div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>

    </div>
</div>

