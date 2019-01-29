
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width; initial-scale=1">
      <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="tars-wrapper">
      <div class="tars-row header sides-padding">
        <div class="sp-col-4 desktop">
          <h1 class="title"><a href="<?php echo site_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
        </div>
        <div class="sp-col-8 desktop right-aligned">
          <ul class="menu">
            <li <?php if(is_front_page()) echo 'class="selected"'; ?>><a href="<?php echo site_url('/'); ?>">Home</a></li>
            <li <?php if(is_home() or get_post_type() == 'post') echo 'class="selected"'; ?>><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
            <li <?php if(is_page('contact')) echo 'class="selected"'; ?>><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
          </ul>
        </div>
        <div class="sp-col-12 mobile">
          <div class="mobile-menu">
            <div class="handle" id="mobile-menu-handle">
              <i class="fa fa-bars fa-lg"></i> <?php bloginfo('name'); ?>
            </div>
            <div class="body" id="mobile-menu-body">
              <ul>
                <a href="<?php echo site_url('/'); ?>"><li <?php if(is_front_page()) echo 'class="selected"'; ?>>Home</li></a>
                <a href="<?php echo site_url('/blog'); ?>"><li <?php if(is_home() or get_post_type() == 'post') echo 'class="selected"'; ?>>Blog</li></a>
                <a href="<?php echo site_url('/contact'); ?>"><li <?php if(is_page('contact')) echo 'class="selected"'; ?>>Contact</li></a>
              </ul>
            </div>
          </div>
        </div>
      </div>