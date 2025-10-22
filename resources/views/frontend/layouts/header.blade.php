<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <nav class="main-nav d-flex justify-content-between align-items-center">
          
          <!-- ***** Logo ***** -->
          <a href="{{ route('frontend.home') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('img/logo1.jpg') }}" alt="Logo" class="logo-img">
            <span class="logo-text ms-2">Tkhael</span>
          </a>

          <!-- ***** Menu ***** -->
          <ul class="nav d-none d-lg-flex">
            <li class="scroll-to-section"><a href="#top" class="active">الرئيسية</a></li>
            <li class="scroll-to-section"><a href="#services">خدماتنا</a></li>
            <li class="scroll-to-section"><a href="#about">من نحن</a></li>
            <li class="scroll-to-section"><a href="#portfolio">المعرض</a></li>
            <li class="scroll-to-section"><a href="#video">الفيديوهات</a></li>
            <li class="scroll-to-section"><a href="#contact">تواصل معنا</a></li>
          </ul>

          <div class="d-none d-lg-block">
            <a href="#contact" class="btn-gradient"> تواصل معنا</a>
          </div>

          <!-- ***** Mobile Menu Button ***** -->
          <div class="menu-trigger d-lg-none">
            <i class="bi bi-list"></i> القائمة
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>

<!-- ***** Mobile Menu Overlay ***** -->
<div class="mobile-menu-overlay">
  <div class="mobile-menu">
    <button class="close-menu">&times;</button>
    <ul>
      <li><a href="#top">الرئيسية</a></li>
      <li><a href="#services">خدماتنا</a></li>
      <li><a href="#about">من نحن</a></li>
      <li><a href="#portfolio">المعرض</a></li>
      <li><a href="#video">الفيديوهات</a></li>
      <li><a href="#contact">تواصل معنا</a></li>
    </ul>
  </div>
</div>

<style>
/* ============ HEADER ============ */
.header-area {
  background: rgba(255,255,255,0.97);
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  position: fixed; top: 0; left: 0; width: 100%;
  z-index: 1000;
  transition: 0.3s;
}

.logo-img {
  height: 60px;
  border-radius: 8px;
  transition: 0.3s;
}
.logo-img:hover { transform: scale(1.05); }

.logo-text {
  font-size: 1.6rem;
  font-weight: 700;
  background: linear-gradient(90deg, #4CAF50, #00BCD4, #FF9800);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Desktop Menu */
.nav li {
  list-style: none;
  display: inline-block;
  margin: 0 15px;
}
.nav li a {
  color: #333;
  font-weight: 600;
  font-size: 1rem;
  transition: 0.3s;
  text-decoration: none;
}
.nav li a:hover,
.nav li a.active { color: #00BCD4; }

/* Button */
.btn-gradient {
  padding: 10px 25px;
  background: linear-gradient(90deg, #4CAF50, #00BCD4, #FF9800);
  border-radius: 30px;
  color: #fff;
  font-weight: bold;
  transition: 0.3s ease;
  text-decoration: none;
}
.btn-gradient:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

/* ============ MOBILE MENU ============ */
.menu-trigger {
  display: none;
  cursor: pointer;
  font-size: 1.2rem;
  font-weight: bold;
  background: linear-gradient(90deg, #4CAF50, #00BCD4, #FF9800);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.mobile-menu-overlay {
  display: none;
  position: fixed; inset: 0;
  background: rgba(0,0,0,0.8);
  z-index: 2000;
  justify-content: center;
  align-items: center;
}
.mobile-menu {
  background: #fff;
  border-radius: 15px;
  padding: 30px;
  width: 85%;
  max-width: 400px;
  text-align: center;
  position: relative;
}
.mobile-menu ul { list-style: none; padding: 0; margin: 0; }
.mobile-menu li { margin: 15px 0; }
.mobile-menu a {
  color: #333;
  font-weight: bold;
  font-size: 1.2rem;
  text-decoration: none;
  transition: color 0.3s;
}
.mobile-menu a:hover {
  color: #00BCD4;
}
.close-menu {
  background: none;
  border: none;
  font-size: 2rem;
  color: #333;
  position: absolute;
  top: 10px; right: 20px;
  cursor: pointer;
}

/* ===== Responsive ===== */
@media (max-width: 992px) {
  .nav { display: none !important; }
  .menu-trigger { display: block; }
  .logo-img { height: 50px; }
}
@media (max-width: 576px) {
  .logo-text { font-size: 1.3rem; }
  .logo-img { height: 45px; }
}
</style>

<script>
  // ========== Mobile Menu Toggle ==========
  document.addEventListener("DOMContentLoaded", function() {
    const menuTrigger = document.querySelector(".menu-trigger");
    const overlay = document.querySelector(".mobile-menu-overlay");
    const closeBtn = document.querySelector(".close-menu");

    menuTrigger.addEventListener("click", () => overlay.style.display = "flex");
    closeBtn.addEventListener("click", () => overlay.style.display = "none");
    overlay.addEventListener("click", (e) => {
      if (e.target === overlay) overlay.style.display = "none";
    });
  });
</script>
