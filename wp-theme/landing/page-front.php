<?php
/**
 * Template Name: Home Page
 */

get_header();

$main_title       = get_field( 'main_title' );
$right_label      = get_field( 'right_label' );
$sub_title        = get_field( 'sub_title' );
$button_title     = get_field( 'button_title' );
$button_link      = get_field( 'button_link' );
$full_width_image = get_field( 'full_width_image' );

$help_title            = get_field( 'help_title' );
$help_section_features = get_field( 'help_section_features' );

?>

	<main class="page">
		<div class="firstview">
			<div class="container">
				<div class="firstview__top">
					<div class="toptitle">
						<h1 class="top__title"><?php echo $main_title; ?>
                            <span class="powered">
                                <p><?php echo $right_label; ?></p>
                            </span>
                        </h1>
					</div>
					<p class="top__description"><?php echo $sub_title; ?></p>
					<div class="buttons">
                        <a id="trial" href="<?php echo $button_link; ?>" class="btnxl btnxl_blue m-auto"><?php echo $button_title; ?></a>
                        <a id="demo" href="<?php echo $button_link; ?>" class="btnxl btnxl_blue _popup-link"><?php echo $button_title; ?></a>
                    </div>
				</div>
				<div class="firstview__bottom">
					<img src="<?php echo $full_width_image['url']; ?>" alt="agile-right">
				</div>
			</div>
		</div>
		<div class="teams">
			<div class="container">
				<div class="titleblock">
					<h2 class="titleblock__title"><?php echo $help_title; ?></h2>
				</div>
			</div>
			<div class="menuteam">
				<div class="container">
                    <?php if ( !empty( $help_section_features ) ) : ?>
					<ul class="menuteam__list">
                        <?php foreach ( $help_section_features as $item ) :  ?>
						    <li class="menuteam__item"><span class=""></span><?php echo $item['feature']; ?></li>
                        <?php endforeach; ?>
					</ul>
                    <?php endif; ?>
				</div>
			</div>
		</div>

        <?php
        $solution_title            = get_field( 'solution_title' );
        $solution_subtitle         = get_field( 'solution_subtitle' );
        $solution_section_features = get_field( 'solution_section_features' );
        ?>

		<div class="solution">
			<div class="container">
				<div class="titleblock">
					<h2 class="titleblock__title"><?php echo $solution_title; ?></h2>
					<p class="titleblock__description"><?php echo $solution_subtitle; ?></p>
				</div>
				<div class="menusolution">
					<div class="container">
                        <?php if ( !empty( $solution_section_features ) ) : ?>
                            <ul class="menusolution__list">
                                <?php foreach ( $solution_section_features as $sub_item ) : ?>
                                    <li class="menusolution__item"><?php echo $sub_item['solution']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
					</div>
				</div>
			</div>
		</div>

		<?php
		$attention_section_title       = get_field( 'attention_section_title' );
		$attention_section_right_label = get_field( 'attention_section_right_label' );
		$attention_button_title        = get_field( 'attention_button_title' );
		$attention_button_link         = get_field( 'attention_button_link' );
		?>

		<div class="cta cta-vector">
			<div class="container">
				<div class="ctatitle">
					<h3><?php echo $attention_section_title; ?>
                        <span><?php echo $attention_section_right_label; ?></span>
                    </h3>
				</div>
				<div class="buttons">
					<a href="<?php echo $attention_button_link; ?>"
					   class="btnxl btnxl_white m-auto"><?php echo $attention_button_title; ?></a>
				</div>
			</div>
		</div>

		<?php
		$platfrom_section_title      = get_field( 'platfrom_section_title' );
		$platfrom_section_subtitle   = get_field( 'platfrom_section_subtitle' );
		$platfrom_features           = get_field( 'platfrom_features' );
		?>

		<div class="tools">
			<div class="container-small">
				<div class="titleblock">
					<h2 class="titleblock__title"><?php echo $platfrom_section_title; ?></h2>
					<p class="titleblock__description"><?php echo $platfrom_section_subtitle; ?></p>
				</div>
				<div class="tabs-block _tabs">
                    <?php if ( !empty( $platfrom_features ) ) : ?>
					<nav class="tabs-block__nav">
                        <?php foreach ( $platfrom_features as $j => $item ) : ?>
	                        <?php if ( 0 === $j ) {
		                        $add_class = '_active';
	                        } else {
		                        $add_class = '';
	                        } ?>
						<div class="tabs-block__item _tabs-item <?php echo $add_class; ?>">
                            <img src="<?php echo $item['icon']['url']; ?>" alt="list_numbered">
                            <?php echo $item['title']; ?>
                        </div>
                        <?php endforeach; ?>

					</nav>
                    <?php endif; ?>

					<div class="tabs-block__body">
                        <?php foreach ( $platfrom_features as $key => $item ) : ?>
                            <?php if ( 0 === $key ) {
                                $add_class = '_active';
                            } else {
		                        $add_class = '';
                            } ?>
                            <div class="tabs-block__block _tabs-block <?php echo $add_class; ?>">
                                <img src="<?php echo $item['image']['url']; ?>" alt="">
                                <p><?php echo $item['description']; ?></p>
                            </div>
                        <?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>

		<?php
		$say_goodbye_title       = get_field( 'say_goodbye_title' );
		$say_goodbye_description = get_field( 'say_goodbye_description' );
		$say_goodbye_features    = get_field( 'say_goodbye_features' );
		$right_image             = get_field( 'right_image' );
		?>

		<div class="patterns">
			<div class="container-small">
				<div class="titleblock">
					<h2 class="titleblock__title"><?php echo $say_goodbye_title; ?></h2>
					<p class="titleblock__description"><?php echo $say_goodbye_description; ?></p>
				</div>
				<div class="dflex">
                    <?php if ( !empty( $say_goodbye_features ) ) : ?>
					<ul class="todolist">
                        <?php foreach ( $say_goodbye_features as $key => $feature ) : ?>
						<li class="todolist__item"><span><?php echo $key + 1; ?></span><p><?php echo $feature['item']; ?></p></li>
                        <?php endforeach; ?>
					</ul>
                    <?php endif; ?>

					<div class="listimg">
						<img src="<?php echo $right_image['url']; ?>" alt="agile-right">
					</div>
				</div>
			</div>
		</div>

		<?php
		$hide_powerful_block  = get_field( 'hide_powerful_block' );
		$powerful_title       = get_field( 'powerful_title' );
		$powerful_description = get_field( 'powerful_description' );
		$powerful_repeater    = get_field( 'powerful_repeater' );
		?>

        <?php if ( 'yes' !== $hide_powerful_block[0] ) : ?>
		<div class="powerful">
			<div class="container">
				<div class="titleblock">
					<h2 class="titleblock__title"><?php echo $powerful_title; ?></h2>
					<p class="titleblock__description"><?php echo $powerful_description; ?></p>
				</div>
				<div class="container-inner">
					<div class="tabs-block _tabs">
                        <?php if ( !empty( $powerful_repeater ) ) : ?>
						<nav class="tabs-block__nav">
                            <?php foreach ( $powerful_repeater as $k_j => $pow ) : ?>
	                            <?php if ( 0 === $k_j ) {
		                            $add_class = '_active';
	                            } else {
		                            $add_class = '';
	                            } ?>
							<div class="tabs-block__item _tabs-item <?php echo $add_class; ?>"><?php echo $pow['section_tab_title']; ?></div>
                            <?php endforeach; ?>
						</nav>
                        <?php endif; ?>

						<div class="tabs-block__body">

                        <?php if ( !empty( $powerful_repeater ) ) : ?>
	                        <?php foreach ( $powerful_repeater as $k_j => $pow ) : ?>
		                        <?php if ( 0 === $k_j ) {
			                        $add_class = '_active';
		                        } else {
			                        $add_class = '';
		                        } ?>
                                <div class="tabs-block__block _tabs-block <?php echo $add_class; ?>">
                                    <div class="swiper">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper">
                                            <?php if ( !empty( $pow ) ) : ?>
                                                <?php foreach ( $pow['slides'] as $slide ) : ?>
                                                    <div class="swiper-slide">
                                                        <img src="<?php echo $slide['image']['url']; ?>" alt="">
                                                        <p><?php echo $slide['description']; ?></p>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                        <!-- If we need navigation buttons -->
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-scrollbar"></div>
                                    </div>
                                </div>
	                        <?php endforeach; ?>
                        <?php endif; ?>

                        </div>
					</div>
				</div>
			</div>
		</div>
        <?php endif; ?>


		<?php
		$trial_title        = get_field( 'trial_title' );
		$trial_right_label  = get_field( 'trial_right_label' );
		$trial_button_title = get_field( 'trial_button_title' );
		$trial_button_link  = get_field( 'trial_button_link' );
		?>

		<div class="cta cta-vector">
			<div class="container">
				<div class="ctatitle">
					<h3><?php echo $trial_title; ?>
                        <span><?php echo $trial_right_label; ?></span>
                    </h3>
				</div>
				<div class="buttons"><a href="<?php echo $trial_button_link; ?>" class="btnxl btnxl_white m-auto"><?php echo $trial_button_title; ?></a></div>
			</div>
		</div>


		<?php
		$simplicity_title       = get_field( 'simplicity_title' );
		$simplicity_description = get_field( 'simplicity_description' );
		$simplicity_repeater    = get_field( 'simplicity_repeater' );
		?>

		<div class="simplicity">
			<div class="container">
				<div class="titleblock">
					<h2 class="titleblock__title"><?php echo $simplicity_title; ?></h2>
					<p class="titleblock__description"><?php echo $simplicity_description; ?></p>
				</div>
                <?php if ( !empty( $simplicity_repeater ) ) : ?>
				<ul class="simplicity__menu">
                    <?php foreach ( $simplicity_repeater as $item ) : ?>
                        <li class="simplicity__item">
                            <img src="<?php echo $item['icon']['url']; ?>" alt="check-ready">
                            <p><?php echo $item['description']; ?></p>
                        </li>
					<?php endforeach; ?>
				</ul>
                <?php endif; ?>
			</div>
		</div>

		<?php
		$what_we_do_title       = get_field( 'what_we_do_title' );
		$what_we_do_subtitle    = get_field( 'what_we_do_subtitle' );
		$what_we_do_description = get_field( 'what_we_do_description' );
		$testimonials_list      = get_field( 'testimonials_list' );
		?>

		<div class="testimonials">
			<div class="container">
				<div class="leftblock">
					<div class="titleblock">
						<h2 class="titleblock__title"><?php echo $what_we_do_title; ?></h2>
						<p class="titleblock__description"><?php echo $what_we_do_subtitle; ?></p>
					</div>
					<p class="leftblock_desc"><?php echo $what_we_do_description; ?></p>
				</div>
				<div class="rightblock">
                    <?php if ( !empty( $testimonials_list ) ) : ?>
					<ul class="testimonials__menu">
						<?php foreach ( $testimonials_list as $item ) : ?>
                        <li class="testimonials__item">
							<div class="left">
								<span class="quote"></span>
								<p><?php echo $item['description']; ?></p>
								<span><?php echo $item['name']; ?></span>
								<p><?php echo $item['position']; ?></p>
							</div>
							<div class="right">
								<img src="<?php echo $item['image']['url']; ?>" alt="Mark-Mitchell">
							</div>
						</li>
						<?php endforeach; ?>
					</ul>
                    <?php endif; ?>
				</div>
			</div>
		</div>

		<?php
		$action_title              = get_field( 'action_title' );
		$action_subtitle           = get_field( 'action_subtitle' );
		$action_bottom_text        = get_field( 'action_bottom_text' );
		$action_contacts_link      = get_field( 'action_contacts_link' );
		$action_demo_button_text   = get_field( 'action_demo_button_text' );
		$action_demo_button_link   = get_field( 'action_demo_button_link' );
		$action_signup_button_text = get_field( 'action_signup_button_text' );
		$action_signup_button_link = get_field( 'action_signup_button_link' );
		?>

		<div class="cta">
			<div class="container">
				<div class="ctatitle dflex column">
					<h3><?php echo $action_title; ?>
                        <p class="dflex_p"><?php echo $action_subtitle; ?></p>
                    </h3>
				</div>
				<div class="buttons btngroup">
					<a href="<?php echo $action_demo_button_link; ?>" class="btnxl btnxl_white _popup-link"><?php echo $action_demo_button_text; ?></a>
					<a href="<?php echo $action_signup_button_link; ?>" class="btnmedium btnmedium_nobg"><?php echo $action_signup_button_text; ?></a>
				</div>
				<p><?php echo $action_bottom_text; ?> <a href="<?php echo $action_contacts_link; ?>" class="_popup-link"><?php _e('Contact Us', 'landing'); ?></a></p>
			</div>
		</div>
		</div>
	</main>


<?php
get_footer();
