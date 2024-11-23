<?php
// Základní nastavení šablony
function custom_theme_setup() {
    // Přidání podpory pro dynamické titulky
    add_theme_support('title-tag');
    
    // Přidání podpory pro náhledové obrázky
    add_theme_support('post-thumbnails');
    
    // Registrace menu
    register_nav_menus([
        'primary' => __('Primary Menu', 'custom-theme'),
    ]);
}
add_action('after_setup_theme', 'custom_theme_setup');

// Registrace stylů a skriptů
function enqueue_custom_assets() {
    // Načtení Tailwind CSS
    wp_enqueue_style('tailwind-custom', get_template_directory_uri() . '/output.css', [], null);


    // Načtení Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', [], null);

    // Načtení vlastního stylového souboru
    wp_enqueue_style('custom-style', get_stylesheet_uri());

    // Načtení JavaScriptu pro carousel
    wp_enqueue_script('carousel', get_template_directory_uri() . '/js/carousel.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_assets');

// Nastavení stránkování
function custom_pagination($query) {
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    // Pokud je to hlavní dotaz a není to stránka
    if ($query->is_main_query() && !$query->is_page()) {
        $query->set('paged', $paged);
    }
}
add_action('pre_get_posts', 'custom_pagination');

// Dynamické třídy těla a hlavičky
function custom_body_and_head_classes() {
    wp_head();
    wp_body_open();
}
add_action('wp_head', 'custom_body_and_head_classes');

// Podpora vlastních šablon stránek
// Šablony se již nastavují pomocí komentářů /* Template Name */ přímo v souborech jednotlivých stránek.

// Zajištění dynamických prvků pro stránky
function dynamic_image_path($path) {
    return get_template_directory_uri() . $path;
}

// Odstranění výchozích editorů bloků pro čistší správu obsahu
function disable_gutenberg_editor($is_enabled, $post_type) {
    if (in_array($post_type, ['page', 'post'])) {
        return false;
    }
    return $is_enabled;
}
add_filter('use_block_editor_for_post_type', 'disable_gutenberg_editor', 10, 2);

// Přidání cesty k vlastním JS a stylům (pokud jsou potřeba)
function add_theme_resources() {
    if (!is_admin()) {
        wp_enqueue_style('theme-css', get_template_directory_uri() . '/css/style.css');
    }
}
add_action('wp_enqueue_scripts', 'add_theme_resources');
