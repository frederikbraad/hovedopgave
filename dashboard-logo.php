<?php

function custom_logo_wp_dashboard() {
  echo "<style type='text/css'>
    #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
      background-image: url('" . get_bloginfo('stylesheet_directory') . "/admin-icon.png');
      background-size: contain;
      background-position: 0 0;
      color:rgba(0, 0, 0, 0);
    }
    #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon {
      background-position: 0 0;
    }
    </style>";
}
add_action('wp_before_admin_bar_render', 'custom_logo_wp_dashboard');
