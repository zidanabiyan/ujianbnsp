<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Sekolah - YAYASAN IKHLAS</title>
    <meta name="description" content="Deskripsi singkat tentang profile sekolah">
    <meta name="keywords" content="profile, sekolah, TrashTrack">

    <!-- Favicons -->
    <link href="{{ asset('herobiz/assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('herobiz/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('herobiz/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('herobiz/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('herobiz/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('herobiz/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('herobiz/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('herobiz/assets/css/main.css') }}" rel="stylesheet">

    <!-- Custom CSS for running text -->
    <style>
        body {
            font-family: 'Open Sans', sans-serif; /* Menggunakan font Open Sans untuk seluruh teks pada halaman */
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }
        
        .header {
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            z-index: 1000;
        }
        
        .logo {
            width: 50px;
            height: auto;
        }
        
        #navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        
        #navbar ul li {
            display: inline;
            margin-right: 20px;
        }
        
        .running-text {
            background-color: #f8f9fa; /* Warna latar belakang running text */
            padding: 10px 0;
            text-align: center; /* Pusatkan teks dalam running text */
        }
        
        .running-text p {
            margin: 0;
            font-size: 16px;
            color: #333; /* Warna teks running text */
        }
        
        .profile {
            padding: 80px 0;
        }
        
        .section-title {
            font-size: 32px;
            margin-bottom: 40px;
        }
        
        .profile-image {
            width: 100%;
            max-width: 400px; /* Maksimum lebar gambar */
            margin-bottom: 20px;
            border-radius: 8px;
        }
        
        .profile-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        
        .profile-content {
            font-size: 18px;
            line-height: 1.8;
        }

        .additional-images {
            margin-top: 40px;
        }

        .additional-images .image-wrapper {
            margin-bottom: 30px;
        }

        .additional-images .image-wrapper img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-aos="fade-down">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <img src="{{ asset('herobiz/assets/img/logo.png') }}" alt="TrashTrack Logo" class="logo">
            </a>

            <!-- Navigasi -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#profile">Profil Sekolah</a></li>
                    <li><a class="nav-link scrollto" href="#team">Ekstrakurikuler</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Galeri</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- Running text section -->
    <div class="running-text">
        <div class="container-fluid">
            <p>"Belajar adalah kunci untuk membuka pintu kesuksesan. Jadikan setiap pelajaran sebagai kesempatan untuk tumbuh dan berkembang."</p>
        </div>
    </div>

    <!-- ======= Profile Section ======= -->
    <section id="profile" class="profile">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center">
                <!-- Profil Gambar Kiri -->
                <div class="col-lg-6 order-lg-1 order-2">
                    <img src="{{ asset('herobiz/assets/img/profilesekolah.jpg') }}" alt="Profil Sekolah" class="img-fluid profile-image">
                </div>
                <!-- Kolom Penjelasan -->
                <div class="col-lg-6 order-lg-2 order-1 profile-content">
                    <h1>YAYASAN IKHLAS</h1>
                    <p>
    Pendidikan adalah kunci untuk membuka pintu kesuksesan. Setiap individu dapat tumbuh dan berkembang melalui pembelajaran. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra risus ac tortor hendrerit, ut aliquet nisi imperdiet. In hac habitasse platea dictumst. Proin sed eros in justo interdum ullamcorper vel vitae est. Suspendisse potenti. Sed eu nisi felis. Donec efficitur, diam nec varius blandit, eros lectus egestas sapien, id euismod turpis velit a leo.
</p>
<p>
    Aliquam erat volutpat. In hac habitasse platea dictumst. Proin bibendum tellus non tortor varius dignissim. Fusce ac nisl id lacus lobortis vehicula. Integer quis lorem metus. Nam pharetra dapibus nisi in lacinia. Proin scelerisque vel justo ut maximus. Mauris posuere leo nec purus elementum volutpat.
</p>

                </div>
            </div>
            
            <!-- Tambahan Gambar dan Penjelasan -->
            <div class="row additional-images">
                <!-- Gambar 1 -->
                <div class="col-lg-4">
                    <div class="image-wrapper">
                        <img src="{{ asset('herobiz/assets/img/profilesekolah1.jpg') }}" alt="Additional Image 1">
                        <div class="image-description">
                            <h4>Gedung Sekolah</h4>
                            <p>Foto gedung utama sekolah, tempat di mana kegiatan belajar mengajar dilaksanakan.</p>
                        </div>
                    </div>
                </div>
                <!-- Gambar 2 -->
                <div class="col-lg-4">
                    <div class="image-wrapper">
                        <img src="{{ asset('herobiz/assets/img/profilesekolah2.jpg') }}" alt="Additional Image 2">
                        <div class="image-description">
                            <h4>Kegiatan Ekstrakurikuler</h4>
                            <p>Foto kegiatan ekstrakurikuler, menunjukkan aktivitas siswa di luar jam pelajaran.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Profile Section -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('herobiz/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('herobiz/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('herobiz/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('herobiz/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('herobiz/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('herobiz/assets/js/main.js') }}"></script>

</body>
</html>
