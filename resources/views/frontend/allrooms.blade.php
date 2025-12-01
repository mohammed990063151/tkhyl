@extends('frontend.layouts.master')

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

@endsection
