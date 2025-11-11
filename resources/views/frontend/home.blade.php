

@extends('frontend.layouts.master')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
    .hero-section {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
}

.video-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.custom-video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(70%);
    transition: all 0.5s ease-in-out;
}

.video-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6));
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
    padding: 20px;
}

.custom-btn {
    background: #007bff;
    color: #fff;
    padding: 12px 30px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}

.custom-btn:hover {
    background: #0056b3;
    color: #fff;
    transform: translateY(-3px);
}

.hero-info {
    margin-top: 40px;
}

.info-item {
    font-size: 1rem;
    display: flex;
    align-items: center;
}

@media (max-width: 768px) {
    .hero-section {
        height: 90vh;
        text-align: center;
    }

    .custom-btn {
        padding: 10px 25px;
    }

    .hero-info {
        flex-direction: column;
    }
}
</style>
<style>
.hero-section {
    position: relative;
    height: 100vh;
    background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e') center/cover no-repeat;
    color: #fff;
    overflow: hidden;
}
.hero-section .overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.5);
    z-index: 1;
}
.hero-content {
    position: relative;
    z-index: 2;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    animation-duration: 1.5s;
}
.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}
@media (max-width:768px){
    .hero-section { height: 80vh; }
    .hero-content h1 { font-size: 2rem; }
    .hero-content p { font-size: 1rem; }
}
</style>
@section('content')
<section class="hero-video-section d-flex justify-content-center align-items-center text-center">
    <!-- خلفية الفيديو -->
    <video id="heroVideo" autoplay muted playsinline class="hero-bg-video"></video>

    <!-- التعتيم فوق الفيديو -->
    <div class="hero-overlay"></div>

    <!-- المحتوى -->
    <div class="hero-content container">
        <h3 class="animate__animated animate__fadeInDown mb-3 fw-semibold"
            style="font-size:1.5rem; letter-spacing:3px;">
            <span style="background:  #FF9800;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;">
                تـخـيّــل
            </span>
        </h3>

        <h1 class="animate__animated animate__fadeInUp display-4 fw-bold mb-4"
            style="background: #FF9800;
                   -webkit-background-clip: text;
                   -webkit-text-fill-color: transparent;">
            من مجرّد أفكـــار إلى واقـــع ملمـــــــوس
        </h1>

        <p class="animate__animated animate__fadeInUp text-light fs-5 mb-5" style="max-width: 700px; margin:auto;">
            نحـوّل رؤيتك الإبداعية إلى تجربة واقعية تجمع بين الإتقان، الجمال، والابتكار.
        </p>

        <div class="animate__animated animate__zoomIn">
            <a href="{{ route('frontend.our-services') }}" class="btn btn-lg px-5 py-3 fw-bold hero-btn">
                اكتشف خدماتنا
            </a>
        </div>
    </div>
</section>

<style>
.hero-video-section {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    color: #fff;
}

/* 🎥 فيديو الخلفية */
.hero-bg-video {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
    transition: opacity 1s ease-in-out;
}

/* 🌑 التعتيم فوق الفيديو */
.hero-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.55);
    z-index: 2;
}

/* ✨ المحتوى */
.hero-content {
    position: relative;
    z-index: 3;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    animation-duration: 1.5s;
}

/* 🌈 زر أنيق */
.hero-btn {
    background:  #FF9800;
    /* linear-gradient(90deg, #4CAF50, #00BCD4, */
    border: none;
    color: #fff;
    border-radius: 50px;
    transition: 0.3s ease-in-out;
}
.hero-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
}

/* 📱 استجابة */
@media (max-width:768px){
    .hero-video-section { height: 80vh; }
    .hero-content h1 { font-size: 2rem; }
    .hero-content p { font-size: 1rem; }
}
</style>

<!-- 🎬 سكربت تبديل الفيديوهات -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  const videoElement = document.getElementById("heroVideo");

  // ✨ قائمة الفيديوهات
  const videos = [
    "{{ asset('img/2.mp4') }}",
    "{{ asset('img/3.mp4') }}",
    "{{ asset('img/WhatsApp Video 2025-10-20 at 11.25.48 AM.mp4') }}"
  ];

  let index = 0;

  // 🔁 دالة لتشغيل الفيديو الحالي
  function playVideo() {
    videoElement.style.opacity = 0;
    setTimeout(() => {
      videoElement.src = videos[index];
      videoElement.load();
      videoElement.play();
      videoElement.style.opacity = 1;
    }, 500);
  }

  // عند انتهاء الفيديو، انتقل إلى التالي
  videoElement.addEventListener("ended", () => {
    index = (index + 1) % videos.length;
    playVideo();
  });

  // بدء التشغيل
  playVideo();
});
</script>



<section id="projects" class="py-5" style="direction: rtl; background: linear-gradient(135deg, #007BFF, #28a745, #ff9800); position: relative; overflow:hidden;">
  <!-- خلفية فيديو -->
  <video autoplay muted loop playsinline class="position-absolute w-100 h-100" style="object-fit: cover; z-index:0; opacity:0.1;">
    <source src="{{ asset('img/2.mp4') }}" type="video/mp4">
  </video>

  <div style="background: rgba(0,0,0,0.6); position:absolute; inset:0;"></div>

  <div class="container position-relative z-3 text-white text-center">
    <h2 class="fw-bold mb-4" style="font-family:'Cairo',sans-serif;">أعمالنــــــا</h2>
    <p class="lead mb-5" style="max-width:750px; margin:auto; font-family:'Cairo',sans-serif; color: rgb(5, 27, 15);">
      مجموعة من أبرز مشاريعنا الناجحة التي تعكس شغفنا بالإبداع والابتكار في تقديم الحلول الرقمية والتسويقية.
    </p>

    <!-- ====== الفلاتر ====== -->
    <div class="mb-5 d-flex flex-wrap justify-content-center gap-2">
      <button class="filter-btn active" data-filter="all">جميع الأعمال</button>
      <button class="filter-btn" data-filter="tech">الحلول التقنية</button>
      <button class="filter-btn" data-filter="branding">تصميم الهوية البصرية</button>
      <button class="filter-btn" data-filter="ads">الحملات الإعلانية</button>
      {{-- <button class="filter-btn" data-filter="profiles">الملفات التعريفية</button> --}}
      <button class="filter-btn" data-filter="content">صناعة المحتوى</button>
    </div>

    <!-- ====== الشبكة ====== -->
    <div class="row g-4 justify-content-center" id="project-grid">
      <!-- مشروع 1 -->
      <div class="col-md-3 project-item" data-category="branding">
        <div class="project-card shadow-lg">
          <div class="project-img" style="background-image:url('{{ asset('img/analysis-1841158_1280.jpg') }}');"></div>
          <div class="project-overlay">
            <h5 class="fw-bold">شركة مساحة لتصميم الهوية</h5>
            <a href="{{ route('frontend.rooms') }}" class="btn btn-sm btn-light mt-2">عرض التفاصيل</a>
          </div>
        </div>
      </div>

      <!-- مشروع 2 -->
      <div class="col-md-3 project-item" data-category="tech">
        <div class="project-card shadow-lg">
          <div class="project-img" style="background-image:url('{{ asset('img/world-4961456_1280.jpg') }}');"></div>
          <div class="project-overlay">
            <h5 class="fw-bold">نظام Axis اللوجستي</h5>
            <a href="{{ route('frontend.rooms') }}" class="btn btn-sm btn-light mt-2">عرض التفاصيل</a>
          </div>
        </div>
      </div>

      <!-- مشروع 3 -->
      <div class="col-md-3 project-item" data-category="content">
        <div class="project-card shadow-lg">
          <div class="project-img" style="background-image:url('{{ asset('img/digital-marketing-4297723_1280.jpg') }}');"></div>
          <div class="project-overlay">
            <h5 class="fw-bold">حملة محتوى "بقاء"</h5>
            <a href="{{ route('frontend.rooms') }}" class="btn btn-sm btn-light mt-2">عرض التفاصيل</a>
          </div>
        </div>
      </div>

      <!-- مشروع 4 -->
      <div class="col-md-3 project-item" data-category="ads">
        <div class="project-card shadow-lg">
          <div class="project-img" style="background-image:url('{{ asset('img/kaufmann-3821436_1280.jpg') }}');"></div>
          <div class="project-overlay">
            <h5 class="fw-bold">حملة إعلانية Second Brain</h5>
            <a href="{{ route('frontend.rooms') }}" class="btn btn-sm btn-light mt-2">عرض التفاصيل</a>
          </div>
        </div>
      </div>
    </div>

    <!-- زر عرض الكل -->
    <div class="mt-5">
      <a href="{{ route('frontend.rooms') }}" class="btn btn-outline-light px-4 py-2">عرض جميع المشاريع</a>
    </div>
  </div>
</section>

<!-- ==== التنسيقات ==== -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');

  .filter-btn {
    border: none;
    background: rgba(255,255,255,0.15);
    color: #fff;
    padding: 10px 20px;
    border-radius: 30px;
    transition: all 0.3s ease;
    font-family: 'Cairo', sans-serif;
  }
  .filter-btn:hover,
  .filter-btn.active {
    background: #fff;
    color: #000;
  }

  .project-card {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    height: 260px;
    transition: transform 0.4s ease;
  }
  .project-card:hover {
    transform: translateY(-10px);
  }

  .project-img {
    background-size: cover;
    background-position: center;
    height: 100%;
    width: 100%;
  }

  .project-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.6);
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: all 0.4s ease;
    text-align: center;
  }
  .project-card:hover .project-overlay {
    opacity: 1;
  }

  #project-grid .col-md-3 {
    transition: all 0.4s ease;
  }
</style>

<!-- ==== سكربت الفلترة ==== -->
<script>
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const filter = btn.getAttribute('data-filter');
      document.querySelectorAll('.project-item').forEach(item => {
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
{{--
<section class="hero-video-section d-flex justify-content-center align-items-center text-center">
    <!-- خلفية الفيديو -->
    <video autoplay loop muted playsinline class="hero-bg-video">
        <source src="{{ asset('img/WhatsApp Video 2025-10-20 at 11.25.48 AM.mp4') }}" type="video/mp4">
        متصفحك لا يدعم تشغيل الفيديو.
    </video>

    <!-- التعتيم فوق الفيديو -->
    <div class="hero-overlay"></div>

    <!-- المحتوى -->
    <div class="hero-content container">
        <h3 class="animate__animated animate__fadeInDown mb-3 fw-semibold"
            style="font-size:1.5rem; letter-spacing:3px;">
            <span style="background: linear-gradient(90deg, #4CAF50, #00BCD4, #FF9800);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;">
                تـخـيّــل
            </span>
        </h3>

        <h1 class="animate__animated animate__fadeInUp display-4 fw-bold mb-4"
            style="background: linear-gradient(90deg, #4CAF50, #00BCD4, #FF9800);
                   -webkit-background-clip: text;
                   -webkit-text-fill-color: transparent;">
            من مجرّد أفكـــار إلى واقـــع ملمـــــــوس
        </h1>

        <p class="animate__animated animate__fadeInUp text-light fs-5 mb-5" style="max-width: 700px; margin:auto;">
            نحـوّل رؤيتك الإبداعية إلى تجربة واقعية تجمع بين الإتقان، الجمال، والابتكار.
        </p>

        <div class="animate__animated animate__zoomIn">
            <a href="#services" class="btn btn-lg px-5 py-3 fw-bold hero-btn">
                اكتشف خدماتنا
            </a>
        </div>
    </div>
</section>

<style>
.hero-video-section {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    color: #fff;
}

/* 🎥 فيديو الخلفية */
.hero-bg-video {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
}

/* 🌑 التعتيم فوق الفيديو */
.hero-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.55);
    z-index: 2;
}

/* ✨ المحتوى */
.hero-content {
    position: relative;
    z-index: 3;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    animation-duration: 1.5s;
}

/* 🌈 زر أنيق */
.hero-btn {
    background: linear-gradient(90deg, #4CAF50, #00BCD4, #FF9800);
    border: none;
    color: #fff;
    border-radius: 50px;
    transition: 0.3s ease-in-out;
}
.hero-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
}

/* 📱 استجابة */
@media (max-width:768px){
    .hero-video-section { height: 80vh; }
    .hero-content h1 { font-size: 2rem; }
    .hero-content p { font-size: 1rem; }
}
</style> --}}



{{-- <section id="groups" class="py-5" style="direction: rtl; background: linear-gradient(135deg, #007BFF, #28a745, #ff9800); position: relative; overflow:hidden;">
  <!-- خلفية فيديو خافتة -->
  <video autoplay muted loop playsinline class="position-absolute w-100 h-100" style="object-fit: cover; z-index:0; opacity:0.15;">
    <source src="{{ asset('img/2.mp4') }}" type="video/mp4">
  </video>

  <div style="background: rgba(0,0,0,0.5); position:absolute; inset:0;"></div>

  <div class="container position-relative z-3 text-white text-center">
    <h2 class="fw-bold mb-4" style="font-family:'Cairo',sans-serif;">مجموعاتــــنا</h2>
    <p class="lead mb-5" style="color: beige;max-width:750px; margin:auto; font-family:'Cairo',sans-serif; line-height:1.9;">
      انضم إلى مجموعاتنا لتبادل الخبرات، تطوير المهارات، والتواصل مع محترفين في مجالات متنوعة.
      <br>المجموعات الخاصة تتطلب متطلبات معينة قبل القبول.
    </p>

    <!-- ===== المجموعات العامة ===== -->
    <h4 class="fw-bold text-light mb-4" style="font-size:1.5rem;">مجموعاتنا العامة</h4>

    <div class="row g-4 justify-content-center">
      <div class="col-md-4">
        <div class="group-card p-4 shadow-lg">
          <i class="fa-solid fa-store icon text-warning"></i>
          <h5 class="fw-bold mt-3">تجارة التجزئة وإدارتها 1</h5>
          <a href="https://wa.me/966583116161" target="_blank" class="btn btn-light mt-3">انضم الآن</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="group-card p-4 shadow-lg">
          <i class="fa-solid fa-store icon text-success"></i>
          <h5 class="fw-bold mt-3">تجارة التجزئة وإدارتها 2</h5>
          <a href="https://wa.me/966583116161" target="_blank" class="btn btn-light mt-3">انضم الآن</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="group-card p-4 shadow-lg">
          <i class="fa-solid fa-cart-shopping icon text-info"></i>
          <h5 class="fw-bold mt-3">التجارة الإلكترونية وإدارتها</h5>
          <a href="https://wa.me/966583116161" target="_blank" class="btn btn-light mt-3">انضم الآن</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="group-card p-4 shadow-lg">
          <i class="fa-solid fa-boxes-packing icon text-warning"></i>
          <h5 class="fw-bold mt-3">تجارة الجملة وإدارتها</h5>
          <a href="https://wa.me/966583116161" target="_blank" class="btn btn-light mt-3">انضم الآن</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="group-card p-4 shadow-lg">
          <i class="fa-solid fa-mug-hot icon text-success"></i>
          <h5 class="fw-bold mt-3">المطاعم والمقاهي وإدارتها</h5>
          <a href="https://wa.me/966583116161" target="_blank" class="btn btn-light mt-3">انضم الآن</a>
        </div>
      </div>
    </div>

    <!-- ===== المجموعات الخاصة ===== -->
    <h4 class="fw-bold text-light mt-5 mb-4" style="font-size:1.5rem;">مجموعاتنا الخاصة</h4>

    <div class="row g-4 justify-content-center">
      <div class="col-md-4">
        <div class="group-card p-4 shadow-lg">
          <i class="fa-solid fa-coins icon text-warning"></i>
          <h5 class="fw-bold mt-3">مجموعة الفنتك Fintech</h5>
          <a href="https://wa.me/966583116161" target="_blank" class="btn btn-outline-light mt-3">طلب انضمام</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="group-card p-4 shadow-lg">
          <i class="fa-solid fa-users icon text-success"></i>
          <h5 class="fw-bold mt-3">مجموعة تجربة العميل CX</h5>
          <a href="https://wa.me/966583116161" target="_blank" class="btn btn-outline-light mt-3">طلب انضمام</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="group-card p-4 shadow-lg">
          <i class="fa-solid fa-tag icon text-info"></i>
          <h5 class="fw-bold mt-3">مجموعة البضائع المخفضة</h5>
          <a href="https://wa.me/966583116161" target="_blank" class="btn btn-outline-light mt-3">طلب انضمام</a>
        </div>
      </div>
    </div>

    <div class="mt-5">
      <p class="text-light" style="font-family:'Cairo',sans-serif; font-size:1rem;">
        <strong>* المجموعات الخاصة لها متطلبات ترسل على الرقم:</strong><br>
        <a href="https://wa.me/966583116161" class="text-warning fw-bold" target="_blank">https://wa.me/966583116161</a>
      </p>
    </div>
  </div>
</section>

<!-- ====== CSS ====== -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');

  .group-card {
    background: rgba(255,255,255,0.1);
    border-radius: 20px;
    transition: all 0.4s ease;
    height: 100%;
  }
  .group-card:hover {
    background: rgba(255,255,255,0.2);
    transform: translateY(-10px);
  }
  .icon {
    font-size: 3rem;
    transition: transform 0.4s ease;
  }
  .group-card:hover .icon {
    transform: scale(1.2) rotate(5deg);
  }
  .btn-light, .btn-outline-light {
    border-radius: 30px;
    font-family: 'Cairo', sans-serif;
    font-weight: 600;
  }
</style>

<!-- مكتبة الأيقونات -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js" crossorigin="anonymous"></script> --}}


{{-- <section id="vision" class="py-5" style="direction: rtl; background: linear-gradient(135deg, #007BFF, #28a745, #ff9800); position: relative; overflow:hidden;">
  <!-- خلفية فيديو ناعمة -->
  <video autoplay muted loop playsinline class="position-absolute w-100 h-100" style="object-fit: cover; z-index:0; opacity:0.15;">
    <source src="{{ asset('img/WhatsApp Video 2025-10-20 at 11.25.51 AM.mp4') }}" type="video/mp4">
  </video>

  <!-- طبقة شفافة -->
  <div style="background: rgba(0,0,0,0.6); position:absolute; inset:0; "></div>

  <div class="container position-relative z-3 text-white">
    <div class="row align-items-center g-5">
      <!-- النص -->
      <div class="col-lg-6 text-center text-lg-start">
        <h2 class="fw-bold mb-3" style="font-family:'Cairo',sans-serif; font-size:2.3rem;">
          في عالم التسويق
        </h2>
        <h3 class="fw-bold mb-4 text-warning" style="font-family:'Cairo',sans-serif;">
          القصة تُروى والفرص تُصنع
        </h3>
        <p class="lead" style="font-family:'Cairo',sans-serif; line-height:1.9; font-size:1.2rem;color: rgb(6, 20, 9);">
          ورؤيتنا الواضحة <span class="text-light fw-bold">تصنع محتوى</span>
          يُبنى عليه <span class="text-success fw-bold">المجـــــــد</span>.
        </p>

        <a href="#services" class="btn btn-light btn-lg rounded-pill mt-4 px-4 py-2 fw-bold">اكتشف خدماتنا</a>
      </div>

      <!-- الصورة الجانبية -->
      <div class="col-lg-6 text-center">
        <div class="image-wrapper position-relative">
          <img src="{{ asset('img/2.jpg') }}" alt="Vision" class="img-fluid rounded-4 shadow-lg floating-img">
          <!-- تأثير دوائر -->
          <div class="circle circle1"></div>
          <div class="circle circle2"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== CSS ===== -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');

  .floating-img {
    animation: float 4s ease-in-out infinite;
    max-width: 100%;
  }
  @keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-12px); }
  }

  .circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,0.15);
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
    0%, 100% { transform: scale(1); opacity: 0.5; }
    50% { transform: scale(1.2); opacity: 0.2; }
  }
</style> --}}
<section id="vision" class="py-5" style="direction: rtl; background:#fff; position: relative; overflow:hidden;">
  <!-- خلفية فيديو ناعمة -->
  <video autoplay muted loop playsinline class="position-absolute w-100 h-100" style="object-fit: cover; z-index:0; opacity:0.06;">
    <source src="{{ asset('img/WhatsApp Video 2025-10-20 at 11.25.51 AM.mp4') }}" type="video/mp4">
  </video>

  <!-- طبقة شفافة بيضاء -->
  <div style="background: rgba(255,255,255,0.9); position:absolute; inset:0;"></div>

  <div class="container position-relative z-3 text-dark">
    <div class="row align-items-center g-5">

      <!-- النص -->
      <div class="col-lg-6 text-center text-lg-start">
        <h2 class="fw-bold mb-3" style="font-family:'Cairo',sans-serif; font-size:2.3rem; color:#111;">
          في عالم التسويق
        </h2>

        <h3 class="fw-bold mb-4" style="font-family:'Cairo',sans-serif; color:#ff9800;">
          القصة تُروى والفرص تُصنع
        </h3>

        <p class="lead" style="font-family:'Cairo',sans-serif; line-height:1.9; font-size:1.15rem; color:#333;">
          رؤيتنا الواضحة <span style="color:#007BFF; font-weight:bold;">تصنع محتوى</span>
          يُبنى عليه <span style="color:#28a745; font-weight:bold;">المجـــــــد</span>.
        </p>

        <a href="{{ route('frontend.our-services') }}" class="btn gradient-btn btn-lg rounded-pill mt-4 px-4 py-2 fw-bold shadow-sm">
          اكتشف خدماتنا
        </a>
      </div>

      <!-- الصورة الجانبية -->
      <div class="col-lg-6 text-center">
        <div class="image-wrapper position-relative d-inline-block">
          <img src="{{ asset('img/2.jpg') }}" alt="Vision" class="img-fluid rounded-4 shadow-lg floating-img">

          <!-- تأثير الدوائر -->
          <div class="circle circle1"></div>
          <div class="circle circle2"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== CSS ===== -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');

  #vision {
    font-family: 'Cairo', sans-serif;
  }

  /* الصورة العائمة */
  .floating-img {
    animation: float 4s ease-in-out infinite;
    transition: transform 0.3s ease;
  }
  .floating-img:hover {
    transform: scale(1.05);
  }

  @keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-12px); }
  }

  /* الدوائر المتحركة */
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

  /* الزر المتدرج */
  .gradient-btn {
    background:  #007BFF;
    color: #fff;
    border: none;
    transition: all 0.3s ease;
  }
  .gradient-btn:hover {
    opacity: 0.9;
    transform: translateY(-3px);
  }

  @media (max-width: 767px) {
    .circle1, .circle2 { opacity: 0.3; }
    .floating-img { max-width: 90%; }
  }
</style>





{{-- <section id="communities" class="py-5" style="direction: rtl; background: linear-gradient(135deg, #007BFF, #28a745, #ff9800); position: relative; overflow:hidden;">
  <!-- خلفية فيديو خافتة -->
  <video autoplay muted loop playsinline class="position-absolute w-100 h-100" style="object-fit: cover; z-index:0; opacity:0.1;">
    <source src="{{ asset('img/3.mp4') }}" type="video/mp4">
  </video>

  <!-- طبقة شفافة -->
  <div style="background: rgba(0,0,0,0.6); position:absolute; inset:0;"></div>

  <div class="container position-relative z-3 text-white">
    <div class="row align-items-center g-5">

      <!-- النص -->
      <div class="col-lg-6 text-center text-lg-start">
        <h2 class="fw-bold mb-3" style="font-family:'Cairo',sans-serif; font-size:2.3rem;">
          مجتمعات ومجموعات <span class="text-warning">تخــيّل</span>
        </h2>

        <p class="lead mb-4" style="font-family:'Cairo',sans-serif; line-height:1.9; font-size:1.2rem; color: rgb(5, 27, 15);">
          في <span class="text-info fw-bold">عالم متصل</span>، نحن لا نقدم خدمات تسويقية فقط
          بل ننشئ <span class="text-warning fw-bold">مجتمعات</span> تفتح الأفق وتخلق <span class="text-success fw-bold">فرصًا جديدة</span>.
          من خلال مجموعاتنا العامة والخاصة، نُمكّن عملاءنا من <span class="text-light fw-bold">التفاعل</span>،
          <span class="text-warning fw-bold">التطور</span>، وبناء علاقات تُسهم في فتح <span class="text-info fw-bold">أبواب النجاح</span>.
        </p>

        <a href="#join" class="btn btn-light btn-lg rounded-pill px-4 py-2 fw-bold">انضم إلى مجتمعنا</a>
      </div>

      <!-- الصورة الجانبية -->
      <div class="col-lg-6 text-center">
        <div class="image-wrapper position-relative">
          <img src="{{ asset('img/4.jpg') }}" alt="مجتمعات تخيل" class="img-fluid rounded-4 shadow-lg floating-img">
          <!-- تأثيرات دائرية -->
          <div class="circle circle1"></div>
          <div class="circle circle2"></div>
          <!-- رموز اتصال متحركة -->
          <i class="bi bi-people-fill connect-icon icon1"></i>
          <i class="bi bi-chat-dots-fill connect-icon icon2"></i>
          <i class="bi bi-globe connect-icon icon3"></i>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== CSS ===== -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');
  @import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');

  #communities {
    font-family: 'Cairo', sans-serif;
  }

  .floating-img {
    animation: float 4s ease-in-out infinite;
    max-width: 100%;
  }
  @keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
  }

  .circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,0.1);
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
    0%, 100% { transform: scale(1); opacity: 0.5; }
    50% { transform: scale(1.3); opacity: 0.2; }
  }

  .connect-icon {
    position: absolute;
    color: rgba(255,255,255,0.8);
    font-size: 2rem;
    animation: blink 5s infinite alternate;
  }
  .icon1 { top: 10%; left: 15%; animation-delay: 1s; }
  .icon2 { bottom: 20%; right: 15%; animation-delay: 2s; }
  .icon3 { top: 40%; right: 5%; animation-delay: 3s; }

  @keyframes blink {
    0%, 100% { opacity: 0.4; transform: scale(1); }
    50% { opacity: 1; transform: scale(1.2); }
  }

  .btn-light {
    border-radius: 30px;
    font-weight: 700;
    transition: all 0.3s ease;
  }
  .btn-light:hover {
    background: #ffc107;
    color: #000;
  }
</style> --}}





{{--
<section id="meetings" class="py-5" style="direction: rtl; background: linear-gradient(135deg, #ff9800, #007bff, #28a745); position: relative; overflow:hidden;">
  <!-- خلفية فيديو خافتة -->
  <video autoplay muted loop playsinline class="position-absolute w-100 h-100" style="object-fit: cover; z-index:0; opacity:0.1;">
    <source src="{{ asset('img/3.mp4') }}" type="video/mp4">
  </video>

  <!-- طبقة شفافة -->
  <div style="background: rgba(0,0,0,0.65); position:absolute; inset:0;"></div>

  <div class="container position-relative z-3 text-white">
    <div class="row align-items-center g-5">

      <!-- النص -->
      <div class="col-lg-6 text-center text-lg-start">
        <h2 class="fw-bold mb-3" style="font-family:'Cairo',sans-serif; font-size:2.3rem;">
          لقاءات <span class="text-warning">تخــيّل</span>
        </h2>

        <p class="lead mb-4" style="font-family:'Cairo',sans-serif; line-height:1.9; font-size:1.2rem; color: rgb(5, 27, 15);">
          <span class="text-info fw-bold">تخيل</span> ترحب بك في عالم من الإلهام والتجربة.
          من خلال <span class="text-warning fw-bold">لقاءات حضورية وعن بُعد</span> نخلق بيئة <span class="text-success fw-bold">ديناميكية</span>
          تتيح للأعضاء فرصًا للتواصل، تبادل الخبرات، وبناء علاقات مهنية قوية.
          نغوص سويًا لاكتشاف <span class="text-light fw-bold">أحدث التقنيات</span>
          ونفتح الأبواب أمام <span class="text-warning fw-bold">التطور والنمو المستدام</span> في كل مجال.
        </p>

        <a href="#register" class="btn btn-light btn-lg rounded-pill px-4 py-2 fw-bold">شارك في اللقاء القادم</a>
      </div>

      <!-- الصورة الجانبية -->
      <div class="col-lg-6 text-center">
        <div class="image-wrapper position-relative">
          <img src="{{ asset('img/6.jpg') }}" alt="لقاءات تخيل" class="img-fluid rounded-4 shadow-lg floating-img">
          <!-- تأثيرات -->
          <div class="circle circle1"></div>
          <div class="circle circle2"></div>
          <i class="bi bi-camera-video-fill icon1 connect-icon"></i>
          <i class="bi bi-mic-fill icon2 connect-icon"></i>
          <i class="bi bi-people-fill icon3 connect-icon"></i>
        </div>
      </div>

    </div>

    <!-- بطاقات أنواع اللقاءات -->
    <div class="row mt-5 g-4 text-center">
      <div class="col-md-4">
        <div class="card bg-white bg-opacity-10 border-0 text-white rounded-4 p-4 h-100 shadow-lg hover-glow">
          <i class="bi bi-broadcast-pin display-5 text-warning mb-3"></i>
          <h5 class="fw-bold mb-2">لقاءات مباشرة</h5>
          <p class="small mb-0">تجمعنا وجهاً لوجه في أجواء مليئة بالحماس والإبداع وتبادل الأفكار الملهمة.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card bg-white bg-opacity-10 border-0 text-white rounded-4 p-4 h-100 shadow-lg hover-glow">
          <i class="bi bi-laptop display-5 text-info mb-3"></i>
          <h5 class="fw-bold mb-2">لقاءات افتراضية</h5>
          <p class="small mb-0">نربط العقول من كل مكان لنتشارك الخبرات عبر تقنيات الاتصال الحديثة.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card bg-white bg-opacity-10 border-0 text-white rounded-4 p-4 h-100 shadow-lg hover-glow">
          <i class="bi bi-lightbulb-fill display-5 text-success mb-3"></i>
          <h5 class="fw-bold mb-2">ورش وتجارب إبداعية</h5>
          <p class="small mb-0">ورش عمل تفاعلية تفتح آفاقًا جديدة للإبداع والتطوير الشخصي والمهني.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== CSS ===== -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');
  @import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');

  #meetings {
    font-family: 'Cairo', sans-serif;
  }

  .floating-img {
    animation: float 4s ease-in-out infinite;
  }
  @keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
  }

  .circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,0.1);
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
    0%, 100% { transform: scale(1); opacity: 0.5; }
    50% { transform: scale(1.3); opacity: 0.2; }
  }

  .connect-icon {
    position: absolute;
    color: rgba(255,255,255,0.8);
    font-size: 2rem;
    animation: blink 5s infinite alternate;
  }
  .icon1 { top: 10%; left: 15%; animation-delay: 1s; }
  .icon2 { bottom: 20%; right: 15%; animation-delay: 2s; }
  .icon3 { top: 40%; right: 5%; animation-delay: 3s; }

  @keyframes blink {
    0%, 100% { opacity: 0.4; transform: scale(1); }
    50% { opacity: 1; transform: scale(1.2); }
  }

  .hover-glow {
    transition: all 0.3s ease;
  }
  .hover-glow:hover {
    transform: translateY(-5px);
    box-shadow: 0 0 20px rgba(255,255,255,0.4);
  }

  .btn-light {
    border-radius: 30px;
    font-weight: 700;
    transition: all 0.3s ease;
  }
  .btn-light:hover {
    background: #ffc107;
    color: #000;
  }
</style> --}}


{{-- <section id="sessions" class="py-5" style="direction: rtl; background: linear-gradient(135deg, #007BFF, #28a745, #ff9800); position: relative; overflow:hidden;">
  <!-- خلفية فيديو خافتة -->
  <video autoplay muted loop playsinline class="position-absolute w-100 h-100" style="object-fit: cover; z-index:0; opacity:0.1;">
    <source src="{{ asset('img/3.mp4') }}" type="video/mp4">
  </video>

  <!-- طبقة شفافة -->
  <div style="background: rgba(0,0,0,0.7); position:absolute; inset:0;"></div>

  <div class="container position-relative z-3 text-white text-center">
    <h2 class="fw-bold mb-4" style="font-family:'Cairo',sans-serif; font-size:2.5rem;">
      سلسلة <span class="text-warning">لقاءات تخيّل</span>
    </h2>
    <p class="lead mb-5" style="max-width: 800px; margin:auto; font-family:'Cairo',sans-serif; color: rgb(5, 27, 15);">
      لقاءات ملهمة تجمع نخبة من رواد الأعمال والمستشارين لتبادل الخبرات والرؤى حول التجارة، العلامات التجارية، والإبداع في بيئة الأعمال السعودية.
    </p>

    <!-- كروت اللقاءات -->
    <div class="timeline position-relative">
      <!-- اللقاء الأول -->
      <div class="session-card fade-up">
        <div class="speaker-img">
          <img src="{{ asset('img/img1.jpeg') }}" alt="د. أحمد الذهيبي">
        </div>
        <h5 class="text-warning fw-bold mt-3">اللقاء الأول</h5>
        <h4 class="fw-bold mb-2">الفرق بين التجارة التقليدية والتجارة الرقمية</h4>
        <p class="text-light small mb-2">د. أحمد الذهيبي</p>
        <p class="small mb-0"  style=" color: rgb(5, 27, 15);">صاحب تطبيق <span class="text-info fw-bold">مقضاك</span>، دكتوراه في إدارة المعرفة، مستشار وخبير في التحول الرقمي ومدرب دولي معتمد في القيادة والتخطيط الإداري.</p>
      </div>

      <!-- اللقاء الثاني -->
      <div class="session-card fade-up" style="animation-delay:0.3s;">
        <div class="speaker-img">
          <img src="{{ asset('img/img2.jpeg') }}" alt="م. عبد العزيز السلامة">
        </div>
        <h5 class="text-warning fw-bold mt-3">اللقاء الثاني</h5>
        <h4 class="fw-bold mb-2">كيف تواجه المطاعم والمقاهي انخفاض المبيعات</h4>
        <p class="text-light small mb-2">م. عبد العزيز السلامة</p>
        <p class="small mb-0" style=" color: rgb(5, 27, 15);">مدرب ومستشار ومستثمر في قطاع المطاعم والمقاهي، بخبرة في تطوير نماذج العمل واستراتيجيات زيادة الإيرادات.</p>
      </div>

      <!-- اللقاء الثالث -->
      <div class="session-card fade-up" style="animation-delay:0.6s;">
        <div class="speaker-img">
          <img src="{{ asset('img/img3.jpg') }}" alt="أ. أحمد بن عامر بدوي">
        </div>
        <h5 class="text-warning fw-bold mt-3">اللقاء الثالث</h5>
        <h4 class="fw-bold mb-2">رحلة التاجر من البدايات</h4>
        <p class="text-light small mb-2">أ. أحمد بن عامر بدوي</p>
        <p class="small mb-0" style=" color: rgb(5, 27, 15);">رائد أعمال، حاصل على جائزة الشخصية الإعلامية المؤثرة، ناشط بيئي، وأمين حاضنة الوجيه لريادة الأعمال.</p>
      </div>

      <!-- اللقاء الرابع -->
      <div class="session-card fade-up" style="animation-delay:0.9s;">
        <div class="speaker-img">
          <img src="{{ asset('img/img4.jpg') }}" alt="د. خالد بن سليمان الراجحي">
        </div>
        <h5 class="text-warning fw-bold mt-3">اللقاء الرابع</h5>
        <h4 class="fw-bold mb-2">استراتيجية العلامة التجارية وأسرارها</h4>
        <p class="text-light small mb-2">د. خالد بن سليمان الراجحي</p>
        <p class="small mb-0" style=" color: rgb(5, 27, 15);">نائب رئيس مجلس إدارة مجموعة الراجحي القابضة ومحاضر بجامعة اليمامة، بخبرة في بناء العلامات التجارية واستراتيجيات التسويق.</p>
      </div>
    </div>

    <div class="mt-5">
      <a href="#register" class="btn btn-light btn-lg rounded-pill px-5 py-2 fw-bold shadow">سجّل في اللقاء القادم</a>
    </div>
  </div>
</section>

<!-- ===== CSS ===== -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');

  #sessions {
    font-family: 'Cairo', sans-serif;
  }

  .timeline {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2rem;
  }

  .session-card {
    background: rgba(255,255,255,0.08);
    border-radius: 20px;
    padding: 2rem;
    max-width: 340px;
    text-align: center;
    box-shadow: 0 0 15px rgba(255,255,255,0.1);
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
    backdrop-filter: blur(8px);
  }

  .session-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 0 25px rgba(255,255,255,0.3);
  }

  /* صور المتحدث */
  .speaker-img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto;
    border: 3px solid rgba(255,255,255,0.5);
    box-shadow: 0 0 15px rgba(255,255,255,0.3);
    transition: all 0.4s ease;
  }

  .speaker-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
  }

  .session-card:hover .speaker-img img {
    transform: scale(1.1);
  }

  /* animation */
  .fade-up {
    opacity: 0;
    transform: translateY(40px);
    animation: fadeUp 1s forwards;
  }

  @keyframes fadeUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .btn-light {
    border-radius: 30px;
    font-weight: 700;
    transition: all 0.3s ease;
  }

  .btn-light:hover {
    background: #ffc107;
    color: #000;
  }
</style> --}}

<section id="sessions" class="py-5" style="direction: rtl; background: linear-gradient(135deg, #007BFF, #28a745, #ff9800); position: relative; overflow:hidden;">
  <!-- خلفية فيديو خافتة -->
  <video autoplay muted loop playsinline class="position-absolute w-100 h-100" style="object-fit: cover; z-index:0; opacity:0.1;">
    <source src="{{ asset('img/3.mp4') }}" type="video/mp4">
  </video>

  <!-- طبقة شفافة -->
  <div style="background: rgba(0,0,0,0.7); position:absolute; inset:0;"></div>

  <div class="container position-relative z-3 text-white text-center">
    <h2 class="fw-bold mb-4" style="font-family:'Cairo',sans-serif; font-size:2.5rem;">
      سلسلة <span class="text-warning">لقاءات تخيّل</span>
    </h2>
    <p class="lead mb-5" style="max-width: 800px; margin:auto; font-family:'Cairo',sans-serif; color: rgb(5, 27, 15);">
      لقاءات ملهمة تجمع نخبة من رواد الأعمال والمستشارين لتبادل الخبرات والرؤى حول التجارة، العلامات التجارية، والإبداع في بيئة الأعمال السعودية.
    </p>

    <!-- كروت اللقاءات -->
    <div class="timeline position-relative">
      <!-- اللقاء الأول -->
      <div class="session-card fade-up">
        <div class="speaker-img">
          <img src="{{ asset('img/img1.jpeg') }}" alt="د. أحمد الذهيبي">
        </div>
        <h5 class="text-warning fw-bold mt-3">اللقاء الأول</h5>
        <h4 class="fw-bold mb-2">الفرق بين التجارة التقليدية والتجارة الرقمية</h4>
        <p class="text-light small mb-2">د. أحمد الذهيبي</p>
        <p class="small mb-0"  style=" color: rgb(5, 27, 15);">صاحب تطبيق <span class="text-info fw-bold">مقضاك</span>، دكتوراه في إدارة المعرفة، مستشار وخبير في التحول الرقمي ومدرب دولي معتمد في القيادة والتخطيط الإداري.</p>
      </div>

      <!-- اللقاء الثاني -->
      <div class="session-card fade-up" style="animation-delay:0.3s;">
        <div class="speaker-img">
          <img src="{{ asset('img/img2.jpeg') }}" alt="م. عبد العزيز السلامة">
        </div>
        <h5 class="text-warning fw-bold mt-3">اللقاء الثاني</h5>
        <h4 class="fw-bold mb-2">كيف تواجه المطاعم والمقاهي انخفاض المبيعات</h4>
        <p class="text-light small mb-2">م. عبد العزيز السلامة</p>
        <p class="small mb-0" style=" color: rgb(5, 27, 15);">مدرب ومستشار ومستثمر في قطاع المطاعم والمقاهي، بخبرة في تطوير نماذج العمل واستراتيجيات زيادة الإيرادات.</p>
      </div>

      <!-- اللقاء الثالث -->
      <div class="session-card fade-up" style="animation-delay:0.6s;">
        <div class="speaker-img">
          <img src="{{ asset('img/img3.jpg') }}" alt="أ. أحمد بن عامر بدوي">
        </div>
        <h5 class="text-warning fw-bold mt-3">اللقاء الثالث</h5>
        <h4 class="fw-bold mb-2">رحلة التاجر من البدايات</h4>
        <p class="text-light small mb-2">أ. أحمد بن عامر بدوي</p>
        <p class="small mb-0" style=" color: rgb(5, 27, 15);">رائد أعمال، حاصل على جائزة الشخصية الإعلامية المؤثرة، ناشط بيئي، وأمين حاضنة الوجيه لريادة الأعمال.</p>
      </div>

      <!-- اللقاء الرابع -->
      <div class="session-card fade-up" style="animation-delay:0.9s;">
        <div class="speaker-img">
          <img src="{{ asset('img/img4.jpg') }}" alt="د. خالد بن سليمان الراجحي">
        </div>
        <h5 class="text-warning fw-bold mt-3">اللقاء الرابع</h5>
        <h4 class="fw-bold mb-2">استراتيجية العلامة التجارية وأسرارها</h4>
        <p class="text-light small mb-2">د. خالد بن سليمان الراجحي</p>
        <p class="small mb-0" style=" color: rgb(5, 27, 15);">نائب رئيس مجلس إدارة مجموعة الراجحي القابضة ومحاضر بجامعة اليمامة، بخبرة في بناء العلامات التجارية واستراتيجيات التسويق.</p>
      </div>
    </div>

    <div class="mt-5">
      <a href="#register" class="btn btn-light btn-lg rounded-pill px-5 py-2 fw-bold shadow">سجّل في اللقاء القادم</a>
    </div>
  </div>
</section>

<!-- ===== CSS ===== -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');

  #sessions {
    font-family: 'Cairo', sans-serif;
  }

  .timeline {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2rem;
  }

  .session-card {
    background: rgba(255,255,255,0.08);
    border-radius: 20px;
    padding: 2rem;
    max-width: 340px;
    text-align: center;
    box-shadow: 0 0 15px rgba(255,255,255,0.1);
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
    backdrop-filter: blur(8px);
  }

  .session-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 0 25px rgba(255,255,255,0.3);
  }

  /* صور المتحدث */
  .speaker-img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto;
    border: 3px solid rgba(255,255,255,0.5);
    box-shadow: 0 0 15px rgba(255,255,255,0.3);
    transition: all 0.4s ease;
  }

  .speaker-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
  }

  .session-card:hover .speaker-img img {
    transform: scale(1.1);
  }

  /* animation */
  .fade-up {
    opacity: 0;
    transform: translateY(40px);
    animation: fadeUp 1s forwards;
  }

  @keyframes fadeUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .btn-light {
    border-radius: 30px;
    font-weight: 700;
    transition: all 0.3s ease;
  }

  .btn-light:hover {
    background: #ffc107;
    color: #000;
  }
</style>


<section id="communities" class="py-5" style="direction: rtl; background:#fff; position: relative; overflow:hidden;">
  <!-- خلفية فيديو خافتة شفافة -->
  <video autoplay muted loop playsinline class="position-absolute w-100 h-100" style="object-fit: cover; z-index:0; opacity:0.06;">
    <source src="{{ asset('img/3.mp4') }}" type="video/mp4">
  </video>

  <!-- طبقة شفافة بيضاء -->
  <div style="background: rgba(255,255,255,0.9); position:absolute; inset:0;"></div>

  <div class="container position-relative z-3 text-dark">
    <div class="row align-items-center g-5">

      <!-- النص -->
      <div class="col-lg-6 text-center text-lg-start">
        <h2 class="fw-bold mb-3" style="font-family:'Cairo',sans-serif; font-size:2.3rem;">
          مجتمعات ومجموعات <span style="color:#ff9800;">تخــيّل</span>
        </h2>

        <p class="lead mb-4" style="font-family:'Cairo',sans-serif; line-height:1.9; font-size:1.15rem; color:#333;">
          في <span style="color:#007BFF; font-weight:bold;">عالم متصل</span>، نحن لا نقدم خدمات تسويقية فقط،
          بل ننشئ <span style="color:#ff9800; font-weight:bold;">مجتمعات</span> تفتح الأفق وتخلق
          <span style="color:#28a745; font-weight:bold;">فرصًا جديدة</span>.
          من خلال مجموعاتنا العامة والخاصة، نُمكّن عملاءنا من
          <span style="color:#000; font-weight:bold;">التفاعل</span>،
          <span style="color:#ff9800; font-weight:bold;">التطور</span>،
          وبناء علاقات تُسهم في فتح <span style="color:#007BFF; font-weight:bold;">أبواب النجاح</span>.
        </p>

        <a href="{{ route('contact') }}" class="btn gradient-btn btn-lg rounded-pill px-4 py-2 fw-bold shadow-sm">انضم إلى مجتمعنا</a>
      </div>

      <!-- الصورة الجانبية -->
      <div class="col-lg-6 text-center">
        <div class="image-wrapper position-relative d-inline-block">
          <img src="{{ asset('img/4.jpg') }}" alt="مجتمعات تخيل" class="img-fluid rounded-4 shadow-lg floating-img">

          <!-- تأثيرات دائرية خفيفة -->
          <div class="circle circle1"></div>
          <div class="circle circle2"></div>

          <!-- رموز تفاعلية -->
          <i class="bi bi-people-fill connect-icon icon1"></i>
          <i class="bi bi-chat-dots-fill connect-icon icon2"></i>
          <i class="bi bi-globe connect-icon icon3"></i>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== CSS ===== -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');
  @import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');

  #communities {
    font-family: 'Cairo', sans-serif;
  }

  /* الصورة العائمة */
  .floating-img {
    animation: float 4s ease-in-out infinite;
    max-width: 100%;
    transition: transform 0.3s ease;
  }
  .floating-img:hover {
    transform: scale(1.05);
  }
  @keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
  }

  /* دوائر خلف الصورة */
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

  /* أيقونات الاتصال */
  .connect-icon {
    position: absolute;
    color: rgba(0,0,0,0.6);
    font-size: 2rem;
    animation: blink 5s infinite alternate;
  }
  .icon1 { top: 10%; left: 15%; animation-delay: 1s; color:#007BFF; }
  .icon2 { bottom: 20%; right: 15%; animation-delay: 2s; color:#28a745; }
  .icon3 { top: 40%; right: 5%; animation-delay: 3s; color:#ff9800; }

  @keyframes blink {
    0%, 100% { opacity: 0.4; transform: scale(1); }
    50% { opacity: 1; transform: scale(1.2); }
  }

  /* الزر */
  .gradient-btn {
    background: linear-gradient(90deg, #007BFF, #28a745, #ff9800);
    color: #fff;
    border: none;
    transition: all 0.3s ease;
  }
  .gradient-btn:hover {
    opacity: 0.9;
    transform: translateY(-3px);
  }

  @media (max-width: 767px) {
    .connect-icon { font-size: 1.6rem; }
    .circle1, .circle2 { opacity: 0.3; }
  }
</style>



{{-- <section id="majlis" class="py-5" style="direction: rtl; background: linear-gradient(135deg, #007BFF, #28a745, #ff9800); position: relative; overflow:hidden;">
  <!-- خلفية فيديو -->
  <video autoplay muted loop playsinline class="position-absolute w-100 h-100" style="object-fit: cover; z-index:0; opacity:0.15;">
    <source src="{{ asset('img/3.mp4') }}" type="video/mp4">
  </video>

  <!-- طبقة شفافة -->
  <div style="background: rgba(0,0,0,0.75); position:absolute; inset:0;"></div>

  <div class="container position-relative z-3 text-white text-center">
    <!-- عنوان -->
    <h2 class="fw-bold mb-4 glow-text" style="font-family:'Cairo',sans-serif; font-size:2.5rem;">
      مـجــالــس <span class="text-warning">تـخـيّــــل</span>
    </h2>

    <!-- النص الترحيبي -->
    <div class="poem mx-auto mb-5" style="max-width: 650px; color: rgb(53 124 36);">
      <p class="fs-5 mb-1 fade-in" style="animation-delay:0.3s; color: rgb(53 124 36);">  حنّا مجالسنا بليا مفاتيح</p>
      <p class="fs-5 mb-1 fade-in" style="animation-delay:0.3s; color: rgb(53 124 36);">نستقبلك أربع وعشرين ساعه</p>
      <p class="fs-5 mb-1 fade-in" style="animation-delay:0.6s; color: rgb(53 124 36);">يا ضيفنا اقلط على هبّة الريح</p>
      <p class="fs-5 fade-in" style="animation-delay:0.9s; color: rgb(53 124 36);">مادام عندك للمجيء استطاعه</p>
    </div>

    <!-- رموز ترحيبية -->
    <div class="campfire mx-auto mb-4">
      <img src="{{ asset('img/8.jpg') }}" alt="نار الكرم" style="width:300px; opacity:0.9;">
    </div>

    <!-- معلومات التواصل -->
    <div class="contact-info mt-4">
      <p class="fs-6 mb-2" style="color: black"><i class="bi bi-envelope-fill text-warning me-2"></i> info@tkhyl.com.sa</p>
      <p class="fs-6" style="color: black"><i class="bi bi-telephone-fill text-warning me-2"></i> 0568979769</p>
    </div>

    <!-- زر التواصل -->
    <div class="mt-4">
      <a href="https://wa.me/966568979769" target="_blank" class="btn btn-warning text-dark fw-bold rounded-pill px-5 py-2 glow-btn" >
        تواصل معنا الآن
      </a>
    </div>
  </div>
</section>

<!-- ===== CSS ===== -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');
  @import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');

  #majlis {
    font-family: 'Cairo', sans-serif;
  }

  /* أنيميشن الشعر */
  .fade-in {
    opacity: 0;
    transform: translateY(10px);
    animation: fadeIn 1.5s forwards;
  }
  @keyframes fadeIn {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* نص متوهج */
  .glow-text {
    text-shadow: 0 0 10px rgba(40, 255, 7, 0.6),
                 0 0 20px rgba(255, 193, 7, 0.4);
  }

  /* زر متوهج */
  .glow-btn {
    box-shadow: 0 0 20px rgba(52, 255, 7, 0.5);
    transition: all 0.3s ease;
  }
  .glow-btn:hover {
    box-shadow: 0 0 40px rgba(255, 193, 7, 0.8);
    transform: scale(1.05);
  }

  /* حركة خفيفة للصور */
  .campfire img {
    animation: flicker 2s infinite ease-in-out alternate;
  }
  @keyframes flicker {
    0% { opacity: 0.8; transform: scale(1); }
    100% { opacity: 1; transform: scale(1.05); }
  }
</style> --}}

<section id="majlis" class="py-5" style="direction: rtl; background:#fff; position: relative; overflow:hidden;">
  <div class="container text-center">
    <!-- العنوان -->
    <h2 class="fw-bold mb-4" style="font-family:'Cairo',sans-serif; font-size:2.5rem; color:#222;">
      مـجــالــس <span style="color:#ff9800;">تـخـيّــــل</span>
    </h2>

    <!-- النص الترحيبي -->
    <div class="poem mx-auto mb-5" style="max-width: 650px; color:#28a745;">
      <p class="fs-5 mb-1 fade-in" style="animation-delay:0.3s;">حنّا مجالسنا بليا مفاتيح</p>
      <p class="fs-5 mb-1 fade-in" style="animation-delay:0.5s;">نستقبلك أربع وعشرين ساعه</p>
      <p class="fs-5 mb-1 fade-in" style="animation-delay:0.7s;">يا ضيفنا اقلط على هبّة الريح</p>
      <p class="fs-5 fade-in" style="animation-delay:0.9s;">مادام عندك للمجيء استطاعه</p>
    </div>

    <!-- صورة ترحيبية -->
    <div class="campfire mx-auto mb-4 position-relative">
      <img src="{{ asset('img/8.jpg') }}" alt="نار الكرم" class="rounded-4 shadow" style="width:300px;">
      <div class="decor-circle"></div>
    </div>

    <!-- معلومات التواصل -->
    <div class="contact-info mt-4">
      <p class="fs-6 mb-2" style="color:#333;">
        <i class="bi bi-envelope-fill text-primary me-2"></i> info@tkhyl.com.sa
      </p>
      <p class="fs-6" style="color:#333;">
        <i class="bi bi-telephone-fill text-success me-2"></i> 0568979769
      </p>
    </div>

    <!-- زر التواصل -->
    <div class="mt-4">
      <a href="https://wa.me/966568979769" target="_blank" class="btn gradient-btn text-white fw-bold rounded-pill px-5 py-2 shadow-sm">
        تواصل معنا الآن
      </a>
    </div>
  </div>
</section>
<br /><br />
<!-- ===== CSS ===== -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');
  @import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');

  #majlis {
    font-family: 'Cairo', sans-serif;
  }

  /* تأثيرات النص */
  .fade-in {
    opacity: 0;
    transform: translateY(10px);
    animation: fadeIn 1.5s forwards;
  }
  @keyframes fadeIn {
    to { opacity: 1; transform: translateY(0); }
  }

  /* الصورة مع دائرة خلفية زخرفية */
  .campfire {
    position: relative;
    display: inline-block;
  }
  .decor-circle {
    position: absolute;
    width: 340px;
    height: 340px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(255,152,0,0.15) 0%, rgba(0,123,255,0.05) 70%);
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    z-index: -1;
  }

  /* تأثير خفيف على الصورة */
  .campfire img {
    transition: transform 0.5s ease, box-shadow 0.5s ease;
  }
  .campfire img:hover {
    transform: scale(1.05);
    box-shadow: 0 0 25px rgba(255,152,0,0.4);
  }

  /* زر التدرج */
  .gradient-btn {
    background:  #007BFF;
    border: none;
    transition: all 0.3s ease;
  }
  .gradient-btn:hover {
    opacity: 0.9;
    transform: translateY(-3px);
  }

  /* استجابة للشاشات الصغيرة */
  @media (max-width: 767px) {
    h2 { font-size: 2rem; }
    .campfire img { width: 220px; }
  }
</style>






@endsection
