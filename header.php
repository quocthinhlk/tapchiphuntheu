<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name');?> &raquo; <?php is_front_page()? bloginfo('description'): wp_title('');?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $favicon = get_field('favicon', 'option');  ?>
  <link rel="icon" href="<?php echo esc_url($favicon['url']); ?>" type="image/x-icon"/>
  <?php wp_head(); ?>
</head>
<body>
  <?php
  $class = '';
  if (is_front_page()){
    $class ='';
  }else{
    $class = 'wapper_menu_active_fix';
  }
  ?>
  <header class="header">
    <div class="wapper_menu <?php echo $class; ?>">
      <div class="container">
        <div class="nav_menu wp_menu">
          <?php $logo = get_field('logo', 'option');  ?>
          <a href="<?php echo get_bloginfo('url') ?>"><img src="<?php echo esc_url($logo['url']); ?>"></a>
          <div class="navbar_menu">
            <div class="header__inner">
              <nav class="nav-menu">
                <?php
                wp_nav_menu(
                  array(
                    'theme_location'     => "nav-main-menu",
                    'menu_class'        => "menu",
                    'container'         => "",
                    'menu_id'     => "menu",
                  )
                );
                ?>
              </nav>
            </div>
          </div>
          <div class="nav_search">
            <div class="search_button">
              <i class="fas fa-search"></i>
            </div>
            <div class="search_form">
              <form action="<?php bloginfo('url'); ?>/" method="GET" role="form" class="search-form">
                <input type="hidden" name="post_type" value="post">
                <input type="text" name="s" class="search-text" placeholder="Tìm kiếm" required>
                <p class="close_button_search">✕</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mobile_menu">
      <div class="menu_button">
        <div class="logo_mobile">
          <a href="<?php echo get_bloginfo('url') ?>"><img src="https://tapchiphuntheu.com/wp-content/uploads/2019/09/logo-03.png"></a>
        </div>
        <div class="burger">
          <span class="burger__line burger__line_first"></span>
          <span class="burger__line burger__line_second"></span>
          <span class="burger__line burger__line_third"></span>
          <span class="burger__line burger__line_fourth"></span>
        </div>
      </div>
      <div class="mobile_menu_inner">
        <nav class="nav-menu-mobile">
          <?php
          wp_nav_menu(
            array(
              'theme_location'     => "nav-main-menu",
              'menu_class'        => "navbar_nav",
              'container'         => "",
              'menu_id'     => "menu",
            )
          );
          ?>
        </nav>
      </div>
    </div>
  </header>