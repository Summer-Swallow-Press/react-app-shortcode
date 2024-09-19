<?php
/*
Plugin Name: React App Shortcode
Description: A simple plugin to embed multiple React apps using a shortcode with dynamic URLs.
Version: 1.1
Author: Haw-minn Lu
*/

function react_app_iframe_shortcode($atts) {
    // Set default values for the attributes
    $atts = shortcode_atts(
        array(
            'path' => 'my-app', // Default React app path
            'width' => '100%',                             // Default width
            'height' => '800',                             // Default height
        ), 
        $atts, 
        'react_app_iframe'
    );

    // Get the base site URL dynamically
    $site_url = get_site_url();

    // Build the full path to the React app by appending the relative path
    $iframe_src = esc_url($site_url . '/wp-content/react-apps/' . $atts['path']);

    // Return the iframe HTML with the dynamic width, height, and path
    return '<iframe src="' . $iframe_src . '" width="' . esc_attr($atts['width']) . '" height="' . esc_attr($atts['height']) . '"></iframe>';
}

// Register the shortcode
add_shortcode('react_app_iframe', 'react_app_iframe_shortcode');
