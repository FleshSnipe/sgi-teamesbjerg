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

    // Načtení JavaScriptu pro carousel
    wp_enqueue_script('carousel', get_template_directory_uri() . '/js/carousel.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_assets');

// Nastavení stránkování
function custom_pagination($query) {
    if ($query->is_main_query() && !$query->is_page()) {
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $query->set('paged', $paged);
    }
}
add_action('pre_get_posts', 'custom_pagination');

// Dynamické třídy těla a hlavičky (odstraněno - nebylo potřeba)

// Zajištění dynamických prvků pro stránky
function dynamic_image_path($path) {
    return get_template_directory_uri() . $path;
}

// Přidání cesty k vlastním JS a stylům (odstraněno - redundantní)
