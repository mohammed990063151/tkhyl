<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>من نحن | تخيّل</title>

    <!-- Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700;900&display=swap" rel="stylesheet">

    <style>
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

        :root {
            --primary: #FF5F1F;
            --primary-soft: #FFE6DB;
            --dark: #0B0B0F;
            --light: #FFFFFF;
            --gray: #777;
            --transition: all 0.35s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cairo', sans-serif;
        }

        body {
            background: var(--light);
            color: var(--dark);
            line-height: 1.7;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        section {
            padding: 90px 0;
        }

        .section-title {
            text-align: center;
            font-size: 2.6rem;
            margin-bottom: 60px;
        }

        /* HERO */
        .hero {
            background: radial-gradient(circle at top right, #fff4ee, #ffffff);
        }

        .hero-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .badge {
            display: inline-block;
            background: var(--primary-soft);
            color: var(--primary);
            padding: 6px 18px;
            border-radius: 30px;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .gradient-text {
            background: linear-gradient(90deg, var(--primary), #ff9f6b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-image img {
            width: 100%;
            border-radius: 30px;
            box-shadow: 0 30px 70px rgba(0,0,0,.15);
        }

        /* CARDS */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .card {
            background: #fff;
            padding: 40px;
            border-radius: 25px;
            border: 1px solid #eee;
            transition: var(--transition);
        }

        .card:hover {
            transform: translateY(-12px);
            border-color: var(--primary);
            box-shadow: 0 20px 50px rgba(0,0,0,.08);
        }

        .card i {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        /* DARK SECTION */
        .dark {
            background: var(--dark);
            color: #fff;
        }

        .dark .card {
            background: rgba(255,255,255,.05);
            border-color: rgba(255,255,255,.1);
        }

        /* SERVICES SECTION */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }

        .service-card h3 {
            margin-bottom: 15px;
            color: var(--primary);
        }

        .service-card p {
            color: #555;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .hero-wrapper {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero h1 {
                font-size: 2.3rem;
            }
        }
    </style>
</head>

<body>
<nav class="navbar">
    {{-- <div class="logo"><span>.</span></div> --}}
    <div class="logo"><a href="{{ route('frontend.home') }}">
    <img src="../public/img/logo-text.png" alt="تخيّل" style="height:100px;"></a>
</div>

    <ul class="nav-links">
       <li><a href="{{ route('frontend.home') }}" class="active" style="
    color: #1f1e23 !important;
">الرئيسية </a></li>
        <li><a href="{{ route('frontend.about-us') }}">من نحن</a></li>
        <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
        <li><a href="{{ route('frontend.rooms') }}">مجتمعنا</a></li>
    </ul>
    <a href="{{ route('contact') }}" class="cta-nav">ابدأ رحلة نموك</a>
</nav>
<!-- HERO -->
<section class="hero">
    <div class="container hero-wrapper">
        <div data-aos="fade-left">
            <span class="badge">من نحن</span>
            <h1>
                نحن <span class="gradient-text">تخيّل</span><br>
                نحوّل الأفكار إلى تجارب رقمية متكاملة
            </h1>
            <p>
                تخيّل هي شركة متخصصة في الإبداع الرقمي وبناء الحلول البصرية المتقدمة،
                نحوّل الأفكار إلى تجارب رقمية متكاملة تجمع بين التصميم، التقنية، والابتكار،
                لنقدّم لعملائنا حلولاً احترافية تعكس رؤيتهم وتُبرز هويتهم في سوق تنافسي.
            </p>
        </div>

        <div class="hero-image" data-aos="zoom-in">
            <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&w=900&q=80" alt="تخيّل">
        </div>
    </div>
</section>

<!-- OUR STORY -->
<section>
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">قصتنا</h2>
        <div class="grid">
            <div class="card" data-aos="fade-up">
                <i class="fas fa-users"></i>
                <h3>فريقنا</h3>
                <p>
                    نحن فريق من المبدعين والمختصين نعمل بروح الشراكة، ونؤمن أن كل علامة تجارية تستحق حضوراً قوياً، واضحاً، وملهماً.
                </p>
            </div>

            <div class="card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-pencil-ruler"></i>
                <h3>أعمالنا</h3>
                <p>
                    نعمل على تطوير الهويات، صناعة المحتوى، إنتاج الفيديو، وإدارة الظهور الرقمي،
                    لنقدّم تجربة متكاملة تُساهم في نمو أعمال عملائنا وتحقيق أهدافهم.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- VISION & MISSION -->
<section class="dark">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">رؤيتنا ورسالتنا</h2>
        <div class="grid">
            <div class="card" data-aos="fade-up">
                <i class="fas fa-eye"></i>
                <h3>رؤيتنا</h3>
                <p>
                    المساهمة في تعزيز المحتوى المحلي ومخاطبة الجمهور السعودي لبناء حضور رقمي قوي ومتميز وفهم عميق لاحتياجات العميل.
                </p>
            </div>

            <div class="card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-bullseye"></i>
                <h3>رسالتنا</h3>
                <p>
                    نسعى في تخيّل إلى أن نصبح الوجهة الأولى للإبداع الرقمي في الوطن العربي،
                    من خلال تقديم حلول مبتكرة تُعيد تشكيل الطريقة التي تتواصل بها العلامات التجارية مع جمهورها.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- VALUES -->
<section>
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">قيمنا</h2>
        <div class="grid">
            <div class="card" data-aos="zoom-in">
                <i class="fas fa-handshake"></i>
                <h3>الشراكة</h3>
                <p>شعارنا "Together" ليس مجرد كلمة، بل هو التزام بالعمل المشترك في كل خطوة.</p>
            </div>

            <div class="card" data-aos="zoom-in" data-aos-delay="100">
                <i class="fas fa-chart-line"></i>
                <h3>الشفافية</h3>
                <p>نؤمن بلغة الأرقام؛ تقاريرنا واضحة، دقيقة، ومرتبطة بالأداء الفعلي.</p>
            </div>

            <div class="card" data-aos="zoom-in" data-aos-delay="200">
                <i class="fas fa-brain"></i>
                <h3>الابتكار</h3>
                <p>نستخدم الذكاء الاصطناعي كأداة لتعزيز الإبداع البشري، وليس لاستبداله.</p>
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
    AOS.init({ duration: 1000, once: true });
</script>

</body>
</html>



{{-- @extends('frontend.layouts.master')
@section('content')
<br /><br /><br /><br />
<section id="about" class="about-section py-5 categories-collections" style="direction: rtl; background: #f8f9fa;">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- الصورة -->
      <div class="col-lg-6 position-relative">
        <div class="about-image-wrapper">
          <img src="{{ asset('img/3.jpg') }}" alt="من نحن - تخيل" class="img-fluid rounded-4 shadow-lg animate__animated animate__fadeInRight">
          <div class="about-shape"></div>
        </div>
      </div>

      <!-- النص -->
      <div class="col-lg-6">
        <h6 class="fw-bold text-uppercase mb-3" style="color:#7453fc; letter-spacing:2px;">من نحن</h6>
        <h2 class="fw-bold mb-4" style="background: linear-gradient(90deg, #007BFF, #7453fc, #7453fc);
                                        -webkit-background-clip: text;
                                        -webkit-text-fill-color: transparent;">
          في <span class="fw-bolder">تخــــيّــل</span>، نحـوّل الأفكــار إلى واقـــع ينبض بالإبداع
        </h2>

        <p class="text-muted mb-4 lh-lg" style="font-size: 1.05rem;">
          نحن وكالة تسويقية وإبداعية متكاملة تجمع بين **الابتكار المحلي والتفكير العالمي**، نؤمن أن كل فكرة عظيمة
          تبدأ بتخيل مختلف. من هنا نعمل على تحويل القصص، المشاريع، والرؤى إلى تجارب حقيقية
          تُبهر العملاء وتترك أثراً طويل المدى.
        </p>

        <div class="row text-center g-3 mb-4">
          <div class="col-6 col-md-4">
            <div class="about-box p-3 rounded-4 ">
              <i class="bi bi-lightbulb-fill fs-3 text-warning"></i>
              <h6 class="fw-bold mt-2">إبداع</h6>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="about-box p-3 rounded-4 shadow-sm">
              <i class="bi bi-rocket-takeoff-fill fs-3 text-success"></i>
              <h6 class="fw-bold mt-2">تطور</h6>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="about-box p-3 rounded-4 shadow-sm">
              <i class="bi bi-people-fill fs-3 text-info"></i>
              <h6 class="fw-bold mt-2">شراكة</h6>
            </div>
          </div>
        </div>

        <a href="{{ route('contact') }}" class="btn btn-lg px-5 py-3 fw-bold about-btn" style="
    color: #fff !important;
">
          تواصـل معنــا
        </a>
      </div>

    </div>
  </div>
</section>

<!-- 🌈 CSS -->
<style>
.about-section {
  font-family: 'Cairo', sans-serif;
}

.about-image-wrapper {
  position: relative;
}

.about-image-wrapper img {
  border-radius: 20px;
  width: 100%;
  z-index: 2;
  position: relative;
}

.about-shape {
  position: absolute;
  bottom: -30px;
  right: -30px;
  width: 200px;
  height: 200px;
  background: linear-gradient(135deg, #007BFF, #7453fc, #7453fc);
  border-radius: 50%;
  z-index: 1;
  opacity: 0.2;
  animation: pulse 6s infinite ease-in-out;
}

@keyframes pulse {
  0%, 100% { transform: scale(1); opacity: 0.3; }
  50% { transform: scale(1.3); opacity: 0.1; }
}

.about-box {
  background: #7453fc;
  transition: 0.3s ease;
}
.about-box:hover {
  transform: translateY(-6px);
  background: linear-gradient(135deg, #007BFF20, #7453fc, #7453fc);
}

.about-btn {
  background: #7453fc;
  border: none;
  color: #fff;
  border-radius: 50px;
  transition: 0.3s ease-in-out;
}
.about-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

@media (max-width:768px) {
  .about-section { text-align: center; }
  .about-shape { display: none; }
}
</style>

<br /><br />


<section id="origin" class="py-5 categories-collections" style="direction: rtl; background: #fff; position: relative; overflow:hidden;">
  <!-- خلفية فيديو خافتة شفافة أعلى -->
{{--  --}

  <div class="container position-relative z-3 text-dark">
    <div class="row align-items-center g-5">

      <!-- النص -->
      <div class="col-lg-6 text-center text-lg-start">
        <h2 class="fw-bold mb-4" style="font-family:'Cairo',sans-serif; font-size:2.4rem; color:#111;">
          نشـــأة <span style="color:#7453fc;">تخـــيّل</span>
        </h2>

        <p class="lead mb-4" style="font-family:'Cairo',sans-serif; line-height:1.9; font-size:1.15rem; color:#7453fc;">
          في <span style="color:#7453fc; font-weight:bold;">بيئة تنافسية</span> حفزتنا نحو <span style="color:#7453fc; font-weight:bold;">الإبداع</span>
          والتطور في أساليب التسويق <span style="color:#7453fc; font-weight:bold;">النوعية</span> التي تجمع بين
          <span style="color:#000; font-weight:bold;">الأصالة</span> و<span style="color:#7453fc; font-weight:bold;">التجديد</span>.
        </p>

        <!-- القيم -->
        <div class="d-flex justify-content-center justify-content-lg-start gap-4 mb-4">
          <div class="value-box">
            <i class="fas fa-lightbulb" style="color:#7453fc; font-size:2rem;"></i>
            <h6 class="fw-bold mt-2">إبداع</h6>
          </div>
          <div class="value-box">
            <i class="fas fa-chart-line" style="color:#7453fc; font-size:2rem;"></i>
            <h6 class="fw-bold mt-2">تطور</h6>
          </div>
          <div class="value-box">
            <i class="fas fa-handshake" style="color:#7453fc; font-size:2rem;"></i>
            <h6 class="fw-bold mt-2">شراكة</h6>
          </div>
        </div>

        <a href="{{ route('contact') }}" class="btn gradient-btn btn-lg rounded-pill px-4 py-2 fw-bold shadow" style="
    color: #fff !important;
">تواصــل معنــا</a>
      </div>

      <!-- الصورة -->
      <div class="col-lg-6 text-center position-relative">
        <div class="image-wrapper position-relative d-inline-block">
          <img src="{{ asset('img/12.jpeg') }}" alt="تخيل الإبداع" class="img-fluid rounded-4 shadow-lg floating-img">
          <!-- تأثيرات -->
          <div class="circle circle1"></div>
          <div class="circle circle2"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');
  @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

  #origin {
    font-family: 'Cairo', sans-serif;
  }

  .floating-img {
    animation: float 4s ease-in-out infinite;
    transition: transform 0.3s ease;
  }
  .floating-img:hover {
    transform: scale(1.05);
  }

  @keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
  }

  .circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(0,0,0,0.05);
    animation: pulse 6s infinite ease-in-out;
    z-index: -1;
  }
  .circle1 {
    width: 180px;
    height: 180px;
    top: -40px;
    left: -30px;
  }
  .circle2 {
    width: 250px;
    height: 250px;
    bottom: -50px;
    right: -20px;
    animation-delay: 2s;
  }

  @keyframes pulse {
    0%, 100% { transform: scale(1); opacity: 0.4; }
    50% { transform: scale(1.3); opacity: 0.15; }
  }

  .value-box {
    text-align: center;
    transition: transform 0.3s ease, opacity 0.3s ease;
  }
  .value-box:hover {
    transform: translateY(-5px);
    opacity: 0.9;
  }

  .gradient-btn {
    background:  #7453fc;
    color: #fff;
    border: none;
    transition: all 0.3s ease;
  }
  .gradient-btn:hover {
    opacity: 0.9;
    transform: translateY(-3px);
  }

  @media (max-width: 767px) {
    .value-box i { font-size: 1.5rem; }
    .value-box h6 { font-size: 0.9rem; }
  }
</style>

<br /><br />
@endsection

 --}}
