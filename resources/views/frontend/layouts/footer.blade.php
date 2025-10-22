<footer id="footer" class="text-white pt-5" style="background: linear-gradient(135deg, #007BFF, #28a745, #ff9800); position: relative; overflow:hidden;">
  <div style="background: rgba(0,0,0,0.7); position:absolute; inset:0; z-index:0;"></div>

  <div class="container position-relative z-3">
    <div class="row gy-4">
      
      <!-- تعريف -->
      <div class="col-lg-4 col-md-6">
        <h4 class="fw-bold mb-3 text-warning">عن تخيّل</h4>
        <p class="small lh-lg">
          شركة تخيّل للإبداع والتسويق الرقمي، نبتكر الحلول ونعيد تعريف التجربة التسويقية من خلال مزيج من الإبداع، التقنية، والهوية المحلية.
        </p>
        <div class="social-icons mt-4">
          <a href="#" class="me-2"><i class="bi bi-facebook"></i></a>
          <a href="#" class="me-2"><i class="bi bi-twitter"></i></a>
          <a href="#" class="me-2"><i class="bi bi-instagram"></i></a>
          <a href="#" class="me-2"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <!-- روابط سريعة -->
      <div class="col-lg-2 col-md-6">
        <h5 class="fw-bold mb-3 text-warning">روابط سريعة</h5>
        <ul class="list-unstyled small">
          <li><a href="#" class="text-white text-decoration-none d-block mb-1 hover-link">الرئيسية</a></li>
          <li><a href="#" class="text-white text-decoration-none d-block mb-1 hover-link">خدماتنا</a></li>
          <li><a href="#" class="text-white text-decoration-none d-block mb-1 hover-link">مشاريعنا</a></li>
          <li><a href="#" class="text-white text-decoration-none d-block mb-1 hover-link">المدونة</a></li>
          <li><a href="#" class="text-white text-decoration-none d-block mb-1 hover-link">تواصل معنا</a></li>
        </ul>
      </div>

      <!-- ساعات العمل -->
      <div class="col-lg-3 col-md-6">
        <h5 class="fw-bold mb-3 text-warning">ساعات العمل</h5>
        <ul class="list-unstyled small mb-0">
          <li class="mb-2"><i class="bi bi-clock me-2 text-light"></i>الأحد - الخميس: 9:00 ص إلى 6:00 م</li>
          <li class="mb-2"><i class="bi bi-clock me-2 text-light"></i>الجمعة: مغلق</li>
          <li><i class="bi bi-clock me-2 text-light"></i>السبت: 10:00 ص إلى 4:00 م</li>
        </ul>
      </div>

      <!-- بيانات التواصل -->
      <div class="col-lg-3 col-md-6">
        <h5 class="fw-bold mb-3 text-warning">تواصل معنا</h5>
        <ul class="list-unstyled small mb-0">
          <li class="mb-2"><i class="bi bi-geo-alt-fill me-2 text-light"></i>الرياض – المملكة العربية السعودية</li>
          <li class="mb-2"><i class="bi bi-telephone-fill me-2 text-light"></i><a href="tel:0568979769" class="text-white text-decoration-none">0568979769</a></li>
          <li class="mb-2"><i class="bi bi-whatsapp me-2 text-light"></i><a href="https://wa.me/966568979769" target="_blank" class="text-white text-decoration-none">واتساب مباشر</a></li>
          <li><i class="bi bi-envelope-fill me-2 text-light"></i><a href="mailto:info@tkhyl.com.sa" class="text-white text-decoration-none">info@tkhyl.com.sa</a></li>
        </ul>
      </div>

    </div>

    <!-- خريطة صغيرة -->
    <div class="row mt-5">
      <div class="col-12">
        <div class="map-wrapper rounded-4 overflow-hidden shadow-lg">
          <iframe 
            src="https://www.google.com/maps?q=Riyadh,Saudi%20Arabia&output=embed"
            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
        </div>
      </div>
    </div>

    <!-- خط الفاصل -->
    <hr class="border-light my-4 opacity-25">

    <!-- الحقوق -->
    <div class="text-center small text-light">
      © 2025 <span class="text-warning fw-bold">Tkhyl</span> | جميع الحقوق محفوظة  
      <br>
      <span class="text-secondary">تصميم وتنفيذ بفكر <span class="text-warning">تخيل</span> 💡</span>
    </div>
  </div>
</footer>

<!-- ===== CSS ===== -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');
  @import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');

  #footer {
    font-family: 'Cairo', sans-serif;
  }

  /* الأيقونات */
  .social-icons a {
    color: #fff;
    font-size: 1.4rem;
    transition: all 0.3s ease;
  }

  .social-icons a:hover {
    color: #ffc107;
    transform: translateY(-3px);
  }

  /* الروابط */
  .hover-link {
    transition: all 0.3s ease;
  }

  .hover-link:hover {
    color: #ffc107;
    padding-right: 5px;
  }

  /* الخريطة */
  .map-wrapper iframe {
    filter: brightness(0.9) saturate(1.2);
    transition: transform 0.4s ease;
  }
  .map-wrapper:hover iframe {
    transform: scale(1.02);
  }

  /* النصوص */
  footer h4, footer h5 {
    position: relative;
  }

  footer h4::after, footer h5::after {
    content: "";
    position: absolute;
    bottom: -5px;
    right: 0;
    width: 40px;
    height: 3px;
    background: #ffc107;
    border-radius: 10px;
  }

  /* خط الفاصل */
  footer hr {
    border-top: 1px solid rgba(255,255,255,0.15);
  }

  /* الحقوق */
  #footer small {
    color: #ddd;
  }
</style>