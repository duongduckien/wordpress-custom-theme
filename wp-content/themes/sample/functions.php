<?php

define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL . '/core');
define('TEMPLATE_URI', get_template_directory_uri());
define('HOME_URL', get_home_url());

require_once(CORE . '/init.php');

if (!function_exists('sample_setup')) {
    function sample_setup() {
        $languageFolder = THEME_URL . '/languages';
        load_theme_textdomain('sample', $languageFolder);

        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        // Background
        $defaultBg = array(
            'default-color' => 'ffffff',
        );
        add_theme_support('custom-background', $defaultBg);
    }

    add_action('init', 'sample_setup');
}

if (!function_exists('sample_scripts')) {
    function sample_scripts() {
        wp_enqueue_style('sample-style', TEMPLATE_URI . '/dist/style.css', array(), false);
        wp_enqueue_script('sample-script', TEMPLATE_URI . '/dist/app.js', array(), false, true);
    }

    add_action('wp_enqueue_scripts', 'sample_scripts');
}
