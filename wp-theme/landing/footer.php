<?php
$social_links        = get_field( 'social_links', 'option' );
$copyright           = get_field( 'copyright', 'option' );
$privacy_policy_link = get_field( 'privacy_policy_link', 'option' );
$terms_link          = get_field( 'terms_link', 'option' );

?>

<footer class="footer">
    <div class="container">
        <?php if ( !empty( $social_links ) ) : ?>
        <ul class="footer__menu">
            <?php foreach( $social_links as $link ) : ?>
            <li class="footer__item"><a href="<?php echo $link['link']; ?>"><img src="<?php echo $link['icon']['url']; ?>" alt="<?php echo $link['title']; ?>"></a></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <p class="reserved"><?php echo $copyright; ?></p>
        <div class="footer__bottom">
            <a href="<?php echo $privacy_policy_link; ?>" class="policy"><?php _e('Privacy Policy', 'landing'); ?></a>
            <a href="<?php echo $terms_link; ?>" class="terms"><?php _e('Terms', 'landing'); ?></a>
        </div>
    </div>
</footer>
</div>

<!-- SCROLL TO TOP -->
<a id="scrollToTop"></a>

<?php wp_footer(); ?>

</body>

</html>
