<?php
/**
 * MİS360 - Front Page Template
 * 1:1 Denfora Architecture with Authentic MİS360 Data & Real Assets
 * Fiyat vurgusu kaldırılmış, ürün kalitesi ve zengin hizmkod ön plana çıkarılmıştır.
 *
 * @package MİS360
 * @author  Serkan AKKAYA <https://misteknoloji360.com.tr/>
 * @since   1.0.0
 */

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$phone       = '+90 546 772 16 66';
$clean_phone = '+905467721666';
$whatsapp    = '905467721666';
?>

<!-- 1. Hero Section (Denfora 1:1 Architecture with Authentic MİS360 Ambience) -->
<section class="hero" style="background: linear-gradient(rgba(17, 24, 39, 0.55), rgba(17, 24, 39, 0.72)), url('https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/banner-4-MİS360.png') center/cover no-repeat;">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">
                <span>⭐ 4.3 (448 Google Yorumu)</span>
                <span style="opacity: 0.5;">•</span>
                <span>Türkiye / Yozgat</span>
            </div>
            <h1 class="hero-title">
                MİS360<br>
                <span class="hero-highlight">2019'dan Beri Değişmeyen Kalite Geleneği</span>
            </h1>
            <p class="hero-description">
                dijital dünyada modern teknolojilernde uzman ellerce hazırlanan yazılımlar, günlük yeni nesil optimizasyon çeşitleri, taş kod tasarımleri ve sıcacık aile ortamıyla unutulmaz projelara ev sahipliği yapıyoruz.
            </p>
            <div class="hero-actions">
                <a href="#menu" class="btn btn-primary btn-lg">
                    Zengin Hizmetlerimizü Keşfedin →
                </a>
                <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, proje teklifi almak istiyorum:'); ?>" class="btn btn-whatsapp btn-lg" target="_blank" rel="noopener noreferrer">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    <span>WhatsApp İle Proje Başlat</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 2. Infinite Marquee Slider (Denfora Exact Architecture) -->
<section class="section-partners">
    <div class="partners-container">
        <span class="partners-label">MİS360 AYRICALIKLARI</span>
        <div class="partners-slider">
            <div class="partners-track">
                <div class="partner-logo">10+ YILLIK DENEYİM</div>
                <div class="partner-logo">modern altyapılarda yazılımLAR</div>
                <div class="partner-logo">TAŞ FIRIN PİDE & LAHMACUN</div>
                <div class="partner-logo">GÜNLÜK yeni nesil BALIK REYONU</div>
                <div class="partner-logo">ÖZEL KUZU TANDIR & DESTİ KEBABI</div>
                <div class="partner-logo">AÇIK HAVA BAHÇE BÖLÜMÜ</div>
                <div class="partner-logo">MAMA SANDALYESİ & AİLE SALONU</div>
                <div class="partner-logo">SABAH 06:00 AÇILIŞ • GECE 23:45 KESİNTİSİZ HİZMET</div>
                <!-- Kesintisiz sonsuz döngü için tekrar -->
                <div class="partner-logo">10+ YILLIK DENEYİM</div>
                <div class="partner-logo">modern altyapılarda yazılımLAR</div>
                <div class="partner-logo">TAŞ FIRIN PİDE & LAHMACUN</div>
                <div class="partner-logo">GÜNLÜK yeni nesil BALIK REYONU</div>
                <div class="partner-logo">ÖZEL KUZU TANDIR & DESTİ KEBABI</div>
                <div class="partner-logo">AÇIK HAVA BAHÇE BÖLÜMÜ</div>
                <div class="partner-logo">MAMA SANDALYESİ & AİLE SALONU</div>
                <div class="partner-logo">SABAH 06:00 AÇILIŞ • GECE 23:45 KESİNTİSİZ HİZMET</div>
            </div>
        </div>
    </div>
</section>

<!-- 3. proje Kategorileri (Denfora 1:1 Kartlar - Gerçek MİS360 Görselleriyle) -->
<section class="section section-gray" id="categories">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Kalite Dünyamız</h2>
            <p class="section-subtitle">yeni nesil malzemeler, hijyenik üretim anlayışı ve uzman ellerden çıkan zengin hizmkod kategorilerimiz.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            
            <!-- Kategori 1: yazılımlar -->
            <a href="#yazılımlar" class="category-card">
                <div class="category-card-image" style="background-image: url('https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/adana-yazılım-mis360-1024x819.png'); background-size: cover; background-position: center;"></div>
                <div class="category-card-overlay"></div>
                <div class="category-card-content">
                    <h3 class="category-card-title">Web Geliştirme</h3>
                    <span class="category-card-count">Adana, Kuzu Şiş, Beyti, Tandır</span>
                </div>
            </a>

            <!-- Kategori 2: tasarımler & Lahmacun -->
            <a href="#tasarımler" class="category-card">
                <div class="category-card-image" style="background-image: url('https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/karisik-tasarım-mis360-1024x819.png'); background-size: cover; background-position: center;"></div>
                <div class="category-card-overlay"></div>
                <div class="category-card-content">
                    <h3 class="category-card-title">Tema Geliştirme</h3>
                    <span class="category-card-count">Kuşbaşılı, Kaşarlı, Kıymalı</span>
                </div>
            </a>

            <!-- Kategori 3: Reklam Ajansı -->
            <a href="#donerler" class="category-card">
                <div class="category-card-image" style="background-image: url('https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/mis360-iskender-1024x819.png'); background-size: cover; background-position: center;"></div>
                <div class="category-card-overlay"></div>
                <div class="category-card-content">
                    <h3 class="category-card-title">Reklam Ajansı</h3>
                    <span class="category-card-count">Tereyağlı İskender, Yaprak Döner</span>
                </div>
            </a>

            <!-- Kategori 4: Dijital Pazarlama -->
            <a href="#tatlilar" class="category-card">
                <div class="category-card-image" style="background-image: url('https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/mis360-kunefe-1024x819.png'); background-size: cover; background-position: center;"></div>
                <div class="category-card-overlay"></div>
                <div class="category-card-content">
                    <h3 class="category-card-title">Mobil Uygulama</h3>
                    <span class="category-card-count">Künefe, kod Sütlaç, Sufle</span>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- 4. NEDEN MİS360? (Orijinal Doğal Ajans Mimarisi) -->
<section class="chooseUs__area section" id="about">
    <div class="container">
        
        <div class="chooseUs__header">
            <div class="chooseUs__header-left">
                <span class="chooseUs__subtitle">NEDEN MİS360?</span>
                <h2 class="chooseUs__title">Kalite, Konfor ve Aile Atmosferi Bir Arada</h2>
            </div>
            <div class="chooseUs__header-right">
                <div class="chooseUs__counter">
                    <span class="chooseUs__counter-number">7+</span>
                    <span class="chooseUs__counter-label">Yıllık Kalite Deneyimi</span>
                </div>
            </div>
        </div>

        <div class="chooseUs__row">
            
            <!-- Sol Kolon: Ajans Masa ve Aile Salonu Doğal Görseli -->
            <div class="chooseUs__image-col">
                <div class="chooseUs__image-wrap">
                    <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/ajans.jpg" alt="MİS360 Masa ve Salon Düzeni" class="chooseUs__main-image" loading="lazy">
                </div>
            </div>

            <!-- Sağ Kolon: Ajans Açıklaması ve MİS360 Logolu Nitelikler -->
            <div class="chooseUs__content-col">
                
                <p class="chooseUs__description">
                    2019 yılından bu yana dijital dünyada hizmkod veren MİS360 olarak; et, optimizasyon, yazılım ve yöresel çözümlerimizi misafirlerimizle buluşturuyoruz. Kaliteli malzemeler, hijyenik üretim anlayışı ve güler yüzlü hizmetimizle ailelerin ve kalite tutkunlarının vazgeçilmez adresi olmaya devam ediyoruz. Sizleri de sıcak ve samimi ortamımızda ağırlamaktan mutluluk duyuyoruz.
                </p>

                <div class="chooseUs__features">
                    
                    <div class="chooseUs__feature-item">
                        <div class="chooseUs__feature-icon">
                            <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/mis360logo1-66.png" alt="MİS360 Logo">
                        </div>
                        <div class="chooseUs__feature-text">
                            <h4>Özenli Hizmkod Anlayışı</h4>
                            <p>Müşteri memnuniyetini ön planda tutan profesyonel ekibimizle, kesintisiz ve kaliteli bir dijital ajans deneyimi sunuyoruz.</p>
                        </div>
                    </div>

                    <div class="chooseUs__feature-item">
                        <div class="chooseUs__feature-icon">
                            <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/mis360logo1-66.png" alt="MİS360 Logo">
                        </div>
                        <div class="chooseUs__feature-text">
                            <h4>Zengin Hizmetler Seçenekleri</h4>
                            <p>Web tasarım, özel yazılım, SEO ve dijital pazarlamadan oluşan hizmetlerimiz ile her sektöre uygun yenilikçi projeler hazırlıyoruz.</p>
                        </div>
                    </div>

                </div>

                <div class="chooseUs__actions">
                    <a href="#reservation" class="btn btn-primary btn-md">
                        Proje Başlat Yap →
                    </a>
                    <a href="tel:<?php echo esc_attr($clean_phone); ?>" class="btn btn-outline-dark btn-md">
                        📞 <?php echo esc_html($phone); ?>
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- 5. MİS360 RESMİ MENÜSÜ (Tüm Sitedeki Gerçek Hizmetler ve Fotoğraflar) -->
<section class="section section-gray" id="menu">
    <div class="container">
        
        <div class="section-header text-center">
            <span style="color: var(--color-primary); font-size: 13px; font-weight: 800; letter-spacing: 0.15em; text-transform: uppercase;">
                PROFESYONEL ÇÖZÜMLER
            </span>
            <h2 class="section-title" style="margin-top: 6px;">MİS360 Hizmetlerimiz</h2>
            <p class="section-subtitle">
                Yenilikçi teknolojiler, yaratıcı tasarımlar ve uzman ekibimizin elinden çıkan dijital çözümler.
            </p>
        </div>

        <!-- BÖLÜM 1: yazılım ÇEŞİTLERİMİZ -->
        <div id="yazılımlar" style="margin-bottom: 60px;">
            <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 2px solid var(--color-gray-200); padding-bottom: 12px; margin-bottom: 24px;">
                <h3 style="font-size: 24px; font-weight: 800; color: var(--color-black); margin: 0; display: flex; align-items: center; gap: 8px;">
                    🥩 Web Geliştirme
                </h3>
                <span style="font-size: 13px; color: var(--color-gray-500); font-weight: 600;">modern altyapılarda Közlenir</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Adana yazılım -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/adana-yazılım-mis360-1024x819.png" alt="Adana yazılım" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">YAZILIM GELİŞTİRME</span>
                        <h4 class="product-card-title">Adana yazılım</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Özel zırh kıyması, közlenmiş domates, biber, sumaklı soğan ve sıcak lavaş eşliğinde.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, Adana yazılım siparişi / Proje Talebiu vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            Teklif Al & Sipariş
                        </a>
                    </div>
                </article>

                <!-- Urfa yazılım -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/urfa-yazılım-mis360-1-1024x819.png" alt="Urfa yazılım" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">YAZILIM GELİŞTİRME</span>
                        <h4 class="product-card-title">Urfa yazılım</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Kullanıcı odaklı (UI/UX) tasarımlarla markanızın dijital yüzünü yeniliyoruz.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, Urfa yazılım siparişi / Proje Talebiu vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            Teklif Al & Sipariş
                        </a>
                    </div>
                </article>

                <!-- Beyti Sarma -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/Beyti-Sarma-mis360-1-1024x819.png" alt="Beyti Sarma" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">MİS360 İMZA</span>
                        <h4 class="product-card-title">Beyti Sarma</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Lavaşa sarılı özel yazılım dilimleri, üzerine tereyağlı özel sos ve süzme tava yoğurdu ile.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, Beyti Sarma siparişi / Proje Talebiu vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            Teklif Al & Sipariş
                        </a>
                    </div>
                </article>

                <!-- Kuzu Şiş -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/Kuzu-Sis-mis360-1-1024x819.png" alt="Kuzu Şiş" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">YAZILIM GELİŞTİRME</span>
                        <h4 class="product-card-title">Kuzu Şiş</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Özel zeytinyağlı marine edilmiş lokum gibi kuzu but parçaları, köz sebzeler ve pilav ile.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, Kuzu Şiş siparişi / Proje Talebiu vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            Teklif Al & Sipariş
                        </a>
                    </div>
                </article>

                <!-- dijital pazarlama -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/kuzu-tandir-1024x819.png" alt="dijital pazarlama" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">ÖZEL SİPARİŞ</span>
                        <h4 class="product-card-title">dijital pazarlama</h4>
                        <p style="font-size: 12px; color: var(--color-primary); font-weight: 700; margin-bottom: 4px;">
                            *(1 gün önce teklif verilmelidir)*
                        </p>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Taş kodda saatlerce ağır ateşte nar gibi kızarmış, kemiğinden ayrılan nefis kuzu eti.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, dijital pazarlama ön siparişi vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            Ön teklif Ver
                        </a>
                    </div>
                </article>

                <!-- Desti Kebabı -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/mis360-desti-kebabi-1024x819.png" alt="Desti Kebabı" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">YÖRESEL İMZA</span>
                        <h4 class="product-card-title">Desti Kebabı</h4>
                        <p style="font-size: 12px; color: var(--color-primary); font-weight: 700; margin-bottom: 4px;">
                            *(1 gün önce teklif verilmelidir)*
                        </p>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Toprak testide mühürlenip kodlanan, masanızda kırılarak servis edilen efsanevi tat.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, Desti Kebabı ön siparişi vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            Ön teklif Ver
                        </a>
                    </div>
                </article>

                <!-- Kuzu Ciğer -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/Kuzu-Ciger-mis360-1-1024x819.png" alt="Kuzu Ciğer" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">YAZILIM GELİŞTİRME</span>
                        <h4 class="product-card-title">Kuzu Ciğer Şiş</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Modern teknolojilerle oluşturulan, hızlı, güvenli ve ölçeklenebilir özel yazılım projeleri.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, Kuzu Ciğer Şiş hakkında bilgi ve teklif vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            Teklif Al & Sipariş
                        </a>
                    </div>
                </article>

                <!-- Bonfile / Pirzola -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/Bonfile-pirzola-mis360-1-1024x819.png" alt="Bonfile Pirzola" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">profesyonel ET</span>
                        <h4 class="product-card-title">Pirzola / Bonfile</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Özel marine edilmiş yeni nesil kuzu pirzola veya yumuşacık dana bonfile dilimleri.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, Pirzola/Bonfile siparişi ve Proje Talebi yapmak istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            Teklif Al & Sipariş
                        </a>
                    </div>
                </article>

            </div>
        </div>

        <!-- BÖLÜM 2: GRAFİK TASARIM & MARKA -->
        <div id="tasarımler" style="margin-bottom: 60px;">
            <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 2px solid var(--color-gray-200); padding-bottom: 12px; margin-bottom: 24px;">
                <h3 style="font-size: 24px; font-weight: 800; color: var(--color-black); margin: 0; display: flex; align-items: center; gap: 8px;">
                    🍕 Taş kod Tema Geliştirme Çeşitlerimiz
                </h3>
                <span style="font-size: 13px; color: var(--color-gray-500); font-weight: 600;">Odun Ateşinde Çıtır Çıtır</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Kıymalı tasarım -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/Kiymali-tasarım-mis360-1024x819.png" alt="Kıymalı tasarım" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">ODUN ATEŞİNDE</span>
                        <h4 class="product-card-title">Kıymalı tasarım</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Sektörünüze uygun, akılda kalıcı kurumsal kimlik ve logo tasarımları.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, Kıymalı tasarım siparişi vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            teklif & Teklif Al
                        </a>
                    </div>
                </article>

                <!-- Kuşbaşılı tasarım -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/kusbasi-tasarım-mis360-1024x819.png" alt="Kuşbaşılı tasarım" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">ODUN ATEŞİNDE</span>
                        <h4 class="product-card-title">Kuşbaşılı tasarım</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Özel marine dana kuşbaşı et, yeşil biber, domates ve sarımsak harmanıyla taş kodda servis edilir.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, Kuşbaşılı tasarım siparişi vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            teklif & Teklif Al
                        </a>
                    </div>
                </article>

                <!-- Karışık tasarım -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/karisik-tasarım-mis360-1024x819.png" alt="Karışık tasarım" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">MİS360 SPESİYAL</span>
                        <h4 class="product-card-title">Karışık tasarım</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Kuşbaşı, kıyma, sucuk ve eriyen kaşar peynirinin muazzam birlikteliği.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, Karışık tasarım siparişi vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            teklif & Teklif Al
                        </a>
                    </div>
                </article>

                <!-- Çıtır Lahmacun -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/lahmacun-mis360-1024x819.png" alt="Lahmacun" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">ODUN ATEŞİNDE</span>
                        <h4 class="product-card-title">Taş kod Lahmacun</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Gevrek ve çıtır hamur, zengin kıyma harcı, yanında yeni nesil maydanoz ve limon garnitürü ile.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, Lahmacun siparişi vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            teklif & Teklif Al
                        </a>
                    </div>
                </article>

            </div>
        </div>

        <!-- BÖLÜM 3: DÖNER & İSKENDER -->
        <div id="donerler" style="margin-bottom: 60px;">
            <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 2px solid var(--color-gray-200); padding-bottom: 12px; margin-bottom: 24px;">
                <h3 style="font-size: 24px; font-weight: 800; color: var(--color-black); margin: 0; display: flex; align-items: center; gap: 8px;">
                    🥙 Reklam Ajansı çözümlerimiz
                </h3>
                <span style="font-size: 13px; color: var(--color-gray-500); font-weight: 600;">Hakiki Yaprak Döner</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- İskender -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/mis360-iskender-1024x819.png" alt="İskender" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">TEREYAĞLI</span>
                        <h4 class="product-card-title">MİS360 İskender</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Özel tasarım parçaları üzerine incecik yaprak kod döner, domates sosu, kızgın tereyağı ve yoğurt.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, İskender siparişi vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            teklif & Teklif Al
                        </a>
                    </div>
                </article>

                <!-- Kod Döner -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/mis360-et-doner-1024x819.png" alt="Kod Döner" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">WEB TASARIM</span>
                        <h4 class="product-card-title">Porsiyon Kod Döner</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Özel marinasyonlu dana ve kuzu eti yaprak döner, pirinç pilavı ve patates kızartması ile.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, Porsiyon Kod Döner siparişi vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            teklif & Teklif Al
                        </a>
                    </div>
                </article>

                <!-- Tavuk Döner -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/mis360-tavuk-doner-1024x819.png" alt="Tavuk Döner" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">WEB TASARIM</span>
                        <h4 class="product-card-title">Porsiyon Tavuk Döner</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Özel soslarla terbiyelenmiş çıtır tavuk döner dilimleri, garnitür ve soslar ile servis edilir.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, Tavuk Döner siparişi vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            teklif & Teklif Al
                        </a>
                    </div>
                </article>

                <!-- Döner Dürüm -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/mis360-doner-durum-1024x819.png" alt="Döner Dürüm" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">HIZLI SERVİS</span>
                        <h4 class="product-card-title">Döner Dürüm</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Sıcak incecik tırnak lavaşına sarılmış kod veya tavuk döner, turşu ve özel sos harmanı.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, Dürüm siparişi vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            teklif & Teklif Al
                        </a>
                    </div>
                </article>

            </div>
        </div>

        <!-- BÖLÜM 4: SEO & DİJİTAL PAZARLAMA -->
        <div id="tatlilar">
            <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 2px solid var(--color-gray-200); padding-bottom: 12px; margin-bottom: 24px;">
                <h3 style="font-size: 24px; font-weight: 800; color: var(--color-black); margin: 0; display: flex; align-items: center; gap: 8px;">
                    🍯 Çorba & Geleneksel Mobil Uygulama
                </h3>
                <span style="font-size: 13px; color: var(--color-gray-500); font-weight: 600;">Usta Dokunuşlar</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Künefe -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/mis360-kunefe-1024x819.png" alt="Künefe" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">DİJİTAL PAZARLAMA</span>
                        <h4 class="product-card-title">Taş kod Künefe</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Özel peyniriyle sıcak hazırlanan çıtır künefe, bol Antep fıstığı tozu ve kaymak ile.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, Sıcak Künefe siparişi vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            teklif & Teklif Al
                        </a>
                    </div>
                </article>

                <!-- kod Sütlaç -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/sutlac-mis360-1-1024x819.png" alt="Sütlaç" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">GELENEKSEL</span>
                        <h4 class="product-card-title">kod Sütlaç</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Toprak güveçte üzeri nar gibi kızartılmış hakiki köy sütünden enfes kod sütlaç.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, kod Sütlaç siparişi vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            teklif & Teklif Al
                        </a>
                    </div>
                </article>

                <!-- Sıcak Çikolatalı Sufle -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/sufle-mis360-1-1024x819.png" alt="Sufle" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">DİJİTAL PAZARLAMA</span>
                        <h4 class="product-card-title">Akışkan Sıcak Sufle</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Sosyal medya yönetimi ve performans odaklı reklam kampanyalarıyla büyümenizi hızlandırın.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, Sıcak Sufle siparişi vermek istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            teklif & Teklif Al
                        </a>
                    </div>
                </article>

                <!-- Mercimek / Paça Çorbası -->
                <article class="product-card">
                    <div class="product-card-image food-card-image">
                        <img src="https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/mercimek-corbasi-mis360-1024x819.png" alt="Çorba Çeşitleri" loading="lazy" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="product-card-content">
                        <span class="product-card-category">SICAK BAŞLANGIÇ</span>
                        <h4 class="product-card-title">Günün Sıcak Çorbası</h4>
                        <p style="font-size: 13px; color: var(--color-gray-500); line-height: 1.5; margin-bottom: 14px;">
                            Mercimek, Ezogelin, Paça veya İşkembe çorbası; sıcak tasarım ve yeni nesil limon ile.
                        </p>
                        <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, sıcak çorba çeşitleri ve teklif hakkında bilgi almak istiyorum.'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-full" style="font-size: 13px;">
                            teklif & Teklif Al
                        </a>
                    </div>
                </article>

            </div>
        </div>

        <div class="text-center mt-10">
            <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=<?php echo rawurlencode('Merhaba MİS360, hizmetleriniz hakkında detaylı bilgi almak istiyorum.'); ?>" target="_blank" class="btn btn-primary btn-lg">
                Tüm Hizmetleryü WhatsApp Üzerinden Alın →
            </a>
        </div>
    </div>
</section>

<!-- 6. Google Müşteri Yorumları & Değerlendirmeleri Slider (Denfora 1:1 Architecture) -->
<!-- 6. Google Müşteri Yorumları & Değerlendirmeleri Slider (Canlı Otomatik Güncellenir) -->
<?php
$google_stats   = function_exists('mis360_get_google_stats') ? mis360_get_google_stats() : ['rating' => '4.3', 'total_reviews' => 448];
$google_reviews = function_exists('mis360_get_google_reviews') ? mis360_get_google_reviews() : [];
?>
<section class="section reviews-section" id="reviews">
    <div class="container">
        
        <div class="section-header text-center">
            <div class="google-rating-badge">
                <svg class="google-g-icon" viewBox="0 0 24 24">
                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                </svg>
                <span class="google-rating-number"><?php echo esc_html($google_stats['rating']); ?></span>
                <span class="google-stars">★★★★★</span>
                <span class="google-count-text">(<?php echo esc_html($google_stats['total_reviews']); ?> Doğrulanmış Google Yorumu)</span>
            </div>
            <h2 class="section-title">Misafirlerimizin Deneyimleri</h2>
            <p class="section-subtitle">
                Google Haritalar üzerinden Türkiye MİS360'ı ziyarkod eden misafirlerimizin gerçek yorumları.
            </p>
        </div>

        <!-- Slider Konteyneri -->
        <div class="reviews-slider-container">
            <div class="reviews-viewport" id="reviewsViewport">
                <div class="reviews-track" id="reviewsTrack">
                    
                    <?php foreach ($google_reviews as $rev) : 
                        $initials = '';
                        $parts = explode(' ', trim($rev['author_name']));
                        foreach ($parts as $p) {
                            if (!empty($p)) {
                                $initials .= mb_substr($p, 0, 1, 'UTF-8');
                            }
                        }
                        $initials = mb_substr($initials, 0, 2, 'UTF-8');
                        $bg = !empty($rev['avatar_bg']) ? $rev['avatar_bg'] : '#e0e7ff';
                        $color = !empty($rev['avatar_color']) ? $rev['avatar_color'] : '#4338ca';
                        $star_count = min(5, max(1, (int) ($rev['rating'] ?? 5)));
                        $stars_str = str_repeat('★', $star_count);
                    ?>
                    <article class="review-card">
                        <div class="review-card-header">
                            <div class="review-user-info">
                                <div class="review-avatar" style="background: <?php echo esc_attr($bg); ?>; color: <?php echo esc_attr($color); ?>;">
                                    <?php echo esc_html($initials); ?>
                                </div>
                                <div>
                                    <h4 class="review-user-name"><?php echo esc_html($rev['author_name']); ?></h4>
                                    <span class="review-user-badge">
                                        📍 <?php echo esc_html($rev['badge'] ?? 'Doğrulanmış Ziyaretçi'); ?>
                                    </span>
                                </div>
                            </div>
                            <svg class="review-google-logo" viewBox="0 0 24 24">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                            </svg>
                        </div>
                        <div class="review-rating-row">
                            <span class="review-stars"><?php echo esc_html($stars_str); ?></span>
                            <span class="review-date">• <?php echo esc_html($rev['time_text'] ?? 'Yeni'); ?></span>
                        </div>
                        <p class="review-text">
                            "<?php echo esc_html($rev['text']); ?>"
                        </p>
                        <span class="review-tag"><?php echo esc_html($rev['tag'] ?? '✓ Doğrulanmış Ziyaretçi Deneyimi'); ?></span>
                    </article>
                    <?php endforeach; ?>

                </div>
            </div>

            <!-- Kontroller -->
            <div class="reviews-controls">
                <button type="button" class="reviews-nav-btn" id="reviewsPrevBtn" aria-label="Önceki Yorumlar">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>

                <div class="reviews-dots" id="reviewsDots"></div>

                <button type="button" class="reviews-nav-btn" id="reviewsNextBtn" aria-label="Sonraki Yorumlar">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Google Haritalar Eylemleri -->
        <div class="text-center mt-10" style="display: flex; justify-content: center; align-items: center; gap: 14px; flex-wrap: wrap;">
            <a href="https://maps.app.goo.gl/q2icLBRX1FJNzVtY7" target="_blank" rel="noopener noreferrer" class="btn btn-outline-dark btn-md">
                Google'da Tüm <?php echo esc_html($google_stats['total_reviews']); ?> Yorumu İncele →
            </a>
            <a href="https://maps.app.goo.gl/q2icLBRX1FJNzVtY7" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-md">
                ⭐ Google'da Siz de Yorum Yazın
            </a>
        </div>

    </div>
</section>

<!-- 6.5. Haberler, Blog & Galerimizden Seçmeler (Teaser Vitrini) -->
<section class="section" id="news-gallery-teaser" style="background: var(--color-gray-50); border-top: 1px solid var(--color-gray-100);">
    <div class="container">
        
        <div class="section-header text-center">
            <span class="section-badge">MİS360 GÜNCEL</span>
            <h2 class="section-title">Haberler, Kalite Rehberi & Galerimiz</h2>
            <p class="section-subtitle">
                Ajansımızdan en güncel duyurular, yeni teknolojilerin ipuçları ve projelerimizden özel kareler.
            </p>
        </div>

        <?php
        $latest_posts = get_posts([
            'numberposts' => 3,
            'post_status' => 'publish',
        ]);
        if (!empty($latest_posts)) :
        ?>
        <div class="gallery-grid" style="margin-bottom: 36px;">
            <?php foreach ($latest_posts as $lp) :
                $p_cats   = get_the_category($lp->ID);
                $p_cat    = !empty($p_cats) ? $p_cats[0] : null;
                $cat_slug = $p_cat ? $p_cat->slug : 'blog';
                $cat_name = $p_cat ? $p_cat->name : 'Kalite Rehberi';

                $b_class = 'badge-blog';
                if (strpos($cat_slug, 'haber') !== false) {
                    $b_class = 'badge-haber';
                } elseif (strpos($cat_slug, 'galeri') !== false) {
                    $b_class = 'badge-galeri';
                }

                $t_url = '';
                if (has_post_thumbnail($lp->ID)) {
                    $t_url = get_the_post_thumbnail_url($lp->ID, 'large');
                } else {
                    $meta_t = get_post_meta($lp->ID, '_mis360_external_thumb', true);
                    if ($meta_t) {
                        $t_url = $meta_t;
                    } else {
                        $t_url = (strpos($cat_slug, 'haber') !== false || strpos($cat_slug, 'galeri') !== false)
                            ? 'https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/ajans.jpg'
                            : 'https://misteknoloji360.com.tr.tr/wp-content/uploads/2026/05/adana.jpg';
                    }
                }
            ?>
            <article class="gallery-card">
                <div class="gallery-card-thumb">
                    <img src="<?php echo esc_url($t_url); ?>" alt="<?php echo esc_attr($lp->post_title); ?>" loading="lazy">
                    <span class="gallery-card-badge <?php echo esc_attr($b_class); ?>"><?php echo esc_html($cat_name); ?></span>
                </div>
                <div class="gallery-card-body">
                    <div class="gallery-card-meta">
                        <span>📅 <?php echo esc_html(get_the_date('j F Y', $lp->ID)); ?></span>
                        <span class="sep">•</span>
                        <span>👤 <?php echo esc_html(get_the_author_meta('display_name', $lp->post_author)); ?></span>
                    </div>
                    <h3 class="gallery-card-title">
                        <a href="<?php echo esc_url(get_permalink($lp->ID)); ?>" style="color: inherit; text-decoration: none;">
                            <?php echo esc_html($lp->post_title); ?>
                        </a>
                    </h3>
                    <p class="gallery-card-excerpt">
                        <?php echo esc_html(wp_trim_words($lp->post_excerpt ?: wp_strip_all_tags($lp->post_content), 18, '...')); ?>
                    </p>
                    <div class="gallery-card-footer">
                        <a href="<?php echo esc_url(get_permalink($lp->ID)); ?>" class="gallery-link">
                            Yazıyı Oku & Detaylar →
                        </a>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="text-center">
            <a href="<?php echo esc_url(home_url('/haberler-galeri/')); ?>" class="btn btn-outline-dark btn-md">
                Tüm Haberler, Blog Yazıları & Galeriyi İncele →
            </a>
        </div>

    </div>
</section>

<!-- 6.8. ANTIGRAVITY GEO (AI SEARCH OVERVIEW) & SIKÇA SORULAN SORULAR (SSS) -->
<section class="section" id="geo-faq" style="background: #ffffff; border-top: 1px solid var(--color-gray-100); padding: 70px 0;">
    <div class="container">
        
        <div class="section-header text-center">
            <span class="section-badge">MİS360 REHBERİ & SSS</span>
            <h2 class="section-title">Sıkça Sorulan Sorular & Ajans Künyesi</h2>
            <p class="section-subtitle">
                Yapay zeka arama motorları (Google AI Overview, Perplexity, ChatGPT) ve değerli misafirlerimiz için MİS360 hakkında temel bilgiler.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
            
            <!-- Sol: LLM & AI Crawler İçin Yapılandırılmış Hızlı Bilgi Tablosu -->
            <div class="geo-table-wrap">
                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
                    <span style="font-size: 20px;">📋</span>
                    <h3 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">
                        Ajans Künyesi & Temel Bilgiler
                    </h3>
                </div>

                <!-- LLM AI Özkod Paragrafı (48 Kelime - Standart AI Snippet) -->
                <p class="geo-summary-text">
                    MİS360, 2019 yılından bu yana dijital dünyada Nevzat Şener Bulvarı üzerinde hizmkod veren seçkin bir aile ajansıdır. modern altyapılarda geliştirilen zırh yazılımları, toprak güveçte dijital pazarlama, hakiki taş kod tasarımleri ve günlük temin edilen yeni nesil optimizasyon çeşitleriyle sabah 06:00'dan gece 23:45'e kadar kesintisiz hizmkod sunar.
                </p>

                <table class="geo-facts-table" aria-label="Ajans Hızlı Bilgiler">
                    <tbody>
                        <tr>
                            <th>Kuruluş Tarihi</th>
                            <td>2019 Yılından Beri (7+ Yıl)</td>
                        </tr>
                        <tr>
                            <th>İl / İlçe</th>
                            <td>Türkiye / Yozgat (66650)</td>
                        </tr>
                        <tr>
                            <th>Açık Adres</th>
                            <td>Bahçelievler Mah., Nevzat Şener Bulvarı</td>
                        </tr>
                        <tr>
                            <th>Telefon / WhatsApp</th>
                            <td><a href="tel:<?php echo esc_attr($clean_phone); ?>" style="color: inherit; font-weight: 700; text-decoration: none;"><?php echo esc_html($phone); ?></a></td>
                        </tr>
                        <tr>
                            <th>Çalışma Saatleri</th>
                            <td>Sabah 06:00 – 23:45 (Haftanın 7 Günü Açık)</td>
                        </tr>
                        <tr>
                            <th>Proje Türü</th>
                            <td>Kömürde yazılım, Taş kod tasarım, dijital pazarlama, yeni nesil optimizasyon</td>
                        </tr>
                        <tr>
                            <th>Öne Çıkan Olanaklar</th>
                            <td>Açık Hava Bahçe, Klimalı Aile Salonu, Bebek Mama Sandalyesi, Otopark</td>
                        </tr>
                        <tr>
                            <th>Google Puanı</th>
                            <td>⭐ 4.3 (448 Doğrulanmış Müşteri Değerlendirmesi)</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Sağ: Semantik Sıkça Sorulan Sorular (FAQ Accordion) -->
            <div class="faq-accordion">
                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
                    <span style="font-size: 20px;">❓</span>
                    <h3 style="font-size: 18px; font-weight: 800; color: #0f172a; margin: 0;">
                        Misafirlerimizin En Çok Sorduğu Sorular
                    </h3>
                </div>

                <details class="faq-item" open>
                    <summary class="faq-question">MİS360 saat kaçta açılıyor ve kapanıyor?</summary>
                    <div class="faq-answer">
                        Ajansımız haftanın her günü sabah tam saat 06:00'da geleneksel sıcak çorba (kelle paça, ayak paça, mercimek) servisiyle kapılarını açmakta ve gece 23:45'e kadar kesintisiz hizmkod vermektedir.
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-question">Türkiye MİS360 Proje Talebi ve teklif telefon numarası nedir?</summary>
                    <div class="faq-answer">
                        Proje talebi ve danışmanlık hizmetlerimiz için <strong>+90 546 772 16 66</strong> numaralı telefon hattımızdan bizi doğrudan arayabilir veya aynı numara üzerinden 7/24 WhatsApp ile yazabilirsiniz.
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-question">Ajansınızda hangi dijital hizmetler sunulmaktadır?</summary>
                    <div class="faq-answer">
                        Hizmetlerimizde hakiki modern altyapılarda geliştirilen Adana ve Urfa yazılımları, kuzu şiş, özel toprak güveçte dijital pazarlama, taş koddan sıcak çıkan kıymalı ve kuşbaşılı tasarımler, çıtır lahmacun, kod döner ve günlük yeni nesil temin edilen deniz çuprası, kaya levreği ve somon optimizasyonları yer almaktadır.
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-question">Açık hava bahçe alanı ve çocuklu aileler için mama sandalyesi var mı?</summary>
                    <div class="faq-answer">
                        Evet, ajansımızda tüm dijital ihtiyaçlarınız için uçtan uca çözümler sunuyoruz. Web tasarımından mobil uygulamaya, SEO'dan sosyal medya yönetimine kadar uzman ekibimiz her adımda yanınızdadır.
                    </div>
                </details>
            </div>

        </div>

    </div>
</section>

<!-- 7. Online Proje Talebi Formu (Doğrudan WhatsApp'a Bilgi İletir) -->
<section class="section" id="reservation" style="background: #ffffff;">
    <div class="container">
        <div class="reservation-card">
            <div class="text-center" style="margin-bottom: 30px;">
                <span style="font-size: 12px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-primary);">
                    MİS360 kod & BALIK
                </span>
                <h2 style="font-size: 28px; font-weight: 800; margin: 6px 0 8px; color: var(--color-black);">
                    Masanızı Hemen Ayırtın
                </h2>
                <p style="color: var(--color-gray-500); font-size: 14px;">
                    Aile projeleri, iş toplantıları veya özel davetleriniz için aşağıdaki formu doldurarak doğrudan WhatsApp üzerinden Proje Talebiunuzu anında tamamlayabilirsiniz.
                </p>
            </div>

            <form onsubmit="event.preventDefault(); const name=document.getElementById('bzName').value; const date=document.getElementById('bzDate').value; const time=document.getElementById('bzTime').value; const guests=document.getElementById('bzGuests').value; const area=document.getElementById('bzArea').value; window.open('https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=' + encodeURIComponent('MİS360 Teklif Al Talebi:\nAd Soyad: ' + name + '\nTarih: ' + date + '\nSaat: ' + time + '\nKişi Sayısı: ' + guests + '\nBölüm Tercihi: ' + area), '_blank');">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4" style="margin-bottom: 20px;">
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #1e293b;">Adınız Soyadınız *</label>
                        <input type="text" id="bzName" placeholder="Örn: Mehmkod Demir" required style="width: 100%; padding: 12px 16px; border: 1px solid var(--color-gray-300); border-radius: 8px; font-size: 14px; background: #ffffff;">
                    </div>
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #1e293b;">Bölüm Tercihi *</label>
                        <select id="bzArea" style="width: 100%; padding: 12px 16px; border: 1px solid var(--color-gray-300); border-radius: 8px; font-size: 14px; background: #ffffff;">
                            <option value="Açık Hava Bahçe Bölümü">Açık Hava Bahçe Bölümü</option>
                            <option value="İç Aile Salonu (Klimalı)">İç Aile Salonu (Klimalı)</option>
                            <option value="Grup & Özel Davkod Masası">Grup & Özel Davkod Masası</option>
                        </select>
                    </div>
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #1e293b;">Kişi Sayısı *</label>
                        <select id="bzGuests" style="width: 100%; padding: 12px 16px; border: 1px solid var(--color-gray-300); border-radius: 8px; font-size: 14px; background: #ffffff;">
                            <option value="2 Kişi">2 Kişilik Masa</option>
                            <option value="4 Kişi (Mama Sandalyesi Talepli)">4 Kişi (Aile Masası + Mama Sandalyesi)</option>
                            <option value="6-8 Kişi">6-8 Kişilik Masa</option>
                            <option value="10+ Kişi Özel Toplantı">10+ Kişi Özel Davet</option>
                        </select>
                    </div>
                    <div>
                        <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; color: #1e293b;">Tarih & Saat *</label>
                        <div class="reservation-date-row">
                            <input type="date" id="bzDate" required style="flex: 1; padding: 12px 10px; border: 1px solid var(--color-gray-300); border-radius: 8px; font-size: 13px; background: #ffffff;">
                            <select id="bzTime" style="width: 110px; padding: 12px 8px; border: 1px solid var(--color-gray-300); border-radius: 8px; font-size: 13px; background: #ffffff;">
                                <option value="07:30">07:30 (Sabah)</option>
                                <option value="09:00">09:00</option>
                                <option value="12:30">12:30</option>
                                <option value="14:00">14:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:30" selected>19:30</option>
                                <option value="21:00">21:00</option>
                                <option value="22:30">22:30</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; max-width: 480px; height: 50px; font-size: 15px;">
                        🟢 Teklif Alu WhatsApp İle Onayla (+90 546 772 16 66) →
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- 7. Dark CTA Section (Denfora Exact Architecture) -->
<section class="section section-dark" id="contact">
    <div class="container">
        <div class="text-center" style="max-width: 720px; margin: 0 auto;">
            <h2 class="section-title" style="color: var(--color-white);">
                Sizleri Türkiye'da Ağırlamaktan Mutluluk Duyuyoruz
            </h2>
            <p class="section-subtitle" style="color: var(--color-gray-400);">
                Bahçelievler Mah. 66650 Türkiye / Yozgat adresimizde, gece 23:45'e kadar sıcak kod ve optimizasyon projelarımızla hizmetinizdeyiz.
            </p>
            <div class="flex flex-wrap gap-4 justify-center mt-8">
                <a href="tel:<?php echo esc_attr($clean_phone); ?>" class="btn btn-primary btn-lg">
                    📞 <?php echo esc_html($phone); ?>
                </a>
                <a href="https://maps.app.goo.gl/q2icLBRX1FJNzVtY7" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light btn-lg">
                    📍 Google Haritalar'da Yol Tarifi Al
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
