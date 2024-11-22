<?php
function meu_tema_setup() {
    // Suporte a menus
    register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'meu-tema' ),
    ) );

    // Suporte a imagens destacadas
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'meu_tema_setup' );

// Enfileirar estilos e scripts
function meu_tema_enqueue_styles() {
    wp_enqueue_style( 'meu-tema-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'meu_tema_enqueue_styles' );


function carregar_scripts_swiper() {
    // Enfileirando o CSS do Swiper
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), null);

    // Enfileirando o JS do Swiper
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'carregar_scripts_swiper');


// Menu Responsivo Personalizado
function register_my_menu() {
    register_nav_menu('primary', __( 'Primary Menu' ));
}
add_action( 'after_setup_theme', 'register_my_menu' );


// AOS INSTALL
function enqueue_aos_assets() {
    // CSS do AOS
    wp_enqueue_style('aos-css', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css');
    
    // JS do AOS
    wp_enqueue_script('aos-js', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array(), null, true);
    
    // Inicialização do AOS no footer
    wp_add_inline_script('aos-js', 'AOS.init();');
}
add_action('wp_enqueue_scripts', 'enqueue_aos_assets');