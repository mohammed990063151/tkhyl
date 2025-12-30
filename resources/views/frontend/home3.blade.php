{{-- <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <!-- ================= BASIC SEO ================= -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>تخيّل | شركة تسويق رقمي ونمو أعمال بالذكاء الاصطناعي في السعودية</title>

    <meta name="description" content="تخيّل شركة تسويق رقمي في السعودية متخصصة في نمو الأعمال، الإعلانات المدفوعة، بناء الهوية الرقمية، وتحليل البيانات باستخدام الذكاء الاصطناعي لتحقيق نتائج فعلية.">

    <meta name="keywords" content="شركة تسويق رقمي, تسويق إلكتروني السعودية, شركة تسويق في الرياض, إعلانات مدفوعة, نمو الأعمال, الذكاء الاصطناعي في التسويق, تخيل">

    <link rel="canonical" href="https://tkhyl-ai.com">

    <meta name="robots" content="index, follow">
    <meta name="language" content="ar">

    <!-- ================= OPEN GRAPH ================= -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="تخيّل | شركة تسويق رقمي ونمو أعمال في السعودية">
    <meta property="og:description" content="نحوّل أفكارك إلى نمو رقمي حقيقي باستخدام الذكاء الاصطناعي والإبداع البشري.">
    <meta property="og:url" content="https://tkhyl-ai.com">
    <meta property="og:image" content="https://tkhyl-ai.com/public/img/logo-text.png">

    <!-- ================= TWITTER ================= -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="تخيّل | شركة تسويق رقمي في السعودية">
    <meta name="twitter:description" content="شريكك الاستراتيجي للنمو الرقمي وتحقيق نتائج فعلية.">

    <!-- ================= PERFORMANCE ================= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- ================= STYLES ================= -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'Lyon Arabic Display';
            src: url('/fonts/LyonArabicDisplay-Bold.woff2') format('woff2');
            font-weight: bold;
            font-style: normal;
        }

        h1,h2,h3,h4,.section-title{
            font-family:'Lyon Arabic Display',serif;
        }

        :root{
            --primary:#FF5F1F;
            --primary-soft:#FFE6DB;
            --dark:#0B0B0F;
            --light:#FFFFFF;
            --gray:#777;
            --transition:all .35s ease;
        }

        *{margin:0;padding:0;box-sizing:border-box}
        body{
            font-family:'IBM Plex Sans Arabic',sans-serif;
            background:#fff;color:#0B0B0F;
            line-height:1.7;overflow-x:hidden
        }

        .container{width:90%;max-width:1200px;margin:auto}
        section{padding:80px 0}
        .section-title{text-align:center;font-size:clamp(1.8rem,4vw,2.6rem);margin-bottom:50px;font-weight:900}

        /* NAVBAR */
        .navbar{
            position:sticky;top:0;z-index:1000;
            display:flex;justify-content:space-between;align-items:center;
            padding:10px 5%;background:rgba(255,255,255,.95);
            backdrop-filter:blur(12px);box-shadow:0 2px 15px rgba(0,0,0,.05)
        }
        .logo-img{height:70px}
        .nav-links{display:flex;gap:25px;list-style:none}
        .nav-links a{text-decoration:none;font-weight:700;color:#0B0B0F}
        .nav-links a:hover,.nav-links a.active{color:var(--primary)}
        .cta-nav{
            background:var(--primary);color:#fff;padding:10px 24px;
            border-radius:40px;font-weight:800;text-decoration:none
        }
        .menu-toggle{display:none;font-size:1.8rem}

        /* HERO */
        .hero{background:radial-gradient(circle at top right,#fff4ee,#fff)}
        .hero-wrapper{display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:center}
        .badge{
            background:var(--primary-soft);color:var(--primary);
            padding:6px 18px;border-radius:30px;font-weight:800
        }
        .hero h1{font-size:clamp(2rem,5vw,3.2rem);line-height:1.3}
        .gradient-text{
            background:linear-gradient(90deg,var(--primary),#ff9f6b);
            -webkit-background-clip:text;-webkit-text-fill-color:transparent
        }

        /* SERVICES */
        .services-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:25px}
        .service-card{
            background:#fff;padding:40px;border-radius:25px;
            border:1px solid #eee;transition:.3s
        }
        .service-card h3{color:var(--primary)}

        /* CLIENTS */
        .clients-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:40px}
        .client-logo img{max-width:120px;filter:grayscale(100%)}

        /* FAQ */
        .faq-item{background:#fff;border-radius:15px;border:1px solid #eee;margin-bottom:15px}
        .faq-question{padding:20px;font-weight:800;cursor:pointer}
        .faq-answer{padding:0 20px 20px;color:#777;display:none}
        .faq-item.active .faq-answer{display:block}

        /* WHATSAPP */
        .whatsapp-button{
            position:fixed;bottom:30px;right:30px;
            background:#25D366;color:#fff;padding:12px 25px;
            border-radius:50px;text-decoration:none;z-index:1000
        }

        footer{background:#0B0B0F;color:#fff;padding:70px 0 30px}

        @media(max-width:991px){
            .hero-wrapper{grid-template-columns:1fr;text-align:center}
        }
    </style>
</head>

<body>

<nav class="navbar">
    <a href="{{ route('frontend.home') }}">
        <img src="{{ asset('public/img/cleint/logo.jpg') }}" alt="شركة تخيّل للتسويق الرقمي في السعودية" class="logo-img">
    </a>

    <ul class="nav-links">
        <li><a href="{{ route('frontend.home') }}" class="active">الرئيسية</a></li>
        <li><a href="{{ route('frontend.about-us') }}">من نحن</a></li>
        <li><a href="{{ route('frontend.rooms') }}">مجتمعنا</a></li>
        <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
    </ul>

    <a href="{{ route('contact') }}" class="cta-nav">ابدأ رحلة نموك</a>
</nav>

<section class="hero">
    <div class="container hero-wrapper">
        <div>
            <span class="badge">الذكاء الاصطناعي + الإبداع البشري</span>
            <h1>
                شركة تسويق رقمي ونمو أعمال في السعودية<br>
                <span class="gradient-text">نحوّل أفكارك إلى نتائج حقيقية</span>
            </h1>
            <p>
                تخيّل شريكك الاستراتيجي لبناء الهوية الرقمية، إدارة الإعلانات المدفوعة،
                وتحقيق نمو مستدام باستخدام أحدث تقنيات الذكاء الاصطناعي.
            </p>
            <a href="{{ route('contact') }}" class="cta-nav">تواصل معنا الآن</a>
        </div>

        <img src="../assets/images/banner-01.png"
             alt="شركة تسويق رقمي ونمو أعمال في السعودية"
             loading="lazy">
    </div>
</section>

<section id="services">
    <div class="container">
        <h2 class="section-title">خدماتنا</h2>
        <div class="services-grid">
            <div class="service-card"><h3>الهوية واستراتيجيات النمو</h3></div>
            <div class="service-card"><h3>التصميم والإبداع</h3></div>
            <div class="service-card"><h3>التسويق الرقمي</h3></div>
            <div class="service-card"><h3>الإعلانات المدفوعة</h3></div>
            <div class="service-card"><h3>تحليل البيانات</h3></div>
            <div class="service-card"><h3>الاستشارات الرقمية</h3></div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <p>© 2025 تخيّل – شركة تسويق رقمي في السعودية</p>
    </div>
</footer>

<!-- ================= SCHEMA ================= -->
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MarketingAgency",
  "name": "تخيّل",
  "url": "https://tkhyl-ai.com",
  "logo": "https://tkhyl-ai.com/public/img/logo-text.png",
  "email": "contact@tkhyl-ai.com",
  "telephone": "+966568979769",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "الرياض",
    "addressCountry": "SA"
  },
  "sameAs": [
    "https://x.com/tkhyl_sa",
    "https://www.instagram.com/tkhyl_sa",
    "https://www.tiktok.com/@tkhyl_sa",
    "https://www.linkedin.com/company/tkhyl-sa"
  ]
}
</script>
@endverbatim


</body>
</html> --}}





<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <!-- ================= BASIC SEO ================= -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>تخيّل | شركة تسويق رقمي ونمو أعمال بالذكاء الاصطناعي في السعودية</title>

    <meta name="description" content="تخيّل شركة تسويق رقمي في السعودية متخصصة في نمو الأعمال، الإعلانات المدفوعة، بناء الهوية الرقمية، وتحليل البيانات باستخدام الذكاء الاصطناعي لتحقيق نتائج فعلية.">

    <meta name="keywords" content="شركة تسويق رقمي, تسويق إلكتروني السعودية, شركة تسويق في الرياض, إعلانات مدفوعة, نمو الأعمال, الذكاء الاصطناعي في التسويق, تخيل">

    <link rel="canonical" href="https://tkhyl-ai.com">

    <meta name="robots" content="index, follow">
    <meta name="language" content="ar">

    <!-- ================= OPEN GRAPH ================= -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="تخيّل | شركة تسويق رقمي ونمو أعمال في السعودية">
    <meta property="og:description" content="نحوّل أفكارك إلى نمو رقمي حقيقي باستخدام الذكاء الاصطناعي والإبداع البشري.">
    <meta property="og:url" content="https://tkhyl-ai.com">
    <meta property="og:image" content="https://tkhyl-ai.com/public/img/logo-text.png">

    <!-- ================= TWITTER ================= -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="تخيّل | شركة تسويق رقمي في السعودية">
    <meta name="twitter:description" content="شريكك الاستراتيجي للنمو الرقمي وتحقيق نتائج فعلية.">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700;900&display=swap" rel="stylesheet"> --}}
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{ asset('public/img/favicon.png') }}">

    <style>
        @font-face {
    font-family: 'Lyon Arabic Display';
    src: url('/fonts/LyonArabicDisplay-Bold.woff2') format('woff2');
    font-weight: bold;
    font-style: normal;
}



h1, h2, h3, h4, .section-title {
    font-family: 'Lyon Arabic Display', serif;
}

        :root {
            --primary: #FF5F1F;
            --primary-soft: #FFE6DB;
            --dark: #0B0B0F;
            --light: #FFFFFF;
            --gray: #777;
            --transition: all 0.35s ease;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background: var(--light);
             color: var(--dark); line-height: 1.7;
              overflow-x: hidden;
  font-family: 'IBM Plex Sans Arabic', sans-serif;
            }
        .container { width: 90%; max-width: 1200px; margin: auto; }
        section { padding: 80px 0; }
        .section-title { text-align: center; font-size: clamp(1.8rem, 4vw, 2.6rem); margin-bottom: 50px; font-weight: 900; }

        /* --- Navbar --- */
        .navbar {
            position: sticky; top: 0; z-index: 1000;
            display: flex; justify-content: space-between; align-items: center;
            padding: 10px 5%; background: rgba(255, 255, 255, 0.95);
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
        .menu-toggle { display: none; font-size: 1.8rem; cursor: pointer; }

        /* --- Hero --- */
        .hero { background: radial-gradient(circle at top right, #fff4ee, #fff); padding: 60px 0; }
        .hero-wrapper { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; }
        .badge {
            background: var(--primary-soft); color: var(--primary);
            padding: 6px 18px; border-radius: 30px; font-weight: 800;
            display: inline-block; margin-bottom: 20px; font-size: 0.9rem;
        }
        .hero h1 { font-size: clamp(2rem, 5vw, 3.2rem); margin-bottom: 20px; line-height: 1.3; }
        .gradient-text { background: linear-gradient(90deg, var(--primary), #ff9f6b); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .hero p { font-size: 1.1rem; color: #444; margin-bottom: 30px; }
        .hero-image img { width: 100%; border-radius: 35px; box-shadow: 0 30px 70px rgba(0,0,0,.1); }

        /* --- Services --- */
        .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; }
        .service-card {
            background: #fff; padding: 40px; border-radius: 25px; border: 1px solid #eee;
            transition: var(--transition); height: 100%;
        }
        .service-card:hover { transform: translateY(-10px); box-shadow: 0 15px 40px rgba(0,0,0,0.08); border-color: var(--primary); }
        .service-card h3 { color: var(--primary); margin-bottom: 15px; font-size: 1.4rem; }

        /* --- USP (Dark) --- */
        .usp { background: var(--dark); color: #fff; }
        .usp-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; }
        .usp-card {
            padding: 35px; border-radius: 25px; background: rgba(255,255,255,.04);
            border: 1px solid rgba(255,255,255,.1); transition: var(--transition);
        }
        .usp-card:hover { background: rgba(255,255,255,0.08); }
        .usp-card i { font-size: 2.4rem; color: var(--primary); margin-bottom: 20px; }

        /* --- FAQ --- */
        .faq-container { max-width: 800px; margin: auto; }
        .faq-item { background: #fff; border-radius: 15px; margin-bottom: 15px; border: 1px solid #eee; overflow: hidden; }
        .faq-question { padding: 20px; cursor: pointer; font-weight: 800; display: flex; justify-content: space-between; align-items: center; }
        .faq-answer { max-height: 0; overflow: hidden; padding: 0 20px; color: var(--gray); transition: 0.3s ease; }
        .faq-item.active .faq-answer { padding-bottom: 20px; max-height: 300px; }
        .faq-item.active .fa-chevron-down { transform: rotate(180deg); }

        /* --- WhatsApp --- */
        .whatsapp-button {
            position: fixed; bottom: 30px; right: 30px; background: #25D366;
            color: #fff; font-weight: bold; padding: 12px 25px; border-radius: 50px;
            display: flex; align-items: center; gap: 10px; z-index: 1000;
            box-shadow: 0 10px 30px rgba(37, 211, 102, 0.3); text-decoration: none; transition: var(--transition);
        }

        /* --- Footer --- */
        footer { background: #0B0B0F; color: #fff; padding: 70px 0 30px; }
        .footer-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; }
        .footer-logo img { height: 80px; margin-bottom: 20px; }
        .footer-links ul { list-style: none; }
        .footer-links li { margin-bottom: 12px; }
        .footer-links a { color: #aaa; text-decoration: none; transition: var(--transition); }
        .footer-links a:hover { color: #fff; padding-right: 5px; }
        .socials { display: flex; gap: 15px; margin-top: 20px; }
        .socials a { font-size: 1.5rem; color: #fff; transition: var(--transition); }
        .socials a:hover { color: var(--primary); transform: translateY(-3px); }

        /* --- Responsive --- */
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
     /* --- حاوية الشريط المتحرك --- */
.slider-container {
    width: 100%;
    overflow: hidden; /* إخفاء العناصر التي تخرج عن الشاشة */
    padding: 40px 0;
    position: relative;
    background: #fcfcfc;
}

/* --- الصف الداخلي الذي سيتحرك --- */
.slider-track {
    display: flex;
    width: calc(250px * 20); /* عرض الشريط الكلي (عرض الشعار * عدد الشعارات) */
    animation: scroll 40s linear infinite; /* الحركة المستمرة */
}

/* إيقاف التحريك عند مرور الماوس لمن يريد التركيز على شعار معين */
.slider-track:hover {
    animation-play-state: paused;
}

/* --- تصميم الشعار الفردي داخل الشريط --- */
.slide {
    width: 250px; /* مساحة كل شعار */
    height: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.slide img {
    max-width: 160px;
    max-height: 80px;
    object-fit: contain;
    filter: grayscale(100%);
    opacity: 0.6;
    transition: all 0.3s ease;
}

.slide img:hover {
    filter: grayscale(0%);
    opacity: 1;
    transform: scale(1.1);
}

/* --- تعريف حركة الأنميشن من اليمين لليسار --- */
@keyframes scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        /* يتحرك بمقدار نصف طول الشريط (لأننا سنكرر الشعارات لضمان عدم وجود فراغ) */
        transform: translateX(calc(-250px * 10));
    }
}

/* تحسين للجوال لتقليل سرعة الحركة أو أحجام الشعارات */
@media (max-width: 768px) {
    .slide { width: 180px; }
    @keyframes scroll {
        100% { transform: translateX(calc(-180px * 10)); }
    }
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

    <a href="{{ route('contact') }}" class="cta-nav">ابدأ رحلة نموك</a>
</nav>


<section class="hero">
    <div class="container hero-wrapper">
        <div data-aos="fade-left">
            <span class="badge">الذكاء الاصطناعي + الإبداع البشري</span>
            <h1>شريكك الاستراتيجي للنمو الرقمي<br><span class="gradient-text">نحوّل أفكارك إلى تجارب واقعية مؤثرة</span></h1>
            <p>في "تخيل"، لا نكتفي بجلب الزوار، بل نبني لك المنصة التي تحولهم إلى عملاء دائمين من خلال دمج الإبداع البشري بأحدث تقنيات الذكاء الاصطناعي.</p>
            <a href="{{ route('contact') }}" class="cta-nav" style="display:inline-block">ابدأ رحلة نموك الآن</a>
        </div>
        <div class="hero-image" data-aos="zoom-in">
            <img src="../assets/images/banner-01.png" alt="النمو الرقمي">
        </div>
    </div>
</section>

<section id="services" style="background:#f9f9f9;">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">خدماتنا</h2>
        <div class="services-grid">
            <div class="service-card" data-aos="fade-up">
                <h3>الهوية واستراتيجيات النمو</h3>
                <p>تحليل المنافسين، تموضع العلامة وصياغة الرسائل، تخطيط الحملات، وأبحاث السوق.</p>
            </div>
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <h3>الإبداع والتصميم</h3>
                <p>هوية بصرية، متاجر إلكترونية، موشن و CGI بلمسة إبداعية متميزة.</p>
            </div>
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <h3>التسويق الرقمي</h3>
                <p>إدارة المحتوى وحملات المؤثرين وبناء الظهور الرقمي الفعال.</p>
            </div>
            <div class="service-card" data-aos="fade-up">
                <h3>الإعلانات المدفوعة</h3>
                <p>حملات Google و Meta و TikTok بأفضل عائد على الاستثمار (ROI).</p>
            </div>
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <h3>تحليلات البيانات</h3>
                <p>رصد وتحليل أداء الحملات والمواقع لاتخاذ قرارات دقيقة واستراتيجية.</p>
            </div>
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <h3>استشارات رقمية</h3>
                <p>تقديم استشارات متكاملة لتطوير المشاريع الرقمية وتحقيق أهدافك بسرعة.</p>
            </div>
        </div>
    </div>
</section>

<section class="usp">
    <div class="container">
        <h2 class="section-title" style="color:#fff;" data-aos="fade-up">بصمة تخيّل</h2>
        <div class="usp-grid">
            <div class="usp-card" data-aos="zoom-in">
                <i class="fas fa-landmark"></i>
                <h3>من مورد إلى شريك نمو</h3>
                <p>علاقتنا تحالف استراتيجي طويل المدى لتحقيق أهدافك التجارية.</p>
            </div>
            <div class="usp-card" data-aos="zoom-in" data-aos-delay="100">
                <i class="fas fa-chart-pie"></i>
                <h3>نظام السكواد المخصص</h3>
                <p>فريق يعمل كأنه جزء من فريقك الداخلي لضمان سرعة التنفيذ ودقة النتائج.</p>
            </div>
            <div class="usp-card" data-aos="zoom-in" data-aos-delay="200">
                <i class="fas fa-microscope"></i>
                <h3>اقتصاد النتائج</h3>
                <p>نركز على نمو حصتك السوقية وأرباحك الفعلية بدلاً من مجرد التفاعل.</p>
            </div>
        </div>
    </div>
</section>
<section id="clients">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">شركاء النجاح</h2>
    </div>

    <div class="slider-container">
        <div class="slider-track">
            <div class="slide"><img src="{{ asset('public/img/cleint/13.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/15.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/16.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/17.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/18.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/19.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/20.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/21.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/22.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/23.png') }}" alt="Client"></div>

            <div class="slide"><img src="{{ asset('public/img/cleint/13.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/15.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/16.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/17.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/18.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/19.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/20.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/21.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/22.png') }}" alt="Client"></div>
            <div class="slide"><img src="{{ asset('public/img/cleint/23.png') }}" alt="Client"></div>
        </div>
    </div>
</section>

<section id="faq" style="background:#f9f9f9;">
    <div class="container faq-container">
        <h2 class="section-title" data-aos="fade-up">الأسئلة الشائعة</h2>
        <div class="faq-item" data-aos="fade-up">
            <div class="faq-question">كيف تضمنون تحقيق نتائج فعلية؟ <i class="fas fa-chevron-down"></i></div>
            <div class="faq-answer">نعمل بلغة الأرقام وتقارير أداء مرتبطة بالعائد الحقيقي لضمان ROI فعلي ومستدام.</div>
        </div>
        <div class="faq-item" data-aos="fade-up">
            <div class="faq-question">هل تستخدمون الذكاء الاصطناعي؟ <i class="fas fa-chevron-down"></i></div>
            <div class="faq-answer">نعم، نستخدم الذكاء الاصطناعي لتعزيز الإبداع البشري، تحليل البيانات الضخمة، وتسريع وتيرة التنفيذ.</div>
        </div>
    </div>
</section>

<a href="https://wa.me/966568979769" class="whatsapp-button" target="_blank">
    <i class="fab fa-whatsapp"></i>
    <span>تواصل معنا</span>
</a>

<footer>
    <div class="container footer-grid">
        <div>
            <div class="footer-logo"><img src="{{ asset('public/img/cleint/log.jpg') }}" alt="تخيّل" ></div>
            <p style="color: #888;">شريكك الموثوق لتحويل الأفكار إلى واقع رقمي ملموس.</p>
            <div class="socials">
    <a href="https://www.linkedin.com/company/tkhyl-sa" target="_blank"><i class="fab fa-linkedin"></i></a>
    <a href="https://www.instagram.com/tkhyl_sa" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://www.tiktok.com/@tkhyl_sa" target="_blank"><i class="fab fa-tiktok"></i></a>
    <a href="https://x.com/tkhyl_sa" target="_blank"><i class="fab fa-twitter"></i></a>
</div>

        </div>
        <div class="footer-links">
            <h4 style="margin-bottom:20px;">روابط سريعة</h4>
            <ul>
             <li><a href="{{ route('frontend.home') }}" class="active">الرئيسية</a></li>
            <li><a href="{{ route('frontend.about-us') }}">من نحن</a></li>
            <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
            <li><a href="{{ route('frontend.rooms') }}">مجتمعنا</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <h4 style="margin-bottom:20px;">معلومات التواصل</h4>
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
    <p style="text-align:center; margin-top:50px; color:#555; font-size:0.9rem;">© 2025 tkhyl-ai.com | جميع الحقوق محفوظة</p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });

    // Menu Toggle
    document.getElementById('menuToggle').addEventListener('click', function() {
        document.getElementById('navLinks').classList.toggle('show');
    });

    // FAQ Toggle
    document.querySelectorAll('.faq-question').forEach(item => {
        item.addEventListener('click', () => {
            const parent = item.parentElement;
            parent.classList.toggle('active');
            const answer = item.nextElementSibling;
            if (parent.classList.contains('active')) {
                answer.style.maxHeight = answer.scrollHeight + "px";
            } else {
                answer.style.maxHeight = "0";
            }
        });
    });
</script>

<!-- ================= SCHEMA ================= -->
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MarketingAgency",
  "name": "تخيّل",
  "url": "https://tkhyl-ai.com",
  "logo": "https://tkhyl-ai.com/public/img/logo-text.png",
  "email": "contact@tkhyl-ai.com",
  "telephone": "+966568979769",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "الرياض",
    "addressCountry": "SA"
  },
  "sameAs": [
    "https://x.com/tkhyl_sa",
    "https://www.instagram.com/tkhyl_sa",
    "https://www.tiktok.com/@tkhyl_sa",
    "https://www.linkedin.com/company/tkhyl-sa"
  ]
}
</script>
@endverbatim


</body>
</html>
