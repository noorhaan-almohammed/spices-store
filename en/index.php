<?php
$lang = 'en';
$dir = 'ltr';
$alt_lang = 'ar';
$alt_lang_label = 'العربية';
$alt_lang_url = '../ar/index.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karam – Spices Importer</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/ltr.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="ltr">

<!-- ========== HEADER ========== -->
<header class="header" id="header">
    <div class="header-top">
        <div class="container">
            <div class="header-top-inner">
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <nav class="top-nav">
                    <a href="index.php" class="active">Home</a>
                    <a href="imports.php">Imports</a>
                    <a href="exports.php">Exports</a>
                    <a href="products.php">Store</a>
                </nav>
                <div class="header-actions">
                    <a href="<?= $alt_lang_url ?>" class="lang-switch">
                        <i class="fas fa-globe"></i> العربية
                    </a>
                    <!-- <a href="#" class="btn-login">Login</a> -->
                    <a href="#contact" class="btn-cta">Contact Us</a>
                </div>
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
            <div class="hero-text" data-aos="fade-left">
                <h1>Savor the World – One Spice at a Time.</h1>
                <p>Discover the richness of premium spices and coffee, sourced from the most fertile lands across the globe. Whether you’re a chef, a business, or a connoisseur, we bring the essence of quality to your table.</p>
                <a href="#contact" class="btn btn-primary">Contact Us</a>
            </div>
            <div class="hero-logo" data-aos="fade-right">
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
                    <img src="../assets/about.svg" alt="Variety of spices" loading="lazy">
                </div>
            </div>
            <div class="about-content" data-aos="fade-right">
                <div class="about-card">
                    <h2>Who Are We?</h2>
                    <p>Karam Trading Company, founded by Mr. Hassan Al-Saleh in 2010, has established itself as a leading player in the import and export of spices and agricultural products. We are committed to delivering high-quality goods that meet the demands of both local and international markets.</p>
                    <a href="#" class="btn btn-outline">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== WHY US ========== -->
<section class="why-us section-pad bg-light" id="why">
    <div class="container">
        <h2 class="section-title text-center">Our Goal</h2>
        <div class="why-grid">
             <div class="why-card" data-aos="fade-up" data-aos-delay="300">
                <div class="why-icon"><i class="fas fa-star"></i></div>
                <h3>Quality First</h3>
            <p>We are committed to offering high-quality, natural products that meet global standards and satisfy customer preferences worldwide.</p>
            </div>
            <div class="why-card" data-aos="fade-up" data-aos-delay="150">
                <div class="why-icon"><i class="fas fa-handshake"></i></div>
                <h3>Sustainable Partnerships</h3>
                <p>Speed and efficiency ensure tasks are completed quickly and resources are used optimally, enhancing productivity and satisfaction.</p>
            </div>
            <div class="why-card" data-aos="fade-up" data-aos-delay="0">
                <div class="why-icon"><i class="fas fa-globe-americas"></i></div>
                <h3>Global Expansion</h3>
                <p>Growth capability is a system's ability to scale and adapt, meeting increasing demands and evolving needs for long-term success.</p>
            </div>
        </div>
    </div>
</section>

<!-- ========== PRODUCTS SLIDER ========== -->
<section class="products-featured section-pad" id="products">
    <div class="">
        <h2 class="section-title text-center">Our Imported Products</h2>
        <div class="featured-slider">
            <div class="featured-slide slide-herbs">
                <div class="spices-slide-overlay"></div>
                <div class="slide-content">
                    <h3>Herbs & Spices</h3>
                    <p>Carefully selected from nature's finest sources around the world.</p>
                    <a href="products.php" class="btn btn-outline-white">Learn More</a>
                </div>
            </div>
            <div class="featured-slide slide-coffee" >
                <div class="coffee-slide-overlay"></div>
                <div class="slide-content">
                    <h3>Coffee</h3>
                    <p>Sourced from the finest beans, perfect for every coffee enthusiast.</p>
                    <a href="products.php" class="btn btn-outline-white">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== BEST PRODUCTS ========== -->
<section class="best-products section-pad" id="best">
    <div class="container">
        <h2 class="section-title text-center">Our Best Selections</h2>
        <div class="products-carousel-wrapper">
            <button class="carousel-btn prev" id="prevBtn"><i class="fas fa-chevron-left"></i></button>
            <div class="products-carousel" id="productCarousel">
                <?php
                $products = [
                    ['id' => 1, 'name' => 'Narcissus', 'img' => '../assets/products/Narcissus.webp'],
                    ['id' => 2, 'name' => 'White Pepper', 'img' => '../assets/products/White_Pepper.webp'],
                    ['id' => 3, 'name' => 'Alpinia', 'img' => '../assets/products/Alpinia.webp'],
                    ['id' => 4, 'name' => 'Anise', 'img' => '../assets/products/Anise.webp'],
                    ['id' => 5, 'name' => 'Basil', 'img' => '../assets/products/Basil.webp'],
                    ['id' => 6, 'name' => 'Bay Leaves', 'img' => '../assets/products/Bay_Leaves.webp'],
                    ['id' => 7, 'name' => 'Beans', 'img' => '../assets/products/Beans.webp'],
                    ['id' => 8, 'name' => 'Black Pepper', 'img' => '../assets/products/Black_Pepper.webp'],
                    ['id' => 9, 'name' => 'Broad Bean', 'img' => '../assets/products/Broad_Bean.webp'],
                    ['id' => 10, 'name' => 'Chamomile', 'img' => '../assets/products/Chamomile.webp'],
                    ['id' => 11, 'name' => 'Chickpeas', 'img' => '../assets/products/Chickpeas.webp'],
                    ['id' => 12, 'name' => 'Clove', 'img' => '../assets/products/Clove.webp'],
                    ['id' => 13, 'name' => 'Cinnamon', 'img' => '../assets/products/Cinnamon.webp'],
                    ['id' => 14, 'name' => 'Coffee', 'img' => '../assets/products/Coffee.webp'],
                    ['id' => 15, 'name' => 'Coriander', 'img' => '../assets/products/Coriander.webp'],
                    ['id' => 16, 'name' => 'Cowpeas', 'img' => '../assets/products/Cowpeas.webp'],
                    ['id' => 17, 'name' => 'Cumin', 'img' => '../assets/products/Cuminum.webp'],
                    ['id' => 18, 'name' => 'Damask Rose', 'img' => '../assets/products/Damask_rose.webp'],
                    ['id' => 19, 'name' => 'Fennel', 'img' => '../assets/products/Fennel.webp'],
                    ['id' => 20, 'name' => 'Fenugreek', 'img' => '../assets/products/Fenugreek.webp'],
                    ['id' => 21, 'name' => 'Ginger', 'img' => '../assets/products/Ginger.webp'],
                    ['id' => 22, 'name' => 'Lemon', 'img' => '../assets/products/Lemon.webp'],
                    ['id' => 23, 'name' => 'Lentils', 'img' => '../assets/products/Lentils.webp'],
                    ['id' => 24, 'name' => 'Narcissus', 'img' => '../assets/products/Narcissus.webp'],
                    ['id' => 25, 'name' => 'Nigella sativa', 'img' => '../assets/products/Nigella_sativa.webp'],
                    ['id' => 26, 'name' => 'Paprika', 'img' => '../assets/products/Paprika.webp'],
                    ['id' => 27, 'name' => 'Peas', 'img' => '../assets/products/Peas.webp'],
                    ['id' => 28, 'name' => 'Rosemary', 'img' => '../assets/products/Rosemary.webp'],
                    ['id' => 29, 'name' => 'Sesame', 'img' => '../assets/products/Sesame.webp'],
                    ['id' => 30, 'name' => 'Thyme', 'img' => '../assets/products/Thyme.webp'],
                    ['id' => 31, 'name' => 'Turmeric', 'img' => '../assets/products/Turmeric.webp'],
                ];
                foreach ($products as $p):
                    ?>
                <div class="product-card" onclick="window.location.href='product-details.php?id=<?= $p['id'] ?>'">
                    <div class="product-img">
                        <img src="<?= $p['img'] ?>" alt="<?= $p['name'] ?>" loading="lazy">
                    </div>
                    <h4><?= $p['name'] ?></h4>
                </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-btn next" id="nextBtn"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
    <!-- Export Section -->
</section>
<section class="export-section">
  <div class="export-grid">

    <div class="export-img img-a"></div>
    <div class="export-img img-b"></div>
    <div class="export-img img-c"></div>
    <div class="export-img img-d"></div>

    <div class="export-card">
      <h2>Our Exporting Products</h2>
      <p>
        Beyond importing, we also take pride in exporting high-quality agricultural products.
        From nutrient-rich beans to premium crops, we connect global markets with the best produce.
      </p>
      <a href="products.php" class="export-btn">More Products</a>
    </div>

  </div>
</section>
<!-- ========== LOCAL PRODUCTS ========== -->
<section class="local-products">
    <div class="local-bg">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1400&q=80" alt="Local products" loading="lazy">
        <div class="local-overlay"></div>
    </div>
    <div class="container">
        <div class="local-card" data-aos="fade-up">
            <h2>Our Local Products</h2>
            <p>Beyond imports, we also take pride in offering high-quality locally grown agricultural products. From organic grains and natural food ingredients to fresh agricultural harvests, we connect local and global markets with the very best.</p>
            <a href="products.php" class="btn btn-primary">Explore Products</a>
        </div>
    </div>
</section>

<!-- ========== CONTACT ========== -->
<section class="contact section-pad" id="contact">
    <div class="container">
        <div class="contact-inner">
            <div class="contact-text" data-aos="fade-left">
                <h2>Get In Touch</h2>
                <p>We'd love to hear from you! Whether you have a question, need a quote, or want to explore a partnership — our team is here to help. Don't hesitate, reach out today!</p>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@karam.com.sy">info@karam.com.sy</a>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-whatsapp"></i>
                        <a href="tel:+963933797873">+963 933 797 873</a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Syria – Damascus – Al-Khayam Tower – 1st Floor</span>
                    </div>
                </div>
            </div>
            <div class="contact-form" data-aos="fade-right">
                <form method="post" action="#">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <textarea name="message" rows="4" placeholder="Your message..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-full">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ========== FOOTER ========== -->
<footer class="footer">
    <div class="footer-social">
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
    </div>
    <div class="footer-bottom">
        <span>
            English (US) &nbsp;|&nbsp;
            <a href="<?= $alt_lang_url ?>">العربية</a> &nbsp;|&nbsp;
            Copyright © Karam
        </span>
    </div>
</footer>

<script src="../js/main.js"></script>
</body>
</html>
