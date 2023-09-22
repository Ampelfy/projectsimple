<?php


if ( $_GET['debug'] ) {

    if ( function_exists( 'mail' ) )
    {
        echo 'mail() is available <br><br>';
        
        if ( mail('miha.jirov@gmail.com', 'test subject', 'test message') ) {
            echo 'Email sent <br><br>';
        } else {
            echo 'Email NOT sent';
        }
        
    }
    else
    {
        echo 'mail() has been disabled';
    }

   phpinfo(); 
}


function my_load_scripts($hook) {

	$ver = time();

	// wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), $ver );
	// wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery', 'swiper-bundle'), $ver );
	// wp_enqueue_script( 'common-scripts', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'swiper-bundle', 'bootstrap-bundle'), $ver );
	wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/assets/js/jquery-3.7.0.js', [], $ver, true);
	wp_enqueue_script( 'inputmask', get_template_directory_uri() . '/assets/js/jquery.inputmask.js', [], $ver, true);
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', [], $ver, true);
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/js/fancybox.umd.js', [], $ver, true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', [], $ver, true);
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/assets/js/script.js', [], $ver, true);
	wp_enqueue_script( 'common_js', get_template_directory_uri() . '/assets/js/common.js', [], $ver, true);
 
 wp_enqueue_script( 'theme-script', 'https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.1/lottie.min.js', array(), false, true );


	wp_enqueue_style( 'swiper-bundle-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', false, $ver );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, $ver );
	wp_enqueue_style( 'fancybox-css', get_template_directory_uri() . '/assets/css/fancybox.css', false, $ver );
	wp_enqueue_style( 'styles-css', get_template_directory_uri() . '/assets/css/styles.css', false, $ver );


	wp_localize_script('common_js', 'vars_common', [
		'ajaxurl'      => admin_url('admin-ajax.php'),
	]);

	
}
add_action('wp_enqueue_scripts', 'my_load_scripts');


if ( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}


add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );


function true_body_class( $classes ) {

	if ( !empty( $classes ) ) {
		foreach ( $classes as $key => $item ) {
			if ( 'page' === $item ) {
				unset( $classes[$key] );
			}
		}
	}

	return $classes;
}

add_filter('body_class','true_body_class');



function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



add_action( 'wp_ajax_send_demo_email', 'send_demo_email' );
add_action( 'wp_ajax_nopriv_send_demo_email', 'send_demo_email' );
function send_demo_email(){

	$first_name = $_POST['first_name'] ?? '';
	$phone      = $_POST['phone'] ?? '';
	$user_email = $_POST['email'] ?? '';
	$message    = $_POST['message'] ?? '';

	$email_to_send = get_field( 'admin_email_for_sending_letters', 'option' );
	$sent          = 'Not sent!';


	if ( !empty( $first_name ) && !empty( $phone ) && !empty( $user_email ) ) {
		$subject = 'Schedule a Demo';
		$body = '<p><strong>' . $subject . '</strong></p>';
		$body .= '<p><strong>First name:</strong> ' . $first_name . ' </p>';
		$body .= '<p><strong>Phone:</strong> ' . $phone . ' </p>';
		$body .= '<p><strong>Email:</strong> ' . $user_email . ' </p>';
		$body .= '<p><strong>Message:</strong> ' . $message . ' </p>';

		$headers = array('Content-Type: text/html; charset=UTF-8');

		if ( !empty( $email_to_send ) ) {
			$emails_arr = explode( ',', $email_to_send );
			if ( !empty($emails_arr) ) {
				foreach ( $emails_arr as $one_email ) { 
					wp_mail( trim($one_email), $subject, $body, $headers );
				}
				$sent = "Thank you for your note. We'll reach out to you shortly";
			}
		}
	}

	wp_send_json(
		[ 'text' => $sent ]
	);

}


add_action( 'wp_ajax_send_contacts_email', 'send_contacts_email' );
add_action( 'wp_ajax_nopriv_send_contacts_email', 'send_contacts_email' );
function send_contacts_email(){

	$first_name = $_POST['first_name'] ?? '';
	$phone      = $_POST['phone'] ?? '';
	$user_email = $_POST['email'] ?? '';
	$message    = $_POST['message'] ?? '';

	$email_to_send = get_field( 'admin_email_for_sending_letters', 'option' );
	$sent          = 'Not sent!';


	if ( !empty( $first_name ) && !empty( $phone ) && !empty( $user_email ) ) {
		$subject = 'Contact Us';
		$body = '<p><strong>' . $subject . '</strong></p>';
		$body .= '<p><strong>First name:</strong> ' . $first_name . ' </p>';
		$body .= '<p><strong>Phone:</strong> ' . $phone . ' </p>';
		$body .= '<p><strong>Email:</strong> ' . $user_email . ' </p>';
		$body .= '<p><strong>Message:</strong> ' . $message . ' </p>';

		$headers = array('Content-Type: text/html; charset=UTF-8');

		if ( !empty( $email_to_send ) ) {
			$emails_arr = explode( ',', $email_to_send );
			if ( !empty($emails_arr) ) {
				foreach ( $emails_arr as $one_email ) { 
					wp_mail( trim($one_email), $subject, $body, $headers );
				}
				$sent = "Thank you for your note. We'll reach out to you shortly";
			}
		}
	}

	wp_send_json(
		[ 'text' => $sent ]
	);

}



function add_upload_mimes( $types ) { 
	$types['json'] = 'text/plain';
	return $types;
}
add_filter( 'upload_mimes', 'add_upload_mimes' );


