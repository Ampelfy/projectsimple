<ul class="social-links">
    <?php if( get_field('facebook_link')) { ?>
      <li class="social-link">
        <a href="<?php the_field('facebook_link') ?>" target="_blank" class="facebook-link">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
    <?php } ?>
    <?php if( get_field('in_link')) { ?>
      <li class="social-link">
        <a href="<?php the_field('in_link') ?>" target="_blank">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </li>
    <?php } ?>
    <?php if( get_field('instagram_link')) { ?>
      <li class="social-link instagram_link">
        <a href="<?php the_field('instagram_link') ?>" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
    <?php } ?>
</ul>

