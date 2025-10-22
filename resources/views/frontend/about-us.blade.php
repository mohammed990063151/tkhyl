@extends('frontend.layouts.master')

<!-- ===== CSS ===== -->
{{-- <style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');

  #origin {
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

  .btn-light {
    border-radius: 30px;
    font-weight: 700;
    transition: all 0.3s ease;
  }
  .btn-light:hover {
    background: #ffca2c;
    color: #000;
  }
</style> --}}
@section('content')
<br /><br /><br /><br />
<section id="about" class="about-section py-5" style="direction: rtl; background: #f8f9fa;">
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
        <h6 class="fw-bold text-uppercase mb-3" style="color:#00BCD4; letter-spacing:2px;">من نحن</h6>
        <h2 class="fw-bold mb-4" style="background: linear-gradient(90deg, #007BFF, #28a745, #FF9800);
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
            <div class="about-box p-3 rounded-4 shadow-sm">
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

        <a href="#contact" class="btn btn-lg px-5 py-3 fw-bold about-btn">
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
  background: linear-gradient(135deg, #007BFF, #28a745, #FF9800);
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
  background: #fff;
  transition: 0.3s ease;
}
.about-box:hover {
  transform: translateY(-6px);
  background: linear-gradient(135deg, #007BFF20, #28a74520, #FF980020);
}

.about-btn {
  background: linear-gradient(90deg, #007BFF, #28a745, #FF9800);
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
{{-- <section id="origin" class="py-5" style="direction: rtl; background: linear-gradient(135deg, #007BFF, #28a745, #ff9800); position: relative; overflow:hidden;">
  <!-- خلفية فيديو خافتة -->
  <video autoplay muted loop playsinline class="position-absolute w-100 h-100" style="object-fit: cover; z-index:0; opacity:0.12;">
    <source src="{{ asset('img/3.mp4') }}" type="video/mp4">
  </video>

  <!-- طبقة شفافة -->
  <div style="background: rgba(0,0,0,0.6); position:absolute; inset:0; "></div>

  <div class="container position-relative z-3 text-white">
    <div class="row align-items-center g-5">

      <!-- النص -->
      <div class="col-lg-6 text-center text-lg-start">
        <h2 class="fw-bold mb-3" style="font-family:'Cairo',sans-serif; font-size:2.3rem;">
          نشـــأة <span class="text-warning">تخـــــيّل</span>
        </h2>

        <p class="lead mb-4" style="font-family:'Cairo',sans-serif; line-height:1.9; font-size:1.2rem; color: rgb(6, 5, 21);">
          في <span class="text-success fw-bold">بيئة تنافسية</span> جعلتنا أكثر <span class="text-info fw-bold">ابتكارًا</span>
          لطرق تسويقية <span class="text-warning fw-bold">نوعية ومختلفة</span>،
          مغلفة بهويتنا <span class="text-light fw-bold">المحلية</span>، نصنع فيها
          <span class="text-warning fw-bold">الأصالة</span> و<span class="text-success fw-bold">الإبداع</span>
          لنصنع <span class="text-info fw-bold">اللحظة</span>.
        </p>

        <a href="#vision" class="btn btn-light btn-lg rounded-pill px-4 py-2 fw-bold">اكتشف رؤيتنا</a>
      </div>

      <!-- الصورة الجانبية -->
      <div class="col-lg-6 text-center">
        <div class="image-wrapper position-relative">
          <img src="{{ asset('img/3.jpg') }}" alt="تخيل الإبداع" class="img-fluid rounded-4 shadow-lg floating-img">
          <!-- تأثيرات دائرية -->
          <div class="circle circle1"></div>
          <div class="circle circle2"></div>
        </div>
      </div>

    </div>
  </div>
</section> --}}

<section id="origin" class="py-5" style="direction: rtl; background: #fff; position: relative; overflow:hidden;">
  <!-- خلفية فيديو خافتة شفافة أعلى -->
  <video autoplay muted loop playsinline class="position-absolute w-100 h-100" style="object-fit: cover; z-index:0; opacity:0.07;">
    <source src="{{ asset('img/3.mp4') }}" type="video/mp4">
  </video>

  <!-- طبقة شفافة بيضاء -->
  <div style="background: rgba(255,255,255,0.9); position:absolute; inset:0;"></div>

  <div class="container position-relative z-3 text-dark">
    <div class="row align-items-center g-5">

      <!-- النص -->
      <div class="col-lg-6 text-center text-lg-start">
        <h2 class="fw-bold mb-4" style="font-family:'Cairo',sans-serif; font-size:2.4rem; color:#111;">
          نشـــأة <span style="color:#ff9800;">تخـــيّل</span>
        </h2>

        <p class="lead mb-4" style="font-family:'Cairo',sans-serif; line-height:1.9; font-size:1.15rem; color:#444;">
          في <span style="color:#28a745; font-weight:bold;">بيئة تنافسية</span> حفزتنا نحو <span style="color:#007BFF; font-weight:bold;">الإبداع</span>
          والتطور في أساليب التسويق <span style="color:#ff9800; font-weight:bold;">النوعية</span> التي تجمع بين
          <span style="color:#000; font-weight:bold;">الأصالة</span> و<span style="color:#28a745; font-weight:bold;">التجديد</span>.
        </p>

        <!-- القيم -->
        <div class="d-flex justify-content-center justify-content-lg-start gap-4 mb-4">
          <div class="value-box">
            <i class="fas fa-lightbulb" style="color:#ff9800; font-size:2rem;"></i>
            <h6 class="fw-bold mt-2">إبداع</h6>
          </div>
          <div class="value-box">
            <i class="fas fa-chart-line" style="color:#28a745; font-size:2rem;"></i>
            <h6 class="fw-bold mt-2">تطور</h6>
          </div>
          <div class="value-box">
            <i class="fas fa-handshake" style="color:#007BFF; font-size:2rem;"></i>
            <h6 class="fw-bold mt-2">شراكة</h6>
          </div>
        </div>

        <a href="#contact" class="btn gradient-btn btn-lg rounded-pill px-4 py-2 fw-bold shadow">تواصــل معنــا</a>
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
    .value-box i { font-size: 1.5rem; }
    .value-box h6 { font-size: 0.9rem; }
  }
</style>

<br /><br />
@endsection


