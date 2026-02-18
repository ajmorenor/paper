<?php

if ( ! function_exists( 'visor_noticias_setup' ) ) :
    function visor_noticias_setup() {
        // 1. Títulos SEO automáticos (Estándar WP 4.1+)
        add_theme_support( 'title-tag' );

        // 2. Imágenes destacadas
        add_theme_support( 'post-thumbnails' );

        // 3. Feeds RSS automáticos (Crítico para Google Discover)
        add_theme_support( 'automatic-feed-links' );

        // 4. Soporte HTML5 para formularios y galerías (Estándar WP 6.x)
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ) );

        // 5. Registrar Menús
        register_nav_menus( array(
            'primary' => __( 'Menú Principal', 'visor-noticias' ),
            'footer'  => __( 'Menú Footer', 'visor-noticias' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'visor_noticias_setup' );

function visor_noticias_scripts() {
    // Cargar Tailwind (CDN)
    wp_enqueue_script( 'tailwindcss', 'https://cdn.tailwindcss.com', array(), '3.4.0', false );

    // Fuentes Google Optimizadas
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,400&family=Inter:wght@300;400;500;600;700&display=swap', array(), null );

    // Estilo principal
    wp_enqueue_style( 'visor-style', get_stylesheet_uri(), array(), '1.1' );
}
add_action( 'wp_enqueue_scripts', 'visor_noticias_scripts' );

// Configuración Tailwind en el Head
function visor_noticias_tailwind_config() {
    ?>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        serif: ["Merriweather", "serif"],
                        sans: ["Inter", "sans-serif"],
                    }
                }
            }
        }
    </script>
    <?php
}
add_action( 'wp_head', 'visor_noticias_tailwind_config' );
?>