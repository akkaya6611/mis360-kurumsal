<?php
/**
 * MİS360 Custom Post Types & Taxonomies
 * Çok Amaçlı (İlan, Ajans Hizmetlersü, Hizmet/Yol Yardım) Dinamik Kayıtlar
 *
 * @package MİS360
 * @author  Serkan AKKAYA <https://misteknoloji360.com.tr/>
 * @since   1.0.0
 */

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

/**
 * 'mis360_listing' CPT ve Taksonomi Kaydı
 */
function mis360_register_cpt(): void {
    // 1. CPT: İlanlar, Hizmetler Öğeleri ve Hizmetler
    $labels = [
        'name'                  => esc_html_x('İlanlar / Hizmetler & Hizmetler', 'Post type general name', 'mis360'),
        'singular_name'         => esc_html_x('İlan / Hizmetler / Hizmet', 'Post type singular name', 'mis360'),
        'menu_name'             => esc_html__('İlan & Hizmetler', 'mis360'),
        'name_admin_bar'        => esc_html__('İlan / Hizmkod Ekle', 'mis360'),
        'add_new'               => esc_html__('Yeni Ekle', 'mis360'),
        'add_new_item'          => esc_html__('Yeni İlan / Hizmetler Öğesi / Hizmkod Ekle', 'mis360'),
        'new_item'              => esc_html__('Yeni Öğe', 'mis360'),
        'edit_item'             => esc_html__('Öğeyi Düzenle', 'mis360'),
        'view_item'             => esc_html__('Öğeyi Görüntüle', 'mis360'),
        'all_items'             => esc_html__('Tüm Liste (İlan/Hizmetler/Hizmet)', 'mis360'),
        'search_items'          => esc_html__('Öğelerde Ara', 'mis360'),
        'not_found'             => esc_html__('Kayıt bulunamadı.', 'mis360'),
        'not_found_in_trash'    => esc_html__('Çöp kutusunda kayıt bulunamadı.', 'mis360'),
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'ilanlar', 'with_front' => false],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-grid-view',
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'show_in_rest'       => true, // Gutenberg blok editör uyumluluğu
    ];

    register_post_type('mis360_listing', $args);

    // 2. Taksonomi: Kategoriler (Örn: Çekici Hizmetleri, Ana projeler, Emlak İlanları vb.)
    $tax_labels = [
        'name'              => esc_html_x('Kategoriler', 'taxonomy general name', 'mis360'),
        'singular_name'     => esc_html_x('Kategori', 'taxonomy singular name', 'mis360'),
        'search_items'      => esc_html__('Kategorilerde Ara', 'mis360'),
        'all_items'         => esc_html__('Tüm Kategoriler', 'mis360'),
        'parent_item'       => esc_html__('Üst Kategori', 'mis360'),
        'parent_item_colon' => esc_html__('Üst Kategori:', 'mis360'),
        'edit_item'         => esc_html__('Kategoriyi Düzenle', 'mis360'),
        'update_item'       => esc_html__('Kategoriyi Güncelle', 'mis360'),
        'add_new_item'      => esc_html__('Yeni Kategori Ekle', 'mis360'),
        'new_item_name'     => esc_html__('Yeni Kategori Adı', 'mis360'),
        'menu_name'         => esc_html__('Kategoriler', 'mis360'),
    ];

    register_taxonomy('mis360_listing_cat', ['mis360_listing'], [
        'hierarchical'      => true,
        'labels'            => $tax_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'kategori', 'with_front' => false],
        'show_in_rest'      => true,
    ]);
}
add_action('init', 'mis360_register_cpt');
