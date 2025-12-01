@extends('frontend.layouts.master')


@section('content')




<section id="services" class="py-5 categories-collections" style="direction: rtl; background:#fff;">
  <div class="container text-center ">
    <h2 class="fw-bold mb-4" style="font-family:'Cairo',sans-serif; font-size:2.5rem; color:#7453fc;">
      خدمــــات <span style="color:#7453fc ;">تـخـيّــــل</span>
    </h2>
    <p class="lead mb-5" style="max-width:800px; margin:auto; color:#555; font-family:'Cairo',sans-serif;">
      في <span style="color:#7453fc;">تخيّل</span> نبتكر حلولًا تسويقية وتقنية متكاملة
      تساعد الشركات والعلامات التجارية على النمو، التواصل، والتميز في السوق السعودي والعالمي.
    </p>

    <div class="row g-4 mt-4">
      <!-- الخدمة 1 -->
      <div class="col-md-4">
        <div class="service-card shadow-sm p-4 rounded-4 h-100">
          <div class="icon-box mb-3">
            <i class="bi bi-megaphone-fill" style="color:#7453fc; font-size:2.5rem;"></i>
          </div>
          <h5 class="fw-bold mb-2" style="color:#111;">التسويق الإبداعي</h5>
          <p class="small mb-0" style="color:#444;">
            نصمم استراتيجيات تسويقية مبتكرة تلامس جمهورك، وتُبرز هوية علامتك التجارية بأسلوب مؤثر وفعّال.
          </p>
        </div>
      </div>

      <!-- الخدمة 2 -->
      <div class="col-md-4">
        <div class="service-card shadow-sm p-4 rounded-4 h-100">
          <div class="icon-box mb-3">
            <i class="bi bi-globe2" style="color:#7453fc; font-size:2.5rem;"></i>
          </div>
          <h5 class="fw-bold mb-2" style="color:#111;">الحلول التقنية</h5>
          <p class="small mb-0" style="color:#444;">
            تطوير مواقع وتطبيقات متكاملة بلغة المستقبل، تجمع بين الأداء العالي وسهولة الاستخدام والتكامل مع الأنظمة.
          </p>
        </div>
      </div>

      <!-- الخدمة 3 -->
      <div class="col-md-4">
        <div class="service-card shadow-sm p-4 rounded-4 h-100">
          <div class="icon-box mb-3">
            <i class="bi bi-brush-fill" style="color:#7453fc; font-size:2.5rem;"></i>
          </div>
          <h5 class="fw-bold mb-2" style="color:#7453fc;">تصميم الهوية البصرية</h5>
          <p class="small mb-0" style="color:#7453fc;">
            نرسم هوية بصرية تعبّر عن قيم شركتك وتترك انطباعًا راسخًا في ذهن عملائك عبر تصميم احترافي شامل.
          </p>
        </div>
      </div>

      <!-- الخدمة 4 -->
      <div class="col-md-4">
        <div class="service-card shadow-sm p-4 rounded-4 h-100">
          <div class="icon-box mb-3">
            <i class="bi bi-file-earmark-text-fill" style="color:#7453fc; font-size:2.5rem;"></i>
          </div>
          <h5 class="fw-bold mb-2" style="color:#7453fc;">إدارة المحتوى</h5>
          <p class="small mb-0" style="color:#444;">
            نُنشئ محتوى ملهمًا وجذابًا، يعبّر عن رسالة علامتك التجارية، ويزيد من تفاعل جمهورك عبر مختلف المنصات.
          </p>
        </div>
      </div>

      <!-- الخدمة 5 -->
      <div class="col-md-4">
        <div class="service-card shadow-sm p-4 rounded-4 h-100">
          <div class="icon-box mb-3">
            <i class="bi bi-graph-up-arrow" style="color:#7453fc; font-size:2.5rem;"></i>
          </div>
          <h5 class="fw-bold mb-2" style="color:#7453fc;">تحليل الأداء</h5>
          <p class="small mb-0" style="color:#7453fc;">
            نتابع أداء حملاتك الرقمية ونقدّم تقارير ذكية لتحسين النتائج وضمان تحقيق أهدافك التسويقية بدقة.
          </p>
        </div>
      </div>

      <!-- الخدمة 6 -->
      <div class="col-md-4">
        <div class="service-card shadow-sm p-4 rounded-4 h-100">
          <div class="icon-box mb-3">
            <i class="bi bi-people-fill" style="color:#7453fc; font-size:2.5rem;"></i>
          </div>
          <h5 class="fw-bold mb-2" style="color:#7453fc;">الاستشارات والتطوير</h5>
          <p class="small mb-0" style="color:#7453fc;">
            نقدم استشارات تسويقية وتقنية تساعد الشركات على النمو والتحول الرقمي عبر خطط واقعية ومبتكرة.
          </p>
        </div>
      </div>
    </div>

    <div class="mt-5">
      <a href="{{ route('contact') }}" class="btn gradient-btn btn-lg rounded-pill px-5 py-2 fw-bold shadow-sm" style="
    color: #fff !important;
">
        تواصل معنا لمعرفة التفاصيل
      </a>
    </div>
  </div>
</section>

<!-- ===== CSS ===== -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');
  @import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');

  #services {
    font-family: 'Cairo', sans-serif;
  }

  /* الكروت */
  .service-card {
    background: #f9f9f9;
    border-radius: 20px;
    transition: all 0.3s ease;
  }

  .service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 0 25px rgba(0,0,0,0.08);
  }

  /* الأيقونات */
  .icon-box {
    width: 80px;
    height: 80px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: linear-gradient(135deg, rgba(0,123,255,0.1), rgba(255,152,0,0.1));
    transition: 0.3s ease;
  }

  .service-card:hover .icon-box {
    background: linear-gradient(135deg, rgba(0,123,255,0.2), rgba(40,167,69,0.2));
  }

  /* زر التدرج */
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
<br /><br />
<br />
@endsection

<!-- ===== CSS Section ===== -->

