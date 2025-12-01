<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
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

    <title>شركة تخيل للتسويق</title>

    <!-- Bootstrap core CSS -->
    <link href="vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">


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
                    <nav class="main-nav"  style="
    background-color: #e9eeff;
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
                            <li><a href="{{ route('frontend.home') }}" class="active">الرئيسية </a></li>
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
