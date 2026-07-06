<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    @include('partials.google-tag-manager-head')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تواصل معنا | تخيّل</title>
    <title>تخيّل | وكالة تسويق رقمي بالذكاء الاصطناعي</title>
<meta name="description" content="تخيّل وكالة تسويق رقمي في الرياض متخصصة في الحلول الإبداعية، الذكاء الاصطناعي، وإدارة الحملات الرقمية.">
<link rel="icon" type="image/png" href="{{ asset('public/img/favicon.png') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400&display=swap" rel="stylesheet">


    <style>
        :root {
            --primary: #FF5F1F;
            --primary-soft: #FFE6DB;
            --dark: #0B0B0F;
            --gray: #777;
            --light: #fff;
            --transition: all 0.3s ease;
        }
h1, h2, h3, h4, .section-title {
    font-family: 'Lyon Arabic Display', serif;
}

        * { margin: 0; padding: 0; box-sizing: border-box;  font-family: 'IBM Plex Sans Arabic', sans-serif; }
        body { background: #fafafa; color: var(--dark); line-height: 1.8; overflow-x: hidden; }
        .container { width: 90%; max-width: 1200px; margin: auto; }
        section { padding: 60px 0; }

        /* Navbar */
        .navbar {
            position: sticky; top: 0; z-index: 999;
            display: flex; justify-content: space-between; align-items: center;
            padding: 10px 5%;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        }

        .logo-img { height: 70px; width: auto; transition: var(--transition); }

        .nav-links { display: flex; gap: 25px; list-style: none; align-items: center; }
        .nav-links a { text-decoration: none; font-weight: 700; color: var(--dark); transition: var(--transition); font-size: 0.95rem; }
        .nav-links a:hover, .nav-links a.active { color: var(--primary); }

        .cta-nav {
            background: var(--primary); color: #fff;
            padding: 10px 22px; border-radius: 40px;
            font-weight: 800; text-decoration: none;
            box-shadow: 0 8px 20px rgba(255, 95, 31, 0.3);
            transition: var(--transition);
            display: inline-block;
        }
        .cta-nav:hover { transform: translateY(-2px); box-shadow: 0 12px 25px rgba(255, 95, 31, 0.4); }

        .menu-toggle { display: none; font-size: 1.8rem; cursor: pointer; color: var(--dark); }

        /* Hero Section */
        .contact-hero {
            background: radial-gradient(circle at top right, #fff4ee, #fff);
            text-align: center; padding: 80px 0 40px;
        }
        .contact-hero h1 { font-size: clamp(2rem, 5vw, 3.2rem); margin-bottom: 20px; font-weight: 900; }
        .contact-hero span { color: var(--primary); }
        .contact-hero p { max-width: 650px; margin: auto; color: var(--gray); font-size: 1.1rem; }

        /* Grid System */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        /* Info Card */
        .contact-info {
            background: var(--dark); color: #fff;
            border-radius: 30px; padding: 50px;
            position: relative; overflow: hidden;
            display: flex; flex-direction: column; justify-content: center;
        }
        .contact-info::after {
            content: ""; position: absolute; inset: 0;
            background: radial-gradient(circle at top right, rgba(255,95,31,0.2), transparent 70%);
            pointer-events: none;
        }
        .info-item { position: relative; display: flex; gap: 20px; margin-bottom: 30px; z-index: 1; }
        .info-item i { font-size: 1.6rem; color: var(--primary); margin-top: 5px; }
        .info-item h4 { font-size: 1.2rem; margin-bottom: 5px; font-weight: 800; }
        .info-item p { color: #ccc; font-size: 0.95rem; }

        /* Form Card */
        .contact-form {
            background: #fff; border-radius: 30px; padding: 50px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.06);
        }
        .contact-form h2 { margin-bottom: 30px; font-weight: 900; color: var(--dark); }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 700; font-size: 0.9rem; }
        .form-group input, .form-group textarea {
            width: 100%; padding: 14px 18px; border-radius: 15px;
            border: 1px solid #f0f0f0; background: #fcfcfc;
            font-size: 1rem; outline: none; transition: var(--transition);
        }
        .form-group input:focus, .form-group textarea:focus { border-color: var(--primary); background: #fff; }
        textarea { resize: none; height: 120px; }

        .submit-btn {
            background: var(--primary); color: #fff;
            padding: 16px; width: 100%; border: none;
            border-radius: 15px; font-size: 1.1rem; font-weight: 900;
            cursor: pointer; transition: var(--transition);
        }
        .submit-btn:hover { background: #e8551a; transform: scale(1.01); }

        /* Map */
        .map-container { border-radius: 30px; overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.05); }
        iframe { width: 100%; height: 400px; border: 0; display: block; }

        /* WhatsApp Button */
        .whatsapp-button {
            position: fixed; bottom: 30px; right: 30px;
            background: #25D366; color: #fff; font-weight: bold;
            padding: 12px 25px; border-radius: 50px;
            display: flex; align-items: center; gap: 10px;
            box-shadow: 0 10px 30px rgba(37, 211, 102, 0.3);
            text-decoration: none; z-index: 1000; transition: var(--transition);
        }
        .whatsapp-button:hover { transform: translateY(-5px); box-shadow: 0 15px 35px rgba(37, 211, 102, 0.4); }

        /* Footer */
        footer { background: #0B0B0F; color: #fff; padding: 60px 0 30px; }
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
        }
        .footer-logo img { height: 80px; margin-bottom: 20px; }
        .footer-links h4 { margin-bottom: 20px; color: var(--primary); }
        .footer-links ul { list-style: none; }
        .footer-links ul li { margin-bottom: 12px; }
        .footer-links ul li a { color: #aaa; text-decoration: none; transition: var(--transition); }
        .footer-links ul li a:hover { color: #fff; padding-right: 5px; }
        .socials { display: flex; gap: 15px; margin-top: 20px; }
        .socials a {
            width: 40px; height: 40px; background: rgba(255,255,255,0.05);
            display: flex; align-items: center; justify-content: center;
            border-radius: 50%; color: #fff; transition: var(--transition);
        }
        .socials a:hover { background: var(--primary); transform: translateY(-3px); }
        .copyright { text-align: center; margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.05); color: #666; font-size: 0.9rem; }

        /* Responsive Breakpoints */
        @media (max-width: 991px) {
            .nav-links { display: none; } /* Hidden on tablets to use hamburger */
            .menu-toggle { display: block; }
            .nav-links.show {
                display: flex; flex-direction: column; position: absolute;
                top: 100%; left: 0; width: 100%; background: #fff;
                padding: 30px; box-shadow: 0 15px 30px rgba(0,0,0,0.1); gap: 20px;
            }
            .contact-info, .contact-form { padding: 40px 30px; }
        }

        @media (max-width: 580px) {
            .contact-grid { grid-template-columns: 1fr; }
            .contact-hero { padding: 50px 0 20px; }
            .logo-img { height: 55px; }
            .whatsapp-button { width: 60px; height: 60px; padding: 0; justify-content: center; bottom: 20px; right: 20px; }
            .whatsapp-button span { display: none; }
            .whatsapp-button i { font-size: 1.8rem; margin: 0; }
        }
    </style>
</head>

<body>
    @include('partials.google-tag-manager-body')

<nav class="navbar">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('public/img/cleint/log.jpg') }}" alt="تخيّل" class="logo-img">
        </a>
    </div>

    <ul class="nav-links" id="navLinks">
        <li><a href="{{ route('frontend.home') }}" class="active">الرئيسية</a></li>
        <li><a href="{{ route('frontend.about-us') }}">من نحن</a></li>
        <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
        <li><a href="{{ route('frontend.rooms') }}">مجتمعنا</a></li>
        {{-- <li class="mobile-only"><a href="#" class="cta-nav" style="display: block; text-align: center;">ابدأ رحلة نموك</a></li> --}}
    </ul>

    <div style="display: flex; align-items: center; gap: 15px;">
        <a href="{{ route('contact') }}" class="cta-nav">ابدأ رحلة نموك</a>
        <div class="menu-toggle" id="menuToggle"><i class="fas fa-bars"></i></div>
    </div>
</nav>

<section class="contact-hero">
    <div class="container">
        <h1 data-aos="fade-up">تواصل مع <span>تخيّل</span></h1>
        <p data-aos="fade-up" data-aos-delay="100">
            نحن هنا للاستماع إليك، ومساعدتك على تحويل رؤيتك إلى واقع رقمي ملموس يعزز من نمو أعمالك.
        </p>
    </div>
</section>

<section>
    <div class="container contact-grid">
        <div class="contact-info" data-aos="fade-left">
            <div class="info-item">
                <i class="fas fa-location-dot"></i>
                <div>
                    <h4>موقعنا</h4>
                    <p>الرياض، المملكة العربية السعودية</p>
                </div>
            </div>

            <div class="info-item">
                <i class="fas fa-envelope"></i>
                <div>
                    <h4>البريد الإلكتروني</h4>
                    <p>contact@tkhyl-ai.com</p>



                </div>
            </div>

            <div class="info-item">
                <i class="fas fa-phone"></i>
                <div>
                    <h4>الهاتف</h4>
                   <p>+966 56 897 9769</p>
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

        <div class="contact-form" data-aos="fade-right">
            <h2>أرسل لنا رسالة</h2>
        <form id="whatsappForm" action="#">


                <div class="form-group">
                    <label>الاسم الكامل</label>
                    <input type="text" id="name" placeholder="اكتب اسمك">
                </div>
                <div class="form-group">
                    <label>البريد الإلكتروني</label>
                    <input type="email" id="email" placeholder="example@email.com">
                </div>
                <div class="form-group">
                    <label>موضوع الرسالة</label>
                    <input type="text" id="subject" placeholder="كيف يمكننا مساعدتك؟">
                </div>
                <div class="form-group">
                    <label>الرسالة</label>
                    <textarea id="message" placeholder="اكتب تفاصيل رسالتك هنا"></textarea>
                </div>
                <button type="submit" class="submit-btn">إرسال الرسالة</button>
            </form>
        </div>
    </div>
</section>

<section style="padding-top: 0;">
    <div class="container">
        <div class="map-container" data-aos="zoom-in">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.891353230974!2d46.7339518!3d24.6962613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0369685bf015%3A0x8814d20d7b0d8247!2z2KfYs9iq2KvZhdin2LHZg9mI2YUg2K3Yp9i22YbYqSDZiNmF2LPYsdi52Kkg2KfZhNij2LnZhdin2YQ!5e0!3m2!1sen!2ssa!4v1767121583545!5m2!1sen!2ssa"
                allowfullscreen="" loading="lazy"></iframe>

        </div>
    </div>
</section>

<a href="https://wa.me/966568979769" class="whatsapp-button" target="_blank">
    <i class="fab fa-whatsapp"></i>
    <span>تواصل معنا</span>
</a>

<footer>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-logo">
             <img src="{{ asset('public/img/cleint/log.jpg') }}" alt="تخيّل" >
                <p style="color: #aaa; font-size: 0.9rem;">نحوّل الأفكار إلى تجارب رقمية متكاملة تجمع بين التصميم، التقنية، والابتكار.</p>
                <div class="socials">
                   <a href="https://www.linkedin.com/company/tkhyl-sa" target="_blank"><i class="fab fa-linkedin"></i></a>
    <a href="https://www.instagram.com/tkhyl_sa" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://www.tiktok.com/@tkhyl_sa" target="_blank"><i class="fab fa-tiktok"></i></a>
    <a href="https://x.com/tkhyl_sa" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h4>روابط سريعة</h4>
                <ul>
                  <li><a href="{{ route('frontend.about-us') }}">من نحن</a></li>
                <li><a href="{{ route('frontend.home') }}">خدماتنا</a></li>
                <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
                    <li><a href="{{ route('frontend.rooms') }}">مجتمعاتنا</a></li>
                </ul>
            </div>
            {{-- <div class="footer-links">
                <h4>خدماتنا</h4>
                <ul>
                    <li><a href="#">الهوية البصرية</a></li>
                    <li><a href="#">التسويق الرقمي</a></li>
                    <li><a href="#">تطوير المواقع</a></li>
                    <li><a href="#">صناعة المحتوى</a></li>
                </ul>
            </div> --}}
             <div class="footer-links">
                    <h4 style="margin-bottom: 20px; color: var(--primary);">تواصل معنا</h4>
                   <p style="color:#ccc;font-size:0.9rem;">
    <i class="fas fa-envelope"></i>
    <a href="mailto:contact@tkhyl-ai.com" style="color:#ccc;text-decoration:none;">
        contact@tkhyl-ai.com
    </a>
</p>
<br />
<p style="color:#ccc;font-size:0.9rem;">
    <i class="fas fa-phone"></i>
    <a href="tel:+966568979769" style="color:#ccc;text-decoration:none;">
        966568979769
    </a>
</p>
<br />
<p style="color:#ccc;font-size:0.9rem;">
    <i class="fas fa-map-marker-alt"></i>
    <a href="https://maps.app.goo.gl/1ZMUJ9L4vsjscCVw9"
       target="_blank"
       style="color:#ccc;text-decoration:none;">
        استثماركوم حاضنة ومسرعة الأعمال<br>
        حي, Ar Rabwah, Riyadh 12211
    </a>
</p>

<br />

                </div>
            </div>
        </div>
        <div class="copyright">
            <p>© 2025 tkhyl-ai.com | جميع الحقوق محفوظة لشركة تخيّل.</p>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    // Initialize AOS
    AOS.init({ duration: 1000, once: true, offset: 100 });

    // Mobile Menu Toggle
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('show');
        const icon = menuToggle.querySelector('i');
        icon.classList.toggle('fa-bars');
        icon.classList.toggle('fa-times');
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!menuToggle.contains(e.target) && !navLinks.contains(e.target)) {
            navLinks.classList.remove('show');
            const icon = menuToggle.querySelector('i');
            icon.classList.add('fa-bars');
            icon.classList.remove('fa-times');
        }
    });
</script>

<script>
document.getElementById('whatsappForm').addEventListener('submit', function(e) {
    e.preventDefault(); // منع إعادة تحميل الصفحة

    // بيانات الفورم
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let subject = document.getElementById('subject').value;
    let message = document.getElementById('message').value;

    // رقم واتساب بدون + (مثال: 966568979769)
    let phone = '966568979769';

    // نص الرسالة
    let text = `الاسم: ${name}%0Aالبريد: ${email}%0Aالموضوع: ${subject}%0Aالرسالة: ${message}`;

    // رابط واتساب
    let url = `https://wa.me/${phone}?text=${text}`;

    // فتح الرابط في نافذة جديدة
    window.open(url, '_blank');
});
</script>
</body>
</html>
