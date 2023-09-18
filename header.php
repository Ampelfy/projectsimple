<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/wp-content/themes/landing/assets/images/icons/favicon.ico">
    
    
    
	<?php wp_head(); ?>
 
 
 
 
 
</head>

<?php

$logo        = get_field( 'logo', 'option' );
$signup_link = get_field( 'signup_link', 'option' );
$login_link  = get_field( 'login_link', 'option' );

?>

<body <?php body_class(); ?>>
<div class="wrapper">
    <!-- ================================================================= POPUPS-->
    <div class="popup popup_demo">
        <div class="popup__content">
            <div class="popup__body">
                <span class="form-title">Schedule a Demo</span>
                <form class="row g-3 needs-validation" novalidate="">
                    <div class="col-md-6">
                        <input type="text" class="form-control first-name" id="validationCustom01"
                               placeholder="First and Last name" required="">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control phone" id="validationCustom02" placeholder="Phone number"
                               required="">
                    </div>
                    <div class="col-md-12">
                        <input type="email" class="form-control email" id="validationCustom03" placeholder="Email"
                               required="">
                    </div>
                    <div class="col-md-12">
							<textarea class="form-control message" id="validationTextarea" placeholder="Message"
                                      required></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btnxl btnxl_blue" type="submit">Submit</button>
                    </div>
                </form>
                <div class="popup__close"></div>
            </div>
        </div>
    </div>

    <div class="popup popup_contacts">
        <div class="popup__content">
            <div class="popup__body">
                <span class="form-title">Contact Us</span>
                <form class="row g-3 needs-validation" novalidate="">
                    <div class="col-md-6">
                        <input type="text" class="form-control first-name" id="validationCustom01"
                               placeholder="First and Last name" required="">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control phone" id="validationCustom02" placeholder="Phone number"
                               required="">
                    </div>
                    <div class="col-md-12">
                        <input type="email" class="form-control email" id="validationCustom03" placeholder="Email"
                               required="">
                    </div>
                    <div class="col-md-12">
							<textarea class="form-control message" id="validationTextarea" placeholder="Message"
                                      required></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btnxl btnxl_blue" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="popup__close"></div>
        </div>
    </div>
</div>
<!-- ================================================================= POPUPS-->

<header class="header">
    <div class="container container_flex">
        <div class="logo">
            <a href="<?php echo site_url(); ?>"><img src="<?php echo $logo['url']; ?>" alt="logo"></a>
        </div>
	    <?php
	    $menu = wp_get_nav_menu_items( 'Top', $args = array() );
	    $bottom = wp_get_nav_menu_items( 'Bottom', $args = array() );
	    ?>
        <div class="menu">
            <?php if ( !empty( $menu ) ) : ?>
            <ul class="menu__list">
                <?php foreach ( $menu as $item ) : ?>
                    <li class="menu__item">
                        <a href="<?php echo $item->url; ?>" class="menu__link"><?php echo $item->post_title; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
        <div class="menu-mobile">
            <div class="burger"><span class="burger_nav"></span></div>
            <ul class="menumobile__list">
                <div class="list-top">
	                <?php if ( !empty( $menu ) ) : ?>
		                <?php foreach ( $menu as $item ) : ?>
                            <li class="menu__item">
                                <a href="<?php echo $item->url; ?>" class="btnsmall btnsmall_nobg menu__link "><?php echo $item->post_title; ?></a>
                            </li>
		                <?php endforeach; ?>
	                <?php endif; ?>
                </div>
                <div class="list-bottom">
	                <?php if ( !empty( $bottom ) ) : ?>
		                <?php foreach ( $bottom as $item ) : ?>
                            <li class="menu__item">
                                <a href="<?php echo $item->url; ?>" class="btnsmall btnsmall_blue menu__link "><?php echo $item->post_title; ?></a>
                            </li>
		                <?php endforeach; ?>
	                <?php endif; ?>
                </div>
            </ul>
        </div>
        <div class="auth">
            <ul class="auth__list">
                <li class="auth__item">
                    <a href="<?php echo $login_link; ?>"
                       class="btnsmall btnsmall_nobg"><?php _e( 'Login', 'landing' ); ?></a>
                </li>
                <li class="auth__item auth__item-signup">
                    <a href="<?php echo $signup_link; ?>"
                       class="btnsmall btnsmall_blue"><?php _e( 'Sign Up', 'landing' ); ?></a>
                </li>
            </ul>
        </div>
    </div>
</header>
