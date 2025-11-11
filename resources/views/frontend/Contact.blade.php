@extends('frontend.layouts.master')

@section('title', 'تواصل معنا - تخيّل')

@section('content')
<br /><br /><br />
<section id="contact" class="py-5" style="direction: rtl; background:#fff;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="font-family:'Cairo',sans-serif; font-size:2.5rem; color:#222;">
        📬 تواصــل <span style="color:#ff9800;">معنا</span>
      </h2>
      <p class="lead" style="max-width:700px; margin:auto; color:#555;">
        يسعدنا التواصل معك — سواء كان لديك استفسار، اقتراح، أو ترغب في التعاون معنا.
        فريق <span style="color:#007BFF;">تخيل</span> جاهز لخدمتك دائمًا.
      </p>
    </div>

    <div class="row align-items-center gy-5">
      <!-- نموذج التواصل -->
      <div class="col-lg-6">
        <div class="contact-form p-4 p-md-5 rounded-4 shadow-sm">
          <h4 class="fw-bold mb-4 text-center" style="color:#007BFF;">أرسل رسالتك الآن</h4>

          {{-- <form id="contactForm">
            <div class="mb-3">
              <label class="form-label fw-semibold">الاسم الكامل</label>
              <input type="text" id="name" class="form-control rounded-pill" placeholder="اكتب اسمك" required>
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold">البريد الإلكتروني</label>
              <input type="email" id="email" class="form-control rounded-pill" placeholder="example@email.com" required>
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold">الرسالة</label>
              <textarea id="message" rows="4" class="form-control rounded-4" placeholder="اكتب رسالتك..." required></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn gradient-btn rounded-pill px-5 py-2 fw-bold">إرسال</button>
            </div>
            <p id="successMsg" class="text-center mt-3 text-success fw-bold" style="display:none;">✅ تم إرسال رسالتك بنجاح</p>
          </form> --}}
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
          <h4 class="fw-bold mb-3" style="color:#28a745;">معلومات التواصل</h4>

          <p class="mb-3"><i class="bi bi-geo-alt-fill text-primary me-2"></i> الرياض - المملكة العربية السعودية</p>
          <p class="mb-3"><i class="bi bi-telephone-fill text-success me-2"></i> <a href="tel:0568979769" class="text-dark text-decoration-none">0568979769</a></p>
          <p class="mb-3"><i class="bi bi-envelope-fill text-info me-2"></i> <a href="mailto:info@tkhyl.com.sa" class="text-dark text-decoration-none">info@tkhyl.com.sa</a></p>
          <p class="mb-4"><i class="bi bi-whatsapp text-success me-2"></i> <a href="https://wa.me/966568979769" target="_blank" class="text-dark text-decoration-none">واتساب مباشر</a></p>

          <div class="map-wrapper rounded-4 overflow-hidden shadow-sm mt-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.2068990452426!2d46.69881748032686!3d24.685413421431836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03f25336a507%3A0x8efb4c0747c02a81!2sMakkah%20Al%20Mukarramah%20Br%20Rd%2C%20Riyadh!5e0!3m2!1sen!2ssa!4v1762880168026!5m2!1sen!2ssa"
              width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
    border-color: #28a745;
    box-shadow: 0 0 10px rgba(40,167,69,0.2);
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
</script> --}}
<br /><br /><br />
@endsection
