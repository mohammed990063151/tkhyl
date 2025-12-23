<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>تواصل معنا | تخيّل</title>

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
    --primary-soft:#FFE6DB;
    --dark:#0B0B0F;
    --gray:#777;
    --light:#fff;
}
*{margin:0;padding:0;box-sizing:border-box;font-family:'Cairo',sans-serif}
body{background:#fafafa;color:var(--dark);line-height:1.8}
.container{width:90%;max-width:1200px;margin:auto}
section{padding:90px 0}

/* HERO */
.contact-hero{
    background:radial-gradient(circle at top right,#fff4ee,#fff);
    text-align:center;
}
.contact-hero h1{
    font-size:3.2rem;
    margin-bottom:20px;
}
.contact-hero span{color:var(--primary)}
.contact-hero p{
    max-width:650px;
    margin:auto;
    color:var(--gray);
}

/* GRID */
.contact-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:60px;
    align-items:stretch;
}

/* INFO */
.contact-info{
    background:var(--dark);
    color:#fff;
    border-radius:35px;
    padding:60px 50px;
    position:relative;
    overflow:hidden;
}
.contact-info::after{
    content:"";
    position:absolute;
    inset:0;
    background:radial-gradient(circle at top right,rgba(255,95,31,.25),transparent 60%);
}
.info-item{
    position:relative;
    display:flex;
    gap:20px;
    margin-bottom:35px;
}
.info-item i{
    font-size:1.8rem;
    color:var(--primary);
}
.info-item h4{margin-bottom:5px}

/* FORM */
.contact-form{
    background:#fff;
    border-radius:35px;
    padding:60px 50px;
    box-shadow:0 30px 80px rgba(0,0,0,.08);
}
.form-group{margin-bottom:25px}
.form-group label{
    display:block;
    margin-bottom:8px;
    font-weight:800;
}
.form-group input,
.form-group textarea{
    width:100%;
    padding:14px 18px;
    border-radius:18px;
    border:1px solid #eee;
    font-size:1rem;
    outline:none;
    transition:.3s;
}
.form-group input:focus,
.form-group textarea:focus{
    border-color:var(--primary);
}
textarea{resize:none;height:140px}

.submit-btn{
    background:linear-gradient(135deg,var(--primary),#ff8f5b);
    color:#fff;
    padding:16px;
    width:100%;
    border:none;
    border-radius:30px;
    font-size:1.1rem;
    font-weight:900;
    cursor:pointer;
}

/* MAP */
.map{
    margin-top:80px;
    border-radius:40px;
    overflow:hidden;
    box-shadow:0 30px 80px rgba(0,0,0,.08);
}

/* RESPONSIVE */
@media(max-width:768px){
    .contact-grid{grid-template-columns:1fr}
    .contact-hero h1{font-size:2.4rem}
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
<section class="contact-hero">
<div class="container">
    <h1 data-aos="fade-up">
        تواصل مع <span>تخيّل</span>
    </h1>
    <p data-aos="fade-up" data-aos-delay="100">
        نحن هنا للاستماع إليك،
        ومساعدتك على تحويل فكرتك
        إلى مشروع رقمي ناجح.
    </p>
</div>
</section>

<!-- CONTENT -->
<section>
<div class="container contact-grid">

    <!-- INFO -->
    <div class="contact-info" data-aos="fade-left">
        <div class="info-item">
            <i class="fas fa-location-dot"></i>
            <div>
                <h4>موقعنا</h4>
                <p>المملكة العربية السعودية</p>
            </div>
        </div>

        <div class="info-item">
            <i class="fas fa-envelope"></i>
            <div>
                <h4>البريد الإلكتروني</h4>
                <p>info@tkhyl-ai.com</p>
            </div>
        </div>

        <div class="info-item">
            <i class="fas fa-phone"></i>
            <div>
                <h4>الهاتف</h4>
                <p>+966 000 000 000</p>
            </div>
        </div>

        <div class="info-item">
            <i class="fas fa-clock"></i>
            <div>
                <h4>ساعات العمل</h4>
                <p>الأحد – الخميس<br>9 صباحًا – 6 مساءً</p>
            </div>
        </div>
    </div>

    <!-- FORM -->
    <div class="contact-form" data-aos="fade-right">
        <h2 style="margin-bottom:30px">أرسل لنا رسالة</h2>

        <div class="form-group">
            <label>الاسم الكامل</label>
            <input type="text" placeholder="اكتب اسمك">
        </div>

        <div class="form-group">
            <label>البريد الإلكتروني</label>
            <input type="email" placeholder="example@email.com">
        </div>

        <div class="form-group">
            <label>موضوع الرسالة</label>
            <input type="text" placeholder="كيف يمكننا مساعدتك؟">
        </div>

        <div class="form-group">
            <label>الرسالة</label>
            <textarea placeholder="اكتب تفاصيل رسالتك هنا"></textarea>
        </div>

        <button class="submit-btn">إرسال الرسالة</button>
    </div>

</div>
</section>

<!-- MAP -->
<section>
<div class="container">
    <div class="map" data-aos="zoom-in">
        <iframe
            src="https://maps.google.com/maps?q=Riyadh&t=&z=13&ie=UTF8&iwloc=&output=embed"
            width="100%" height="420" style="border:0" loading="lazy">
        </iframe>
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
<script>AOS.init({duration:1000,once:true});</script>

</body>
</html>


{{-- @extends('frontend.layouts.master')

@section('title', 'تواصل معنا - تخيّل')

@section('content')
<br /><br /><br />
<section id="contact" class="py-5 categories-collections" style="direction: rtl; background:#fff;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="font-family:'Cairo',sans-serif; font-size:2.5rem; color:#7453fc;">
        📬 تواصــل <span style="color:#7453fc;">معنا</span>
      </h2>
      <p class="lead" style="max-width:700px; margin:auto; color:#555;">
        يسعدنا التواصل معك — سواء كان لديك استفسار، اقتراح، أو ترغب في التعاون معنا.
        فريق <span style="color:#7453fc;">تخيل</span> جاهز لخدمتك دائمًا.
      </p>
    </div>

    <div class="row align-items-center gy-5">
      <!-- نموذج التواصل -->
      <div class="col-lg-6">
        <div class="contact-form p-4 p-md-5 rounded-4 shadow-sm">
          <h4 class="fw-bold mb-4 text-center" style="color:#7453fc;">أرسل رسالتك الآن</h4>


          <form method="POST" action="{{ route('contact.send') }}">
    @csrf

    @if(session('success'))
        <p class="text-center mt-2 text-success fw-bold">
            ✅ {{ session('success') }}
        </p>
    @endif

    <div class="mb-3">
      <label class="form-label fw-semibold">الاسم الكامل</label>
      <input type="text" name="name" class="form-control rounded-pill" placeholder="اكتب اسمك" required>
    </div>

    <div class="mb-3">
      <label class="form-label fw-semibold">البريد الإلكتروني</label>
      <input type="email" name="email" class="form-control rounded-pill" placeholder="example@email.com" required>
    </div>

    <div class="mb-3">
      <label class="form-label fw-semibold">الرسالة</label>
      <textarea name="message" rows="4" class="form-control rounded-4" placeholder="اكتب رسالتك..." required></textarea>
    </div>

    <div class="text-center">
      <button type="submit" class="btn gradient-btn rounded-pill px-5 py-2 fw-bold">
        إرسال
      </button>
    </div>
</form>

        </div>
      </div>

      <!-- معلومات التواصل -->
      <div class="col-lg-6  text-lg-start">
        <div class="info-section p-4">
          <h4 class="fw-bold mb-3" style="color:#7453fc;">معلومات التواصل</h4>

          <p class="mb-3" style="
    color: #7453fc !important;
"><i class="bi bi-geo-alt-fill text-primary me-2" ></i>استثماركوم حاضنة ومسرعة الأعمال</p>
          <p class="mb-3"><i class="bi bi-telephone-fill text-success me-2"></i> <a href="tel:0568979769" class="text-dark text-decoration-none">0568979769</a></p>
          <p class="mb-3"><i class="bi bi-envelope-fill text-info me-2"></i> <a href="mailto:info@tkhyl.com.sa" class="text-dark text-decoration-none">info@tkhyl.com.sa</a></p>
          <p class="mb-4"><i class="bi bi-whatsapp text-success me-2"></i> <a href="https://wa.me/966568979769" target="_blank" class="text-dark text-decoration-none">واتساب مباشر</a></p>

          <div class="map-wrapper rounded-4 overflow-hidden shadow-sm mt-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.891353230974!2d46.7339518!3d24.6962613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0369685bf015%3A0x8814d20d7b0d8247!2z2KfYs9iq2KvZhdin2LHZg9mI2YUg2K3Yp9i22YbYqSDZiNmF2LPYsdi52Kkg2KfZhNij2LnZhdin2YQ!5e0!3m2!1sen!2ssa!4v1763534308367!5m2!1sen!2ssa"
              width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.891353230974!2d46.7339518!3d24.6962613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0369685bf015%3A0x8814d20d7b0d8247!2z2KfYs9iq2KvZhdin2LHZg9mI2YUg2K3Yp9i22YbYqSDZiNmF2LPYsdi52Kkg2KfZhNij2LnZhdin2YQ!5e0!3m2!1sen!2ssa!4v1763534308367!5m2!1sen!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== CSS ===== -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');
  @import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');

  #contact {
    font-family: 'Cairo', sans-serif;
  }

  .contact-form {
    background: #f9f9f9;
    border: 1px solid #eee;
    transition: all 0.3s ease;
  }

  .contact-form:hover {
    transform: translateY(-5px);
    box-shadow: 0 0 25px rgba(0,0,0,0.05);
  }

  .form-control {
    border: 1px solid #ddd;
    transition: all 0.3s ease;
  }

  .form-control:focus {
    border-color: #7453fc;
    box-shadow: 0 0 10px rgba(40,167,69,0.2);
  }

  .gradient-btn {
    background: #7453fc;
    color: #fff;
    border: none;
    transition: all 0.3s ease;
  }

  .gradient-btn:hover {
    opacity: 0.9;
    transform: translateY(-3px);
  }
</style>

<!-- ===== JS لإرسال النموذج ===== -->
{{-- <script>
document.getElementById("contactForm").addEventListener("submit", async function(e) {
  e.preventDefault();
  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const message = document.getElementById("message").value.trim();
  const successMsg = document.getElementById("successMsg");

  if (name && email && message) {
    try {
      const response = await fetch("/contact-send", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ name, email, message })
      });

      const result = await response.json();
      if (result.success) {
        successMsg.style.display = "block";
        e.target.reset();
        setTimeout(() => successMsg.style.display = "none", 4000);
      } else {
        alert("حدث خطأ أثناء الإرسال.");
      }
    } catch (error) {
      alert("تعذر الإرسال، حاول لاحقًا.");
    }
  }
});
</script> --}
<br /><br /><br />
@endsection --}}
