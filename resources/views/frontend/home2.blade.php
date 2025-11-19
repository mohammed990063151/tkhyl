<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body, h1, h2, h3, h4, h5, h6, p, a, span, div {
    font-family: 'Cairo', sans-serif !important;
}


.whatsapp-float {
    position: fixed;
    bottom: 24px;
    right: 24px;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #25D366;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
    z-index: 999;
    transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
}

/* الأيقونة */
.whatsapp-float i {
    font-size: 28px;
}

/* الخلفية الخضراء المتوهجة */
.whatsapp-float::before {
    content: "";
    position: absolute;
    inset: -10px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(37, 211, 102, 0.7) 0%, rgba(37, 211, 102, 0) 65%);
    opacity: 0.9;
    z-index: -1;
    filter: blur(2px);
    animation: whatsapp-pulse 1.8s infinite ease-out;
}

/* حركة النبض */
@keyframes whatsapp-pulse {
    0% {
        transform: scale(0.9);
        opacity: 0.8;
    }
    70% {
        transform: scale(1.15);
        opacity: 0;
    }
    100% {
        transform: scale(1.25);
        opacity: 0;
    }
}

/* تأثير الهوفر */
.whatsapp-float:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 14px 30px rgba(0, 0, 0, 0.3);
    background: #1ebe5b;
}
</style>

    <title>Liberty NFT Marketplace - HTML CSS Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('frontend.home') }}" class="logo">
                        <img src="assets/images/logo.svg" alt="" style="
    /* height: 100px; */
    width: 100px;
">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('frontend.home') }}" class="active">الرئيسية </a></li>
                        <li><a href="{{ route('frontend.our-services') }}">خدمتنا</a></li>
                        <li><a href="{{ route('frontend.about-us') }}">من نحن</a></li>
                        <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
                        <li><a href="{{ route('frontend.rooms') }}">مجتماعتنا </a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  {{-- <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Liberty NFT Market</h6>
            <h2>Create, Sell &amp; Collect Top NFT’s.</h2>
            <p>Liberty NFT Market is a really cool and professional design for your NFT websites. This HTML CSS template is based on Bootstrap v5 and it is designed for NFT related web portals. Liberty can be freely downloaded from TemplateMo's free css templates.</p>
            <div class="buttons">
              <div class="border-button">
                <a href="explore.html">Explore Top NFTs</a>
              </div>
              <div class="main-button">
                <a href="https://youtube.com/templatemo" target="_blank">Watch Our Videos</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="owl-banner owl-carousel">
            <div class="item">
              <img src="assets/images/banner-01.png" alt="">
            </div>
            <div class="item">
              <img src="assets/images/banner-02.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="main-banner">
  <div class="container">
    <div class="row">

      <!-- النص -->
      <div class="col-lg-6 align-self-center">
        <div class="header-text" style="
    direction: rtl;
">
          <h6 >شركة تخيّل للتسويق |  </h6>
          <h2 style="
    direction: rtl;
">نساهم ونعزز من تواجدك الرقمي وابراز هويتك البصرية بتقنيات   إبداع أسرع، جودة أعلى.</h2>

          <p>
            في <strong>تخيّل</strong> نبتكر هويات بصرية، شعارات، ألوان، نماذج، وبروفايلات شركات
            باستخدام أحدث تقنيات .
            نجمع بين **الإبداع البشري** و**قوة الـ AI** لنقدم لك تصاميم احترافية
            تلائم علامتك التجارية وتظهرها بأفضل شكل.
          </p>

          <div class="buttons">
            <div class="border-button">
              <a href="#portfolio">شاهد أعمالنا</a>
            </div>
            <div class="main-button">
              <a href="https://wa.me/966000000000" target="_blank">اطلب هويتك الآن</a>
            </div>
          </div>
        </div>
      </div>

      <!-- الصور -->
      <div class="col-lg-5 offset-lg-1">
        <div class="owl-banner owl-carousel">
          <div class="item">
             <img src="assets/images/banner-01.png" alt="">
            </div>
            <div class="item">
              <img src="assets/images/banner-02.png" alt="">
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

  <!-- ***** Main Banner Area End ***** -->

  {{-- <div class="categories-collections">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="categories">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <div class="line-dec"></div>
                  <h2>Browse Through Our <em>Categories</em> Here.</h2>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-01.png" alt="">
                  </div>
                  <h4>Blockchain</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-02.png" alt="">
                  </div>
                  <h4>Digital Art</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-03.png" alt="">
                  </div>
                  <h4>Music Art</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-04.png" alt="">
                  </div>
                  <h4>Virtual World</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-05.png" alt="">
                  </div>
                  <h4>Valuable</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-06.png" alt="">
                  </div>
                  <h4>Triple NFT</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="collections">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <div class="line-dec"></div>
                  <h2>Explore Some Hot <em>Collections</em> In Market.</h2>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="owl-collection owl-carousel">
                  <div class="item">
                    <img src="assets/images/collection-01.jpg" alt="">
                    <div class="down-content">
                      <h4>Mutant Bored Ape Yacht Club</h4>
                      <span class="collection">Items In Collection:<br><strong>310/340</strong></span>
                      <span class="category">Category:<br><strong>Digital Crypto</strong></span>
                      <div class="main-button">
                        <a href="explore.html">Explore Mutant</a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <img src="assets/images/collection-01.jpg" alt="">
                    <div class="down-content">
                      <h4>Bored Ape Kennel Club</h4>
                      <span class="collection">Items In Collection:<br><strong>324/324</strong></span>
                      <span class="category">Category:<br><strong>Visual Art</strong></span>
                      <div class="main-button">
                        <a href="explore.html">Explore Bored Ape</a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <img src="assets/images/collection-01.jpg" alt="">
                    <div class="down-content">
                      <h4>Genesis Collective Statue</h4>
                      <span class="collection">Items In Collection:<br><strong>380/394</strong></span>
                      <span class="category">Category:<br><strong>Music Art</strong></span>
                      <div class="main-button">
                        <a href="explore.html">Explore Genesis</a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <img src="assets/images/collection-01.jpg" alt="">
                    <div class="down-content">
                      <h4>Worldwide Artwork Ground</h4>
                      <span class="collection">Items In Collection:<br><strong>426/468</strong></span>
                      <span class="category">Category:<br><strong>Blockchain</strong></span>
                      <div class="main-button">
                        <a href="explore.html">Explore Worldwide</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}






<div class="categories-collections">
  <div class="container">
    <div class="row">

      <!-- ================ قسم الخدمات ================ -->
      <div class="col-lg-12">
        <div class="categories">
          <div class="row">

            <div class="col-lg-12">
              <div class="section-heading">
                <div class="line-dec"></div>
                <h2>خدمات <em>تخيّل</em> المتخصصة بالهوية البصرية </h2>
              </div>
            </div>

            <!-- خدمة 1 -->
            <div class="col-lg-2 col-sm-6">
              <div class="item">
                <div class="icon">
                  <img src="assets/images/icon-01.png" alt="">
                </div>
                <h4>تصميم شعار </h4>
                <p style="font-size:13px; color:#555; margin-top:5px;">
                  ابتكار شعارات فريدة تمزج بين الإبداع والدقة باستخدام تقنيات AI الحديثة.
                </p>
                <div class="icon-button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>

            <!-- خدمة 2 -->
            <div class="col-lg-2 col-sm-6">
              <div class="item">
                <div class="icon">
                  <img src="assets/images/icon-02.png" alt="">
                </div>
                <h4>تصميم هوية كاملة</h4>
                <p style="font-size:13px; color:#555; margin-top:5px;">
                  تطوير هوية متكاملة تشمل الشعار، الألوان، الخطوط، والنماذج الجاهزة.
                </p>
                <div class="icon-button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>

            <!-- خدمة 3 -->
            <div class="col-lg-2 col-sm-6">
              <div class="item">
                <div class="icon">
                  <img src="assets/images/icon-03.png" alt="">
                </div>
                <h4>اختيار لوحات ألوان</h4>
                <p style="font-size:13px; color:#555; margin-top:5px;">
                  تقديم لوحات ألوان مدروسة تعبر عن هوية مشروعك وتمنحه شخصية مميزة.
                </p>
                <div class="icon-button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>

            <!-- خدمة 4 -->
            <div class="col-lg-2 col-sm-6">
              <div class="item">
                <div class="icon">
                  <img src="assets/images/icon-04.png" alt="">
                </div>
                <h4>تصميم محتوى بصري</h4>
                <p style="font-size:13px; color:#555; margin-top:5px;">
                  إنتاج تصاميم ومنشورات احترافية بأسلوب يعكس هوية علامتك التجارية.
                </p>
                <div class="icon-button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>

            <!-- خدمة 5 -->
            <div class="col-lg-2 col-sm-6">
              <div class="item">
                <div class="icon">
                  <img src="assets/images/icon-05.png" alt="">
                </div>
                <h4>نماذج سوشيال ميديا</h4>
                <p style="font-size:13px; color:#555; margin-top:5px;">
                  تصميم قوالب جاهزة للسوشيال ميديا تظهر هويتك بشكل احترافي ومتسق.
                </p>
                <div class="icon-button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>

            <!-- خدمة 6 -->
            <div class="col-lg-2 col-sm-6">
              <div class="item">
                <div class="icon">
                  <img src="assets/images/icon-06.png" alt="">
                </div>
                <h4>بروفايل شركة احترافي</h4>
                <p style="font-size:13px; color:#555; margin-top:5px;">
                  إعداد ملف تعريفي شامل يعكس رؤية الشركة وقيمها بأسلوب عالي الجودة.
                </p>
                <div class="icon-button">
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- ================ قسم الأعمال / نماذج الهويات ================ -->
      {{-- <div class="col-lg-12">
        <div class="collections">
          <div class="row">

            <div class="col-lg-12">
              <div class="section-heading">
                <div class="line-dec"></div>
                <h2>استكشف بعض <em>الهويات البصرية</em> التي صممناها باستخدام </h2>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="owl-collection owl-carousel">

                <!-- عمل 1 -->
                <div class="item">
                  <img src="img/analysis-1841158_1280.jpg" alt="">
                  <div class="down-content">
                    <h4>هوية شركة تقنية</h4>
                    <span class="collection">تفاصيل الهوية:<br><strong>شعار + ألوان + نماذج</strong></span>
                    <span class="category">نوع الخدمة:<br><strong>هوية متكاملة</strong></span>
                    <div class="main-button">
                      <a href="#">عرض العمل</a>
                    </div>
                  </div>
                </div>

                <!-- عمل 2 -->
                <div class="item">
                  <img src="{{ asset('img/world-4961456_1280.jpg') }}" alt="">
                  <div class="down-content">
                    <h4>علامة تجارية حديثة</h4>
                    <span class="collection">تفاصيل الهوية:<br><strong>شعار + موك اب</strong></span>
                    <span class="category">نوع الخدمة:<br><strong>تصميم شعار</strong></span>
                    <div class="main-button">
                      <a href="#">عرض العمل</a>
                    </div>
                  </div>
                </div>

                <!-- عمل 3 -->
                <div class="item">
                  <img src="{{ asset('img/digital-marketing-4297723_1280.jpg') }}" alt="">
                  <div class="down-content">
                    <h4>هوية مطعم عصري</h4>
                    <span class="collection">تفاصيل الهوية:<br><strong>ألوان + نماذج</strong></span>
                    <span class="category">نوع الخدمة:<br><strong>اختيار ألوان</strong></span>
                    <div class="main-button">
                      <a href="#">عرض العمل</a>
                    </div>
                  </div>
                </div>

                <!-- عمل 4 -->
                <div class="item">
                  <img src="{{ asset('img/kaufmann-3821436_1280.jpg') }}" alt="">
                  <div class="down-content">
                    <h4>هوية شركة أعمال</h4>
                    <span class="collection">تفاصيل الهوية:<br><strong>شعار + بروفايل</strong></span>
                    <span class="category">نوع الخدمة:<br><strong>تصميم بروفايل</strong></span>
                    <div class="main-button">
                      <a href="#">عرض العمل</a>
                    </div>
                  </div>
                </div>

              </div> <!-- owl -->
            </div>

          </div>
        </div>
      </div> --}}
      <div class="col-lg-12">
    <div class="collections">
        <div class="row">

            <div class="col-lg-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h2>استكشف بعض <em>الهويات البصرية</em> التي صممناها باستخدام  </h2>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="owl-collection owl-carousel">

                    <!-- عمل 1 -->
                    {{-- <div class="item">
                        <br />
                        <img src="https://images.pexels.com/photos/6476800/pexels-photo-6476800.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="هوية شركة تقنية">
                        <div class="down-content">
                            <h4>هوية شركة تقنية</h4>
                            <span class="collection">تفاصيل الهوية:<br><strong>شعار + ألوان + نماذج</strong></span>
                            <span class="category">نوع الخدمة:<br><strong>هوية متكاملة</strong></span>
                            <div class="main-button">
                                <a href="#">عرض العمل</a>
                            </div>
                        </div>
                    </div>

                    <!-- عمل 2 -->
                    <div class="item">
                        <img src="{{ asset('img/8.jpg') }}" alt="علامة تجارية حديثة">
                        <div class="down-content">
                            <h4>علامة تجارية حديثة</h4>
                            <span class="collection">تفاصيل الهوية:<br><strong>شعار + موك اب</strong></span>
                            <span class="category">نوع الخدمة:<br><strong>تصميم شعار</strong></span>
                            <div class="main-button">
                                <a href="#">عرض العمل</a>
                            </div>
                        </div>
                    </div>

                    <!-- عمل 3 -->
                    <div class="item">
                        <img src="{{ asset('img/WhatsApp Image 2025-10-20 at 11.25.53 AM (1).jpeg') }}" alt="هوية مطعم عصري">
                        <div class="down-content">
                            <h4>هوية مطعم عصري</h4>
                            <span class="collection">تفاصيل الهوية:<br><strong>ألوان + نماذج</strong></span>
                            <span class="category">نوع الخدمة:<br><strong>اختيار ألوان</strong></span>
                            <div class="main-button">
                                <a href="#">عرض العمل</a>
                            </div>
                        </div>
                    </div> --}}

                    <!-- بطاقة 1 -->
<div class="item">
    <img src="{{ asset('img/8.jpg') }}" alt="تصميم المحتوى الإبداعي">
    <div class="down-content">
        <h4>تصميم المحتوى الإبداعي</h4>
        <span class="collection">
            تفاصيل الخدمة:<br>
            <strong>تصميمات جذابة + موشن جرافيك + محتوى تسويقي مكتوب</strong>
        </span>
        <span class="category">
            نوع الخدمة:<br>
            <strong>براند كونتنت – Content Creation</strong>
        </span>
        <div class="main-button">
            <a href="#">عرض الخدمة</a>
        </div>
    </div>
</div>

<!-- بطاقة 2 -->
<div class="item">
    <img src="{{ asset('img/6.jpg') }}" alt="إدارة الحملات الإعلانية">
    <div class="down-content">
        <h4>إدارة الحملات الإعلانية المدفوعة</h4>
        <span class="collection">
            تفاصيل الخدمة:<br>
            <strong>تحليل الجمهور + إعداد الإعلانات + تحسين النتائج + تقارير أسبوعية</strong>
        </span>
        <span class="category">
            نوع الخدمة:<br>
            <strong>تسويق مدفوع (Meta • Google • TikTok)</strong>
        </span>
        <div class="main-button">
            <a href="#">عرض الخدمة</a>
        </div>
    </div>
</div>

<div class="item">
    <img src="{{ asset('img/2.jpg') }}" alt="الهوية التسويقية">
    <div class="down-content">
        <h4>بناء الهوية التسويقية للشركات</h4>
        <span class="collection">
            تفاصيل الخدمة:<br>
            <strong>تحليل السوق + صياغة الرسالة + تصميم هوية تسويقية مؤثرة</strong>
        </span>
        <span class="category">
            نوع الخدمة:<br>
            <strong>Brand Marketing – براند الشركات</strong>
        </span>
        <div class="main-button">
            <a href="#">عرض الخدمة</a>
        </div>
    </div>
</div>






                </div> <!-- owl -->
            </div>

        </div>
    </div>
</div>

    </div>
  </div>
</div>




<div id="contact-us" class="currently-market" style="direction: rtl; ">
  <div class="container">

    <!-- عنوان القسم -->
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="font-family:'Cairo',sans-serif; font-size:2.5rem; color:#fff;">
        تـــواصــــل <span style="color:#fff;">معنــــا</span>
      </h2>
      <p class="lead" style="max-width:750px; margin:auto; color:#fff;">
        يسعدنا دائمًا استقبال استفساراتكم واقتراحاتكم،
        فريق <strong style="color:#fff;">تخيّل</strong> جاهز لمساعدتك في أي وقت.
      </p>
    </div>

    <div class="row g-4">

      <!-- نموذج التواصل -->
      <div class="col-lg-6">
        <div class="card shadow-sm p-4 rounded-4 border-0">
          <h5 class="fw-bold mb-3" style="color:#fff;">أرسل لنا رسالة</h5>

          <form action="{{ route('contact.send') }}" method="POST">
            @csrf

            <div class="mb-3">
              <label class="form-label">الاسم الكامل</label>
              <input type="text" name="name" class="form-control rounded-3" required>
            </div>

            <div class="mb-3">
              <label class="form-label">البريد الإلكتروني</label>
              <input type="email" name="email" class="form-control rounded-3" required>
            </div>

            <div class="mb-3">
              <label class="form-label">رقم الهاتف</label>
              <input type="text" name="phone" class="form-control rounded-3">
            </div>

            <div class="mb-3">
              <label class="form-label">رسالتك</label>
              <textarea name="message" rows="5" class="form-control rounded-3" required></textarea>
            </div>

            <button type="submit" class="btn btn-warning w-100 rounded-pill fw-bold" style="color:#fff;">
              إرسال الرسالة
            </button>
          </form>
        </div>
      </div>

      <!-- خريطة الموقع -->
      <div class="col-lg-6">
        <div class="card shadow-sm rounded-4 border-0 overflow-hidden">

          <!-- العنوان -->
          <h5 class="fw-bold p-3" style="color:#fff;">موقعنا على الخريطة</h5>

          <!-- Google Map -->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.701028723266!2d46.675296!3d24.713551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f02ffc8055bc1%3A0x3e2fa67c0458a0e8!2sRiyadh%2C%20Saudi%20Arabia!5e0!3m2!1sen!2ssa!4v1700000000000"
            width="100%"
            height="380"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>

        </div>
      </div>

    </div>
  </div>
</div>












  {{-- <div class="create-nft">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Create Your NFT & Put It On The Market.</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="main-button">
            <a href="create.html">Create Your NFT Now</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item first-item">
            <div class="number">
              <h6>1</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-02.png" alt="">
            </div>
            <h4>Set Up Your Wallet</h4>
            <p>NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There are many different kinds of NFTs in the industry.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item second-item">
            <div class="number">
              <h6>2</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-04.png" alt="">
            </div>
            <h4>Add Your Digital NFT</h4>
            <p>There are 5 different HTML pages included in this NFT <a href="https://templatemo.com/page/1" target="_blank" rel="nofollow">website template</a>. You can edit or modify any section on any page as you required.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-06.png" alt="">
            </div>
            <h4>Sell Your NFT &amp; Make Profit</h4>
            <p>If you would like to support our TemplateMo website, please visit <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">our contact page</a> to make a PayPal contribution. Thank you.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="currently-market">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2><em>Items</em> Currently In The Market.</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="filters">
            <ul>
              <li data-filter="*"  class="active">All Items</li>
              <li data-filter=".msc">Music Art</li>
              <li data-filter=".dig">Digital Art</li>
              <li data-filter=".blc">Blockchain</li>
              <li data-filter=".vtr">Virtual</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="row grid">
            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/market-01.jpg" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Music Art Super Item</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Bid<br><strong>2.03 ETH</strong><br><em>($8,240.50)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>4D 08H 15M 42S</strong><br><em>(July 24th, 2022)</em>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 currently-market-item all dig">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/market-01.jpg" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Digital Crypto Artwork</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Bid<br><strong>2.03 ETH</strong><br><em>($7,200.50)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>2D 06H 30M 25S</strong><br><em>(July 26th, 2022)</em>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 currently-market-item all blc">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/market-01.jpg" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Blockchain Item One</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Bid<br><strong>3.64 ETH</strong><br><em>($6,600.00)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>6D 05H 40M 50S</strong><br><em>(July 28th, 2022)</em>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 currently-market-item all vtr">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/market-01.jpg" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Virtual Currency Art</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Bid<br><strong>2.44 ETH</strong><br><em>($8,800.50)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>3D 05H 20M 58S</strong><br><em>(July 14th, 2022)</em>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 currently-market-item all vrt dig">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/market-01.jpg" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Digital Art Item</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Bid<br><strong>2.50 ETH</strong><br><em>($8,400.50)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>4D 08H 32M 18S</strong><br><em>(July 16th, 2022)</em>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 currently-market-item all msc blc">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/market-01.jpg" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>Blockchain Music Design</h4>
                  <span class="author">
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Bid<br><strong>2.44 ETH</strong><br><em>($8,200.50)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>5D 10H 22M 24S</strong><br><em>(July 18th, 2022)</em>
                  </span>
                  <div class="text-button">
                    <a href="details.html">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
<a href="https://wa.me/966583116161"
   class="whatsapp-float"
   target="_blank"
   aria-label="تواصل عبر واتساب">
    <i class="fa-brands fa-whatsapp"></i>
</a>
 <footer style="background:#111; padding:25px 0; color:#ddd; direction:rtl;">
  <div class="container text-center">

    <p style="margin:0; font-family:'Cairo', sans-serif; font-size:15px; line-height:1.8;">
      جميع الحقوق محفوظة © {{ date('Y') }}
      <span style="color:#ff9800; font-weight:bold;">تخيّل</span> — منصة الإبداع والهوية البصرية ب.
      <br>
      تم التصميم والتطوير بواسطة فريق
      <span style="color:#007BFF; font-weight:bold;">تخيّل</span>.
    </p>

  </div>
</footer>



  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendors/jquery/jquery.min.js"></script>
  <script src="vendors/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>

  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>
