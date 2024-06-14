<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - YAYASAN IKHLAS</title>
    <meta name="description" content="Galeri foto-foto sekolah">
    <meta name="keywords" content="galeri, foto, sekolah, TrashTrack">

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

    <!-- Custom CSS for Gallery Page -->
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
        
        .gallery-section {
            padding: 80px 0;
        }
        
        .section-title {
            font-size: 32px;
            margin-bottom: 40px;
            text-align: center;
        }
        
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            margin-bottom: 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease-in-out;
        }
        
        .gallery-item img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease-in-out;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
        }
        
        .caption {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px;
            text-align: center;
            transition: background-color 0.3s ease-in-out;
        }
        
        .caption h3 {
            font-size: 18px;
            margin-bottom: 5px;
            color: #333;
        }
        
        .caption p {
            font-size: 14px;
            color: #666;
        }
        
        .gallery-item:hover .caption {
            background-color: rgba(255, 255, 255, 0.7);
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
                    <li><a class="nav-link scrollto" href="#ekskul">Ekstrakurikuler</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Galeri</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery-section">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2 class="section-title">Galeri</h2>
                <p>Penjelasan singkat tentang galeri foto-foto sekolah.</p>
            </div>

            <div class="row">
                <!-- Galeri Item 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="gallery-item">
                        <img src="{{ asset('herobiz/assets/img/gallery/photo1.jpg') }}" class="img-fluid" alt="Galeri 1">
                        <div class="caption">
                            <h3>Kerja Kelompok</h3>
                            <p>Foto-foto kegiatan sekolah yang berkesan.</p>
                        </div>
                    </div>
                </div>

                <!-- Galeri Item 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="gallery-item">
                        <img src="{{ asset('herobiz/assets/img/gallery/photo2.jpg') }}" class="img-fluid" alt="Galeri 2">
                        <div class="caption">
                            <h3>Pramuka</h3>
                            <p>Siswa-siswa dalam berbagai kegiatan ekstrakurikuler.</p>
                        </div>
                    </div>
                </div>

                <!-- Galeri Item 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="gallery-item">
                        <img src="{{ asset('herobiz/assets/img/gallery/photo3.jpg') }}" class="img-fluid" alt="Galeri 3">
                        <div class="caption">
                            <h3>Lab Komputer</h3>
                            <p>Suasana belajar yang mendukung di lingkungan sekolah.</p>
                        </div>
                    </div>
                </div>

                <!-- Galeri Item 4 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="800">
                    <div class="gallery-item">
                        <img src="{{ asset('herobiz/assets/img/gallery/photo4.jpg') }}" class="img-fluid" alt="Galeri 4">
                        <div class="caption">
                            <h3>Praktik SAINS</h3>
                            <p>Foto-foto kegiatan seni dan budaya di sekolah.</p>
                        </div>
                    </div>
                </div>

                <!-- Galeri Item 5 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1000">
                    <div class="gallery-item">
                        <img src="{{ asset('herobiz/assets/img/gallery/photo5.jpg') }}" class="img-fluid" alt="Galeri 5">
                        <div class="caption">
                            <h3>Praktik di lapangan</h3>
                            <p>Kebersamaan dalam pembelajaran di sekolah.</p>
                        </div>
                    </div>
                </div>

                <!-- Galeri Item 6 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="1200">
                    <div class="gallery-item">
                        <img src="{{ asset('herobiz/assets/img/gallery/photo6.jpg') }}" class="img-fluid" alt="Galeri 6">
                        <div class="caption">
                            <h3>Seminar</h3>
                            <p>Kegiatan ekstrakurikuler yang bermanfaat bagi siswa.</p>
                        </div>
                    </div>
                </div>
            </div><!--<!-- End .row -->
</div><!-- End .container -->
</section><!-- End Gallery Section -->

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

