<div class="height2_block">
  <div class="block__wrapper">

    <div class="block-col">
      <?php if(get_sub_field('2height__image1')) {
        $imgh1 = get_sub_field('2height__image1'); ?>
        <div class="height1__img" style="background-image: url(<?php echo $imgh1; ?>)"></div>
      <?php } ?>

      <?php if(get_sub_field('2height__image2')) {
        $imgh2 = get_sub_field('2height__image2'); ?>
        <div class="height1__img" style="background-image: url(<?php echo $imgh2; ?>)"></div>
      <?php } ?>
    </div>

    <div class="block-col">
      <?php if(get_sub_field('2height__image3')) {
        $imgh3 = get_sub_field('2height__image3'); ?>
        <div class="height2__img" style="background-image: url(<?php echo $imgh3; ?>)"></div>
      <?php } ?>
    </div>

  </div>
</div>
