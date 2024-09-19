# react-app-iframe

I’m relatively new to WordPress but wanted to add an interactive React program to my WordPress site. Most of the information I found online was about using React as a frontend to turn WordPress into a headless CMS.

It was nearly impossible to find any help.

This plugin makes it simple to include one or more React apps inside your WordPress site.

## Basic Operation

Since WordPress is a content management system that both manages and serves content, and considering that a React app is also content, serving a React app through WordPress is very straightforward.

First step: Very important—your React app must be configured to operate using relative links, not absolute ones. After ensuring this, find a suitable location within the wp-content directory to store your app. All content under this directory is accessible via URL. For instance, if you place the app in `wp-content/my-app`, you can access it from your WordPress site by navigating to `https://my.wordpress.site/wp-content/my-app`. For better organization and convention, I recommend placing all React apps in a react-apps subdirectory under `wp-content`. Verify access through the website URL to confirm proper installation.

Second step: Install this plugin by either copying or cloning it into your `wp-content/plugins` directory. For organizational purposes, you might want to enclose it in its own directory.

Final step: Embed your app into a WordPress page or post using a shortcode in the block editor. For example:

```[react_app_iframe path="map-app" width="100%" height="800"]```

The advantage of using this shortcode is that the site URL is incorporated into the logic of the code. I like to first deploy locally on my PC where the site URL includes a directory, but in production, it is directly off the root path. This keeps the page code portable.

In the usage of the shortcode, the width and height parameters are optional.