<div class="flexslider front-page-slider">
  <ul class="slides">
    <?php
    foreach ($bean_slider as $key => $value) :
      ?>
      <li class="slide">
        <div class="slide-img">          
          <img src="<?php print(image_style_url('slider_1903x560', $value['photo'])) ?>" />
        </div>
        <div class="slide-content">
          <div class="slide-content-wrapper">
            <div class="slider-caption"> 
              <div class="caption">
                <h2><?php print($value['title']); ?></h2>
                <div><?php print($value['body']); ?></div>
                <div><?php print($value['link']); ?></div>
                <em></em>
              </div>
            </div>
          </div>
        </div>
      </li>
      <?php
    endforeach;
    ?>
  </ul>
</div>
