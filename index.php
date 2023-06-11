<?php
// Memulai session
session_start();

include "admin/config/config.php";

if (isset($_SESSION['user_id']) && $_SESSION['role'] == 'member') {
    header("Location: home.php");
    exit();
} elseif (isset($_SESSION['user_id']) && $_SESSION['role'] == 'admin') {
    header("Location: admin/index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-INVITATION</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/icon_fav.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/icon_fav.png" alt="">
                <span>E-Invitation</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#values">Produk</a></li>
                    <li><a class="nav-link scrollto" href="#services">Fitur</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Tema</a></li>
                    <li><a class='getstarted scrollto' href='admin/login.php'>Masuk</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Inovasi Luar Biasa: Strategi Kreatif Mengundang Tanpa Beranjak!</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Mengundang dengan Kesenangan, Tanpa Harus Beranjak!</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Tentang</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="https://katafina.com/wp-content/uploads/2022/11/3.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Who We Are</h3>
                            <h2>Inovasi Luar Biasa: Strategi Kreatif Mengundang Tanpa Beranjak!</h2>
                            <p>
                                Selamat datang di website undangan elektronik kami, di mana teknologi bertemu dengan kesempurnaan acara. Dengan berbagai desain kreatif, Anda dapat dengan mudah membuat undangan yang menarik dan personal. Keuntungan utama undangan elektronik adalah kemudahan dan kenyamanannya. Tidak perlu mencetak atau mengirim secara fisik, undangan dapat langsung terkirim melalui email atau platform sosial media.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="admin/login.php" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Masuk</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="https://jadinikah.co/wp-content/uploads/2022/06/Katalog02.jpg" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Values Section ======= -->
        <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Produk</h2>
                    <p>List Produk E-Invitation</p>
                </header>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <a href="#portfolio"><img src="https://jadinikah.co/wp-content/uploads/2022/06/Katalog02.jpg" class="img-fluid" alt="">
                                <h3>Undangan Penikahan</h3>
                            </a>
                            <p></p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <a href="#portfolio"><img src="https://jadinikah.co/wp-content/uploads/2022/06/Katalog02.jpg" class="img-fluid" alt="">
                                <h3>Undangan Khitanan</h3>
                            </a>
                            <p></p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="box">
                            <a href="#portfolio"><img src="https://jadinikah.co/wp-content/uploads/2022/06/Katalog02.jpg" class="img-fluid" alt="">
                                <h3>Undangan Aqiqoh</h3>
                            </a>
                            <p></p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Values Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Tema</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-people" style="color: #bb0852;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                                <p>Member</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Produk</h2>
                    <p>Kelebihan Menggunakan Website E-Invitation</p>
                </header>

                <div class="row">

                    <div class="col-lg-6">
                        <img src="https://katafina.com/wp-content/uploads/2022/11/3.png" img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Kemudahan dan Efisiensi</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Personalisasi dan Kreativitas</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Kemudahan Manajemen Tamu</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Fitur RSVP Online</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Penghematan Biaya</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Lingkungan Ramah</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div> <!-- / row -->
            </div>

        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Fitur</h2>
                    <p>Fitur Yang Tersedia</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-pencil-line icon"></i>
                            <h3>Desain Kreatif dan Personalisasi</h3>
                            <p>Website undangan menyediakan beragam template dan desain kreatif yang dapat dipilih sesuai dengan tema acara Anda. Anda dapat menyesuaikan warna, font, dan tata letak untuk membuat undangan yang unik dan personal.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-user-star-line icon"></i>
                            <h3>Manajemen Daftar Tamu</h3>
                            <p>Fitur ini memungkinkan Anda mengelola daftar tamu secara efisien. Anda dapat menambahkan dan mengedit nama tamu, alamat email, dan informasi lainnya. Beberapa platform juga menyediakan fitur pengelompokan tamu berdasarkan kategori atau hubungan dengan tuan rumah.</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-mail-line icon"></i>
                            <h3>Pengiriman Undangan Elektronik</h3>
                            <p>Fitur ini memungkinkan Anda mengirim undangan secara elektronik melalui email, pesan teks, atau platform sosial media. Anda dapat mengatur tanggal pengiriman, menambahkan pesan pribadi, dan melacak undangan yang sudah terkirim.</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-box red">
                            <i class="ri-sticky-note-line icon"></i>
                            <h3>RSVP Online</h3>
                            <p>Fitur RSVP online memudahkan para tamu untuk mengkonfirmasi kehadiran mereka. Tamu dapat merespons undangan langsung melalui website undangan dengan mengisi formulir RSVP atau menggunakan tombol "Konfirmasi Kehadiran". Anda dapat melihat respons tamu dan mengelola data kehadiran dengan mudah.</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-box purple">
                            <i class="ri-image-2-line icon"></i>
                            <h3>Galeri Foto dan Video</h3>
                            <p>Fitur ini memungkinkan Anda membagikan galeri foto dan video terkait acara Anda. Anda dapat mengunggah foto pra-acara atau video undangan untuk memberikan kesan yang lebih hidup dan memukau kepada para tamu.</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-box pink">
                            <i class="ri-dashboard-3-line icon"></i>
                            <h3>Informasi Detail Acara</h3>
                            <p>Website undangan menyediakan ruang untuk mencantumkan informasi penting tentang acara, seperti tanggal, waktu, lokasi, dan petunjuk arah. Anda juga dapat menambahkan deskripsi acara, daftar agenda, dan informasi kontak tambahan agar para tamu mendapatkan informasi yang lengkap dan jelas.</p>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Services Section -->


        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </header>

                <div class="row">
                    <div class="col-lg-6">
                        <!-- F.A.Q List 1-->
                        <div class="accordion accordion-flush" id="faqlist1">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                        Bagaimana cara melakukan pemesanan melalui WhatsApp?
                                    </button>
                                </h2>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Pertama, login ke akun Anda.</li>
                                            <li>Temukan produk yang ingin Anda pesan.</li>
                                            <li>Klik tombol "Pesan melalui WhatsApp" yang tersedia di halaman produk.</li>
                                            <li>Anda akan diarahkan ke aplikasi WhatsApp dengan pesan prapengisian yang berisi detail produk yang Anda pilih.</li>
                                            <li>Konfirmasikan pesanan dan lanjutkan dengan instruksi yang diberikan oleh perwakilan kami melalui chat WhatsApp.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                        Apakah saya perlu membuat akun sebelum memesan melalui WhatsApp?
                                    </button>
                                </h2>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Ya, Anda perlu membuat akun untuk dapat memesan melalui WhatsApp.</li>
                                            <li>Kunjungi situs web kami dan daftar akun dengan mengisi formulir pendaftaran.</li>
                                            <li>Setelah mendaftar, Anda akan menerima detail login untuk mengakses akun Anda.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                        Bagaimana cara membuat akun di situs web Anda?
                                    </button>
                                </h2>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Kunjungi halaman pendaftaran di situs web kami.</li>
                                            <li>Isi formulir pendaftaran dengan informasi yang diperlukan, seperti nama lengkap, alamat email, dan kata sandi.</li>
                                            <li>Klik tombol "Daftar" atau "Buat Akun" untuk menyelesaikan proses pendaftaran.</li>
                                            <li>Anda akan menerima email konfirmasi dengan instruksi lebih lanjut untuk mengaktifkan akun Anda.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">

                        <!-- F.A.Q List 2-->
                        <div class="accordion accordion-flush" id="faqlist2">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                                        Apakah akun yang saya buat di situs web dapat digunakan untuk login ke WhatsApp?
                                    </button>
                                </h2>
                                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Tidak, akun yang dibuat di situs web kami dan akun WhatsApp terpisah.</li>
                                            <li>Setelah membuat akun di situs web, Anda akan menerima detail login yang dapat Anda gunakan untuk mengakses akun Anda di situs web kami.</li>
                                            <li>Namun, untuk memesan melalui WhatsApp, Anda perlu menghubungi kami melalui nomor WhatsApp yang tersedia dan mengikuti instruksi dari perwakilan kami.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                                        Apakah ada biaya tambahan untuk menggunakan layanan pemesanan melalui WhatsApp?
                                    </button>
                                </h2>
                                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Tidak, layanan pemesanan melalui WhatsApp tidak dikenakan biaya tambahan.</li>
                                            <li>Biaya yang terkait dengan produk atau layanan yang Anda pesan akan ditentukan dan dijelaskan oleh perwakilan kami selama proses pemesanan.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                                        Apakah saya bisa mengubah pesanan saya setelah mengirim melalui WhatsApp?
                                    </button>
                                </h2>
                                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Ya, Anda dapat mengubah pesanan Anda setelah mengirim melalui WhatsApp, selama pesanan tersebut belum diproses.</li>
                                            <li>Harap segera menghubungi perwakilan kami melalui WhatsApp untuk meminta perubahan pada pesanan Anda.</li>
                                            <li>Kami akan melakukan yang terbaik untuk membantu Anda dengan perubahan yang diperlukan, tergantung pada ketersediaan dan kondisi pesanan yang ada.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End F.A.Q Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Tema</h2>
                    <p>Pilih Tema Di Sini</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Pernikahan</li>
                            <li data-filter=".filter-card">Khitanan</li>
                            <li data-filter=".filter-web">Aqiqoh</li>
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <?php
                    // Ambil data produk dari database
                    $query = "SELECT * FROM produk_themes";
                    $result = mysqli_query($conn, $query);

                    // Periksa apakah ada data produk yang ditemukan
                    if (mysqli_num_rows($result) > 0) {
                        // Loop melalui setiap baris data produk
                        while ($row = mysqli_fetch_assoc($result)) {
                            $namaProduk = $row['judul'];
                            $deskripsiProduk = $row['deskripsi'];
                            $kategoriProduk = $row['kategori'];
                            $video = $row['video'];
                            $thumbnail = $row['thumbnail'];
                            $linkGambar = "admin/" . $thumbnail;
                            $linkVideo = "admin/" . $video;
                            $nomorWhatsApp = "6281654932383"; // Ubah nomor WhatsApp sesuai kebutuhan
                            $linkDetail = "https://web.whatsapp.com/send?phone=$nomorWhatsApp";

                            // Tampilkan data produk dalam format yang diinginkan
                            echo "
            <div class='col-lg-4 col-md-6 portfolio-item filter-$kategoriProduk'>
                <div class='portfolio-wrap'>
                    <img src='$linkGambar' class='img-fluid' alt='$namaProduk'>
                    <div class='portfolio-info'>
                        <h4>$namaProduk</h4>
                        <p>$deskripsiProduk</p>
                        <div class='portfolio-links'>
                            <a href='$linkVideo' data-gallery='portfolioGallery' class='portfokio-lightbox' title='$namaProduk'><i class='bi bi-plus'></i></a>
                            <a href='admin/login.php' title='More Details' target='_blank'><i class='bi bi-whatsapp'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        ";
                        }
                    } else {
                        // Tampilkan pesan jika tidak ada data produk yang ditemukan
                        echo "No products found.";
                    }
                    ?>

                </div>

            </div>

        </section><!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-12">

                    <div class="col-lg-12">

                        <div class="row gy-4">
                            <div class="col-md-3">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>Kemlagi,<br>Mojokerto, 61353</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+62 812 1670 1945</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--Contact Form-->

                </div>

            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>E-Invitation</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>