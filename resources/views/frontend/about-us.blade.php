
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>من نحن | تخيّل - ابتكار رقمي سعودي</title>

    <meta name="description" content="تخيّل هي الوجهة الرائدة في السعودية للابتكار الرقمي، بناء الهويات، وصناعة المحتوى الإبداعي باستخدام أحدث التقنيات.">
    <meta name="keywords" content="تخيل، تسويق رقمي، تصميم هوية، إنتاج فيديو، الرياض، ابتكار رقمي">



    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{ asset('public/img/favicon.png') }}">

    <style>
        :root {
            --primary: #FF5F1F;
            --primary-soft: #FFE6DB;
            --dark: #0B0B0F;
            --light: #FFFFFF;
            --gray: #777;
            --transition: all 0.35s ease;
        }
h1, h2, h3, h4, .section-title {
    font-family: 'Lyon Arabic Display', serif;
}
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'IBM Plex Sans Arabic', sans-serif; }
        body { background: var(--light); color: var(--dark); line-height: 1.7; overflow-x: hidden; }
        .container { width: 90%; max-width: 1200px; margin: auto; }
        section { padding: 60px 0; }

        /* --- Navbar --- */
        .navbar {
            position: sticky; top: 0; z-index: 1000;
            display: flex; justify-content: space-between; align-items: center;
            padding: 10px 5%; background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px); box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        }
        .logo-img { height: 70px; width: auto; }
        .nav-links { display: flex; gap: 25px; list-style: none; align-items: center; }
        .nav-links a { text-decoration: none; font-weight: 700; color: var(--dark); transition: var(--transition); }
        .nav-links a:hover, .nav-links a.active { color: var(--primary); }
        .cta-nav {
            background: var(--primary); color: #fff; padding: 10px 24px;
            border-radius: 40px; font-weight: 800; text-decoration: none;
            box-shadow: 0 8px 20px rgba(255, 95, 31, 0.25); transition: var(--transition);
        }
        .cta-nav:hover { transform: translateY(-2px); box-shadow: 0 12px 25px rgba(255, 95, 31, 0.35); }
        .menu-toggle { display: none; font-size: 1.8rem; cursor: pointer; color: var(--dark); }

        /* --- Hero --- */
        .hero { background: radial-gradient(circle at top right, #fff4ee, #ffffff); padding: 80px 0; }
        .hero-wrapper { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; }
        .badge {
            display: inline-block; background: var(--primary-soft); color: var(--primary);
            padding: 6px 18px; border-radius: 30px; font-weight: 800; margin-bottom: 20px;
        }
        .hero h1 { font-size: clamp(2rem, 5vw, 3rem); margin-bottom: 20px; line-height: 1.3; }
        .gradient-text { background: linear-gradient(90deg, var(--primary), #ff9f6b); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .hero p { font-size: 1.1rem; color: #444; margin-bottom: 25px; }
        .hero-image img { width: 100%; border-radius: 30px; box-shadow: 0 30px 70px rgba(0,0,0,.1); }

        /* --- Section Titles --- */
        .section-title { text-align: center; font-size: clamp(1.8rem, 4vw, 2.6rem); margin-bottom: 50px; font-weight: 900; }

        /* --- Grid & Cards --- */
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .card {
            background: #fff; padding: 40px; border-radius: 25px; border: 1px solid #f0f0f0;
            transition: var(--transition); display: flex; flex-direction: column; height: 100%;
        }
        .card:hover { transform: translateY(-10px); border-color: var(--primary); box-shadow: 0 20px 40px rgba(0,0,0,.05); }
        .card i { font-size: 2.5rem; color: var(--primary); margin-bottom: 20px; }
        .card h3 { margin-bottom: 15px; font-weight: 800; }

        /* --- Dark Section --- */
        .dark { background: var(--dark); color: #fff; }
        .dark .card { background: rgba(255,255,255,.05); border-color: rgba(255,255,255,0.1); color: #fff; }
        .dark .card p { color: #ccc; }

        /* --- WhatsApp --- */
        .whatsapp-button {
            position: fixed; bottom: 30px; right: 30px; background: #25D366;
            color: #fff; font-weight: bold; padding: 12px 25px; border-radius: 50px;
            display: flex; align-items: center; gap: 10px; z-index: 1000;
            box-shadow: 0 10px 30px rgba(37, 211, 102, 0.3); text-decoration: none; transition: var(--transition);
        }
        .whatsapp-button:hover { transform: translateY(-5px) scale(1.05); }

        /* --- Footer --- */
        footer { background: #0B0B0F; color: #fff; padding: 60px 0 30px; }
        .footer-wrapper { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px; align-items: start; }
        .footer-logo img { height: 80px; margin-bottom: 15px; }
        .footer-links h4 { margin-bottom: 20px; color: var(--primary); }
        .footer-links ul { list-style: none; }
        .footer-links li { margin-bottom: 12px; }
        .footer-links a { color: #aaa; text-decoration: none; transition: var(--transition); }
        .footer-links a:hover { color: #fff; padding-right: 5px; }
        .socials { display: flex; gap: 15px; margin-top: 15px; }
        .socials a { font-size: 1.4rem; color: #fff; transition: var(--transition); }
        .socials a:hover { color: var(--primary); transform: translateY(-3px); }
        .copy { text-align: center; margin-top: 50px; padding-top: 25px; border-top: 1px solid rgba(255,255,255,0.05); color: #555; font-size: 0.9rem; }

        /* --- Responsive Breakpoints --- */
        @media (max-width: 991px) {
            .hero-wrapper { grid-template-columns: 1fr; text-align: center; }
            .hero-image { order: -1; max-width: 500px; margin: 0 auto; }
        }

        @media (max-width: 768px) {
            .menu-toggle { display: block; }
            .nav-links {
                position: absolute; top: 100%; right: 0; width: 100%;
                background: #fff; flex-direction: column; padding: 30px;
                box-shadow: 0 15px 30px rgba(0,0,0,0.1); display: none; gap: 20px;
            }
            .nav-links.show { display: flex; }
            .cta-nav { display: none; }
            .whatsapp-button span { display: none; }
            .whatsapp-button { padding: 15px; border-radius: 50%; bottom: 20px; right: 20px; }
        }
    </style>
</head>

<body>

<nav class="navbar">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('public/img/cleint/log.jpg') }}" alt="تخيّل" class="logo-img">
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
    <div class="container hero-wrapper">
        <div data-aos="fade-left">
            <span class="badge">من نحن</span>
            <h1>نحن <span class="gradient-text">تخيّل</span><br>نحوّل الأفكار إلى تجارب رقمية متكاملة</h1>
            <p>تخيّل هي شركة متخصصة في الإبداع الرقمي وبناء الحلول البصرية المتقدمة، تجمع بين التصميم، التقنية، والابتكار لنقدّم لعملائنا حلولاً احترافية تُبرز هويتهم في سوق تنافسي.</p>
        </div>
        <div class="hero-image" data-aos="zoom-in">
            <img src="{{ asset('public/assets/images/banner-bg.jpg') }}" alt="تخيّل">
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">قصتنا</h2>
        <div class="grid">
            <div class="card" data-aos="fade-up">
                <i class="fas fa-users"></i>
                <h3>فريقنا</h3>
                <p>نحن فريق من المبدعين والمختصين نعمل بروح الشراكة، ونؤمن أن كل علامة تجارية تستحق حضوراً قوياً، واضحاً، وملهماً.</p>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-pencil-ruler"></i>
                <h3>أعمالنا</h3>
                <p>نعمل على تطوير الهويات، صناعة المحتوى، إنتاج الفيديو، وإدارة الظهور الرقمي لنقدم تجربة تساهم في نمو أعمال عملائنا.</p>
            </div>
        </div>
    </div>
</section>

<section class="dark">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">رؤيتنا ورسالتنا</h2>
        <div class="grid">
            <div class="card" data-aos="fade-up">
                <i class="fas fa-eye"></i>
                <h3>رؤيتنا</h3>
                <p>المساهمة في تعزيز المحتوى المحلي ومخاطبة الجمهور السعودي لبناء حضور رقمي قوي ومتميز وفهم عميق لاحتياجات العميل.</p>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-bullseye"></i>
                <h3>رسالتنا</h3>
                <p>نسعى لتكون تخيّل الوجهة الأولى للإبداع الرقمي، من خلال تقديم حلول مبتكرة تُعيد تشكيل تواصل العلامات التجارية مع جمهورها.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">قيمنا</h2>
        <div class="grid">
            <div class="card" data-aos="zoom-in">
                <i class="fas fa-handshake"></i>
                <h3>الشراكة</h3>
                <p>شعارنا "Together" التزام بالعمل المشترك في كل خطوة لتحقيق النجاح.</p>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
                <i class="fas fa-chart-line"></i>
                <h3>الشفافية</h3>
                <p>نؤمن بلغة الأرقام؛ تقاريرنا واضحة، دقيقة، ومرتبطة بالأداء الفعلي.</p>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
                <i class="fas fa-brain"></i>
                <h3>الابتكار</h3>
                <p>نستخدم التقنيات المتقدمة لتعزيز الإبداع البشري وتقديم حلول غير تقليدية.</p>
            </div>
        </div>
    </div>
</section>

<a href="https://wa.me/966583116161" class="whatsapp-button" target="_blank">
    <i class="fab fa-whatsapp"></i>
    <span>تواصل معنا</span>
</a>

<footer>
    <div class="container footer-wrapper">
        <div class="footer-logo">
           <img src="{{ asset('public/img/cleint/log.jpg') }}" alt="تخيّل" >
            <p style="color: #666; font-size: 0.9rem;">نحوّل الخيال إلى واقع رقمي مبهر.</p>
            <div class="socials">
           <a href="https://www.linkedin.com/company/tkhyl-sa" target="_blank"><i class="fab fa-linkedin"></i></a>
    <a href="https://www.instagram.com/tkhyl_sa" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://www.tiktok.com/@tkhyl_sa" target="_blank"><i class="fab fa-tiktok"></i></a>
    <a href="https://x.com/tkhyl_sa" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="footer-links">
            <h4>روابط سريعة</h4>
            <ul>
               <li><a href="{{ route('frontend.home') }}" class="active">الرئيسية</a></li>
            <li><a href="{{ route('frontend.about-us') }}">من نحن</a></li>
            <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
            <li><a href="{{ route('frontend.rooms') }}">مجتمعنا</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <h4>تواصل</h4>
              <p style="color:#ccc;font-size:0.9rem;">
    <i class="fas fa-envelope"></i>
    <a href="mailto:contact@tkhyl-ai.com" style="color:#ccc;text-decoration:none;">
        contact@tkhyl-ai.com
    </a>
</p>
<br />
<p style="color:#ccc;font-size:0.9rem;">
    <i class="fas fa-phone"></i>
    <a href="tel:+966568979769" style="color:#ccc;text-decoration:none;">
        966568979769
    </a>
</p>
<br />
<p style="color:#ccc;font-size:0.9rem;">
    <i class="fas fa-map-marker-alt"></i>
    <a href="https://maps.app.goo.gl/1ZMUJ9L4vsjscCVw9"
       target="_blank"
       style="color:#ccc;text-decoration:none;">
        استثماركوم حاضنة ومسرعة الأعمال<br>
        حي, Ar Rabwah, Riyadh 12211
    </a>
</p>

<br />

        </div>
    </div>
    <div class="copy">
        © 2025 tkhyl-ai.com | جميع الحقوق محفوظة
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });

    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');
    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('show');
    });


</script>

</body>
</html>

