<div class="home-top__wrapper">

    <div class="page-container">
        <?php if( get_field('s1_top_heading')) { ?>
        <h1 class="main_heading"><?php the_field('s1_top_heading'); ?>
            <?php if( get_field('s1_top_smalltxt')) { ?>
            <span class="main_heading__small"><?php the_field('s1_top_smalltxt'); ?></span>
            <?php } ?>
        </h1>
        <?php } ?>
        <?php if( get_field('s1_top_txt')) { ?>
        <div class="home-top_text"><?php the_field('s1_top_txt'); ?></div>
        <?php } ?>

        <div class="cta-btns">
            <div class="btn-item-request">
                <?php $request_btn = get_field( 'request_btn' ); ?>
                <?php if ( $request_btn ) { ?>
                <a href="<?php echo $request_btn['url']; ?>"
                    target="<?php echo $request_btn['target']; ?>"><?php echo $request_btn['title']; ?></a>
                <?php } ?>
            </div>
            <div class="btn-item-blog">
              <?php $blog_btn = get_field( 'blog_btn' ); ?>
              <?php if ( $blog_btn ) { ?>
                <a href="<?php echo $blog_btn['url']; ?>"
                   target="<?php echo $blog_btn['target']; ?>"><?php echo $blog_btn['title']; ?></a>
              <?php } ?>
            </div>
            <div class="btn-item-contact">
                <?php $contact_btn = get_field( 'contact_btn' ); ?>
                <?php if ( $contact_btn ) { ?>
                <a href="<?php echo $contact_btn['url']; ?>"
                    target="<?php echo $contact_btn['target']; ?>"><?php echo $contact_btn['title']; ?></a>
                <?php } ?>
            </div>
        </div>

    </div>
</div>