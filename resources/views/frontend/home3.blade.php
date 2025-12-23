<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تخيّل | شريكك للنمو الرقمي</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700;900&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #FF5F1F;
            --primary-soft: #FFE6DB;
            --dark: #0B0B0F;
            --light: #FFFFFF;
            --gray: #777;
            --transition: all 0.35s ease;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Cairo', sans-serif; }
        body { background: var(--light); color: var(--dark); line-height: 1.7; overflow-x: hidden; }
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

<a href="https://wa.me/966583116161" class="whatsapp-button" target="_blank">
    <i class="fab fa-whatsapp"></i>
    <span>تواصل معنا</span>
</a>

<footer>
    <div class="container footer-grid">
        <div>
            <div class="footer-logo"><img src="{{ asset('public/img/logo-text.png') }}" alt="تخيّل"></div>
            <p style="color: #888;">شريكك الموثوق لتحويل الأفكار إلى واقع رقمي ملموس.</p>
            <div class="socials">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
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
            <p style="color: #888;">الرياض، المملكة العربية السعودية</p>
            <p style="color: #888;">info@tkhyl-ai.com</p>
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

</body>
</html>
{{-- <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تخيّل | شريكك للنمو الرقمي</title>

    <!-- Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700;900&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary:#FF5F1F;
            --primary-soft:#FFE6DB;
            --dark:#0B0B0F;
            --light:#FFFFFF;
            --gray:#777;
            --transition:all .35s ease;
        }
        *{margin:0;padding:0;box-sizing:border-box;font-family:'Cairo',sans-serif}
        body{background:var(--light);color:var(--dark);line-height:1.7}
        .container{width:90%;max-width:1200px;margin:auto}
        section{padding:90px 0}
        .section-title{text-align:center;font-size:2.6rem;margin-bottom:60px}

        /* NAVBAR */
        .navbar{
            position:sticky;top:0;z-index:999;
            display:flex;justify-content:space-between;align-items:center;
            padding:20px 5%;
            background:rgba(255,255,255,.85);
            backdrop-filter:blur(12px)
        }
        .logo{font-size:2rem;font-weight:900}
        .logo span{color:var(--primary)}
        .nav-links{display:flex;gap:30px;list-style:none}
        .nav-links a{text-decoration:none;font-weight:700;color:var(--dark)}
        .nav-links a:hover{color:var(--primary)}
        .cta-nav{
            background:var(--primary);color:#fff;
            padding:12px 26px;border-radius:40px;
            font-weight:800;text-decoration:none;
            box-shadow:0 10px 30px rgba(255,95,31,.35)
        }

        /* HERO */
        .hero{background:radial-gradient(circle at top right,#fff4ee,#fff)}
        .hero-wrapper{
            display:grid;grid-template-columns:1fr 1fr;
            gap:60px;align-items:center
        }
        .badge{
            background:var(--primary-soft);
            color:var(--primary);
            padding:6px 18px;
            border-radius:30px;
            font-weight:800;
            display:inline-block;
            margin-bottom:20px
        }
        .hero h1{font-size:3.2rem;margin-bottom:20px}
        .gradient-text{
            background:linear-gradient(90deg,var(--primary),#ff9f6b);
            -webkit-background-clip:text;
            -webkit-text-fill-color:transparent
        }
        .hero-image img{
            width:100%;border-radius:35px;
            box-shadow:0 30px 70px rgba(0,0,0,.15)
        }

        /* USP */
        .usp{background:var(--dark);color:#fff}
        .usp-grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
            gap:30px
        }
        .usp-card{
            padding:35px;border-radius:25px;
            background:rgba(255,255,255,.04);
            border:1px solid rgba(255,255,255,.1)
        }
        .usp-card i{font-size:2.4rem;color:var(--primary);margin-bottom:20px}

        /* SERVICES & PHILOSOPHY */
        .services-grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:25px
        }
        .service-card{
            background:#fff;padding:35px;
            border-radius:28px;border:1px solid #eee
        }

        /* FAQ */
        .faq-item{
            background:#fff;border-radius:15px;
            margin-bottom:15px;border:1px solid #eee;
            overflow:hidden
        }
        .faq-question{
            padding:20px;cursor:pointer;
            font-weight:800;
            display:flex;justify-content:space-between
        }
        .faq-answer{
            max-height:0;overflow:hidden;
            padding:0 20px;color:var(--gray);
            transition:.3s
        }
        .faq-item.active .faq-answer{
            max-height:200px;padding-bottom:20px
        }

        /* FOOTER */
        footer{
            background:radial-gradient(circle at top,#111,#000);
            color:#fff;padding:70px 0 30px
        }
        .footer-grid{
            display:flex;justify-content:space-between;
            flex-wrap:wrap;gap:30px;margin-bottom:40px
        }
        .socials a{color:#fff;font-size:1.6rem;margin:0 10px}

        @media(max-width:768px){
            .hero-wrapper{grid-template-columns:1fr;text-align:center}
            .nav-links{display:none}
            .hero h1{font-size:2.4rem}
        }



.footprint {
  background: linear-gradient(135deg, #fff4ee, #fff);
  padding: 90px 0;
}
.footprint-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
  margin-top: 50px;
}
.footprint-card {
  background: #fff;
  padding: 35px 25px;
  border-radius: 25px;
  box-shadow: 0 20px 50px rgba(0,0,0,0.08);
  text-align: center;
  transition: transform 0.35s ease, box-shadow 0.35s ease;
  position: relative;
  overflow: hidden;
}
.footprint-card:hover {
  transform: translateY(-15px) scale(1.03);
  box-shadow: 0 30px 70px rgba(0,0,0,0.12);
}
.footprint-card .icon {
  font-size: 2.8rem;
  color: #FF5F1F;
  margin-bottom: 15px;
  transition: transform 0.35s ease, color 0.35s ease;
}
.footprint-card:hover .icon {
  transform: rotate(15deg) scale(1.2);
  color: #FF8A50;
}
.footprint-card h3 {
  font-size: 1.5rem;
  margin-bottom: 10px;
  color: #0B0B0F;
}
.footprint-card p {
  color: #555;
  line-height: 1.6;
}
@media(max-width:768px){
  .footprint-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }
}

.navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 40px;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.logo-img {
    height: 80px;
    max-width: 100%;
}

.nav-links {
    display: flex;
    list-style: none;
    gap: 25px;
}

.nav-links a {
    text-decoration: none;
    color: #1f1e23;
    font-weight: 500;
}

.nav-links a.active {
    font-weight: 700;
}

.cta-nav {
    background: #FF5F1F;
    color: #fff;
    padding: 10px 18px;
    border-radius: 25px;
    text-decoration: none;
}

.menu-toggle {
    display: none;
    font-size: 28px;
    cursor: pointer;
}

/* 📱 موبايل */
@media (max-width: 768px) {
    .menu-toggle {
        display: block;
    }

    .nav-links {
        position: absolute;
        top: 80px;
        right: 0;
        background: white;
        flex-direction: column;
        width: 100%;
        text-align: center;
        padding: 20px 0;
        display: none;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .nav-links.show {
        display: flex;
    }

    .cta-nav {
        display: none;
    }

    .logo-img {
        height: 60px;
    }
}

    </style>
</head>

<body>


<nav class="navbar">
    <div class="logo">
        <a href="{{ route('frontend.home') }}">
            <img src="{{ asset('public/img/logo-text.png') }}" alt="تخيّل" class="logo-img">
        </a>
    </div>

    <div class="menu-toggle" id="menuToggle">☰</div>

    <ul class="nav-links" id="navLinks">
        <li><a href="{{ route('frontend.home') }}" class="active">الرئيسية</a></li>
        <li><a href="{{ route('frontend.about-us') }}">من نحن</a></li>
        <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
        <li><a href="{{ route('frontend.rooms') }}">مجتمعنا</a></li>
    </ul>

     <a href="{{ route('contact') }}" class="cta-nav">ابدأ رحلة نموك</a>
</nav>


<!-- HERO -->
<section class="hero">
    <div class="container hero-wrapper">
        <div>
            <span class="badge">الذكاء الاصطناعي + الإبداع البشري</span>
            <h1>
                شريكك الاستراتيجي للنمو الرقمي<br>
                <span class="gradient-text">نحوّل أفكارك إلى تجارب واقعية مؤثرة</span>
            </h1>
            <p>
                في "تخيل"، لا نكتفي بجلب الزوار،
                بل نبني لك المنصة التي تحولهم إلى عملاء دائمين
                من خلال دمج الإبداع البشري بأحدث تقنيات الذكاء الاصطناعي.
            </p>
            <a href="{{ route('contact') }}" class="cta-nav" style="margin-top:25px;display:inline-block">
                ابدأ رحلة نموك الآن
            </a>
        </div>

        <div class="hero-image">
            <img src="../assets/images/banner-01.png">
        </div>
    </div>
</section>


<section id="services" style="background:#f9f9f9;padding:100px 0;">
  <div class="container">
    <h2 class="section-title" style="margin-bottom:60px;font-size:2.8rem;text-align:center;color:#333;">خدماتنا</h2>
    <div class="services-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:30px;">
     <div class="service-card" style="background:#fff;padding:40px;border-radius:20px;box-shadow:0 15px 40px rgba(0,0,0,0.08);transition:all .3s ease;">
        <h3 style="margin-bottom:15px;color:#FF5F1F;">الهوية واستراتيجيات النمو</h3>
        <p>تحليل المنافسين، تموضع العلامة وصياغة الرسائل، تخطيط الحملات، وأبحاث السوق.</p>
    </div>
     <div class="service-card" style="background:#fff;padding:40px;border-radius:20px;box-shadow:0 15px 40px rgba(0,0,0,0.08);transition:all .3s ease;">
        <h3 style="margin-bottom:15px;color:#FF5F1F;">الإبداع والتصميم</h3>
        <p>هوية بصرية، متاجر إلكترونية، موشن و CGI.</p>
    </div>
    <div class="service-card" style="background:#fff;padding:40px;border-radius:20px;box-shadow:0 15px 40px rgba(0,0,0,0.08);transition:all .3s ease;">
        <h3 style="margin-bottom:15px;color:#FF5F1F;">التسويق الرقمي</h3>
        <p>إدارة المحتوى وحملات المؤثرين وبناء الظهور الرقمي.</p>
    </div>
     <div class="service-card" style="background:#fff;padding:40px;border-radius:20px;box-shadow:0 15px 40px rgba(0,0,0,0.08);transition:all .3s ease;">
        <h3 style="margin-bottom:15px;color:#FF5F1F;">الإعلانات المدفوعة</h3>
        <p>حملات Google و Meta و TikTok بأفضل عائد على الاستثمار.</p>
    </div>
    <div class="service-card" style="background:#fff;padding:40px;border-radius:20px;box-shadow:0 15px 40px rgba(0,0,0,0.08);transition:all .3s ease;">
        <h3 style="margin-bottom:15px;color:#FF5F1F;">تحليلات البيانات</h3>
        <p>رصد وتحليل أداء الحملات والمواقع لاتخاذ قرارات دقيقة واستراتيجية.</p>
    </div>
   <div class="service-card" style="background:#fff;padding:40px;border-radius:20px;box-shadow:0 15px 40px rgba(0,0,0,0.08);transition:all .3s ease;">
        <h3 style="margin-bottom:15px;color:#FF5F1F;">استشارات رقمية</h3>
        <p>تقديم استشارات متكاملة لتطوير المشاريع الرقمية وتحقيق أهدافك بسرعة.</p>
    </div>


    </div>
  </div>
</section>


<!-- USP -->
<section class="usp">
    <div class="container">
           <h2 class="section-title" data-aos="fade-up">بصمة تخيّل</h2>
        <div class="usp-grid">
            <div class="usp-card">
                <i class="fas fa-landmark"></i>
                <h3>من مورد إلى شريك نمو</h3>
        <p>علاقتنا تحالف استراتيجي طويل المدى لتحقيق أهدافك التجارية.</p>
            </div>
            <div class="usp-card">
                <i class="fas fa-chart-pie"></i>
                  <h3>نظام السكواد المخصص</h3>
        <p>فريق يعمل كأنه جزء من فريقك الداخلي لضمان سرعة التنفيذ ودقة النتائج.</p>
            </div>
            <div class="usp-card">
                <i class="fas fa-microscope"></i>
              <h3>اقتصاد النتائج</h3>
        <p>نركز على نمو حصتك السوقية وأرباحك الفعلية بدلاً من الاكتفاء بمقاييس التفاعل التقليدية.</p>
            </div>

        </div>
    </div>
</section>

<!-- SERVICES -->
<!-- SERVICES -->


<!-- PHILOSOPHY -->
<section id="philosophy" style="padding:100px 0;background:#fff;">
  <div class="container">
    <h2 class="section-title" style="margin-bottom:60px;font-size:2.8rem;text-align:center;color:#333;">فلسفة العمل: بصمة تخيّل</h2>
    <div class="services-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:30px;">
      <div class="service-card" style="background:#fdf5f0;padding:35px;border-radius:20px;box-shadow:0 10px 30px rgba(0,0,0,0.05);transition:all .3s ease;">
        <h3 style="margin-bottom:15px;color:#FF5F1F;">من مورد إلى شريك نمو</h3>
        <p style="color:#555;">علاقتنا تحالف استراتيجي طويل المدى لبناء الثقة والنجاح المشترك.</p>
      </div>
      <div class="service-card" style="background:#fdf5f0;padding:35px;border-radius:20px;box-shadow:0 10px 30px rgba(0,0,0,0.05);transition:all .3s ease;">
        <h3 style="margin-bottom:15px;color:#FF5F1F;">نظام السكواد المخصص</h3>
        <p style="color:#555;">فريق عمل رشيق يعمل كجزء من فريقك الداخلي لضمان سرعة التنفيذ.</p>
      </div>
      <div class="service-card" style="background:#fdf5f0;padding:35px;border-radius:20px;box-shadow:0 10px 30px rgba(0,0,0,0.05);transition:all .3s ease;">
        <h3 style="margin-bottom:15px;color:#FF5F1F;">التزامنا Together</h3>
        <p style="color:#555;">نعمل جنباً إلى جنب معك في كل خطوة لتحقيق النتائج الحقيقية.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq" style="padding:100px 0;background:#f9f9f9;">
  <div class="container" style="max-width:800px;">
    <h2 class="section-title" style="margin-bottom:50px;font-size:2.8rem;text-align:center;color:#333;">الأسئلة الشائعة</h2>

    <div class="faq-item" style="margin-bottom:20px;background:#fff;border-radius:15px;box-shadow:0 5px 20px rgba(0,0,0,0.05);overflow:hidden;">
      <div class="faq-question" style="padding:20px;cursor:pointer;font-weight:700;display:flex;justify-content:space-between;align-items:center;">
        كيف تضمنون تحقيق نتائج فعلية؟
        <i class="fas fa-chevron-down"></i>
      </div>
      <div class="faq-answer" style="max-height:0;overflow:hidden;padding:0 20px;color:#555;transition:0.3s ease;">
        نعمل بلغة الأرقام وتقارير أداء مرتبطة بالعائد الحقيقي لضمان ROI فعلي.
      </div>
    </div>

    <div class="faq-item" style="margin-bottom:20px;background:#fff;border-radius:15px;box-shadow:0 5px 20px rgba(0,0,0,0.05);overflow:hidden;">
      <div class="faq-question" style="padding:20px;cursor:pointer;font-weight:700;display:flex;justify-content:space-between;align-items:center;">
        هل تستخدمون الذكاء الاصطناعي؟
        <i class="fas fa-chevron-down"></i>
      </div>
      <div class="faq-answer" style="max-height:0;overflow:hidden;padding:0 20px;color:#555;transition:0.3s ease;">
        نعم، نستخدم الذكاء الاصطناعي لتعزيز الإبداع البشري وتسريع التنفيذ.
      </div>
    </div>
  </div>
</section>
<!-- WhatsApp Button -->
<a href="https://wa.me/966583116161" class="whatsapp-button" target="_blank">
  <i class="fab fa-whatsapp"></i>
  تواصل معنا
</a>

<style>
.whatsapp-button {
  position: fixed;
  bottom: 25px;
  right: 25px;
  background: #25D366;
  color: #fff;
  font-weight: bold;
  padding: 15px 20px;
  border-radius: 50px;
  display: flex;
  align-items: center;
  gap: 10px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
  text-decoration: none;
  z-index: 1000;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  font-size: 1.1rem;
}
.whatsapp-button i {
  font-size: 1.5rem;
}
.whatsapp-button:hover {
  transform: translateY(-5px) scale(1.05);
  box-shadow: 0 15px 35px rgba(0,0,0,0.25);
}
</style>

<script>
  // يمكنك إضافة أي تأثير إضافي هنا
  const waButton = document.querySelector('.whatsapp-button');
  waButton.addEventListener('click', () => {
    console.log('فتح واتساب');
  });
</script>



<footer style="background:#111;color:#fff;padding:70px 0 30px;">
    <div class="container">
        <div class="footer-grid" style="display:flex;flex-wrap:wrap;justify-content:space-between;gap:30px;align-items:center;">
            <!-- شعار -->
            <div class="logo" style="font-size:2rem;font-weight:900;"><a href="{{ route('frontend.home') }}">
    <img src="../public/img/logo-text.png" alt="تخيّل" style="height:100px;"></a></div>

            <!-- روابط سريعة -->
            <div style="display:flex;flex-direction:column;gap:10px;">
                <strong>روابط سريعة</strong>
                <a href="{{ route('frontend.about-us') }}" style="color:#fff;text-decoration:none;">من نحن</a>
                <a href="{{ route('contact') }}" style="color:#fff;text-decoration:none;">تواصل معنا</a>
                <a href="{{ route('frontend.rooms') }}" style="color:#fff;text-decoration:none;">مجتماعتنا</a>
                <a href="#services" style="color:#fff;text-decoration:none;">خدماتنا</a>
            </div>

            <!-- تواصل اجتماعي -->
            <div class="socials" style="display:flex;gap:15px;">
                <a href="#" style="color:#fff;font-size:1.6rem;"><i class="fab fa-linkedin"></i></a>
                <a href="#" style="color:#fff;font-size:1.6rem;"><i class="fab fa-instagram"></i></a>
                <a href="#" style="color:#fff;font-size:1.6rem;"><i class="fab fa-facebook"></i></a>
            </div>

            <!-- معلومات إضافية -->
            <div style="color:#777;">
                <p>© 2025 tkhyl-ai.com | جميع الحقوق محفوظة</p>
                <p>العنوان: الرياض، المملكة العربية السعودية</p>
                <p>البريد الإلكتروني: info@tkhyl-ai.com</p>
            </div>
        </div>
    </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({duration:1000,once:true});
    document.querySelectorAll('.faq-question').forEach(q=>{
        q.onclick=()=>q.parentElement.classList.toggle('active');
    });
</script>
<!-- JS FAQ -->
<script>
  document.querySelectorAll('.faq-question').forEach(item=>{
    item.addEventListener('click',()=>{
      const parent = item.parentElement;
      parent.classList.toggle('active');
      const answer = item.nextElementSibling;
      if(parent.classList.contains('active')){
        answer.style.maxHeight = answer.scrollHeight + "px";
      } else {
        answer.style.maxHeight = "0";
      }
    });
  });
</script>

<script>
  // تأثير خفيف عند التمرير باستخدام Intersection Observer
  const cards = document.querySelectorAll('.footprint-card');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.2 });

  cards.forEach(card => observer.observe(card));
</script>
<script>
document.getElementById('menuToggle').addEventListener('click', function() {
    document.getElementById('navLinks').classList.toggle('show');
});
</script>

</body>
</html> --}}


{{--
<div class="logo">
        <a href="{{ route('frontend.home') }}">
            <img src="{{ asset('public/img/logo-text.png') }}" alt="تخيّل" class="logo-img">
        </a>
    </div>

    <div class="menu-toggle" id="menuToggle">☰</div>

    <ul class="nav-links" id="navLinks">
        <li><a href="{{ route('frontend.home') }}" class="active">الرئيسية</a></li>
        <li><a href="{{ route('frontend.about-us') }}">من نحن</a></li>
        <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
        <li><a href="{{ route('frontend.rooms') }}">مجتمعنا</a></li>
    </ul>

     <a href="{{ route('contact') }}" class="cta-nav">ابدأ رحلة نموك</a> --}}
