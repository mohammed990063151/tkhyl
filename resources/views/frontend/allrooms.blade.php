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

:root{
    --primary:#FF5F1F;
    --dark:#0B0B0F;
    --gray:#777;
    --light:#fff;
}
*{margin:0;padding:0;box-sizing:border-box;font-family:'Cairo',sans-serif;}
body{background:#fafafa;color:var(--dark);line-height:1.7}

.container{width:90%;max-width:1200px;margin:auto}
section{padding:90px 0}

/* HERO */
.hero{
    background:linear-gradient(135deg,#fff, #fff1e8);
}
.hero-grid{
    display:grid;
    grid-template-columns:1.2fr .8fr;
    gap:50px;
    align-items:center;
}
.hero h1{font-size:3.1rem;margin-bottom:20px}
.hero span{color:var(--primary)}
.hero p{color:var(--gray)}
.hero-box{
    background:rgba(255,255,255,.6);
    backdrop-filter:blur(14px);
    padding:35px;
    border-radius:30px;
    box-shadow:0 30px 70px rgba(0,0,0,.08);
}

/* STATS */
.stats{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
    gap:25px;
    margin-top:40px;
}
.stat{
    background:#fff;
    padding:30px;
    border-radius:25px;
    text-align:center;
    border:1px solid #eee;
}
.stat h3{font-size:2.3rem;color:var(--primary)}

/* TIMELINE */
.timeline{
    position:relative;
    max-width:800px;
    margin:auto;
}
.timeline::before{
    content:"";
    position:absolute;
    top:0;bottom:0;
    right:50%;
    width:2px;
    background:#eee;
}
.step{
    width:50%;
    padding:25px 40px;
    position:relative;
}
.step:nth-child(odd){right:0;text-align:left}
.step:nth-child(even){margin-right:50%;text-align:right}
.step::before{
    content:"";
    position:absolute;
    top:30px;
    width:14px;height:14px;
    background:var(--primary);
    border-radius:50%;
}
.step:nth-child(odd)::before{left:-7px}
.step:nth-child(even)::before{right:-7px}

/* GLASS CARDS */
.glass-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:30px;
}
.glass{
    background:rgba(255,255,255,.75);
    backdrop-filter:blur(10px);
    border-radius:28px;
    padding:40px;
    border:1px solid rgba(255,255,255,.6);
    transition:.35s;
}
.glass:hover{transform:translateY(-12px)}
.glass i{font-size:2.4rem;color:var(--primary);margin-bottom:15px}

/* CTA */
.cta{
    background:linear-gradient(135deg,var(--primary),#ff8f5b);
    color:#fff;
    text-align:center;
    border-radius:40px;
    padding:70px 40px;
}
.cta a{
    display:inline-block;
    margin-top:25px;
    background:#fff;
    color:var(--primary);
    padding:14px 40px;
    border-radius:40px;
    font-weight:900;
    text-decoration:none;
}

/* RESPONSIVE */
@media(max-width:768px){
    .hero-grid{grid-template-columns:1fr;text-align:center}
    .timeline::before{right:10px}
    .step{width:100%;margin-right:0;padding-right:50px}
    .step::before{right:3px}
}
</style>
</head>

<body>
<nav class="navbar">
    {{-- <div class="logo"><span>.</span></div> --}}
    <div class="logo"><a href="{{ route('frontend.home') }}">
    <img src="../img/logo-text.png" alt="تخيّل" style="height:100px;"></a>
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
<div class="container hero-grid">
    <div data-aos="fade-left">
        <h1>مجتمع <span>تخيّل</span><br>ليس مجرد تجمع… بل رحلة</h1>
        <p>
            أنشأنا مجتمعًا يؤمن أن النجاح
            يُبنى بالمشاركة، التجربة،
            والدعم الحقيقي.
        </p>

        <div class="stats">
            <div class="stat">
                <h3>500+</h3>
                <p>عضو نشط</p>
            </div>
            <div class="stat">
                <h3>40+</h3>
                <p>جلسة وورشة</p>
            </div>
            <div class="stat">
                <h3>120+</h3>
                <p>فرصة تعاون</p>
            </div>
        </div>
    </div>

    <div class="hero-box" data-aos="zoom-in">
        <h3>ماذا يميز مجتمعنا؟</h3>
        <p>
            لأننا لا نبحث عن الأعداد،
            بل عن الأشخاص الذين يريدون
            أن يصنعوا أثرًا حقيقيًا.
        </p>
    </div>
</div>
</section>

<!-- TIMELINE -->
<section>
<div class="container">
<h2 class="section-title" data-aos="fade-up">رحلة العضو داخل المجتمع</h2>

<div class="timeline">
    <div class="step" data-aos="fade-up">
        <h4>الانضمام</h4>
        <p>تسجيل بسيط وبداية فورية.</p>
    </div>
    <div class="step" data-aos="fade-up">
        <h4>التفاعل</h4>
        <p>مناقشات، أفكار، وأسئلة حقيقية.</p>
    </div>
    <div class="step" data-aos="fade-up">
        <h4>التطوير</h4>
        <p>ورش، توجيه، ومحتوى عملي.</p>
    </div>
    <div class="step" data-aos="fade-up">
        <h4>الشراكات</h4>
        <p>تحويل العلاقات إلى فرص.</p>
    </div>
</div>
</div>
</section>

<!-- FEATURES -->
<section>
<div class="container">
<h2 class="section-title" data-aos="fade-up">ماذا ستجد داخل المجتمع؟</h2>

<div class="glass-grid">
    <div class="glass" data-aos="zoom-in">
        <i class="fas fa-users"></i>
        <h3>عقول شبيهة</h3>
        <p>أشخاص يفكرون بالنمو مثلك.</p>
    </div>

    <div class="glass" data-aos="zoom-in" data-aos-delay="100">
        <i class="fas fa-brain"></i>
        <h3>محتوى عملي</h3>
        <p>تجارب حقيقية من السوق.</p>
    </div>

    <div class="glass" data-aos="zoom-in" data-aos-delay="200">
        <i class="fas fa-rocket"></i>
        <h3>فرص حقيقية</h3>
        <p>مشاريع، تعاون، وتطوير.</p>
    </div>
</div>
</div>
</section>

<!-- CTA -->
<section>
<div class="container">
<div class="cta" data-aos="fade-up">
    <h2>هل أنت مستعد للانضمام؟</h2>
    <p>كن جزءًا من مجتمع يصنع الفرق</p>
    <a href="{{ route('contact') }}">انضم الآن</a>
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
    <img src="../img/logo-text.png" alt="تخيّل" style="height:100px;"></a></div>

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
<script>AOS.init({duration:1000,once:true});</script>

</body>
</html>







{{-- @extends('frontend.layouts.master')

@section('content')


<section id="gallery" class="py-5 categories-collections" style="direction: rtl; background:#fff;">
  <div class="container text-center">
    <h2 class="fw-bold mb-4" style="font-family:'Cairo',sans-serif; font-size:2.5rem; color:#7453fc;">
      معــــرض <span style="color:#7453fc;">أعمــــالنا</span>
    </h2>
    <p class="lead mb-5" style="max-width:800px; margin:auto; color:#555; font-family:'Cairo',sans-serif;">
      نستعرض في هذا المعرض مجموعة من مشاريعنا الإبداعية التي تعكس شغفنا في بناء حلول رقمية وتسويقية متكاملة،
      تم تنفيذها بشغف وإتقان لتخدم أهداف عملائنا وتعبّر عن رؤيتهم.
    </p>

    <!-- ===== فلاتر التصنيف ===== -->
    <div class="mb-5 d-flex flex-wrap justify-content-center gap-2">
      <button class="filter-btn active" data-filter="all">جميع المشاريع</button>
      <button class="filter-btn" data-filter="design">تصميم الهوية</button>
      <button class="filter-btn" data-filter="marketing">الحملات التسويقية</button>
      <button class="filter-btn" data-filter="web">المواقع والتطبيقات</button>
      <button class="filter-btn" data-filter="content">صناعة المحتوى</button>
    </div>

    <!-- ===== شبكة الصور ===== -->
    <div class="row g-4 justify-content-center" id="gallery-grid">
      <!-- مشروع 1 -->
      <div class="col-md-4 gallery-item" data-category="design">
        <div class="gallery-card shadow-sm">
          <img src="{{ asset('img/colorful-2468874_1280.jpg') }}" class="img-fluid rounded-4" alt="تصميم الهوية">
          <div class="overlay">
            <h5 class="fw-bold">تصميم الهوية البصرية</h5>
            <p class="small">هوية متكاملة لشركة سعودية ناشئة في قطاع الخدمات.</p>
          </div>
        </div>
      </div>

      <!-- مشروع 2 -->
      <div class="col-md-4 gallery-item" data-category="marketing">
        <div class="gallery-card shadow-sm">
          <img src="{{ asset('img/digital-marketing-1725340_1280.jpg') }}" class="img-fluid rounded-4" alt="تسويق رقمي">
          <div class="overlay">
            <h5 class="fw-bold">حملة تسويق رقمي</h5>
            <p class="small">زيادة الوعي بالعلامة التجارية من خلال وسائل التواصل الاجتماعي.</p>
          </div>
        </div>
      </div>

      <!-- مشروع 3 -->
      <div class="col-md-4 gallery-item" data-category="web">
        <div class="gallery-card shadow-sm">
          <img src="{{ asset('img/programming-1857236_1280.jpg') }}" class="img-fluid rounded-4" alt="تطوير موقع">
          <div class="overlay">
            <h5 class="fw-bold">موقع إلكتروني تفاعلي</h5>
            <p class="small">تطوير واجهة احترافية وتجربة مستخدم عالية الأداء.</p>
          </div>
        </div>
      </div>

      <!-- مشروع 4 -->
      <div class="col-md-4 gallery-item" data-category="content">
        <div class="gallery-card shadow-sm">
          <img src="{{ asset('img/camera-6745942_1280.jpg') }}" class="img-fluid rounded-4" alt="إنتاج محتوى">
          <div class="overlay">
            <h5 class="fw-bold">إنتاج محتوى مرئي</h5>
            <p class="small">إعداد مقاطع مرئية تسويقية احترافية لعرض الخدمات.</p>
          </div>
        </div>
      </div>

      <!-- مشروع 5 -->
      <div class="col-md-4 gallery-item" data-category="marketing">
        <div class="gallery-card shadow-sm">
          <img src="{{ asset('img/sign-8032702_1280.jpg') }}" class="img-fluid rounded-4" alt="إعلانات">
          <div class="overlay">
            <h5 class="fw-bold">حملة إعلانات تفاعلية</h5>
            <p class="small">زيادة التفاعل والمبيعات عبر استهداف ذكي وفعال.</p>
          </div>
        </div>
      </div>

      <!-- مشروع 6 -->
      <div class="col-md-4 gallery-item" data-category="design">
        <div class="gallery-card shadow-sm">
          <img src="{{ asset('img/business-card-943998_1280.jpg') }}" class="img-fluid rounded-4" alt="تصميم شعار">
          <div class="overlay">
            <h5 class="fw-bold">تصميم شعار فريد</h5>
            <p class="small">ابتكار هوية مميزة تعبّر عن روح الشركة وأهدافها.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- زر عرض الكل -->
    <div class="mt-5">
      <a href="{{ route('contact') }}" class="btn gradient-btn btn-lg rounded-pill px-5 py-2 fw-bold shadow-sm" style="
    color: #fff !important;
">
        اطلب عرضك الآن
      </a>
    </div>
  </div>
</section>

<!-- ===== CSS ===== -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');
  @import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');

  #gallery {
    font-family: 'Cairo', sans-serif;
  }

  /* الأزرار */
  .filter-btn {
    border: none;
    background: #f2f2f2;
    color: #333;
    padding: 10px 20px;
    border-radius: 30px;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .filter-btn:hover, .filter-btn.active {
    background:#7453fc;
    color: #fff;
  }

  /* البطاقة */
  .gallery-card {
    position: relative;
    overflow: hidden;
    border-radius: 20px;
    transition: all 0.4s ease;
  }

  .gallery-card img {
    width: 100%;
    height: 100%;
    transition: transform 0.4s ease;
  }

  .gallery-card:hover img {
    transform: scale(1.08);
  }

  /* طبقة التوضيح */
  .overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.65);
    color: #fff;
    opacity: 0;
    transition: all 0.4s ease;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 20px;
  }

  .gallery-card:hover .overlay {
    opacity: 1;
  }

  /* زر التدرج */
  .gradient-btn {
    background:#7453fc;
    color: #fff;
    border: none;
    transition: all 0.3s ease;
  }

  .gradient-btn:hover {
    opacity: 0.9;
    transform: translateY(-3px);
  }
</style>

<!-- ===== JS للفلاتر ===== -->
<script>
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');
      document.querySelectorAll('.gallery-item').forEach(item => {
        if (filter === 'all' || item.dataset.category === filter) {
          item.style.display = 'block';
          item.classList.add('animate__fadeInUp');
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
</script>
<br /><br /><br />

@endsection --}}
