<?php

define('FXT_CHILD_VERSION', '1.0.0');
define('FXT_LOCAL_ENV', true);

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css', [], FXT_VERSION);
});
