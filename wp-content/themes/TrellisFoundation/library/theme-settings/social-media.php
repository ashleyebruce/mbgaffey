<?php

/**
 * Make sure we don't expose any info if called directly
 */
if (!function_exists('add_action')) {
  die('Hi there!  I\'m just a plugin, not much I can do when called directly.');
}

function display_twitter_field()
{
  echo '<input type="text" name="twitter_url" id="twitter_url" value="' . get_option('twitter_url') . '"/>';
}

function display_facebook_field()
{
  echo '<input type="text" name="facebook_url" id="facebook_url" value="' . get_option('facebook_url') . '"/>';
}

function display_fdtn_theme_panel_sm_fields()
{
  add_settings_section('socialmedia', 'Social Media Accounts', null, 'theme-options');
  
  add_settings_field('twitter_url', 'Twitter Profile URL', 'display_twitter_field', 'theme-options', 'socialmedia');
  add_settings_field('facebook_url', 'Facebook Profile URL', 'display_facebook_field', 'theme-options', 'socialmedia');

  register_setting('socialmedia', 'twitter_url');
  register_setting('socialmedia', 'facebook_url');
}

add_action('admin_init', 'display_fdtn_theme_panel_sm_fields');
