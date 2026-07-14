<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.google-tag-manager-head')

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        a,
        span,
        div {
            font-family: 'Cairo', sans-serif !important;
        }

        /* الوضع الفاتح - الافتراضي */
        body {
            background: linear-gradient(135deg, #ffffff 0%, #f5f5f5 100%);
            color: #333;
            transition: background 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), color 0.3s ease;
        }

        /* body h1,
        body h2,
        body h3,
        body h4,
        body h5,
        body h6,
        body p,
        body span,
        body a {
            color: #333;
        } */

        .header-area {
            background: transparent !important;
            border-bottom: none;
            transition: all 0.4s ease;
            box-shadow: none;
        }

        .header-area .main-nav {
            transition: all 0.3s ease;
        }

        .header-area .main-nav a,
        .header-area .main-nav span {
            color: #333 ;
            transition: all 0.3s ease;
            font-weight: 500;
            position: relative;
        }

        .header-area .main-nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #7453fc, #00B2FF);
            transition: width 0.3s ease;
        }

        .header-area .main-nav a:hover::after {
            width: 100%;
        }

        .header-area .main-nav a.active {
            color: #7453fc !important;
        }

        .header-area .main-nav a:hover {
            color: #7453fc !important;
        }

        .card {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%) !important;
            color: #333 !important;
            border: 1px solid #e0e0e0 !important;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        }

        footer {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%) !important;
            color: #333 !important;
            transition: all 0.4s ease;
            border-top: 2px solid #e8e8e8;
        }

        /* الوضع الداكن */
        body.dark-mode {
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%) !important;
            color: #f1f1f1 !important;
        }

        /* body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6,
        /* body.dark-mode p, */
        body.dark-mode span,
        body.dark-mode a {
        color: #7453fc  f !important;
        }

        body.dark-mode .header-area {
            background: transparent !important;
            border-bottom: none;
            box-shadow: none;
        }

        body.dark-mode .header-area .main-nav a,
        body.dark-mode .header-area .main-nav span {
            color:#7453fc; !important;
        }

        body.dark-mode .header-area .main-nav a.active {
            color: #7453fc !important;
        }

        body.dark-mode .header-area .main-nav a:hover {
            color: #7453fc !important;
        }

        body.dark-mode .card {
            background: linear-gradient(135deg, #1a1a1a 0%, #222 100%) !important;
            color: #f1f1f1 !important;
            border: 1px solid #333 !important;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }

        body.dark-mode .card:hover {
            box-shadow: 0 8px 25px rgba(255, 94, 0, 0.2);
        }

        body.dark-mode footer {
            background: linear-gradient(135deg, #111 0%, #1a1a1a 100%) !important;
            color: #ddd !important;
            border-top: 2px solid #333;
        }

        body.dark-mode .categories-collections {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%) !important;
        }

        body.dark-mode .form-control {
            background: #222 !important;
            color: #fff !important;
            border: 1px solid #444 !important;
            transition: all 0.3s ease;
        }

        body.dark-mode .form-control:focus {
            background: #2a2a2a !important;
            border-color: #7453fc !important;
            box-shadow: 0 0 10px rgba(255, 94, 0, 0.2);
        }

        body.dark-mode .form-control::placeholder {
            color: #888 !important;
        }

        body.dark-mode .form-label {
            color: #f1f1f1 !important;
        }

        /* الوضع الفاتح - إزالة التأثيرات */
        body.light-mode {
            background: linear-gradient(135deg, #ffffff 0%, #f5f5f5 100%) !important;
            color: #333 !important;
        }

        body.light-mode .categories-collections {
            background: transparent !important;
        }

        body.light-mode .form-control {
            background: #ffffff !important;
            color: #333 !important;
            border: 1px solid #e0e0e0 !important;
            transition: all 0.3s ease;
        }

        body.light-mode .form-control:focus {
            background: #f9f9f9 !important;
            border-color: #7453fc !important;
            box-shadow: 0 0 10px rgba(255, 94, 0, 0.1);
        }

        body.light-mode .form-control::placeholder {
            color: #999 !important;
        }

        /* الزر */
        #themeToggle {
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            background: linear-gradient(135deg, #f0f0f0 0%, #ffffff 100%) !important;
            color: #333 !important;
            border: 2px solid #ddd !important;
            font-size: 20px;
            width: 45px !important;
            height: 45px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }

        #themeToggle:hover {
            transform: scale(1.15) rotate(15deg);
            border-color: #7453fc;
            box-shadow: 0 4px 12px rgba(255, 94, 0, 0.2);
        }

        body.dark-mode #themeToggle {
            background: linear-gradient(135deg, #222 0%, #1a1a1a 100%) !important;
            color: #fff !important;
            border: 2px solid #444 !important;
        }

        body.dark-mode #themeToggle:hover {
            border-color: #7453fc;
            box-shadow: 0 4px 12px rgba(255, 94, 0, 0.3);
        }

        .whatsapp-float {
            position: fixed;
            bottom: 24px;
            right: 24px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #25D366, #20BA5F);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 10px 30px rgba(37, 211, 102, 0.3);
            z-index: 999;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .whatsapp-float i {
            font-size: 28px;
            animation: whatsapp-bounce 2s infinite ease-in-out;
        }

        .whatsapp-float::before {
            content: "";
            position: absolute;
            inset: -10px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(37, 211, 102, 0.6) 0%, rgba(37, 211, 102, 0) 70%);
            opacity: 0.8;
            z-index: -1;
            filter: blur(3px);
            animation: whatsapp-pulse 2s infinite ease-out;
        }

        @keyframes whatsapp-pulse {
            0% {
                transform: scale(0.8);
                opacity: 0.9;
            }
            50% {
                opacity: 0.4;
            }
            100% {
                transform: scale(1.3);
                opacity: 0;
            }
        }

        @keyframes whatsapp-bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }

        .whatsapp-float:hover {
            transform: scale(1.15) translateY(-5px);
            box-shadow: 0 15px 40px rgba(37, 211, 102, 0.5);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-text {
                margin-top: 30px !important;
            }

            .header-text h2 {
                font-size: 1.75rem !important;
            }

            .header-text h6 {
                font-size: 1rem !important;
            }

            .col-lg-2 {
                flex: 0 0 50% !important;
                max-width: 50% !important;
            }

            .item {
                margin-bottom: 20px !important;
            }

            .section-heading h2 {
                font-size: 1.75rem !important;
            }

            #contact-us {
                padding: 20px 10px !important;
            }

            .whatsapp-float {
                bottom: 16px;
                right: 16px;
                width: 50px;
                height: 50px;
            }

            .whatsapp-float i {
                font-size: 24px;
            }
        }

        @media (max-width: 576px) {
            .header-text h2 {
                font-size: 1.4rem !important;
            }

            .header-text p {
                font-size: 0.9rem !important;
            }

            .col-lg-2 {
                flex: 0 0 100% !important;
                max-width: 100% !important;
            }

            .col-lg-6 {
                flex: 0 0 100% !important;
                max-width: 100% !important;
            }

            .col-lg-12 {
                flex: 0 0 100% !important;
                max-width: 100% !important;
            }

            .buttons {
                flex-direction: column !important;
            }

            .buttons .main-button,
            .buttons .border-button {
                width: 100% !important;
                margin: 10px 0 !important;
            }

            iframe {
                height: 300px !important;
            }

            .container {
                padding: 0 10px !important;
            }
        }

        /* الخدمات */
        .item {
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            padding: 20px;
            border-radius: 10px;
        }

        .item:hover {
            transform: translateY(-8px) scale(1.02);
        }

        body.dark-mode .item {
            background: linear-gradient(135deg, #1e1e1e 0%, #2a2a2a 100%);
            border: 1px solid #333;
        }

        body.light-mode .item {
            background: linear-gradient(135deg, #f9f9f9 0%, #ffffff 100%);
            border: 1px solid #e8e8e8;
        }

        .item p {
            transition: color 0.3s ease;
        }

        body.light-mode .item p {
            color: #666 !important;
        }

        body.dark-mode .item p {
            color: #ccc !important;
        }

        /* الأشكال المستديرة */
        .rounded-3 {
            border-radius: 15px !important;
        }

        .rounded-4 {
            border-radius: 20px !important;
        }

        .rounded-pill {
            border-radius: 50px !important;
        }
    </style>

    <title>شركة تخيل للتسويق</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->

</head>

<body>
    @include('partials.google-tag-manager-body')

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
                    <nav class="main-nav" style="
    background: #fff;
">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('frontend.home') }}" class="logo">
                            <img src="assets/images/logo.svg" alt=""
                                style="
                                          /* height: 100px; */
                                          width: 100px;
                                      ">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('frontend.home') }}" class="active" style="
    color: #1f1e23 !important;
">الرئيسية </a></li>
                            <li><a href="{{ route('frontend.our-services') }}">خدمتنا</a></li>
                            <li><a href="{{ route('frontend.about-us') }}">من نحن</a></li>
                            <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
                            <li><a href="{{ route('frontend.rooms') }}">مجتماعتنا </a></li>
                            <li>
    <button id="themeToggle" class="btn btn-sm" style="
        background:#222;
        color:#fff;
        border-radius:50%;
        width:40px;
        height:40px;
        display:flex;
        align-items:center;
        justify-content:center;
        border:none;
        cursor:pointer;
    ">
        🌓
    </button>
</li>

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
    <div class="main-banner">
        <div class="container">
            <div class="row">

                <!-- النص -->
                <div class="col-lg-6 align-self-center">
                    <div class="header-text" style="
    direction: rtl;
">
                        <h6>شركة تخيّل للتسويق | </h6>
                        <h2 style="
    direction: rtl;
">نساهم ونعزز من تواجدك الرقمي وابراز هويتك البصرية بتقنيات
                            إبداع أسرع، جودة أعلى.</h2>

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
                                    <h2 style="color:#7453fc;">خدمات <em>تخيّل</em> المتخصصة بالهوية البصرية </h2>
                                </div>
                            </div>

                            <!-- خدمة 1 -->
                            <div class="col-lg-2 col-sm-6">
                                <div class="item">
                                    <div class="icon">
                                        <img src="assets/images/icon-01.png" alt="">
                                    </div>
                                    <h4>تصميم شعار ب</h4>
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
                <div class="col-lg-12">
                    <div class="collections">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="section-heading">
                                    <div class="line-dec"></div>
                                    <h2 style="color:#7453fc;">استكشف بعض <em>الهويات البصرية</em> التي صممناها باستخدام </h2>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="owl-collection owl-carousel">
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
                                                <strong>تحليل الجمهور + إعداد الإعلانات + تحسين النتائج + تقارير
                                                    أسبوعية</strong>
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




    <div  class="categories-collections" >
        <div id="contact-us" class="container " style="direction: rtl; ">

            <!-- عنوان القسم -->
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="font-family:'Cairo',sans-serif; font-size:2.5rem; color:#7453fc;">
                    تـــواصــــل <span style="color:#7453fc;">معنــــا</span>
                </h2>
                <p class="lead" style="max-width:750px; margin:auto; color:#7453fc;">
                    يسعدنا دائمًا استقبال استفساراتكم واقتراحاتكم،
                    فريق <strong style="color:#7453fc;">تخيّل</strong> جاهز لمساعدتك في أي وقت.
                </p>
            </div>

            <div class="row g-4">

                <!-- نموذج التواصل -->
                <div class="col-lg-6">
                    <div class="card shadow-sm p-4 rounded-4 border-0">
                        <h5 class="fw-bold mb-3" style="color:#7453fc;">أرسل لنا رسالة</h5>

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

                            <button type="submit" class="btn btn-warning w-100 rounded-pill fw-bold"
                                style="color:#7453fc;background-color: #1f1e23; !important;     border-color: #1f1e23 !important;">
                                إرسال الرسالة
                            </button>
                        </form>
                    </div>
                </div>

                <!-- خريطة الموقع -->
                <div class="col-lg-6">
                    <div class="card shadow-sm rounded-4 border-0 overflow-hidden">

                        <!-- العنوان -->
                        <h5 class="fw-bold p-3" style="color:#7453fc;;">موقعنا على الخريطة</h5>

                        <!-- Google Map -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.701028723266!2d46.675296!3d24.713551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f02ffc8055bc1%3A0x3e2fa67c0458a0e8!2sRiyadh%2C%20Saudi%20Arabia!5e0!3m2!1sen!2ssa!4v1700000000000"
                            width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <a href="https://wa.me/966583116161" class="whatsapp-float" target="_blank" aria-label="تواصل عبر واتساب">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
    <footer style="background:#111; padding:25px 0; color:#111; direction:rtl;">
        <div class="container text-center">


            <p style="margin:0; font-family:'Cairo', sans-serif; font-size:15px; line-height:1.8;color:#7453fc; !important;">
                جميع الحقوق محفوظة © {{ date('Y') }}
                <span style="color:#7453fc; font-weight:bold;">تخيّل</span> — منصة الإبداع والهوية البصرية ب.
                <br>
                تم التصميم والتطوير بواسطة فريق
                <span style="color:#7453fc; font-weight:bold;">تخيّل</span>.
            </p>


        </div>
    </footer>



    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>

    <script>
        // نظام Dark/Light Mode محسّن
        const body = document.body;
        const themeToggle = document.getElementById("themeToggle");
        const categoriessections = document.querySelectorAll(".categories-collections");

        // الحصول على الوضع المحفوظ أو تعيين الوضع الافتراضي (dark)
        const savedTheme = localStorage.getItem("theme") || "dark";

        // تطبيق الوضع عند تحميل الصفحة
        function applyTheme(theme) {
            if (theme === "dark") {
                body.classList.add("dark-mode");
                body.classList.remove("light-mode");
                categoriessections.forEach(section => {
                    section.classList.add("categories-collections");
                });
                themeToggle.textContent = "☀️";
            } else {
                body.classList.add("light-mode");
                body.classList.remove("dark-mode");
                categoriessections.forEach(section => {
                    section.classList.remove("categories-collections");
                });
                themeToggle.textContent = "🌙";
            }
        }

        // تطبيق الوضع المحفوظ
        applyTheme(savedTheme);

        // معالج الضغط على زر التبديل
        themeToggle.addEventListener("click", function () {
            const currentTheme = body.classList.contains("dark-mode") ? "dark" : "light";
            const newTheme = currentTheme === "dark" ? "light" : "dark";

            applyTheme(newTheme);
            localStorage.setItem("theme", newTheme);
        });

        // تحديث الوضع عند تغيير التفضيلات
        if (window.matchMedia) {
            window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", (e) => {
                const theme = e.matches ? "dark" : "light";
                if (!localStorage.getItem("theme")) {
                    applyTheme(theme);
                }
            });
        }
    </script>


</body>

</html>
