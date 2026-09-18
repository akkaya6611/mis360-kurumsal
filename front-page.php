<?php get_header(); ?>

<main class="asistanx-style-main">

    <!-- HERO SECTION -->
    <section class="asistanx-hero">
        <div class="asistanx-grid-bg"></div>
        
        <div class="container asistanx-hero-container">
            <div class="asistanx-hero-content">
                <div class="asistanx-ai-pill">
                    <span class="ai-star">✦</span>
                    <span class="ai-text">Yapay Zeka Destekli</span> Dijital Çözümler
                </div>
                
                <h1 class="asistanx-hero-title">
                    Sahadasın.<br>
                    Depodasın.<br>
                    Yoldasın. <span class="text-accent">AsistanX</span><br>
                    zaten oradaydı.
                </h1>

                <p class="asistanx-hero-description">
                    Pazaryerinden üretime, kargoya, muhasebeye — e-ticaretinizin tüm halkalarını birbirine bağlar. WhatsApp'tan sorgular, AI ile karar verir, otomasyonla sonuçlandırır. <em>Kahvenizi yudumlayın, biz hallediyoruz.</em>
                </p>
                
                <div class="asistanx-hero-actions">
                    <a href="<?php echo esc_url( home_url( '/teklif/' ) ); ?>" class="asx-btn asx-btn-primary">
                        Demo Talep Et 
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/hizmetlerimiz/' ) ); ?>" class="asx-btn asx-btn-ghost">
                        50 Modülü Keşfet
                    </a>
                </div>

                <div class="asistanx-hero-features">
                    <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-accent"><path d="M5 12l4 4 10-10"/></svg> Kurulum yok, web tabanlı</span>
                    <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-accent"><path d="M5 12l4 4 10-10"/></svg> 50+ modül</span>
                    <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-accent"><path d="M5 12l4 4 10-10"/></svg> Türkçe destek</span>
                </div>
            </div>
            
            <div class="asistanx-hero-visual">
                <div class="asistanx-phone-wrapper">
                    <!-- Floating Badge Top Right -->
                    <div class="asx-floating-badge top-right">
                        <span class="text-accent">●</span> 124 sipariş bugün
                    </div>
                    
                    <!-- Floating Badge Bottom Left -->
                    <div class="asx-floating-badge bottom-left">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-accent"><path d="M6 8a6 6 0 1 1 12 0c0 5 2 6 2 6H4s2-1 2-6z"/><path d="M10 19a2 2 0 1 0 4 0"/></svg>
                        Yeni yorum: ⭐⭐⭐⭐⭐
                    </div>

                    <div class="asistanx-phone-mockup">
                        <div class="phone-notch"></div>
                        <div class="phone-screen">
                            <div class="chat-header">
                                <div class="chat-avatar">AX</div>
                                <div class="chat-title">
                                    <strong>AsistanX</strong>
                                    <span>çevrimiçi</span>
                                </div>
                            </div>
                            <div class="chat-body">
                                <div class="chat-bubble user">AsistanX, bugün ciro nedir?</div>
                                <div class="chat-bubble bot">
                                    Bugün ciro: ₺47.820 (124 sipariş)<br>
                                    • Trendyol: ₺21.300<br>
                                    • Hepsiburada: ₺15.420<br>
                                    • Site: ₺11.100
                                </div>
                                <div class="chat-bubble user">henüz kargolanmamış kaç sipariş var?</div>
                                <div class="chat-bubble bot">
                                    18 sipariş kargolanmamış. (en eskisi 4 saat önce)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MARQUEE SECTION (REFERANSLAR) -->
    <section class="asistanx-marquee-section">
        <div class="marquee-title">GÜVENEN MARKALAR</div>
        <div class="asx-marquee-container">
            <div class="asx-marquee-track">
                <div class="asx-marquee-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ref-beyzade.png" alt="Beyzade"></div>
                <div class="asx-marquee-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ref-emdief.png" alt="Emdief"></div>
                <div class="asx-marquee-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ref-yolyardim.png" alt="Yol Yardim"></div>
                <div class="asx-marquee-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ref-ratemo.png" alt="Ratemo"></div>
                <!-- Duplicate for loop -->
                <div class="asx-marquee-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ref-beyzade.png" alt="Beyzade"></div>
                <div class="asx-marquee-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ref-emdief.png" alt="Emdief"></div>
                <div class="asx-marquee-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ref-yolyardim.png" alt="Yol Yardim"></div>
                <div class="asx-marquee-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ref-ratemo.png" alt="Ratemo"></div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
