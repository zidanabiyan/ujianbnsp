<!-- resources/views/ekskul.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler - YAYASAN IKHLAS</title>
    <meta name="description" content="Deskripsi singkat tentang ekskul di sekolah">
    <meta name="keywords" content="ekstrakurikuler, ekskul, TrashTrack">

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

    <!-- Custom CSS for Ekskul Page -->
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
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
        
        .ekskul-section {
            padding: 80px 0;
        }
        
        .section-title {
            font-size: 32px;
            margin-bottom: 40px;
            text-align: center;
        }
        
        .gallery-item {
            margin-bottom: 30px;
            overflow: hidden;
            border-radius: 8px;
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
            padding: 15px;
            background-color: #fff;
            text-align: center;
        }
        
        .caption h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .caption p {
            font-size: 16px;
            color: #666;
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

    <!-- ======= Ekstrakurikuler Section ======= -->
    <section id="ekskul" class="ekskul-section">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2 class="section-title">Ekstrakurikuler</h2>
                <p>Deskripsi singkat tentang kegiatan ekstrakurikuler di sekolah.</p>
            </div>

            <div class="row">
                <!-- Kolom untuk Ekskul 1 -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="gallery-item">
                        <img src="{{ asset('herobiz/assets/img/ekskul/bola.jpg') }}" class="img-fluid" alt="Ekskul Bola">
                        <div class="caption">
                            <h3>Ekskul Bola</h3>
                            <p>
                                Ekskul Bola merupakan kegiatan yang bertujuan untuk mengembangkan bakat dan minat siswa dalam olahraga sepak bola. Dalam ekskul ini, siswa dilatih teknik dasar sepak bola dan mempersiapkan mereka untuk berbagai kompetisi di tingkat sekolah maupun luar sekolah.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Kolom untuk Ekskul 2 -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="gallery-item">
                        <img src="{{ asset('herobiz/assets/img/ekskul/tenis.jpg') }}" class="img-fluid" alt="Ekskul Tenis">
                        <div class="caption">
                            <h3>Ekskul Tenis</h3>
                            <p>
                                Ekskul Tenis memungkinkan siswa untuk mengasah kemampuan bermain tenis serta menjadikan olahraga tenis sebagai bagian dari gaya hidup sehat. Di sini, siswa diajarkan teknik dasar, strategi permainan, serta partisipasi dalam turnamen dan kegiatan terkait.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Kolom untuk Ekskul 3 -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="gallery-item">
                        <img src="{{ asset('herobiz/assets/img/ekskul/pramuka.jpg') }}" class="img-fluid" alt="Ekskul Pramuka">
                        <div class="caption">
                            <h3>Ekskul Pramuka</h3>
                            <p>
                                Ekskul Pramuka adalah kegiatan yang mengembangkan keterampilan bertahan hidup, kemandirian, dan kepedulian lingkungan. Melalui ekskul ini, siswa dilatih untuk menjadi pemimpin masa depan yang tangguh dan bertanggung jawab.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Kolom untuk Ekskul 4 -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="800">
                    <div class="gallery-item">
                        <img src="{{ asset('herobiz/assets/img/ekskul/seni.jpg') }}" class="img-fluid" alt="Ekskul Seni">
                        <div class="caption">
                            <h3>Ekskul Seni</h3>
                            <p>
                                Ekskul Seni mengajarkan siswa untuk mengembangkan kreativitas dan ekspresi diri melalui berbagai bentuk seni seperti lukisan, tari, dan musik. Kegiatan ini membantu siswa mengekspresikan ide dan emosi mereka dengan cara yang artistik dan bermakna.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Ekstrakurikuler Section -->

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