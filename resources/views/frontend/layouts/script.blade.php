<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
  // Acc
    $(document).on("click", ".naccs .menu div", function() {
      var numberIndex = $(this).index();

      if (!$(this).is("active")) {
          $(".naccs .menu div").removeClass("active");
          $(".naccs ul li").removeClass("active");

          $(this).addClass("active");
          $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

          var listItemHeight = $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
          $(".naccs ul").height(listItemHeight + "px");
        }
    });
  </script>

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

