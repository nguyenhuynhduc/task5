<?php

add_theme_support( 'post-thumbnails' );

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

function thachpham_styles() {
    /*
     * Hàm get_stylesheet_uri() sẽ trả về giá trị dẫn đến file style.css của theme
     * Nếu sử dụng child theme, thì file style.css này vẫn load ra từ theme mẹ
     */
    wp_register_style( 'main-style', get_template_directory_uri() . '/js/task1.css', 'all' );
    wp_enqueue_style( 'main-style' );
}
add_action( 'wp_enqueue_scripts', 'thachpham_styles' );


?>

