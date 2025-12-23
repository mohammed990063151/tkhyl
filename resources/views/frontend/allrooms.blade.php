<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مجتمعنا | تخيّل</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700;900&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #FF5F1F;
            --dark: #0B0B0F;
            --gray: #777;
            --light: #fff;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cairo', sans-serif;
        }

        body {
            background: #fafafa;
            color: var(--dark);
            line-height: 1.7;
            overflow-x: hidden;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        section {
            padding: 60px 0;
        }

        /* Navbar */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 5%;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .logo-img {
            height: 70px;
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 25px;
            list-style: none;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            font-weight: 700;
            color: var(--dark);
            transition: var(--transition);
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--primary);
        }

        .cta-nav {
            background: var(--primary);
            color: #fff;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 800;
            text-decoration: none;
            box-shadow: 0 8px 20px rgba(255, 95, 31, 0.2);
        }

        .menu-toggle {
            display: none;
            font-size: 1.8rem;
            cursor: pointer;
        }

        /* Hero */
        .hero {
            background: linear-gradient(135deg, #fff, #fff1e8);
            padding: 80px 0;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 40px;
            align-items: center;
        }

        .hero h1 {
            font-size: clamp(2rem, 5vw, 3.1rem);
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero span {
            color: var(--primary);
        }

        .hero p {
            color: var(--gray);
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        .hero-box {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(14px);
            padding: 40px;
            border-radius: 30px;
            border: 1px solid #fff;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.05);
        }

        /* Stats */
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .stat {
            background: #fff;
            padding: 25px;
            border-radius: 20px;
            text-align: center;
            border: 1px solid #eee;
        }

        .stat h3 {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 5px;
        }

        /* Timeline (Responsive) */
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2rem;
        }

        .timeline {
            position: relative;
            max-width: 900px;
            margin: auto;
            padding: 20px 0;
        }

        .timeline::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            right: 50%;
            width: 2px;
            background: #ffe0d3;
        }

        .step {
            width: 50%;
            padding: 20px 40px;
            position: relative;
            clear: both;
        }

        .step:nth-child(odd) {
            float: right;
            text-align: right;
        }

        .step:nth-child(even) {
            float: left;
            text-align: left;
        }

        .step::after {
            content: "";
            position: absolute;
            top: 25px;
            width: 16px;
            height: 16px;
            background: var(--primary);
            border: 4px solid #fff;
            border-radius: 50%;
            z-index: 1;
        }

        .step:nth-child(odd)::after {
            right: -8px;
        }

        .step:nth-child(even)::after {
            left: -8px;
        }

        .step h4 {
            color: var(--primary);
            font-size: 1.3rem;
            margin-bottom: 8px;
        }

        /* Glass Cards */
        .glass-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .glass {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            border-radius: 25px;
            padding: 40px;
            border: 1px solid rgba(255, 255, 255, 0.8);
            transition: var(--transition);
            text-align: center;
        }

        .glass:hover {
            transform: translateY(-10px);
            background: #fff;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
        }

        .glass i {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        /* CTA */
        .cta {
            background: linear-gradient(135deg, var(--primary), #ff8f5b);
            color: #fff;
            text-align: center;
            border-radius: 35px;
            padding: 60px 30px;
        }

        .cta h2 {
            font-size: 2.2rem;
            margin-bottom: 15px;
        }

        .cta a {
            display: inline-block;
            margin-top: 25px;
            background: #fff;
            color: var(--primary);
            padding: 14px 45px;
            border-radius: 40px;
            font-weight: 900;
            text-decoration: none;
            transition: var(--transition);
        }

        .cta a:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* WhatsApp */
        .whatsapp-button {
            position: fixed;
            bottom: 25px;
            right: 25px;
            background: #25D366;
            color: #fff;
            font-weight: bold;
            padding: 12px 25px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 10px 30px rgba(37, 211, 102, 0.3);
            text-decoration: none;
            z-index: 1000;
            transition: var(--transition);
        }

        .whatsapp-button:hover {
            transform: translateY(-5px);
        }

        /* Footer */
        footer {
            background: #111;
            color: #fff;
            padding: 60px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .footer-logo img {
            height: 80px;
            margin-bottom: 20px;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary);
            padding-right: 5px;
        }

        /* Responsive Breakpoints */
        @media (max-width: 991px) {
            .hero-grid {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-box {
                margin-top: 20px;
            }
        }

        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }

            .nav-links {
                position: absolute;
                top: 100%;
                right: 0;
                width: 100%;
                background: #fff;
                flex-direction: column;
                padding: 20px;
                display: none;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }

            .nav-links.show {
                display: flex;
            }

            .cta-nav {
                display: none;
            }

            /* Timeline Mobile Fix */
            .timeline::before {
                right: 20px;
            }

            .step {
                width: 100%;
                float: none;
                text-align: right;
                padding: 20px 50px 20px 20px;
            }

            .step:nth-child(even) {
                text-align: right;
            }

            .step::after {
                right: 12px !important;
                left: auto !important;
            }

            .whatsapp-button span {
                display: none;
            }

            .whatsapp-button {
                padding: 15px;
                border-radius: 50%;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="logo">
            <a href="#">
                <img src="{{ asset('public/img/logo-text.png') }}" alt="تخيّل" class="logo-img">
            </a>
        </div>

        <div class="menu-toggle" id="menuToggle"><i class="fas fa-bars"></i></div>

        <ul class="nav-links" id="navLinks">
            <li><a href="{{ route('frontend.home') }}" class="active">الرئيسية</a></li>
            <li><a href="{{ route('frontend.about-us') }}">من نحن</a></li>
            <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
            <li><a href="{{ route('frontend.rooms') }}">مجتمعنا</a></li>
        </ul>

        {{-- <div style="display: flex; align-items: center; gap: 15px;"> --}}
        <a href="{{ route('contact') }}" class="cta-nav">ابدأ رحلة نموك</a>
        {{-- <div class="menu-toggle" id="menuToggle"><i class="fas fa-bars"></i></div> --}}

    </nav>

    <section class="hero">
        <div class="container hero-grid">
            <div data-aos="fade-left">
                <h1>مجتمع <span>تخيّل</span><br>ليس مجرد تجمع… بل رحلة</h1>
                <p>أنشأنا مجتمعًا يؤمن أن النجاح يُبنى بالمشاركة، التجربة، والدعم الحقيقي بين المبدعين ورواد الأعمال.
                </p>

                <div class="stats">
                    <div class="stat">
                        <h3>500+</h3>
                        <p>عضو نشط</p>
                    </div>
                    <div class="stat">
                        <h3>40+</h3>
                        <p>ورشة عمل</p>
                    </div>
                    <div class="stat">
                        <h3>120+</h3>
                        <p>فرصة تعاون</p>
                    </div>
                </div>
            </div>

            <div class="hero-box" data-aos="zoom-in">
                <h3 style="margin-bottom: 15px; color: var(--primary);">ماذا يميزنا؟</h3>
                <p>نحن لا نبحث عن الأعداد، بل عن العقول الطموحة التي تسعى لترك بصمة حقيقية في عالم النمو الرقمي.</p>
            </div>
        </div>
    </section>

    <section style="background: #fff;">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">رحلة العضو داخل المجتمع</h2>
            <div class="timeline">
                <div class="step" data-aos="fade-right">
                    <h4>الانضمام</h4>
                    <p>تسجيل بسيط وبداية فورية في بيئة محفزة.</p>
                </div>
                <div class="step" data-aos="fade-left">
                    <h4>التفاعل</h4>
                    <p>مناقشات غنية، تبادل أفكار، وحلول لتحديات حقيقية.</p>
                </div>
                <div class="step" data-aos="fade-right">
                    <h4>التطوير</h4>
                    <p>ورش عمل دورية، جلسات توجيه، ومحتوى حصري.</p>
                </div>
                <div class="step" data-aos="fade-left">
                    <h4>الشراكات</h4>
                    <p>بناء علاقات مهنية تتحول إلى فرص استثمارية.</p>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">ماذا ستجد في الداخل؟</h2>
            <div class="glass-grid">
                <div class="glass" data-aos="fade-up">
                    <i class="fas fa-users"></i>
                    <h3>عقول ملهمة</h3>
                    <p>تواصل مع نخبة من الخبراء والمبدعين الذين يشاركونك نفس الشغف والاهتمام.</p>
                </div>
                <div class="glass" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-brain"></i>
                    <h3>محتوى تطبيقي</h3>
                    <p>دروس من واقع السوق وتجارب حقيقية بعيداً عن التنظير الأكاديمي المجرد.</p>
                </div>
                <div class="glass" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-rocket"></i>
                    <h3>نمو متسارع</h3>
                    <p>احصل على الدعم اللازم لإطلاق مشروعك أو تطوير مهاراتك بشكل احترافي.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="cta" data-aos="flip-up">
                <h2>هل أنت مستعد للتغيير؟</h2>
                <p>انضم الآن إلى المجتمع الرقمي الأكثر تفاعلاً في السعودية</p>
                <a href="#">انضم إلينا الآن</a>
            </div>
        </div>
    </section>
 {{-- <section> --}}
    <a href="https://wa.me/966583116161" class="whatsapp-button" target="_blank">
        <i class="fab fa-whatsapp"></i>
        <span>تواصل معنا</span>
    </a>
    {{-- </section> --}}
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-logo">
                    <img src="{{ asset('public/img/logo-text.png') }}" alt="تخيّل">
                    <p>We Will Do It Together.</p>
                    <div style="display: flex; gap: 15px; margin-top: 20px;">
                        <a href="#" style="color: #fff;"><i class="fab fa-linkedin fa-lg"></i></a>
                        <a href="#" style="color: #fff;"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" style="color: #fff;"><i class="fab fa-twitter fa-lg"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h4 style="margin-bottom: 20px; color: var(--primary);">روابط سريعة</h4>
                    <ul>
                       <li><a href="{{ route('frontend.home') }}" class="active">الرئيسية</a></li>
            <li><a href="{{ route('frontend.about-us') }}">من نحن</a></li>
            <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
            <li><a href="{{ route('frontend.rooms') }}">مجتمعنا</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4 style="margin-bottom: 20px; color: var(--primary);">تواصل معنا</h4>
                    <p style="color: #ccc; font-size: 0.9rem;">الرياض، المملكة العربية السعودية</p>
                    <p style="color: #ccc; font-size: 0.9rem;">info@tkhyl-ai.com</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 50px; color: #555; font-size: 0.8rem;">
                © 2025 tkhyl-ai.com | جميع الحقوق محفوظة
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        // Toggle Mobile Menu
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('show');
        });
    </script>

</body>

</html>
