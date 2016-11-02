<?php

function fdtn_theme_settings_page()
{
  ?>
  <div class="wrap">
    <h1>Theme Settings</h1>

    <form action="options.php" method="POST">
      <?php
      settings_fields('socialmedia');
      do_settings_sections('theme-options');
      submit_button();
      ?>
    </form>
  </div>
  <?php
}

function add_fdtn_theme_menu_item()
{
  add_menu_page('Theme Settings', 'Theme Settings', 'manage_options', 'theme-settings', 'fdtn_theme_settings_page', null, 99);
}
add_action('admin_menu', 'add_fdtn_theme_menu_item');


require_once 'theme-settings/social-media.php';