<!-- Start Footer -->
<footer class="text-white text-center pb-1 pt-3" style="background-color: black">
    <p>
        @2022.
        <a href="https://youtu.be/dQw4w9WgXcQ" target="_blank" class="text-white fw-bold">Evannoah Rolimarch Pratama</a>
    </p>
    <p>
        <a href="https://github.com/evannoahrp" target="_blank"><i class="bi bi-github"></i></a>
        <a href="https://www.linkedin.com/in/evannoahrp/" target="_blank"><i class="bi bi-linkedin"></i></a>
        <a href="https://soundcloud.com/evannoahrp" target="_blank"><i class="bi bi-cloud-fog2-fill"></i></a>
        <a href="https://twitter.com/Iycoris_radiata" target="_blank"><i class="bi bi-twitter"></i></a>
    </p>
</footer>
<!-- End Footer -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/2.18.0/core.min.js"></script>
<script src="../git/public/js/anime.min.js"></script>

<!-- Form -->
<script>
    $(document).ready(function () {
        $("#myBtn").click(function () {
            event.preventDefault();
            var name = $("#name").val();
            var email = $("#email").val();
            var subject = $("#subject").val();
            var message = $("#message").val();

            $("#myModal").modal("show");
            document.getElementById("name1").innerHTML = name;
            document.getElementById("email1").innerHTML = email;
            document.getElementById("subject1").innerHTML = subject;
            document.getElementById("message1").innerHTML = message;
        });
    });
</script>

<!-- Contact Flip -->
<script>
    // jquery untuk flip card di section contact
    // membuat fungsi jika melakukan klick fi target kelas xyz
    $(".xyz").click(function () {
        // target kelas xyz
        $(this).toggleClass("flipped");
    });
</script>

<!-- JavaScript Typewriter -->
<script>
    var app = document.getElementById("app");
    var typewriter = new Typewriter(app, {
        loop: true,
    });
    typewriter.pauseFor(1500).typeString("Underdevelopment").pauseFor(3500).deleteAll().start();
</script>

<!-- Particle.js -->
<script src="../git/public/js/particles.js"></script>
<script src="../git/public/js/app.js"></script>

<!-- Nav scroll -->
<script src="../git/public/js/scroll.js"></script>

<!-- Add/Remove active class v2 -->
<script>
    // fungsi jquery untuk ubah active class onScroll
    $(document).ready(function () {
        // memanggil fungsi onScroll
        $(document).on("scroll", onScroll);
    });

    //fungsi onScroll
    function onScroll() {
        // membuat variabel scrollPos dengan isi scrollTop, scrollTop adalah posisi vertikal saat ini dari scroll bar
        var scrollPos = $(document).scrollTop();
        // memberi fungsi pada target .navbar-nav a
        $(".navbar-nav a").each(function () {
            // membuat variabel currLink dengan isi $(this), $(this) merupakan .navbar-nav a
            var currLink = $(this);
            // membuat variabel refElement dengan atribut href dari currLink
            var refElement = $(currLink.attr("href"));
            // membuat statement if else untuk menambahkan atau menghapus kelas "active"
            // jika posisi dari href lebih kecil atau sama dengan posisi dari scroll bar dan
            // posisi dari href di tambah tinggi dari href lebih besar dari posisi scroll bar
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                // menghapus kelas active dari target .navbar-nav a
                $(".navbar-nav a").removeClass("active");
                // menambahkan kelas active ke currLink
                currLink.addClass("active");
            } else {
                currLink.removeClass("active");
            }
        });
    }
</script>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
</script>
</body>

</html>