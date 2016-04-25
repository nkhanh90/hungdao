<div id="tabs">
  <ul>
    <?php
    foreach ($bean_slider as $key => $value) :
      ?>
      <li><a href="<?php print "#tab-" . $key; ?>"><?php print($value['title']); ?></a></li>
      <?php
    endforeach;
    ?>
  </ul>
  <?php
  foreach ($bean_slider as $key => $value) :
    ?>
    <div id = "<?php print "tab-" . $key; ?>">
<h2><?php print($value['title']); ?></h2>
     <div class="body"><?php print $value['body'] ; ?></div>
    </div>
    <?php
  endforeach;
  ?>     
</div>
