<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تخيل - منصة التسويق والإبداع</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;500;700&family=Cairo:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="templatemo-electric-xtra.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        :root {
            --primary-color: #FF5E00;
            --secondary-color: #00B2FF;
            --dark-bg: #0a0a0a;
            --light-bg: #ffffff;
            --text-dark: #f1f1f1;
            --text-light: #333;
            --card-dark: #1a1a1a;
            --card-light: #f8f9fa;
            --border-dark: #333;
            --border-light: #e0e0e0;
        }

        body {
            font-family: 'Cairo', 'Rajdhani', sans-serif;
            background: var(--dark-bg);
            color: var(--text-dark);
            transition: all 0.3s ease;
            overflow-x: hidden;
        }

        body.light-mode {
            background: var(--light-bg);
            color: var(--text-light);
        }

        body.light-mode h1,
        body.light-mode h2,
        body.light-mode h3,
        body.light-mode h4,
        body.light-mode h5,
        body.light-mode h6,
        body.light-mode p,
        body.light-mode span,
        body.light-mode label {
            color: var(--text-light);
        }

        /* Navbar Styling */
        #navbar {
            background: #1a1a1a;
            border-bottom: 1px solid #333;
            transition: all 0.3s ease;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 997;
        }

        #navbar .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            max-width: 1400px;
            margin: 0 auto;
        }

        #navbar .logo-link {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
            color: #FF5E00;
        }

        #navbar .logo-svg {
            width: 40px;
            height: 40px;
        }

        #navbar .nav-links {
            display: flex;
            list-style: none;
            gap: 40px;
        }

        #navbar .nav-link {
            color: #f1f1f1;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            font-weight: 500;
        }

        #navbar .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #FF5E00, #00B2FF);
            transition: width 0.3s ease;
        }

        #navbar .nav-link:hover::after {
            width: 100%;
        }

        #navbar .nav-link:hover {
            color: #FF5E00;
        }

        /* Light Mode Navbar */
        body.light-mode #navbar {
            background: #ffffff;
            border-bottom: 1px solid #e0e0e0;
        }

        body.light-mode #navbar .logo-link {
            color: #FF5E00;
        }

        body.light-mode #navbar .nav-link {
            color: #333;
        }

        body.light-mode #navbar .nav-link:hover {
            color: #FF9800;
        }

        /* Menu Toggle */
        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 6px;
        }

        .menu-toggle span {
            width: 25px;
            height: 3px;
            background: #FF5E00;
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        body.light-mode .menu-toggle span {
            background: #FF5E00;
        }

        .menu-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translate(10px, 10px);
        }

        .menu-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .menu-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -7px);
        }

        @media (max-width: 768px) {
            .menu-toggle {
                display: flex;
            }

            #navbar .nav-links {
                position: absolute;
                top: 70px;
                right: 0;
                left: 0;
                flex-direction: column;
                gap: 0;
                background: #1a1a1a;
                padding: 20px;
                display: none;
                border-top: 1px solid #333;
            }

            body.light-mode #navbar .nav-links {
                background: #ffffff;
                border-top: 1px solid #e0e0e0;
            }

            #navbar .nav-links.active {
                display: flex;
            }

            #navbar .nav-links li {
                padding: 15px 0;
                border-bottom: 1px solid #333;
            }

            body.light-mode #navbar .nav-links li {
                border-bottom: 1px solid #e0e0e0;
            }

            #navbar .nav-links li:last-child {
                border-bottom: none;
            }
        }

        body.light-mode .header-area {
            background: var(--light-bg) !important;
            border-bottom: 1px solid var(--border-light);
        }

        body.light-mode nav {
            background: var(--light-bg) !important;
        }

        body.light-mode nav a,
        body.light-mode nav span {
            color: var(--text-light) !important;
        }

        body.light-mode .card,
        body.light-mode .content-panel {
            background: var(--card-light) !important;
            border: 1px solid var(--border-light) !important;
            color: var(--text-light) !important;
        }

        body.light-mode footer {
            background: var(--card-light) !important;
            color: var(--text-light) !important;
            border-top: 1px solid var(--border-light);
        }

        body.light-mode .form-control,
        body.light-mode input,
        body.light-mode textarea {
            background: var(--light-bg) !important;
            color: var(--text-light) !important;
            border: 1px solid var(--border-light) !important;
        }

        body.light-mode .form-control::placeholder,
        body.light-mode input::placeholder,
        body.light-mode textarea::placeholder {
            color: #999 !important;
        }

        /* Video Overlay */
        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(10, 10, 10, 0.6);
            z-index: 1;
            transition: background 0.3s ease;
        }

        body.light-mode .video-overlay {
            background: rgba(255, 255, 255, 0.3);
        }

        /* WhatsApp Float */
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
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
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

        /* Theme Toggle Button */
        .theme-toggle-btn {
            position: fixed;
            top: 30px;
            left: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(255, 94, 0, 0.2);
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 24px;
            z-index: 998;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .theme-toggle-btn:hover {
            background: rgba(255, 94, 0, 0.3);
            transform: scale(1.1) rotate(20deg);
        }

        body.light-mode .theme-toggle-btn {
            background: rgba(255, 200, 100, 0.2);
            border-color: #FF9800;
            color: #FF9800;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .whatsapp-float {
                bottom: 16px;
                right: 16px;
                width: 55px;
                height: 55px;
            }

            .whatsapp-float i {
                font-size: 24px;
            }

            .theme-toggle-btn {
                top: 20px;
                left: 20px;
                width: 45px;
                height: 45px;
                font-size: 20px;
            }
        }

        @media (max-width: 576px) {
            .whatsapp-float {
                bottom: 12px;
                right: 12px;
                width: 50px;
                height: 50px;
            }

            .whatsapp-float i {
                font-size: 20px;
            }

            .theme-toggle-btn {
                top: 15px;
                left: 15px;
                width: 40px;
                height: 40px;
                font-size: 18px;
            }
        }

        /* Smooth scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--dark-bg);
        }

        body.light-mode ::-webkit-scrollbar-track {
            background: var(--light-bg);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        }

        /* Loading Animation */
        @keyframes shimmer {
            0% { background-position: -1000px 0; }
            100% { background-position: 1000px 0; }
        }

        .loading {
            animation: shimmer 2s infinite;
            background: linear-gradient(90deg, transparent, rgba(255,94,0,0.3), transparent);
            background-size: 1000px 100%;
        }
    </style>
</head>
<body style="direction: rtl;">
    <!-- Theme Toggle Button -->
    <button id="themeToggle" class="theme-toggle-btn" title="تبديل الوضع الليلي/النهاري">
        🌙
    </button>

    <!-- Animated Grid Background -->
    <div class="grid-bg"></div>
    <div class="gradient-overlay"></div>
    <div class="scanlines"></div>

    <!-- Animated Shapes -->
    <div class="shapes-container">
        <div class="shape shape-circle"></div>
        <div class="shape shape-triangle"></div>
        <div class="shape shape-square"></div>
    </div>

    <!-- Floating Particles -->
    <div id="particles"></div>

    <!-- Navigation -->
    <nav id="navbar">
        <div class="nav-container">
            <a href="#home" class="logo-link">
                <svg class="logo-svg" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#FF5E00;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#00B2FF;stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <polygon points="20,2 38,14 38,26 20,38 2,26 2,14" fill="none" stroke="url(#logoGradient)" stroke-width="2"/>
                    <polygon points="20,8 32,16 32,24 20,32 8,24 8,16" fill="url(#logoGradient)" opacity="0.3"/>
                    <circle cx="20" cy="20" r="3" fill="url(#logoGradient)"/>
                </svg>
                <span class="logo-text">تخيل</span>
            </a>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home" class="nav-link">الرئيسية</a></li>
                <li><a href="#features" class="nav-link">خدماتنا</a></li>
                <li><a href="#about" class="nav-link">من نحن </a></li>
                <li><a href="#contact" class="nav-link">تواصل معنا</a></li>
            </ul>
            <div class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    {{-- <section class="hero" id="home">
        <div class="hero-content">
            <div class="text-rotator">
                <div class="text-set active">
                    <h1 class="glitch-text" data-text="FUTURE IS NOW">FUTURE IS NOW</h1>
                    <p class="subtitle">Enter the next dimension of digital innovation</p>
                </div>
                <div class="text-set">
                    <h1 class="glitch-text" data-text="BEYOND LIMITS">BEYOND LIMITS</h1>
                    <p class="subtitle">Where technology meets infinite possibilities</p>
                </div>
                <div class="text-set">
                    <h1 class="glitch-text" data-text="ELECTRIC DREAMS">ELECTRIC DREAMS</h1>
                    <p class="subtitle">Powering tomorrow's digital revolution today</p>
                </div>
            </div>
        </div>
        <div class="cta-container">
            <a href="#features" class="cta-button cta-primary">Get Started</a>
            <a href="#about" class="cta-button cta-secondary">Learn More</a>
        </div>
    </section> --}}
<section class="hero" id="home" style="position: relative; overflow: hidden;">

    <!-- خلفية الفيديو -->
    <video autoplay muted loop playsinline
           class="hero-video"
           style="
               position: absolute;
               top: 0;
               left: 0;
               width: 100%;
               height: 100%;
               object-fit: cover;
               z-index: -2;
           ">
        <source src="{{ asset('img/2.mp4') }}" type="video/mp4">
    </video>

    <!-- طبقة تعتيم -->
    <div class="video-overlay"></div>

    <div class="hero-content">
    <div class="text-rotator">

        <div class="text-set active">
            <h1 class="glitch-text" data-text="Imagine the Future">Imagine the Future</h1>
            <p class="subtitle">اصنع تجربتك الرقمية بطرق لم تكن ممكنة من قبل</p>
        </div>

        <div class="text-set">
            <h1 class="glitch-text" data-text="Innovate Without Limits">Innovate Without Limits</h1>
            <p class="subtitle">حيث تتحول الأفكار إلى واقع… والواقع إلى إبداع</p>
        </div>

        <div class="text-set">
            <h1 class="glitch-text" data-text="The Power of Imagination">The Power of Imagination</h1>
            <p class="subtitle">نقود التحول الرقمي لنمنحك مستقبلًا يليق بطموحك</p>
        </div>

    </div>
</div>


    <div class="cta-container">
        <a href="#features" class="cta-button cta-primary" style="
    text-align: center;
">ابدأ الآن</a>
        <a href="#about" class="cta-button cta-secondary" style="
    text-align: center;
">اعرف المزيد</a>
    </div>

</section>



    <!-- Features Section with Tabs -->
    {{-- <section class="features" id="features">
        <h2 class="section-title">Core Features</h2>
        <div class="features-container">
            <div class="feature-tabs">
                <div class="tab-item active" data-tab="performance">
                    <span class="tab-icon">⚡</span>
                    <span>Performance</span>
                </div>
                <div class="tab-item" data-tab="security">
                    <span class="tab-icon">🔒</span>
                    <span>Security</span>
                </div>
                <div class="tab-item" data-tab="network">
                    <span class="tab-icon">🌐</span>
                    <span>Network</span>
                </div>
                <div class="tab-item" data-tab="analytics">
                    <span class="tab-icon">📊</span>
                    <span>Analytics</span>
                </div>
                <div class="tab-item" data-tab="integration">
                    <span class="tab-icon">🔧</span>
                    <span>Integration</span>
                </div>
            </div>
            <div class="feature-content">
                <div class="content-panel active" id="performance">
                    <h3>Lightning Fast Performance</h3>
                    <p>Experience unprecedented speed with our quantum-powered infrastructure. Built on cutting-edge technology that delivers results at the speed of thought. Electric Xtra CSS template is brought to you by TemplateMo website.</p>
                    <ul class="feature-list">
                        <li>Sub-millisecond response times</li>
                        <li>99.99% uptime guarantee</li>
                        <li>Automatic scaling based on demand</li>
                        <li>Real-time data synchronization</li>
                    </ul>
                </div>
                <div class="content-panel" id="security">
                    <h3>Military-Grade Security</h3>
                    <p>Your data is protected by the most advanced encryption protocols available. Multi-layered security ensures complete protection against cyber threats. You may tell your friends about TemplateMo free css website and how easy it is.</p>
                    <ul class="feature-list">
                        <li>256-bit AES encryption</li>
                        <li>Biometric authentication</li>
                        <li>Zero-knowledge architecture</li>
                        <li>Real-time threat detection</li>
                        <li>Automated security updates</li>
                    </ul>
                </div>
                <div class="content-panel" id="network">
                    <h3>Global Neural Network</h3>
                    <p>Connect to our worldwide infrastructure that spans across continents. Seamless integration with existing systems and future-proof architecture.</p>
                    <ul class="feature-list">
                        <li>200+ global data centers</li>
                        <li>Intelligent routing algorithms</li>
                        <li>Cross-platform compatibility</li>
                        <li>5G and satellite connectivity</li>
                        <li>Decentralized architecture</li>
                    </ul>
                </div>
                <div class="content-panel" id="analytics">
                    <h3>Advanced Analytics</h3>
                    <p>Harness the power of AI-driven insights to make data-driven decisions. Real-time analytics and predictive modeling at your fingertips.</p>
                    <ul class="feature-list">
                        <li>Machine learning algorithms</li>
                        <li>Predictive analytics</li>
                        <li>Custom dashboard creation</li>
                        <li>Real-time data visualization</li>
                        <li>Automated reporting</li>
                    </ul>
                </div>
                <div class="content-panel" id="integration">
                    <h3>Seamless Integration</h3>
                    <p>Connect with thousands of apps and services through our universal API. Built to work with your existing tools and workflows.</p>
                    <ul class="feature-list">
                        <li>RESTful API architecture</li>
                        <li>WebSocket support</li>
                        <li>SDK for major platforms</li>
                        <li>One-click integrations</li>
                        <li>Custom webhook support</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="features" id="features">
    <h2 class="section-title">مميزات تخيّل الأساسية</h2>

    <div class="features-container">

        <!-- Tabs -->
        <div class="feature-tabs">
            <div class="tab-item active" data-tab="performance">
                <span class="tab-icon">⚡</span>
                <span>الأداء</span>
            </div>
            <div class="tab-item" data-tab="security">
                <span class="tab-icon">🔒</span>
                <span>الأمان</span>
            </div>
            <div class="tab-item" data-tab="network">
                <span class="tab-icon">🌐</span>
                <span>الشبكات</span>
            </div>
            <div class="tab-item" data-tab="analytics">
                <span class="tab-icon">📊</span>
                <span>التحليلات</span>
            </div>
            <div class="tab-item" data-tab="integration">
                <span class="tab-icon">🔧</span>
                <span>التكامل</span>
            </div>
        </div>

        <!-- Content -->
        <div class="feature-content">

            <!-- PERFORMANCE -->
            <div class="content-panel active" id="performance">
                <h3>أداء فائق السرعة</h3>
                <p>
                    نقدّم لك بنية تقنية متقدمة مُحسّنة للسرعة والاعتمادية.
                    في “تخيّل”، نستخدم أحدث التقنيات لضمان تجربة سريعة، سلسة، وذكية للمستخدمين.
                </p>
                <ul class="feature-list">
                    <li>استجابة آنية شبه لحظية</li>
                    <li>توفر دائم بنسبة 99.99%</li>
                    <li>نظام توسّع تلقائي حسب الحاجة</li>
                    <li>مزامنة بيانات في الوقت الفعلي</li>
                </ul>
            </div>

            <!-- SECURITY -->
            <div class="content-panel" id="security">
                <h3>أمان على مستوى المؤسسات</h3>
                <p>
                    تعتمد “تخيّل” أنظمة أمان متعددة الطبقات لضمان حماية بياناتك بأعلى المعايير.
                    يتم فحص التهديدات وإيقافها بشكل فوري للحفاظ على استقرار خدماتك.
                </p>
                <ul class="feature-list">
                    <li>تشفير AES 256-bit</li>
                    <li>توثيق حيوي (Biometric Authentication)</li>
                    <li>بنية تعتمد مبدأ الصفر معرفة (Zero-knowledge)</li>
                    <li>كشف فوري للتهديدات السيبرانية</li>
                    <li>تحديثات أمان تلقائية</li>
                </ul>
            </div>

            <!-- NETWORK -->
            <div class="content-panel" id="network">
                <h3>شبكة عالمية ذكية</h3>
                <p>
                    بنية تخيّل تعتمد على شبكة موزّعة عالمية لضمان السرعة والاستقرار أينما كنت.
                    كل عمليات الاتصال مُحسنة بتقنيات ذكية لضمان الأداء الأمثل.
                </p>
                <ul class="feature-list">
                    <li>أكثر من 200 مركز بيانات عالمي</li>
                    <li>خوارزميات توجيه ذكية</li>
                    <li>توافق كامل عبر الأنظمة المختلفة</li>
                    <li>دعم اتصال 5G والاتصال الفضائي</li>
                    <li>هيكلية موزّعة (Decentralized) عالية الاعتمادية</li>
                </ul>
            </div>

            <!-- ANALYTICS -->
            <div class="content-panel" id="analytics">
                <h3>تحليلات متقدمة بالذكاء الاصطناعي</h3>
                <p>
                    نقدّم لك أدوات تساعدك على اتخاذ قرارات مبنية على البيانات،
                    مع تحليل فوري وتوقعات ذكية تعتمد على تقنيات تعلم الآلة.
                </p>
                <ul class="feature-list">
                    <li>خوارزميات تعلم الآلة</li>
                    <li>تحليلات تنبؤية</li>
                    <li>إنشاء لوحات تحكم مخصصة</li>
                    <li>تصوير البيانات في الوقت الفعلي</li>
                    <li>تقارير تلقائية ذكية</li>
                </ul>
            </div>

            <!-- INTEGRATION -->
            <div class="content-panel" id="integration">
                <h3>تكامل سلس مع جميع الأنظمة</h3>
                <p>
                    صُممت حلول “تخيّل” لتعمل مع أي نظام،
                    مع واجهات برمجة قوية تدعم التكامل مع آلاف التطبيقات والخدمات.
                </p>
                <ul class="feature-list">
                    <li>قواعد API RESTful حديثة</li>
                    <li>دعم WebSocket</li>
                    <li>مكتبات SDK للمنصات الرئيسية</li>
                    <li>تكامل بنقرة واحدة</li>
                    <li>دعم Webhooks مخصص</li>
                </ul>
            </div>

        </div>
    </div>
</section> --}}

<section class="features" id="features">
    <h2 class="section-title">خدمات تخيّل</h2>

    <div class="features-container">

        <!-- Tabs -->
        <div class="feature-tabs">
            <div class="tab-item active" data-tab="ads">
                <span class="tab-icon">📢</span>
                <span>الحملات الإعلانية</span>
            </div>
            <div class="tab-item" data-tab="social">
                <span class="tab-icon">📱</span>
                <span>إدارة السوشيال ميديا</span>
            </div>
            <div class="tab-item" data-tab="content">
                <span class="tab-icon">🎨</span>
                <span>المحتوى الإبداعي</span>
            </div>
            <div class="tab-item" data-tab="web">
                <span class="tab-icon">💻</span>
                <span>تصميم المواقع والهوية</span>
            </div>
            <div class="tab-item" data-tab="ai">
                <span class="tab-icon">🤖</span>
                <span>الحلول الذكية</span>
            </div>
        </div>

        <!-- Content -->
        <div class="feature-content">

            <!-- ADS -->
            <div class="content-panel active" id="ads">
                <h3>إدارة الحملات الإعلانية</h3>
                <p>
                    في ”تخيّل“ ندير حملاتك الإعلانية على جميع المنصات
                    بأسلوب احترافي مبني على التحليل الدقيق والذكاء التسويقي.
                    هدفنا هو تحقيق أفضل عائد على الاستثمار بأقل تكلفة ممكنة.
                </p>
                <ul class="feature-list">
                    <li>إعلانات Google و Meta</li>
                    <li>استهداف دقيق للفئة المناسبة</li>
                    <li>تحسين الميزات الإعلانية لحظيًا</li>
                    <li>تقارير أداء واضحة وسهلة الفهم</li>
                </ul>
            </div>

            <!-- SOCIAL MEDIA -->
            <div class="content-panel" id="social">
                <h3>إدارة السوشيال ميديا</h3>
                <p>
                    نُنشئ حضورًا قويًا وفعّالًا لعلامتك التجارية على وسائل التواصل الاجتماعي
                    من خلال إدارة الحسابات، ابتكار المحتوى، والتفاعل مع الجمهور.
                </p>
                <ul class="feature-list">
                    <li>إدارة حسابات الشركات</li>
                    <li>خطط محتوى شهرية</li>
                    <li>تصميم منشورات احترافية</li>
                    <li>تحليل أداء الحسابات</li>
                    <li>تحسين الهوية البصرية</li>
                </ul>
            </div>

            <!-- CREATIVE CONTENT -->
            <div class="content-panel" id="content">
                <h3>المحتوى الإبداعي</h3>
                <p>
                    نصمم محتوى بصري وصوتي يعبّر عن علامتك التجارية
                    باستخدام الإبداع والاحترافية لنضمن لك تأثيرًا قويًا وظهورًا مميزًا.
                </p>
                <ul class="feature-list">
                    <li>تصميم جرافيك احترافي</li>
                    <li>إنتاج فيديوهات قصيرة (Reels / TikTok)</li>
                    <li>كتابة نصوص تسويقية</li>
                    <li>موشن جرافيك وإعلانات فيديو</li>
                    <li>تصوير منتجات وتسويق بصري</li>
                </ul>
            </div>

            <!-- WEB & BRANDING -->
            <div class="content-panel" id="web">
                <h3>تصميم المواقع والهوية البصرية</h3>
                <p>
                    نصنع مواقع إلكترونية جذابة وسريعة
                    ونعمل على تطوير هوية بصرية متكاملة تعكس رؤية مشروعك بشكل احترافي.
                </p>
                <ul class="feature-list">
                    <li>تصميم مواقع احترافية</li>
                    <li>تصميم شعارات وهوية كاملة</li>
                    <li>تجربة مستخدم UX/UI عالية الجودة</li>
                    <li>تطوير صفحات هبوط عالية التحويل</li>
                    <li>متابعة وصيانة الموقع</li>
                </ul>
            </div>

            <!-- AI SOLUTIONS -->
            <div class="content-panel" id="ai">
                <h3>الحلول الذكية والتكاملات</h3>
                <p>
                    نقدّم حلولًا ذكية تعتمد على الذكاء الاصطناعي
                    لرفع كفاءة عملك وزيادة مبيعاتك من خلال التحautomations والتحليلات الذكية.
                </p>
                <ul class="feature-list">
                    <li>بوتات ذكاء اصطناعي لخدمة العملاء</li>
                    <li>ربط الأنظمة والتطبيقات API</li>
                    <li>تحليلات متقدمة وتوقعات مستقبلية</li>
                    <li>أتمتة العمليات التجارية</li>
                    <li>أنظمة تسويق ذكية مرتبطة بالبيانات</li>
                </ul>
            </div>

        </div>
    </div>
</section>



    <!-- About Section -->
    {{-- <section class="about" id="about">
        <h2 class="section-title">About Electric Xtra</h2>
        <div class="about-content">
            <div class="about-text">
                <h2>Pioneering the Digital Frontier</h2>
                <p>At ELECTRIC XTRA, we're not just building technology – we're crafting the future. Our mission is to bridge the gap between human potential and digital innovation, creating solutions that empower individuals and transform industries.</p>
                <p>Founded by visionaries who saw beyond the limitations of current technology, ELECTRIC XTRA represents a quantum leap in digital infrastructure. We combine cutting-edge research with practical applications to deliver solutions that are both revolutionary and reliable.</p>
                <p>Join us as we redefine what's possible in the digital age. The future isn't something that happens to us – it's something we create together.</p>
            </div>
            <div class="about-visual">
                <div class="about-graphic"></div>
            </div>
        </div>

        <!-- Second row with reversed layout -->
        <div class="about-content" style="margin-top: 80px;">
            <div class="about-visual">
                <div class="about-graphic-alt">
                    <div class="hexagon"></div>
                    <div class="hexagon"></div>
                    <div class="hexagon"></div>
                </div>
            </div>
            <div class="about-text">
                <h2>Innovation at Every Level</h2>
                <p>Our commitment to excellence drives us to push boundaries and challenge conventions. With a team of world-class engineers, designers, and visionaries, we're creating solutions that not only meet today's needs but anticipate tomorrow's challenges.</p>
                <p>From quantum computing to neural networks, from blockchain to AI, we're at the forefront of every technological revolution. Our integrated approach ensures that each innovation builds upon the last, creating a synergy that amplifies our impact.</p>
                <p>Experience the power of true digital transformation. With ELECTRIC XTRA, you're not just adopting technology – you're embracing a philosophy of continuous evolution and limitless possibility.</p>
            </div>
        </div>
    </section> --}}

    <section class="about" id="about">
    <h2 class="section-title">عن تخيّل للتسويق</h2>

    <div class="about-content">
        <div class="about-text">
            <h2>نحو تسويق يصنع الفارق</h2>
            <p>
                في تخيّل للتسويق، لا نكتفي بتنفيذ الأفكار… نحن نخلق التجارب.
                مهمتنا هي دمج الإبداع مع التقنية لنقدّم حلولاً تسويقية مبتكرة ترفع
                مستوى حضور علامتك التجارية وتصنع تأثيرًا حقيقيًا في السوق.
            </p>
            <p>
                انطلقت تخيّل برؤية واضحة: تحويل التسويق من مجرد إعلان إلى تجربة متكاملة.
                ندرس جمهورك، نفهم احتياجاتك، ونبتكر استراتيجيات مبنية على بيانات دقيقة
                لنضمن لك نتائج ملموسة ومستمرة.
            </p>
            <p>
                انضم إلينا في رحلة الارتقاء بعلامتك التجارية.
                فالمستقبل لا يُنتظر… بل يُصنع بالإبداع، والتجربة، والتخيل.
            </p>
        </div>

        <div class="about-visual">
            <div class="about-graphic"></div>
        </div>
    </div>

    <!-- جزء ثاني بعكس الاتجاه -->
    <div class="about-content" style="margin-top: 80px;">
        <div class="about-visual">
            <div class="about-graphic-alt">
                <div class="hexagon"></div>
                <div class="hexagon"></div>
                <div class="hexagon"></div>
            </div>
        </div>

        <div class="about-text">
            <h2>ابتكار في كل مستوى</h2>
            <p>
                في تخيّل، نؤمن أن النجاح يأتي من الجمع بين الإبداع والذكاء التسويقي.
                لذلك يعمل فريقنا من الخبراء والمبدعين على تطوير حلول تسويقية
                تعتمد على أحدث الأدوات والمنهجيات لضمان أفضل النتائج لعملائنا.
            </p>
            <p>
                من إدارة الحملات الإعلانية، إلى بناء الهوية، مرورًا بإنتاج المحتوى
                والإعلانات المرئية — نحن في مقدمة التحولات التي تغيّر عالم التسويق اليوم.
                كل مشروع نقوم به هو فرصة جديدة لإظهار قوة الأفكار وتأثير التخيل.
            </p>
            <p>
                اختبر قوة التسويق الحقيقي.
                مع تخيّل، أنت لا تعتمد على خدمات… أنت تبني مسارًا جديدًا للنمو والتحوّل.
            </p>
        </div>
    </div>
</section>


    <!-- Contact Section -->
    {{-- <section class="contact" id="contact">
        <h2 class="section-title">Get In Touch</h2>
        <div class="contact-container">
            <div class="contact-form">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
            <div class="contact-info">
                <h3>Connect With Us</h3>
                <div class="info-item">
                    <div class="info-icon">📧</div>
                    <div class="info-details">
                        <h4>Email</h4>
                        <p>contact@electricxtra.tech</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">📱</div>
                    <div class="info-details">
                        <h4>Phone</h4>
                        <p>+1 (555) 123-4567</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">📍</div>
                    <div class="info-details">
                        <h4>Location</h4>
                        <p>Neo Tokyo, Sector 7</p>
                    </div>
                </div>
                <div class="map-container">
                    <div class="map-placeholder">
                        <p>Interactive Map</p>
                        <p style="font-size: 0.9rem; margin-top: 10px;">Neo Tokyo, Sector 7</p>
                    </div>
                    <div class="map-overlay"></div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="contact" id="contact">
    <h2 class="section-title">تواصل معنا</h2>

    <div class="contact-container">

        <!-- نموذج الاتصال -->
        <div class="contact-form">
            <form id="contactForm">

                <div class="form-group">
                    <label for="name">الاسم الكامل</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">البريد الإلكتروني</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="subject">موضوع الرسالة</label>
                    <input type="text" id="subject" name="subject" required>
                </div>

                <div class="form-group">
                    <label for="message">محتوى الرسالة</label>
                    <textarea id="message" name="message" required></textarea>
                </div>

                <button type="submit" class="submit-btn">إرسال الرسالة</button>
            </form>
        </div>

        <!-- معلومات التواصل -->
        <div class="contact-info">
            <h3>تواصل معنا مباشرة</h3>

            <div class="info-item">
                <div class="info-icon">📧</div>
                <div class="info-details">
                    <h4>البريد الإلكتروني</h4>
                    <p>contact@takhayal.sa</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">📱</div>
                <div class="info-details">
                    <h4>رقم الهاتف</h4>
                    <p>+966 55 123 4567</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">📍</div>
                <div class="info-details">
                    <h4>العنوان</h4>
                    <p>الرياض، المملكة العربية السعودية</p>
                </div>
            </div>

            <!-- الخريطة -->
            <div class="map-container">
                <div class="map-placeholder">
                    <p>الخريطة التفاعلية</p>
                    <p style="font-size: 0.9rem; margin-top: 10px;">الرياض، السعودية</p>
                </div>
                <div class="map-overlay"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.337144077906!2d46.760624775242135!3d24.715303178024303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f1c92b58d5a97%3A0xdaf49b052c9c8cd7!2s522%2C%20Riyadh!5e0!3m2!1sen!2ssa!4v1763467482749!5m2!1sen!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

            </div>

        </div>
    </div>
</section>
<a href="https://wa.me/966583116161"
   class="whatsapp-float"
   target="_blank"
   aria-label="تواصل عبر واتساب">
    <i class="fa-brands fa-whatsapp"></i>
</a>


    <!-- Footer -->
    {{-- <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="#privacy">اعمالنا</a>
                <a href="#terms">من نحن </a>
                <a href="#careers">تواصل معنا</a>
            </div>
            <p class="copyright">© 2025 ELECTRIC XTRA. All rights reserved. Building tomorrow, today. | Design: <a href="https://templatemo.com" target="_blank" rel="nofollow noopener">TemplateMo</a></p>
        </div>
    </footer> --}}
    <footer>
    <div class="footer-content">

        <div class="footer-links">
            <a href="#features">خدماتنا</a>
            <a href="#about">من نحن</a>
            <a href="#contact">تواصل معنا</a>
        </div>

        <p class="copyright">
            © 2025 تخيّل للتسويق. جميع الحقوق محفوظة.
            | تصميم وتطوير: <strong>تخيّل</strong>
        </p>

    </div>
</footer>

<script src="templatemo-electric-scripts.js"></script>

<script>
    // ============================================
    // نظام Dark/Light Mode المحسّن
    // ============================================
    const themeToggle = document.getElementById('themeToggle');
    const htmlElement = document.documentElement;
    const body = document.body;

    // الحصول على الوضع المحفوظ أو تعيين الافتراضي (dark)
    const savedTheme = localStorage.getItem('theme') || 'dark';

    // تطبيق الوضع عند التحميل
    function applyTheme(theme) {
        if (theme === 'light') {
            body.classList.add('light-mode');
            body.classList.remove('dark-mode');
            themeToggle.textContent = '🌙';
            htmlElement.style.colorScheme = 'light';
        } else {
            body.classList.remove('light-mode');
            body.classList.add('dark-mode');
            themeToggle.textContent = '☀️';
            htmlElement.style.colorScheme = 'dark';
        }
        localStorage.setItem('theme', theme);
    }

    // تطبيق الوضع المحفوظ
    applyTheme(savedTheme);

    // معالج الضغط على الزر
    themeToggle.addEventListener('click', function() {
        const currentTheme = body.classList.contains('dark-mode') ? 'dark' : 'light';
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        applyTheme(newTheme);
    });

    // دعم تفضيلات النظام
    if (window.matchMedia) {
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            if (!localStorage.getItem('theme')) {
                applyTheme(e.matches ? 'dark' : 'light');
            }
        });
    }

    // ============================================
    // تحسينات الأداء والحركات
    // ============================================

    // Smooth scroll behavior
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && document.querySelector(href)) {
                e.preventDefault();
                document.querySelector(href).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all sections and cards
    document.querySelectorAll('section, .card, .feature-tabs, .about-content').forEach(el => {
        observer.observe(el);
    });

    // ============================================
    // Form Validation والتحسينات
    // ============================================
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const subject = document.getElementById('subject').value.trim();
            const message = document.getElementById('message').value.trim();

            // التحقق البسيط
            if (!name || !email || !subject || !message) {
                alert('الرجاء ملء جميع الحقول');
                return;
            }

            // التحقق من صيغة البريد الإلكتروني
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('الرجاء إدخال بريد إلكتروني صحيح');
                return;
            }

            // إضافة تأثير تحميل
            const submitBtn = this.querySelector('.submit-btn');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'جاري الإرسال...';
            submitBtn.disabled = true;

            // محاكاة إرسال
            setTimeout(() => {
                alert('شكرًا! تم استلام رسالتك بنجاح');
                this.reset();
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            }, 1500);
        });
    }

    // ============================================
    // Responsive Menu
    // ============================================
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');

    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            this.classList.toggle('active');
        });

        // إغلاق القائمة عند الضغط على رابط
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                menuToggle.classList.remove('active');
            });
        });
    }

    // ============================================
    // Performance Optimization
    // ============================================

    // Lazy load images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                }
            });
        });

        document.querySelectorAll('img.lazy').forEach(img => imageObserver.observe(img));
    }

    // ============================================
    // Parallax effect (optional enhancement)
    // ============================================
    const parallaxElements = document.querySelectorAll('[data-parallax]');
    if (parallaxElements.length > 0) {
        window.addEventListener('scroll', () => {
            parallaxElements.forEach(el => {
                const scrolled = window.pageYOffset;
                const rate = scrolled * 0.5;
                el.style.transform = `translateY(${rate}px)`;
            });
        }, { passive: true });
    }

    // ============================================
    // Prevent layout shift (CLS optimization)
    // ============================================
    document.documentElement.style.scrollBehavior = 'smooth';

    // Add page visibility handler
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            console.log('Page is hidden');
        } else {
            console.log('Page is visible');
        }
    });
</script>

</body>
</html>
</html>
