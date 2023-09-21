<div class="home-s5__wrapper">
  <div class="page-container">
<!--    --><?php //if( get_field('s2_heading')) { ?>
<!--      <h2 class="s2_heading">--><?php //the_field('s2_heading'); ?><!--</h2>-->
<!--    --><?php //} ?>

<!--    <div class="s5_forms">-->
<!--      --><?php //if( get_field('s5_sign_up')) {
//        $signUp = get_field('s5_sign_up')
//        ?>
<!--        <div class="form__sign_up" id="mc-contact">-->
<!--          --><?php //echo do_shortcode($signUp); ?>
<!--        </div>-->
<!--      --><?php //} ?>
<!---->
<!--      --><?php //if( get_field('s5_cf7')) {
//        $cf7 = get_field('s5_cf7')
//        ?>
<!--        <div class="form__cf7" id="cf7-req">-->
<!--          --><?php //echo do_shortcode($cf7); ?>
<!--        </div>-->
<!--      --><?php //} ?>
<!--    </div>-->





  </div>


	<?php
	$front_page_id                 = get_option( 'page_on_front' );
	$mobile_demo_button_title      = get_field( 'mobile_demo_button_title', $front_page_id );
	$mobile_demo_button_link       = get_field( 'mobile_demo_button_link', $front_page_id );
	$attention_section_title       = get_field( 'attention_section_title', $front_page_id );
	$attention_section_right_label = get_field( 'attention_section_right_label', $front_page_id );
	$attention_button_title        = get_field( 'attention_button_title', $front_page_id );
	$attention_button_link         = get_field( 'attention_button_link', $front_page_id );

	?>

    <div class="cta cta-vector">
        <div class="container">
            <div class="ctatitle">
                <h3><?php echo $attention_section_title; ?>
                    <span><?php echo $attention_section_right_label; ?></span>
                </h3>
            </div>
            <div class="buttons">
                <a id="trial" href="<?php echo $attention_button_link; ?>" class="btnxl btnxl_white m-auto"><?php echo $attention_button_title; ?></a>

                <a id="demo" href="<?php echo $mobile_demo_button_link; ?>" class="btnxl btnxl_white _popup-link"><?php echo $mobile_demo_button_title; ?></a>

            </div>
        </div>
    </div>



</div>
