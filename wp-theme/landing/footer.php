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


<script> 
 
     document.getElementById("cn-accept-cookie").addEventListener("click", setup_acept_cookie);
     
     function setup_acept_cookie(){
       let age = 2592000; // 1 month
              setCookie('accept_all_cookies', true, {secure: true, 'max-age': age});
              setTimeout(function(){
                document.getElementById("cookie-notice").remove();
              }, 500);
              
              
     }
 
    
      function setCookie(c_name,value,exdays) {
          var exdate=new Date();
          exdate.setDate(exdate.getDate() + exdays);
          var c_value=escape(value) + ((exdays==null)
                                   ? "" : "; expires="+exdate.toUTCString())
                                  + "; path=/";
          document.cookie=c_name + "=" + c_value;
      }
      
      
     
      
      
    </script>


<?php 
     if ( 'true' == $_COOKIE['accept_all_cookies'] ) { ?>
         <style>
           #cookie-notice{
             display:none !important;
           }
         </style>
     <?php      
     }
  ?>
  
  
  <?php 
				$anim_file = get_field( 'top_animation_file_in_json_format' );

				if ( !empty( $anim_file['url'] ) ) :
				?>

				<script>
					const anim = lottie;

					lottie.loadAnimation({
						container: document.querySelector('#top-lottiefiles-animate'), // the dom element that will contain the animation
						renderer: 'svg',
						loop: true,
						autoplay: true,
						path: '<?php echo $anim_file['url']; ?>' // the path to the animation json
					});
				</script>

				<?php endif; ?>
  

</body>

</html>
