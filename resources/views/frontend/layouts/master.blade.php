<!DOCTYPE html>
<html lang="ar">

<style>
    .logo {
  display: inline-block;
  max-width: 100%;
}

.logo-img {
  max-width: 180px; /* حجم افتراضي مناسب */
  height: auto;
  transition: all 0.3s ease-in-out;
}

/* الشاشات الصغيرة */
@media (max-width: 768px) {
  .logo-img {
    max-width: 140px;
  }
}

/* الشاشات الصغيرة جدًا (مثل الجوالات) */
@media (max-width: 480px) {
  .logo-img {
    max-width: 120px;
  }
}
</style>



@include('frontend.layouts.head')

<body>
    @include('frontend.layouts.header')
    @yield('content')





@include('frontend.layouts.footer')
@include('frontend.layouts.script')


</body>
</html>
