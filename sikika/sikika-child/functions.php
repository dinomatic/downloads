<?php

define('SIKIKA_CHILD_VERSION', '1.0.0');

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('sikika', get_template_directory_uri().'/style.css', [], SIKIKA_VERSION);
});
