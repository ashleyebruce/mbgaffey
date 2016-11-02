<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php if (is_category()) {
      echo 'Category Archive for &quot;';
      single_cat_title();
      echo '&quot; | ';
      bloginfo('name');
    } elseif (is_tag()) {
      echo 'Tag Archive for &quot;';
      single_tag_title();
      echo '&quot; | ';
      bloginfo('name');
    } elseif (is_archive()) {
      wp_title('');
      echo ' Archive | ';
      bloginfo('name');
    } elseif (is_search()) {
      echo 'Search for &quot;' . esc_html($s) . '&quot; | ';
      bloginfo('name');
    } elseif (is_home() || is_front_page()) {
      bloginfo('name');
      echo ' | ';
      bloginfo('description');
    } elseif (is_404()) {
      echo 'Error 404 Not Found | ';
      bloginfo('name');
    } elseif (is_single()) {
      wp_title('');
    } else {
      echo wp_title(' | ', 'false', 'right');
      bloginfo('name');
    } ?></title>

  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"/>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action('foundationPress_after_body'); ?>
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <header>
      <div class="row">
        <div class="column">
          <div class="title"><a href="<?php echo site_url(); ?>"><?php the_field('header_title', 'option'); ?></a>
            <span>
              <?php
              $menuIcon = get_field('menu_icon', 'option');
              if( !empty($menuIcon) ): ?>
                <img data-reveal-id="menu" src="<?php echo $menuIcon['url']; ?>" alt="<?php echo $menuIcon['alt']; ?>" />
              <?php endif; ?>
            </span>
          </div>
        </div>
      </div>
    </header>
    <div id="menu" class="reveal-modal reaveal-header" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
      <?php foundationPress_primary_menu(); ?>
    </div>

    <section class="container" role="document">
      <?php do_action('foundationPress_after_header'); ?>