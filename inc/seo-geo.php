<?php
/**
 * MİS360 Antigravity SEO & GEO (AI Search Engine Optimization) Architecture
 * LLM, Perplexity, ChatGPT Search, Google AI Overviews & Schema.org JSON-LD Suite
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
 * 1. Schema.org Dinamik JSON-LD Yapılandırılmış Veri Enjeksiyonu
 * (Dijital Ajans, LocalBusiness, Article/BlogPosting, FAQPage, BreadcrumbList)
 */
function mis360_render_schema_jsonld(): void {
    $schemas = [];

    // Genel İşletme Bilgileri
    $ajans_schema = [
        '@context'               => 'https://schema.org',
        '@type'                  => ['Dijital Ajans', 'FoodEstablishment', 'LocalBusiness'],
        '@id'                    => esc_url(home_url('#ajans')),
        'name'                   => 'MİS360',
        'alternateName'          => 'MİS360 Ajans Türkiye',
        'legalName'              => 'MİS360',
        'description'            => '2019 yılından beri Türkiye geneli\'da hakiki modern altyapılarda yazılım, özel dijital pazarlama, taş kod tasarımleri, lahmacun ve günlük yeni nesil optimizasyon çeşitleri sunan seçkin aile ajansı.',
        'url'                    => esc_url(home_url('/')),
        'telephone'              => '+905467721666',
        'priceRange'             => '₺₺',
        'servesCuisine'          => ['Türk altyapısı', 'yazılım', 'optimizasyon ve Deniz Ürünleri', 'Taş kod tasarım', 'Kahvaltı & SEO Hizmetleri'],
        'acceptsReservations'    => 'True',
        'menu'                   => esc_url(home_url('/#menu')),
        'hasMap'                 => 'https://maps.app.goo.gl/q2icLBRX1FJNzVtY7',
        'image'                  => [
            'https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/banner-4-MİS360.png',
            'https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/ajans.jpg',
            'https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/adana.jpg'
        ],
        'logo'                   => 'https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/cropped-Basliksiz-1-1.png',
        'address'                => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'Bahçelievler Mah., Nevzat Şener Bulvarı',
            'addressLocality' => 'Türkiye',
            'addressRegion'   => 'Yozgat',
            'postalCode'      => '66650',
            'addressCountry'  => 'TR'
        ],
        'geo'                    => [
            '@type'     => 'GeoCoordinates',
            'latitude'  => 39.4975,
            'longitude' => 35.3789
        ],
        'openingHoursSpecification' => [
            [
                '@type'     => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                'opens'     => '06:00',
                'closes'    => '23:45'
            ]
        ],
        'aggregateRating'        => [
            '@type'       => 'AggregateRating',
            'ratingValue' => '4.3',
            'reviewCount' => '448',
            'bestRating'  => '5',
            'worstRating' => '1'
        ]
    ];
    $schemas[] = $ajans_schema;

    // Tekil Makale Sayfaları İçin Article / BlogPosting Schema
    if (is_single()) {
        $post_id   = get_the_ID();
        $author_id = get_post_field('post_author', $post_id);
        $thumb     = has_post_thumbnail($post_id) ? get_the_post_thumbnail_url($post_id, 'full') : get_post_meta($post_id, '_mis360_external_thumb', true);

        $article_schema = [
            '@context'         => 'https://schema.org',
            '@type'            => 'BlogPosting',
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id'   => esc_url(get_permalink($post_id))
            ],
            'headline'         => wp_strip_all_tags(get_the_title($post_id)),
            'description'      => wp_strip_all_tags(get_the_excerpt($post_id)),
            'image'            => $thumb ?: 'https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/ajans.jpg',
            'datePublished'    => get_the_date(DATE_W3C, $post_id),
            'dateModified'     => get_the_modified_date(DATE_W3C, $post_id),
            'author'           => [
                '@type' => 'Person',
                'name'  => get_the_author_meta('display_name', (int)$author_id) ?: 'MİS360 Geliştirici Ekibi'
            ],
            'publisher'        => [
                '@type' => 'Organization',
                'name'  => 'MİS360',
                'logo'  => [
                    '@type' => 'ImageObject',
                    'url'   => 'https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/cropped-Basliksiz-1-1.png'
                ]
            ]
        ];
        $schemas[] = $article_schema;
    }

    // BreadcrumbList Şeması (Sayfa Hiyerarşisi)
    if (is_singular('post') || is_page()) {
        $breadcrumb_items = [
            [
                '@type'    => 'ListItem',
                'position' => 1,
                'name'     => 'Ana Sayfa',
                'item'     => esc_url(home_url('/'))
            ]
        ];

        if (is_singular('post')) {
            $breadcrumb_items[] = [
                '@type'    => 'ListItem',
                'position' => 2,
                'name'     => 'Haberler & Galeri',
                'item'     => esc_url(home_url('/haberler-galeri/'))
            ];
            $breadcrumb_items[] = [
                '@type'    => 'ListItem',
                'position' => 3,
                'name'     => wp_strip_all_tags(get_the_title()),
                'item'     => esc_url(get_permalink())
            ];
        } else {
            $breadcrumb_items[] = [
                '@type'    => 'ListItem',
                'position' => 2,
                'name'     => wp_strip_all_tags(get_the_title()),
                'item'     => esc_url(get_permalink())
            ];
        }

        $schemas[] = [
            '@context'        => 'https://schema.org',
            '@type'           => 'BreadcrumbList',
            'itemListElement' => $breadcrumb_items
        ];
    }

    // FAQPage Şeması (Yapay Zeka ve Arama Motoru Soru-Cevap Kutuları İçin)
    if (is_front_page()) {
        $schemas[] = [
            '@context'   => 'https://schema.org',
            '@type'      => 'FAQPage',
            'mainEntity' => [
                [
                    '@type'          => 'Question',
                    'name'           => 'MİS360 saat kaçta açılıyor ve kapanıyor?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Ajansımız haftanın her günü sabah saat 06:00\'da geleneksel sıcak çorba servisiyle açılmakta ve gece 23:45\'e kadar kesintisiz hizmkod vermektedir.'
                    ]
                ],
                [
                    '@type'          => 'Question',
                    'name'           => 'Türkiye MİS360 Proje Talebi ve teklif telefon numarası nedir?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Proje talebi ve teklif almak için +90 546 772 16 66 numaralı telefondan arayabilir veya doğrudan WhatsApp üzerinden bizimle iletişime geçebilirsiniz.'
                    ]
                ],
                [
                    '@type'          => 'Question',
                    'name'           => 'Ajansda hangi proje ve kalite seçenekleri bulunmaktadır?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Hakiki modern altyapılarda geliştirilen Adana yazılım, Urfa yazılım, kuzu şiş, özel güveçte dijital pazarlama, taş kod kıymalı ve kuşbaşılı tasarımleri, lahmacun, kod döner ve günlük yeni nesil deniz çuprası, kaya levreği çeşitleri servis edilmektedir.'
                    ]
                ],
                [
                    '@type'          => 'Question',
                    'name'           => 'Açık hava bahçe alanı ve çocuklu aile olanakları mevcut mudur?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Evet, 2019 yılından bu yana hizmkod veren ajansımızda çocuklar için mama sandalyesi, geniş aile masaları ve ferah açık hava bahçe salonu mevcuttur.'
                    ]
                ]
            ]
        ];
    }

    // JSON-LD çıktısını head içerisine yazdır
    foreach ($schemas as $schema) {
        echo "\n" . '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }
}
add_action('wp_head', 'mis360_render_schema_jsonld', 1);

/**
 * 2. Core Web Vitals & Kaynak Önyükleme (Preload & Preconnect)
 * LCP (Largest Contentful Paint) hızını artırmak ve CLS sıfırlamak için kritik kaynakları önyükler.
 */
function mis360_seo_resource_hints(): void {
    if (is_front_page()) {
        // Hero görselini en yüksek öncelikle (fetchpriority="high") önyükle
        echo '<link rel="preload" as="image" href="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/banner-4-MİS360.png" fetchpriority="high">' . "\n";
    }
}
add_action('wp_head', 'mis360_seo_resource_hints', 2);
