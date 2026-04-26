/* ============================================
   KARAM - Main JavaScript
   ============================================ */

document.addEventListener("DOMContentLoaded", function () {
  /* ---- Hamburger Menu ---- */
  function initHamburgerMenu() {
    const hamburgerMenu = document.getElementById("hamburgerMenu");
    const mobileNav = document.getElementById("mobileNav");
    const mobileClose = document.getElementById("mobileClose");
    const mobileLinks = document.querySelectorAll(".mobile-nav-link");

    if (hamburgerMenu && mobileNav) {
      // Toggle hamburger menu
      hamburgerMenu.addEventListener("click", function() {
        hamburgerMenu.classList.toggle("active");
        mobileNav.classList.toggle("active");
        document.body.style.overflow = mobileNav.classList.contains("active") ? "hidden" : "";
      });

      // Close mobile navigation
      mobileClose.addEventListener("click", function() {
        hamburgerMenu.classList.remove("active");
        mobileNav.classList.remove("active");
        document.body.style.overflow = "";
      });

      // Close on link click
      mobileLinks.forEach(link => {
        link.addEventListener("click", function() {
          hamburgerMenu.classList.remove("active");
          mobileNav.classList.remove("active");
          document.body.style.overflow = "";
        });
      });

      // Close on escape key
      document.addEventListener("keydown", function(e) {
        if (e.key === "Escape" && mobileNav.classList.contains("active")) {
          hamburgerMenu.classList.remove("active");
          mobileNav.classList.remove("active");
          document.body.style.overflow = "";
        }
      });

      // Close on outside click
      document.addEventListener("click", function(e) {
        if (!hamburgerMenu.contains(e.target) && !mobileNav.contains(e.target)) {
          hamburgerMenu.classList.remove("active");
          mobileNav.classList.remove("active");
          document.body.style.overflow = "";
        }
      });
    }
  }
  initHamburgerMenu();

  /* ---- AOS: Animate on Scroll ---- */
  function initAOS() {
    const elements = document.querySelectorAll("[data-aos]");
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const el = entry.target;
            const delay = el.dataset.aosDelay || 0;
            setTimeout(() => el.classList.add("aos-animate"), parseInt(delay));
            observer.unobserve(el);
          }
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -40px 0px" },
    );

    elements.forEach((el) => observer.observe(el));
  }
  initAOS();

  /* ---- Sticky Header Shadow ---- */
  const header = document.getElementById("header");
  window.addEventListener("scroll", () => {
    if (window.scrollY > 20) {
      header.style.boxShadow = "0 4px 20px rgba(0,0,0,0.12)";
    } else {
      header.style.boxShadow = "0 2px 12px rgba(0,0,0,0.08)";
    }
  });

  /* ---- Products Carousel ---- */
  // const carousel   = document.getElementById('productCarousel');
  // const prevBtn    = document.getElementById('prevBtn');
  // const nextBtn    = document.getElementById('nextBtn');

  // if (carousel && prevBtn && nextBtn) {
  //     const isRTL = document.documentElement.dir === 'rtl';
  //     let currentIndex = 0;

  //     function getVisibleCount() {
  //         const w = window.innerWidth;
  //         if (w < 480)  return 1;
  //         if (w < 768)  return 2;
  //         if (w < 1024) return 3;
  //         return 4;
  //     }

  //     function getCardWidth() {
  //         const card = carousel.querySelector('.product-card');
  //         if (!card) return 0;
  //         const style  = window.getComputedStyle(carousel);
  //         const gap    = parseFloat(style.gap) || 20;
  //         return card.offsetWidth + gap;
  //     }

  //     function scrollTo(index) {
  //         const total   = carousel.querySelectorAll('.product-card').length;
  //         const visible = getVisibleCount();
  //         const max     = total - visible;
  //         currentIndex  = Math.max(0, Math.min(index, max));
  //         const offset  = currentIndex * getCardWidth();
  //         carousel.scrollTo({ left: offset, behavior: 'smooth' });
  //     }

  //     nextBtn.addEventListener('click', () => scrollTo(currentIndex + 1));
  //     prevBtn.addEventListener('click', () => scrollTo(currentIndex - 1));

  //     window.addEventListener('resize', () => scrollTo(currentIndex));
  // }

  /* ---- Products Carousel (Auto Infinite) ---- */
  const carousel = document.getElementById("productCarousel");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");

  if (carousel && prevBtn && nextBtn) {
    const isRTL = document.documentElement.dir === "rtl";

    let currentIndex = 0;
    let autoplay;
    const speed = 3000;

    function getVisibleCount() {
      const w = window.innerWidth;

      if (w < 600) return 1;
      if (w < 768) return 2;
      if (w < 1024) return 3;

      return 4;
    }

    function getCardWidth() {
      const card = carousel.querySelector(".product-card");
      if (!card) return 0;

      const gap = parseFloat(getComputedStyle(carousel).gap) || 20;

      return card.offsetWidth + gap;
    }

    function getMaxIndex() {
      return (
        carousel.querySelectorAll(".product-card").length - getVisibleCount()
      );
    }

    function scrollToIndex(index) {
      const max = getMaxIndex();

      if (index > max) {
        currentIndex = 0;
      } else if (index < 0) {
        currentIndex = max;
      } else {
        currentIndex = index;
      }

      const offset = currentIndex * getCardWidth();

      carousel.scrollTo({
        left: isRTL ? -offset : offset,
        behavior: "smooth",
      });
    }

    function nextSlide() {
      isRTL ? scrollToIndex(currentIndex - 1) : scrollToIndex(currentIndex + 1);
    }

    function prevSlide() {
      isRTL ? scrollToIndex(currentIndex + 1) : scrollToIndex(currentIndex - 1);
    }

    function startAuto() {
      stopAuto();
      autoplay = setInterval(nextSlide, speed);
    }

    function stopAuto() {
      clearInterval(autoplay);
    }

    nextBtn.addEventListener("click", () => {
      nextSlide();
      startAuto();
    });

    prevBtn.addEventListener("click", () => {
      prevSlide();
      startAuto();
    });

    startAuto();
  }
  /* ---- Contact Form ---- */
  const form = document.querySelector(".contact-form form");
  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      const btn = form.querySelector('button[type="submit"]');
      const isArabic = document.documentElement.lang === "ar";
      btn.textContent = isArabic ? "✓ تم الإرسال بنجاح!" : "✓ Message Sent!";
      btn.style.background = "#2d5a27";
      btn.disabled = true;
      setTimeout(() => {
        btn.textContent = isArabic ? "إرسال الرسالة" : "Send Message";
        btn.style.background = "";
        btn.disabled = false;
        form.reset();
      }, 3000);
    });
  }

  /* ---- Smooth scroll for anchor links ---- */
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        e.preventDefault();
        const offset = 70;
        const top =
          target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: "smooth" });
      }
    });
  });

  /* ---- Featured slides hover effect ---- */
  document.querySelectorAll(".featured-slide").forEach((slide) => {
    slide.addEventListener("mouseenter", () => {
      slide.style.zIndex = "2";
    });
    slide.addEventListener("mouseleave", () => {
      slide.style.zIndex = "";
    });
  });
});
