<!-- ***** Header Area Start ***** -->
<header class="main-header fixed-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <nav class="navbar d-flex justify-content-between align-items-center py-2">

                    <!-- ===== Logo ===== -->
                    <a href="{{ route('frontend.home') }}" class="d-flex align-items-center text-decoration-none">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="header-logo me-2">
                        {{-- <span class="logo-text">تخيّل</span> --}}
                    </a>

                    <!-- ===== Navigation ===== -->
                    <ul class="nav d-none d-lg-flex align-items-center mb-0">
                        <li><a href="{{ route('frontend.rooms') }}">المعرض</a></li>
                        <li><a href="{{ route('frontend.about-us') }}">من نحن</a></li>
                        <li><a href="{{ route('frontend.our-services') }}">خدماتنا</a></li>
                        <li><a href="{{ route('frontend.home') }}">الرئيسية</a></li>
                    </ul>

                    <!-- ===== Contact Button ===== -->
                    <div class="d-none d-lg-block">
                        <a href="{{ route('contact') }}" class="btn-contact">تواصل معنا</a>
                    </div>

                    <!-- ===== Mobile Menu Trigger ===== -->
                    <div class="menu-trigger d-lg-none">
                        <i class="bi bi-list"></i>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- ===== Mobile Menu ===== -->
<div class="mobile-menu-overlay">
    <div class="mobile-menu">
        <button class="close-menu">&times;</button>
        <ul style="direction: rtl">
            <li><a href="{{ route('frontend.home') }}">الرئيسية</a></li>
            <li><a href="{{ route('frontend.our-services') }}">خدماتنا</a></li>
            <li><a href="{{ route('frontend.about-us') }}">من نحن</a></li>
            <li><a href="{{ route('frontend.rooms') }}">المعرض</a></li>
            <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
        </ul>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@500;700&display=swap');
    @import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');

    /* ===== HEADER STYLE ===== */
    .main-header {
        background: linear-gradient(135deg, #007BFF, #28a745, #ff9800);
        background-size: 200% 200%;
        animation: gradientShift 10s ease infinite;
        position: fixed;
        width: 100%;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    @keyframes gradientShift {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .navbar {
        font-family: 'Cairo', sans-serif;
    }

    .header-logo {
        height: 55px;
        border-radius: 10px;
        transition: transform 0.3s;
    }

    .header-logo:hover {
        transform: scale(1.05);
    }

    .logo-text {
        font-size: 1.5rem;
        font-weight: 700;
        color: #fff;
        letter-spacing: 1px;
    }

    /* ===== NAVIGATION ===== */
    .nav li {
        list-style: none;
        margin: 0 12px;
    }

    .nav li a {
        color: #fff;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s, transform 0.2s;
    }

    .nav li a:hover,
    .nav li a.active {
        color: #ffc107;
        transform: translateY(-2px);
    }

    /* ===== BUTTON ===== */
    .btn-contact {
        background: #fff;
        color: #333;
        font-weight: 600;
        border-radius: 25px;
        padding: 10px 22px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-contact:hover {
        background: #ffc107;
        color: #000;
        transform: translateY(-2px);
    }

    /* ===== MOBILE MENU ===== */
    .menu-trigger {
        display: block;
        font-size: 1.9rem;
        color: #fff;
        cursor: pointer;
        transition: color 0.3s;
    }

    .menu-trigger:hover {
        color: #ffc107;
    }

    .mobile-menu-overlay {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.7);
        z-index: 2000;
        justify-content: center;
        align-items: center;
    }

    .mobile-menu {
        background: #fff;
        border-radius: 20px;
        padding: 35px 25px;
        width: 85%;
        max-width: 380px;
        text-align: center;
        position: relative;
    }

    .mobile-menu ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .mobile-menu li {
        margin: 15px 0;
    }

    .mobile-menu a {
        color: #333;
        font-weight: bold;
        font-size: 1.1rem;
        text-decoration: none;
        transition: color 0.3s;
    }

    .mobile-menu a:hover {
        color: #007BFF;
    }

    .close-menu {
        background: none;
        border: none;
        font-size: 2rem;
        color: #333;
        position: absolute;
        top: 10px;
        right: 20px;
        cursor: pointer;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {

        .nav,
        .btn-contact {
            display: none !important;
        }

        .menu-trigger {
            display: block;
        }

        .header-logo {
            height: 50px;
        }
    }
</style>

<script>
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
