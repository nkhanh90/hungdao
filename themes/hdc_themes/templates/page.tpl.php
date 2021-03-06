<div class="l-page">
  <header class="l-header" role="banner">
    <div class="l-banner">
      <?php print render($page['banner']); ?>
    </div>
    <div class="l-branding">      
      <div class="l-branding-wrapper">    
        <div class="l-user">        
          <div class="l-user-wrapper">
            <?php if ($logo): ?>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
            <?php endif; ?>

            <?php if ($site_name || $site_slogan): ?>
              <?php if ($site_name): ?>
                <h1 class="site-name">
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </h1>
              <?php endif; ?>

              <?php if ($site_slogan): ?>
                <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
              <?php endif; ?>
            <?php endif; ?>
          </div>
          <div class="l-user-addition">
            <?php print render($page['user']); ?>
          </div>
        </div>
      </div>
      
      <?php print render($page['branding']); ?>
    </div>
    <?php print render($page['header']); ?>
    <?php print render($page['navigation']); ?>
  </header>

  <div class="l-main">
    <div class="l-main-header">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php print $breadcrumb; ?>
    </div>
    <div class="l-main-wrapper l-constrained">
      <div class="l-content" role="main">
        <?php print render($page['highlighted']); ?>
        <a id="main-content"></a>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div>

      <?php print render($page['sidebar_first']); ?>
      <?php print render($page['sidebar_second']); ?>
    </div>
  </div>

  <footer class="l-footer" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
</div>


