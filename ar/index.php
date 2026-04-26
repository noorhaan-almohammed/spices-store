<?php
$lang = 'ar';
$dir = 'rtl';
$alt_lang = 'en';
$alt_lang_label = 'English';
$alt_lang_url = '../en/index.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>كرم - مستورد التوابل</title>
    <link rel="icon" href="../assets/logo.png" type="image/png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/rtl.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="rtl">

<!-- ========== HEADER ========== -->
<header class="header" id="header">
    <div class="header-top">
        <div class="container">
            <div class="header-top-inner">
                <div class="social-links">
                    <a href="https://www.facebook.com/share/1Zxwg8MYh1/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/karamcompany0?igsh=cjIwZzNpczFib3d4"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/963933797873"><i class="fab fa-whatsapp"></i></a>
                </div>
                <nav class="top-nav">
                    <a href="index.php" class="active">الرئيسية</a>
                    <a href="imports.php">الواردات</a>
                    <a href="exports.php">الصادرات</a>
                    <a href="products.php">المتجر</a>
                </nav>
                <div class="header-actions">
                    <a href="<?= $alt_lang_url ?>" class="lang-switch">
                        <i class="fas fa-globe"></i> English
                    </a>
                    <!-- <a href="#" class="btn-login">تسجيل الدخول</a> -->
                    <a href="#contact" class="btn-cta">تواصل معنا</a>
                </div>
                <!-- Hamburger Menu Button -->
                <button class="hamburger-menu" id="hamburgerMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile Navigation Menu -->
    <div class="mobile-nav" id="mobileNav">
        <div class="mobile-nav-inner">
            <div class="mobile-nav-header">
                <div class="mobile-logo">
                    <img src="../assets/white_logo.png" alt="Karam Logo">
                </div>
                <button class="mobile-close" id="mobileClose">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <nav class="mobile-nav-menu">
                <a href="index.php" class="mobile-nav-link active">الرئيسية</a>
                <a href="imports.php" class="mobile-nav-link">الواردات</a>
                <a href="exports.php" class="mobile-nav-link">الصادرات</a>
                <a href="products.php" class="mobile-nav-link">المتجر</a>
            </nav>
            <div class="mobile-social">
                <a href="https://www.facebook.com/share/1Zxwg8MYh1/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/karamcompany0?igsh=cjIwZzNpczFib3d4"><i class="fab fa-instagram"></i></a>
                <a href="https://wa.me/963933797873"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
</header>

<!-- ========== HERO ========== -->
<section class="hero">
    <div class="hero-bg_1"></div>
    <div class="hero-bg_2"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-inner">
            <div class="hero-text" data-aos="fade-right">
                <h1>تذوق العالم – نكهة تلو الأخرى.</h1>
                <p>اكتشف ثراء التوابل والقهوة الممتازة، المصدره من أخصب الأراضي حول العالم. سواء كنت طاهياً، شركة، أو خبيراً، فإننا نقدم لك جوهر الجودة على طاولتك.</p>
                <a href="#contact" class="btn btn-primary">تواصل معنا</a>
            </div>
            <div class="hero-logo" data-aos="fade-left">
                <div class="logo-box">
                    <div class="logo-fallback" style="display:flex">
                       <img src="../assets/white_logo.png" alt="Karam Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-wave">
        <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg"><path fill="#f5f5f5" d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z"/></svg>
    </div>
</section>

<!-- ========== ABOUT ========== -->
<section class="about section-pad" id="about">
    <div class="container">
        <div class="about-inner">
            <div class="about-image" data-aos="fade-left">
                <div class="spices-bowl-img">
                    <img src="../assets/about.svg" alt="تنوع التوابل" loading="lazy">
                </div>
            </div>
            <div class="about-content" data-aos="fade-right">
                <div class="about-card">
                    <h2>مَنْ نحن؟</h2>
                    <p>تأسست شركة كرم التجارية على يد السيد حسان الصالح عام 2010، ومنذ ذلك الحين وهي تُعدّ من الشركات الرائدة في استيراد وتصدير التوابل والمحاصيل الزراعية، ملتزمة بتقديم منتجات عالية الجودة تلبي احتياجات الأسواق المحلية والعالمية.</p>
                    <a href="#" class="btn btn-outline">اعرف أكثر</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== WHY US ========== -->
<section class="why-us section-pad bg-light" id="why">
    <div class="container">
        <h2 class="section-title text-center">هدفنا</h2>
        <div class="why-grid">
             <div class="why-card" data-aos="fade-up" data-aos-delay="300">
                <div class="why-icon"><i class="fas fa-star"></i></div>
                <h3>الجودة أولاً</h3>
            <p>نحن ملتزمون بتقديم منتجات طبيعية عالية الجودة تلبي المعايير العالمية وتلبي تفضيلات العملاء في جميع أنحاء العالم.</p>
            </div>
            <div class="why-card" data-aos="fade-up" data-aos-delay="150">
                <div class="why-icon"><i class="fas fa-handshake"></i></div>
                <h3>شراكات مستدامة</h3>
                <p>نسعى لبناء علاقات طويلة الأمد قائمة على الثقة والمصداقية مع موردينا وشركائنا التجاريين حول العالم.</p>
            </div>
            <div class="why-card" data-aos="fade-up" data-aos-delay="0">
                <div class="why-icon"><i class="fas fa-globe-americas"></i></div>
                <h3>التوسع العالمي</h3>
                <p>نهدف إلى تعزيز وجودنا في الأسواق الدولية وتوسيع نطاق عملياتنا لتشمل المزيد من الدول والعملاء.</p>
            </div>
        </div>
    </div>
</section>

<!-- ========== PRODUCTS SLIDER ========== -->
<section class="products-featured section-pad" id="products">
    <div class="">
        <h2 class="section-title text-center">منتجاتنا المستوردة</h2>
        <div class="featured-slider">
            <div class="featured-slide slide-herbs">
                <div class="spices-slide-overlay"></div>
                <div class="slide-content">
                    <h3>أعشاب وتوابل</h3>
                    <p>سمفونية من النكهات لترفع من مستوى أطباقك.</p>
                    <a href="products.php" class="btn btn-outline-white">تفاصيل أكثر</a>
                </div>
            </div>
            <div class="featured-slide slide-coffee" >
                <div class="coffee-slide-overlay"></div>
                <div class="slide-content">
                    <h3>القهوة</h3>
                    <p>محضرة من أرقى الحبوب، المثالية لكل عشاق القهوة.</p>
                    <a href="products.php" class="btn btn-outline-white">تفاصيل أكثر</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== BEST PRODUCTS ========== -->
<section class="best-products section-pad" id="best">
    <div class="container">
        <h2 class="section-title text-center">اختيارانا الأفضل</h2>
        <div class="products-carousel-wrapper">
            <button class="carousel-btn prev" id="prevBtn"><i class="fas fa-chevron-right"></i></button>
            <div class="products-carousel" id="productCarousel">
                <?php
                $products = [
                    ['id' => 1, 'name' => 'النرجس', 'img' => '../assets/products/Narcissus.webp'],
                    ['id' => 2, 'name' => 'الفلفل الأبيض', 'img' => '../assets/products/White_Pepper.webp'],
                    ['id' => 3, 'name' => 'الخولنجان', 'img' => '../assets/products/Alpinia.webp'],
                    ['id' => 4, 'name' => 'اليانسون', 'img' => '../assets/products/Anise.webp'],
                    ['id' => 5, 'name' => 'الريحان', 'img' => '../assets/products/Basil.webp'],
                    ['id' => 6, 'name' => 'ورق الغار', 'img' => '../assets/products/Bay_Leaves.webp'],
                    ['id' => 7, 'name' => 'الفاصوليا', 'img' => '../assets/products/Beans.webp'],
                    ['id' => 8, 'name' => 'الفلفل الأسود', 'img' => '../assets/products/Black_Pepper.webp'],
                    ['id' => 9, 'name' => 'الفول العريض', 'img' => '../assets/products/Broad_Bean.webp'],
                    ['id' => 10, 'name' => 'البابونج', 'img' => '../assets/products/Chamomile.webp'],
                    ['id' => 11, 'name' => 'الحمص', 'img' => '../assets/products/Chickpeas.webp'],
                    ['id' => 12, 'name' => 'القرنفل', 'img' => '../assets/products/Clove.webp'],
                    ['id' => 13, 'name' => 'القرفة', 'img' => '../assets/products/Cinnamon.webp'],
                    ['id' => 14, 'name' => 'القهوة', 'img' => '../assets/products/Coffee.webp'],
                    ['id' => 15, 'name' => 'الكزبرة', 'img' => '../assets/products/Coriander.webp'],
                    ['id' => 16, 'name' => 'اللوبيا', 'img' => '../assets/products/Cowpeas.webp'],
                    ['id' => 17, 'name' => 'الكمون', 'img' => '../assets/products/Cuminum.webp'],
                    ['id' => 18, 'name' => 'ورد دمشقي', 'img' => '../assets/products/Damask_rose.webp'],
                    ['id' => 19, 'name' => 'الشمر', 'img' => '../assets/products/Fennel.webp'],
                    ['id' => 20, 'name' => 'الحلبة', 'img' => '../assets/products/Fenugreek.webp'],
                    ['id' => 21, 'name' => 'الزنجبيل', 'img' => '../assets/products/Ginger.webp'],
                    ['id' => 22, 'name' => 'الليمون', 'img' => '../assets/products/Lemon.webp'],
                    ['id' => 23, 'name' => 'العدس', 'img' => '../assets/products/Lentils.webp'],
                    ['id' => 24, 'name' => 'النرجس', 'img' => '../assets/products/Narcissus.webp'],
                    ['id' => 25, 'name' => 'حبة البركة', 'img' => '../assets/products/Nigella_sativa.webp'],
                    ['id' => 26, 'name' => 'البابريكا', 'img' => '../assets/products/Paprika.webp'],
                    ['id' => 27, 'name' => 'البازلاء', 'img' => '../assets/products/Peas.webp'],
                    ['id' => 28, 'name' => 'إكليل الجبل', 'img' => '../assets/products/Rosemary.webp'],
                    ['id' => 29, 'name' => 'السمسم', 'img' => '../assets/products/Sesame.webp'],
                    ['id' => 30, 'name' => 'الزعتر', 'img' => '../assets/products/Thyme.webp'],
                    ['id' => 31, 'name' => 'الكركم', 'img' => '../assets/products/Turmeric.webp'],
                ];
                foreach($products as $p): ?>
                <div class="product-card" onclick="window.location.href='product-details.php?id=<?= $p['id'] ?>'">
                    <div class="product-img">
                        <img src="<?= $p['img'] ?>" alt="<?= $p['name'] ?>" loading="lazy">
                    </div>
                    <h4><?= $p['name'] ?></h4>
                </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-btn next" id="nextBtn"><i class="fas fa-chevron-left"></i></button>
        </div>
    </div>
</section>

<!-- Export Section -->
<section class="export-section">
  <div class="export-grid">

    <div class="export-img img-a"></div>
    <div class="export-img img-b"></div>
    <div class="export-img img-c"></div>
    <div class="export-img img-d"></div>

    <div class="export-card">
      <h2>منتجاتنا المصدرة</h2>
      <p>
        بالإضافة إلى الاستيراد، نفخر أيضاً بتصدير منتجات زراعية عالية الجودة.
        من البقوليات الغنية بالمغذيات إلى المحاصيل الممتازة، نربط الأسواق العالمية بأفضل المنتجات.
      </p>
      <a href="products.php" class="export-btn">المزيد من المنتجات</a>
    </div>

  </div>
</section>

<!-- ========== LOCAL PRODUCTS ========== -->
<section class="local-products">
    <div class="local-bg">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1400&q=80" alt="منتجات محلية" loading="lazy">
        <div class="local-overlay"></div>
    </div>
    <div class="container">
        <div class="local-card" data-aos="fade-up">
            <h2>منتجاتنا المحلية</h2>
            <p>إلى جانب الاستيراد، نفتخر أيضاً بتقديم المنتجات الزراعية عالية الجودة. من الحبوب الأصلية والعناصر الغذائية إلى المحاصيل الزراعية الطازجة، نحن نربط الأسواق المحلية والعالمية بأفضل المنتجات.</p>
            <a href="products.php" class="btn btn-primary">اعرف عن المنتجات</a>
        </div>
    </div>
</section>

<!-- ========== CONTACT ========== -->
<section class="contact section-pad" id="contact">
    <div class="container">
        <div class="contact-inner">
            <div class="contact-text" data-aos="fade-left">
                <h2>تواصل معنا</h2>
                <p>نحب أن نسمع منك! سواء كان لديك سؤال، أو تحتاج إلى عرض أسعار، أو ترغب في استكشاف منتجاتنا - فريقنا هنا لمساعدتك. لا تتردد، تواصل معنا اليوم ودعنا نضفي النكهة على عملك معًا!</p>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@karam.com.sy">info@karam.com.sy</a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-globe"></i>
                        <a href="https://karam.sy">karam.sy</a> , 
                        <a href="https://karam.com.sy">karam.com.sy</a>
                    </div>
                      <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <a href="tel:+963933797873">+963 933 797 873</a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>سوريا – دمشق – برج الخيام – الطابق الأول</span>
                    </div>
                </div>
            </div>
            <div class="contact-form" data-aos="fade-right">
                <form method="post" action="#">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="الاسم الكامل" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="البريد الإلكتروني" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" placeholder="رقم الهاتف">
                    </div>
                    <div class="form-group">
                        <textarea name="message" rows="4" placeholder="رسالتك..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-full">إرسال الرسالة</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ========== FOOTER ========== -->
<footer class="footer">
    <div class="footer-social">
        <a href="https://wa.me/963933797873"><i class="fab fa-whatsapp"></i></a>
        <a href="https://www.instagram.com/karamcompany0?igsh=cjIwZzNpczFib3d4"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/share/1Zxwg8MYh1/"><i class="fab fa-facebook-f"></i></a>
    </div>
    <div class="footer-bottom">
        <span>
            <a href="<?= $alt_lang_url ?>">English (US)</a> &nbsp;|&nbsp;
            <a href="index.php">العربية</a> &nbsp;|&nbsp;
           تم تطوير هذا الموقع من خلال وكالة سيدكو
        </span>
    </div>
</footer>
<script src="../js/main.js"></script>
</body>
</html>
