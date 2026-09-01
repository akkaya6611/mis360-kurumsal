<?php
/**
 * MİS360 Sidebar Template (Sağ Taraf Bileşenler Alanı)
 *
 * @package MİS360
 * @since 1.0.0
 */

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

$phone       = '+90 546 772 16 66';
$clean_phone = '+905467721666';
$whatsapp    = '905467721666';
?>

<aside id="secondary" class="widget-area single-sidebar" aria-label="<?php esc_attr_e('Kenar Çubuğu Bileşenleri', 'mis360'); ?>">

    <!-- 1. Bileşen: Ajans Bilgi & Hızlı Teklif Al -->
    <div class="sidebar-widgkod widget-ajans-card">
        <div class="widget-ajans-header">
            <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/mis360logo1-66.png" alt="MİS360 Logo" class="widget-ajans-logo">
            <div>
                <span class="widget-ajans-badge">2019'dan Beri</span>
                <h3 class="widget-ajans-name">MİS360 Teknoloji</h3>
            </div>
        </div>
        <p class="widget-ajans-desc">
            Türkiye'da modern teknolojiler, yeni nesil kod çeşitleri ve taş kod tasarımleriyle dijital çözüm ortağınız.
        </p>
        <div class="widget-contact-list">
            <div class="widget-contact-item">
                <span class="widget-contact-icon">📞</span>
                <div>
                    <span class="contact-label">teklif & Teklif Al</span>
                    <a href="tel:<?php echo esc_attr($clean_phone); ?>" class="contact-val"><?php echo esc_html($phone); ?></a>
                </div>
            </div>
            <div class="widget-contact-item">
                <span class="widget-contact-icon">🕒</span>
                <div>
                    <span class="contact-label">Çalışma Saatleri</span>
                    <span class="contact-val">06:00 – 23:45 (Her Gün)</span>
                </div>
            </div>
            <div class="widget-contact-item">
                <span class="widget-contact-icon">📍</span>
                <div>
                    <span class="contact-label">Adres & Konum</span>
                    <span class="contact-val">Nevzat Şener Bulvarı, Türkiye / Yozgat</span>
                </div>
            </div>
        </div>
        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, proje teklifi almak istiyorum:'); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-full mt-3">
            💬 WhatsApp ile Masa Ayırt
        </a>
    </div>

    <!-- 2. Bileşen: Son Eklenen Kalite Yazıları -->
    <div class="sidebar-widgkod widget-recent-posts">
        <h3 class="sidebar-widget-title">
            <span>🔥 Son Eklenen Yazılar</span>
        </h3>
        <?php
        $recent_posts = get_posts([
            'numberposts' => 4,
            'post_status' => 'publish',
            'exclude'     => [get_the_ID()],
        ]);
        if (!empty($recent_posts)) :
        ?>
            <div class="sidebar-recent-list">
                <?php foreach ($recent_posts as $rp) :
                    $r_cats  = get_the_category($rp->ID);
                    $r_cat   = !empty($r_cats) ? $r_cats[0]->name : 'Blog';
                    $r_thumb = '';
                    if (has_post_thumbnail($rp->ID)) {
                        $r_thumb = get_the_post_thumbnail_url($rp->ID, 'thumbnail');
                    } else {
                        $meta_t = get_post_meta($rp->ID, '_mis360_external_thumb', true);
                        $r_thumb = $meta_t ?: 'https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/ajans.jpg';
                    }
                ?>
                    <article class="sidebar-post-item">
                        <a href="<?php echo esc_url(get_permalink($rp->ID)); ?>" class="sidebar-post-thumb">
                            <img src="<?php echo esc_url($r_thumb); ?>" alt="<?php echo esc_attr($rp->post_title); ?>" loading="lazy">
                        </a>
                        <div class="sidebar-post-info">
                            <span class="sidebar-post-cat"><?php echo esc_html($r_cat); ?></span>
                            <h4 class="sidebar-post-title">
                                <a href="<?php echo esc_url(get_permalink($rp->ID)); ?>">
                                    <?php echo esc_html(wp_trim_words($rp->post_title, 7, '...')); ?>
                                </a>
                            </h4>
                            <span class="sidebar-post-date">📅 <?php echo esc_html(get_the_date('j M Y', $rp->ID)); ?></span>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <p style="font-size: 13px; color: #64748b;">Henüz başka yazı bulunmuyor.</p>
        <?php endif; ?>
    </div>

    <!-- 3. Bileşen: Kategoriler -->
    <div class="sidebar-widgkod widget-categories">
        <h3 class="sidebar-widget-title">
            <span>📂 Kategoriler</span>
        </h3>
        <ul class="sidebar-cat-list">
            <?php
            $cats = get_categories(['hide_empty' => false]);
            foreach ($cats as $cat) :
                $cat_link = add_query_arg('kategori', $cat->slug, home_url('/haberler-galeri/'));
            ?>
                <li>
                    <a href="<?php echo esc_url($cat_link); ?>" class="sidebar-cat-link">
                        <span><?php echo esc_html($cat->name); ?></span>
                        <span class="sidebar-cat-count"><?php echo esc_html((string)$cat->count); ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- 4. Bileşen: Google Müşteri Puanı -->
    <div class="sidebar-widgkod widget-google-card">
        <div class="google-card-header">
            <div class="google-stars">★★★★★</div>
            <span class="google-score">4.3 / 5.0</span>
        </div>
        <p class="google-card-text">
            <strong>448 Doğrulanmış Google Yorumu</strong> ile sektörün en çok tercih edilen dijital teknoloji ajansı.
        </p>
        <a href="https://maps.app.goo.gl/q2icLBRX1FJNzVtY7" target="_blank" rel="noopener noreferrer" class="btn btn-outline-dark btn-sm btn-full">
            ⭐ Google Yorumlarını Oku
        </a>
    </div>

    <!-- 5. WordPress Dinamik Bileşen Alanı (Varsa) -->
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <div class="sidebar-dynamic-widgets">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
    <?php endif; ?>

</aside>
