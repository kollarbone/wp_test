<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts');

add_action('wp_ajax_send_mail', 'send_mail');
add_action('wp_ajax_nopriv_send_mail', 'send_mail');

function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}

function scripts() {
    wp_enqueue_script('scripts', get_template_directory_uri() . '/scripts.js', ['jquery'], '1.0', true);
}

function send_mail() {
    $contactName = $_POST['contactName'];
    $contactPhone = $_POST['contactPhone'];
    $to = get_option('admin_email');
    $headers = array(
        'From: <me@example.net>',
        'content-type: text/html',
        'Cc: John Q Codex <jqc@wordpress.org>',
        'Cc: iluvwp@wordpress.org',
    );
    wp_mail( $to, $contactName, $contactPhone, $headers);
    wp_die();
}