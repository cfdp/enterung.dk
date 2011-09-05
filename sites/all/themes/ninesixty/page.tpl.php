<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
?>
<div id="topbanner-background"></div>
<div id="topbanner-background-white"></div>
<div id="page" class="container-12 clearfix">

  <div id="site-header" class="clearfix">
    <div class="transparency grid-12 push-6" ></div>
    <div id="branding" class="grid-4 clearfix">
      <?php if ($linked_logo_img): ?>
        <span id="logo" class="grid-1 alpha"><?php print $linked_logo_img; ?></span>
      <?php endif; ?>
      <?php if ($linked_site_name): ?>
        <h1 id="site-name" class="grid-3 omega"><?php print $linked_site_name; ?></h1>
      <?php endif; ?>
      <?php if ($site_slogan): ?>
        <div id="site-slogan" class="grid-3 push-4 omega"><?php print $site_slogan; ?></div>
      <?php endif; ?>
      <?php if ($page['about_us']): ?>
        <div id="about-us" class="grid-4 push-8 omega"><?php print render($page['about_us']); ?></div>
      <?php endif; ?>
      <?php print $breadcrumb; ?>
    </div>

  <?php if ($main_menu_links || $secondary_menu_links): ?>
    <div id="site-menu" class="grid-12">
      <?php print $main_menu_links; ?>
      <?php print $secondary_menu_links; ?>
    </div>
  <?php endif; ?>

  <?php if ($page['search_box']): ?>
    <div id="search-box" class="grid-6 prefix-10"><?php print render($page['search_box']); ?></div>
  <?php endif; ?>
  </div>

  <div id="site-subheader" class="prefix-1 suffix-1 clearfix">
  <?php if ($page['highlighted']): ?>
    <div id="highlighted" class="<?php print ns('grid-10', $page['header'], 7); ?>">
      <?php print render($page['highlighted']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['header']): ?>
    <div id="header-region" class="region <?php print ns('grid-10', $page['highlighted'], 7); ?> clearfix">
      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>
  </div>


  <div id="main" class="column <?php print ns('grid-12', $page['sidebar_first'], 3, $page['sidebar_second'], 3) . ' ' . ns('push-3', !$page['sidebar_first'], 3); ?>">
   
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>      
    <?php if ($tabs): ?>
      <div class="tabs"><?php print render($tabs); ?></div>
    <?php endif; ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <div id="main-content" class="region clearfix">
      <?php print render($page['content']); ?>
    </div>

    <?php print $feed_icons; ?>
  </div>

<?php if ($page['sidebar_first']): ?>
  <div id="sidebar-left" class="column sidebar region grid-3 <?php print ns('pull-9', $page['sidebar_second'], 3); ?>">
    <?php print render($page['sidebar_first']); ?>
  </div>
<?php endif; ?>

<?php if ($page['sidebar_second']): ?>
  <div id="sidebar-right" class="column sidebar region grid-3">
    <?php print render($page['sidebar_second']); ?>
  </div>
<?php endif; ?>

<?php if ($page['sidebar_second_bottom']): ?>
  <div id="sidebar-right-bottom" class="column sidebar region grid-3">
    <?php print render($page['sidebar_second_bottom']); ?>
  </div>
<?php endif; ?>


  <div id="footer" class="prefix-1 suffix-1">
    <?php if ($page['footer']): ?>
      <div id="footer-region" class="region grid-10 clearfix">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
  </div>

</div>
