<div class="home-s7__wrapper">
    <div class="page-container">
        <div class="s7_row">
            <p class="s7_text">
                <?php the_field('s7_text'); ?>
            </p>
            <?php 
            $link = get_field('s7_button');
            if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a  class="s7_btn" 
                href="<?php echo esc_url( $link_url ); ?>" 
                target="<?php echo esc_attr( $link_target ); ?>">
                <?php echo esc_html( $link_title ); ?>
            </a>
            <?php endif; ?>
        </div>
    </div>
</div>