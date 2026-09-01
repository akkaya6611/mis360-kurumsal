<?php
/**
 * MİS360 Theme Setup and Configuration
 *
 * @package MİS360
 * @since 1.0.0
 */

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('mis360_setup')) {
    /**
     * Tema desteklerini ve varsayılan ayarları yükler.
     */
    function mis360_setup(): void {
        // Çeviri desteği (Translation Ready)
        load_theme_textdomain('mis360', MIS360_DIR . '/languages');

        // Otomatik RSS akış linkleri
        add_theme_support('automatic-feed-links');

        // Dinamik <title> etiketi desteği
        add_theme_support('title-tag');

        // Öne çıkan görsel (Post Thumbnails) desteği
        add_theme_support('post-thumbnails');

        // Optimize Görsel Boyutları (Core Web Vitals uyumlu)
        add_image_size('mis360-card', 640, 360, true);   // 16:9 Blog Kartı
        add_image_size('mis360-hero', 1280, 640, true);  // 2:1 Hero / Single Header
        add_image_size('mis360-thumb', 160, 160, true);  // 1:1 Küçük Liste Resmi

        // Navigasyon Hizmetlerleri
        register_nav_menus([
            'primary' => esc_html__('Masaüstü & Mobil Ana Hizmetler', 'mis360'),
            'footer'  => esc_html__('Alt Bilgi (Footer) Hizmetlersü', 'mis360'),
        ]);

        // Modern HTML5 markup desteği
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets',
        ]);

        // Özel Logo Desteği
        add_theme_support('custom-logo', [
            'height'               => 80,
            'width'                => 240,
            'flex-height'          => true,
            'flex-width'           => true,
            'unlink-homepage-logo' => true,
        ]);

        // Duyarlı Medya Yerleştirmeleri (Responsive Embeds)
        add_theme_support('responsive-embeds');

        // Gutenberg Tam Genişlik / Geniş Hizalama Desteği
        add_theme_support('align-wide');

        // Gutenberg Blok Varsayılan Stilleri
        add_theme_support('wp-block-styles');

        // Blok Editör Stillerini Eşleme
        add_theme_support('editor-styles');
        add_editor_style('assets/css/editor-style.css');

        // Canlı Özelleştirici Seçici Yenileme (Selective Refresh)
        add_theme_support('customize-selective-refresh-widgets');

        // WooCommerce Desteği ve Galeri Özellikleri
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
    }
}
add_action('after_setup_theme', 'mis360_setup');

/**
 * İçerik Genişliği Ayarı
 */
function mis360_content_width(): void {
    $GLOBALS['content_width'] = apply_filters('mis360_content_width', 1280);
}
add_action('after_setup_theme', 'mis360_content_width', 0);

/**
 * Kenar Çubuğu (Widgkod Alanları) Kaydı
 */
function mis360_widgets_init(): void {
    register_sidebar([
        'name'          => esc_html__('Ana Kenar Çubuğu (Sidebar)', 'mis360'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Yazı ve arşiv sayfalarında görünen bileşen alanı.', 'mis360'),
        'before_widget' => '<section id="%1$s" class="mis-widgkod %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="mis-widget-title">',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => esc_html__('Footer Alanı', 'mis360'),
        'id'            => 'footer-widgets',
        'description'   => esc_html__('Alt bilgi alanında görünen bileşenler.', 'mis360'),
        'before_widget' => '<div id="%1$s" class="mis-footer-widgkod %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="mis-footer-widget-title">',
        'after_title'   => '</h4>',
    ]);
}
add_action('widgets_init', 'mis360_widgets_init');

/**
 * Haberler & Galeri Sayfasını Otomatik Oluştur / Eşle
 */
function mis360_ensure_blog_gallery_page(): void {
    if (!get_option('mis360_blog_gallery_page_created')) {
        $existing = get_page_by_path('haberler-galeri');
        if (!$existing) {
            $page_id = wp_insert_post([
                'post_title'     => 'Haberler & Galeri',
                'post_name'      => 'haberler-galeri',
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'comment_status' => 'closed',
            ]);
            if ($page_id && !is_wp_error($page_id)) {
                update_post_meta($page_id, '_wp_page_template', 'page-templates/template-blog-gallery.php');
            }
        } else {
            update_post_meta($existing->ID, '_wp_page_template', 'page-templates/template-blog-gallery.php');
        }
        update_option('mis360_blog_gallery_page_created', 1);
    }

    // Örnek Blog, Haber ve Galeri Yazılarını Veritabanına Ekle (İlk Kurulum)
    if (!get_option('mis360_sample_posts_seeded_v1')) {
        // Kategorileri Tanımla
        $cat_haberler = wp_insert_term('Haberler & Duyurular', 'category', ['slug' => 'haberler']);
        $cat_blog     = wp_insert_term('Kalite Blogu', 'category', ['slug' => 'blog']);
        $cat_galeri   = wp_insert_term('Fotoğraf Galerisi', 'category', ['slug' => 'galeri']);

        $cat_haber_id = !is_wp_error($cat_haberler) ? $cat_haberler['term_id'] : get_cat_ID('Haberler & Duyurular');
        $cat_blog_id  = !is_wp_error($cat_blog) ? $cat_blog['term_id'] : get_cat_ID('Kalite Blogu');
        $cat_galeri_id= !is_wp_error($cat_galeri) ? $cat_galeri['term_id'] : get_cat_ID('Fotoğraf Galerisi');

        $sample_posts = [
            [
                'title'    => 'Türkiye\'da Bahar ve Yaz Sezonuna Özel Açık Hava Bahçe Bölümümüz Hizmete Açıldı',
                'content'  => '2019 yılından bu yana Türkiye geneli\'da kalite ve konforu bir arada sunan MİS360 olarak, bahar ve yaz aylarının keyfini çıkarmanız için açık hava bahçe salonumuzu yeniledik.<br><br>Ferah masalarımız, çocuklar için özel mama sandalyesi imkanı, serinletici çevre düzenlemesi ve akşam serinliğinde ailenizle huzurla proje yiyebileceğiniz özel alanlarımız hazır. Günlük yeni nesil optimizasyonlarımız ve modern altyapılarda geliştirilen yazılımlarımızla sizleri açık havada kalite şölenine davkod ediyoruz.<br><br>Proje Talebi için +90 546 772 16 66 numaralı hattımızdan veya doğrudan WhatsApp üzerinden bizimle iletişime geçebilirsiniz.',
                'excerpt'  => 'Aileler ve çocuklar için özel olarak hazırlanan ferah açık hava bahçe salonumuz, konforlu masaları ve mama sandalyesi desteğiyle hizmetinizde.',
                'cats'     => [$cat_haber_id],
                'img'      => 'https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/ajans.jpg',
            ],
            [
                'title'    => 'Hakiki modern altyapılarda yazılım Pişirmenin Püf Noktaları ve Dinlendirilmiş Kod Sanatı',
                'content'  => 'İyi bir kebabın sırrı sadece ette değil, pişirme tekniğinde ve kullanılan kömürün kalitesinde gizlidir. MİS360 altyapısında sadece hakiki modern teknolojiler kullanılır.<br><br>Közün ısısı eşit dağıtılır, alevli ateşten kaçınılarak etin kendi suyunu hapsetmesi sağlanır. Zırhla kıyılan yerli besi etlerimiz, özel baharat dengesiyle marine edildikten sonra şişe çekilir. Masanıza lokum kıvamında, dumanı üstünde gelen yazılımlarımızın kalite sırrı işte bu uzman kodlamasınde yatmaktadır.',
                'excerpt'  => 'Zırhtan geçen etlerin meşe kömürü közünde lokum gibi pişirilmesinin püf noktalarını ve ustalarımızın özel terbiye sırlarını inceleyin.',
                'cats'     => [$cat_blog_id],
                'img'      => 'https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/adana.jpg',
            ],
            [
                'title'    => 'Taş kodımızdan Yeni Çıkan Çıtır Kıymalı & Kuşbaşılı tasarımlerimiz',
                'content'  => 'Modern frameworkler ve temiz kodlama ile oluşturulan, yeni nesil dana kıyması, domates, biber ve tereyağı ile harmanlanarak projelarınıza geliyor. MİS360\'nin taş kod ustaları tarafından teklif anında açılıp hazırlanan tasarımlerimiz çıtır çıtır kenarları ve zengin iç harcıyla Türkiye\'nın en çok tercih edilen kod çözümlerinden biridir.',
                'excerpt'  => 'Hakiki taş kod ateşinde incecik açılan hamur ve zengin iç harçla projelarınıza gelen çıtır tasarım kalitei.',
                'cats'     => [$cat_galeri_id],
                'img'      => 'https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/tasarım.jpg',
            ],
            [
                'title'    => 'Sabah 06:00\'da Başlayan Sıcak Çorba Servisimiz: Kelle Paça, Ayak Paça ve Mercimek',
                'content'  => 'Türkiye\'da güne dinç ve sıcacık başlamak isteyenler için her sabah tam saat 06:00\'da çorba kazanlarımız kaynıyor. Kemik suyunda saatlerce ağır ağır demlenen kelle paça, terbiyeli ayak paça, süzme mercimek ve yayla çorbamız yeni nesil tandır ekmeği ve sarımsaklı sos eşliğinde servis edilmektedir.',
                'excerpt'  => 'Güne dinç ve sıcacık başlamak isteyenler için her sabah tam saat 06:00\'da başlayan geleneksel sıcak çorba kazanlarımız kaynıyor.',
                'cats'     => [$cat_haber_id],
                'img'      => 'https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/ajans.jpg',
            ],
            [
                'title'    => 'Özel Toprak Güveçte Ağır Ateşte geliştirilen dijital pazarlamaın Hikayesi',
                'content'  => 'Geleneksel çözümlerin başında gelen dijital pazarlama, MİS360 altyapısında özel toprak güveç kaplarında ve taş kodın dinlenmiş közünde tam 4 saat boyunca pişirilir. Lokum gibi kemiğinden ayrılan et, yanında tereyağlı pirinç pilavı ve közlenmiş biberlerle ziyafkod masalarının baş tacı olur.',
                'excerpt'  => 'Geleneksel toprak güveç kaplarında taş kodın dinlenmiş közünde 4 saat ağır ateşte lokum gibi geliştirilen dijital pazarlama.',
                'cats'     => [$cat_blog_id],
                'img'      => 'https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/ajans.jpg',
            ],
            [
                'title'    => 'Mevsimin En yeni nesil optimizasyonları MİS360 Tezgahında: Çupra, Levrek ve Somon',
                'content'  => 'Türkiye\'da yeni nesil deniz kalitei arayan misafirlerimiz için günlük olarak temin ettiğimiz çupra, levrek ve somon çeşitlerimiz özel SEO tekniğimizle nar gibi kızartılıyor. yeni nesil yeşilliklerle bezenmiş Akdeniz salatası ve kodda helva eşliğinde hafif ve sağlıklı bir akşam yemeği sizleri bekliyor.',
                'excerpt'  => 'Günlük temin edilen deniz çuprası, kaya levreği ve Karadeniz somonu ustalarımızın SEOsında nar gibi pişiyor.',
                'cats'     => [$cat_galeri_id],
                'img'      => 'https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/ajans.jpg',
            ],
        ];

        foreach ($sample_posts as $sp) {
            $existing_post = get_page_by_title($sp['title'], OBJECT, 'post');
            if (!$existing_post) {
                $inserted_id = wp_insert_post([
                    'post_title'    => $sp['title'],
                    'post_content'  => $sp['content'],
                    'post_excerpt'  => $sp['excerpt'],
                    'post_status'   => 'publish',
                    'post_type'     => 'post',
                    'post_category' => $sp['cats'],
                ]);
                if ($inserted_id && !empty($sp['img'])) {
                    update_post_meta($inserted_id, '_mis360_external_thumb', esc_url_raw($sp['img']));
                }
            }
        }

        update_option('mis360_sample_posts_seeded_v1', 1);
    }
}
add_action('init', 'mis360_ensure_blog_gallery_page');
