  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> --}}

    <title>تخيل - التسويق</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-onix-digital.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!--

TemplateMo 565 Onix Digital

https://templatemo.com/tm-565-onix-digital

-->
<style>
    html, body {
    background: #fff;
    font-family: Cairo !important;
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

    </style>؟
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
            color: #7453fc !important;
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
  </head>
