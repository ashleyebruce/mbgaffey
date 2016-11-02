<?php

// Enqueue scripts
require_once('library/customize.php');

// Add post types
require_once('library/post-types.php');

// Add custom fields
require_once('library/custom-fields.php');

// Add options pages
require_once('library/options-pages.php');

// Register all navigation menus
require_once('library/navigation.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
  $parent_style = 'parent-style';

  wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
  wp_enqueue_style(
    'child-style',
    get_stylesheet_directory_uri() . '/css/app.css',
    array ($parent_style)
  );
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

?>