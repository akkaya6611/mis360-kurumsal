<?php
/**
 * Mis360-360 functions and definitions
 */

if ( ! defined( "MIS360_360_VERSION" ) ) {
	define( "MIS360_360_VERSION", time() );
}

function mis360_360_setup() {
	add_theme_support( "automatic-feed-links" );
	add_theme_support( "title-tag" );
	add_theme_support( "post-thumbnails" );
	register_nav_menus( array(
		"menu-1" => esc_html__( "Primary", "mis360-360" ),
	) );
	add_theme_support( "custom-logo", array(
		"height"      => 250,
		"width"       => 250,
		"flex-width"  => true,
		"flex-height" => true,
	) );
}
add_action( "after_setup_theme", "mis360_360_setup" );

function mis360_360_scripts() {
	wp_enqueue_style( "fontawesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css", array(), "6.5.1" );
	wp_enqueue_style( "mis360-360-main-css", get_template_directory_uri() . "/assets/css/main.css", array(), MIS360_360_VERSION );
	wp_enqueue_style( "mis360-360-dark-css", get_template_directory_uri() . "/assets/css/dark.css", array(), MIS360_360_VERSION );
	
    if ( ! is_front_page() && ! is_home() ) {
        wp_enqueue_style( "mis360-360-page-css", get_template_directory_uri() . "/assets/css/page.css", array(), MIS360_360_VERSION );
    }
    if ( is_page("hakkimizda") ) {
        wp_enqueue_style( "mis360-360-hakkimizda-css", get_template_directory_uri() . "/assets/css/hakkimizda.css", array(), MIS360_360_VERSION );
    }
    if ( is_page("hizmetlerimiz") ) {
        wp_enqueue_style( "mis360-360-hizmetlerimiz-css", get_template_directory_uri() . "/assets/css/hizmetlerimiz.css", array(), MIS360_360_VERSION );
    }
    if ( is_page("projeler") ) {
        wp_enqueue_style( "mis360-360-projeler-css", get_template_directory_uri() . "/assets/css/projeler.css", array(), MIS360_360_VERSION );
        wp_enqueue_style( "mis360-360-referanslar-css", get_template_directory_uri() . "/assets/css/referanslar.css", array(), MIS360_360_VERSION );
    }
    if ( is_page("iletisim") ) {
        wp_enqueue_style( "mis360-360-iletisim-css", get_template_directory_uri() . "/assets/css/iletisim.css", array(), MIS360_360_VERSION );
    }
    if ( is_page("teklif") ) {
        wp_enqueue_style( "mis360-360-teklif-css", get_template_directory_uri() . "/assets/css/teklif.css", array(), MIS360_360_VERSION );
    }
    if ( is_page("musteri-paneli") ) {
        wp_enqueue_style( "mis360-360-musteri-paneli-css", get_template_directory_uri() . "/assets/css/musteri-paneli.css", array(), MIS360_360_VERSION );
    }
    if ( is_page("sss") || is_page("sik-sorulan-sorular") ) {
        wp_enqueue_style( "mis360-360-sss-css", get_template_directory_uri() . "/assets/css/sss.css", array(), MIS360_360_VERSION );
    }
    if ( is_page("banka") || is_page("banka-bilgileri") ) {
        wp_enqueue_style( "mis360-360-banka-css", get_template_directory_uri() . "/assets/css/banka.css", array(), MIS360_360_VERSION );
    }

	wp_enqueue_script( "mis360-360-main-js", get_template_directory_uri() . "/assets/js/main.js", array(), MIS360_360_VERSION, true );
}
add_action( "wp_enqueue_scripts", "mis360_360_scripts" );

/**
 * Tema aktif edildiÄŸinde gerekli sayfalarÄ± otomatik oluÅŸtur.
 */
function mis360_360_create_default_pages() {
    $pages = array(
        "HakkÄ±mÄ±zda" => "hakkimizda",
        "Banka Bilgileri" => "banka",
        "SÄ±k Sorulan Sorular" => "sss",
        "Hizmetlerimiz" => "hizmetlerimiz",
        "Projeler" => "projeler",
        "Ä°letiÅŸim" => "iletisim",
        "Teklif" => "teklif",
        "MÃ¼ÅŸteri Paneli" => "musteri-paneli"
    );

    foreach ( $pages as $title => $slug ) {
        $page_check = get_page_by_path( $slug );
        if ( ! isset( $page_check->ID ) ) {
            $new_page = array(
                "post_type"    => "page",
                "post_title"   => $title,
                "post_name"    => $slug,
                "post_status"  => "publish",
                "post_author"  => 1,
            );
            wp_insert_post( $new_page );
        }
    }
}

add_action( "init", function() {
    if ( ! get_option( "mis360_360_pages_created" ) ) {
        mis360_360_create_default_pages();
        update_option( "mis360_360_pages_created", true );
    }
} );

/**
 * GitHub Ã¼zerinden otomatik tema gÃ¼ncellemelerini kontrol et
 */
require_once( get_template_directory() . "/plugin-update-checker/plugin-update-checker.php" );
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	"https://github.com/akkaya6611/mis360-kurumsal/",
	__FILE__,
	"mis360-360"
);

// Sadece main (ana) dalÄ±ndaki gÃ¼ncellemeleri Ã§ek
$myUpdateChecker->setBranch("main");

add_action( 'init', function() {
    if ( ! get_option( 'mis360_360_db_pages_fixed_v2' ) ) {
        $fixes = array(
            'hakkimizda' => 'HakkÄ±mÄ±zda',
            'banka' => 'Banka Bilgileri',
            'sss' => 'SÄ±k Sorulan Sorular',
            'hizmetlerimiz' => 'Hizmetlerimiz',
            'projeler' => 'Projeler',
            'iletisim' => 'Ä°letiÅŸim',
            'teklif' => 'Teklif',
            'musteri-paneli' => 'MÃ¼ÅŸteri Paneli'
        );
        foreach ( $fixes as $slug => $correct_title ) {
            $page = get_page_by_path( $slug );
            if ( isset( $page->ID ) ) {
                if ($page->post_title !== $correct_title) {
                    wp_update_post( array(
                        'ID' => $page->ID,
                        'post_title' => $correct_title
                    ) );
                }
            } else {
                wp_insert_post( array(
                    'post_type'    => 'page',
                    'post_title'   => $correct_title,
                    'post_name'    => $slug,
                    'post_status'  => 'publish',
                    'post_author'  => 1,
                ) );
            }
        }
        update_option( 'mis360_360_db_pages_fixed_v2', true );
    }
} );

