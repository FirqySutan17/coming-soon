<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="Edukasi teknologi, Kelas Reguler, Coding Indonesia, Belajar Coding, Tips belajar coding, Manfaat belajar coding, coding, 3D game, PC game, soft skill, membuat coding , anak-anak, Clevio, Clevio coder camp, Program kelas, Intro To Mobile, Mobile APP, Mobile Game, Kelas Coding, kelas eskul, kelas Ramadhan, Festival Technopreneur Cilik, Kelas liburan, Program Beaufort, menguasai informasi teknologi, coding anak-anak">
    <meta name="description" content="Clevio Camp adalah kursus coding di indonesia untuk anak - anak hingga dewasa yang mempelajari programming membuat game dan membuat website" />
    <meta name="author" content="Clevio Coder Camp" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="Clevio Camp | Kelas Coding Reguler" />
    <!-- website name -->
    <meta property="og:site" content="http://clev.io/kelas-reguler-2022" />
    <!-- website link -->
    <meta property="og:title" content="Clevio Camp | Kelas Coding Reguler" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="Clevio Camp adalah kursus coding di indonesia untuk anak - anak hingga dewasa yang mempelajari programming membuat game dan membuat website" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="{% static 'images/icon-clevio.png' %}" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="http://clev.io/kelas-reguler-2022" />
    <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Webpage Title -->
    <title>Clevio Camp | Kelas Coding Reguler</title>

    <!-- Styles -->
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    />

    <!-- LightGallery -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.3.0/css/lightgallery.min.css"
      integrity="sha512-e/7+n/bcByOQg6+rGt7Bx12Si0rpj4Xfe3EeS3W2RDSGGG/qT9rC7ZQCVAgaVAmZKZisvZ1DqaMd66TzfVO/Sw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset('styles/lightgallery-bundle.css') }}" />

    <link href="{{ asset('styles/bootstrap.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="{{ asset('styles/swiper.css') }}" rel="stylesheet" />
    <link href="{{ asset('styles/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('styles/stylestff.css') }}" rel="stylesheet" />

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('images/images/icon-clevio.png') }}" />
  </head>
  <body data-spy="scroll" data-target=".fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
      <div class="container-xxl">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Gemdev</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="#header"
          ><img src="{{ asset('images/images/logo-clevio-camp.png') }}" alt="alternative"
        /></a>

        <button
          class="navbar-toggler p-0 border-0"
          type="button"
          data-toggle="offcanvas"
        >
          <span class="navbar-toggler-icon" style="color: black">
            <i class="bx bx-menu"></i
          ></span>
        </button>

        <div
          class="navbar-collapse offcanvas-collapse"
          id="navbarsExampleDefault"
        >
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#statement"
                >Tentang <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#kategori">Benefit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#workshop">Timeline</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#sylabus">Syllabus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#jadwal">Jadwal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#invitation">Daftar</a>
            </li>
          </ul>
          <span class="nav-item social-icons">
            <span class="fa-stack">
              <a href="https://www.facebook.com/ClevioCamp" target="_blank">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-facebook-f fa-stack-1x"></i>
              </a>
            </span>
            <span class="fa-stack">
              <a href="https://www.instagram.com/cleviocamp/" target="_blank">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-instagram fa-stack-1x"></i>
              </a>
            </span>
            <span class="fa-stack">
              <a
                href="https://www.youtube.com/c/ClevioCoderCamp20130502"
                target="_blank"
              >
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-youtube fa-stack-1x"></i>
              </a>
            </span>
          </span>
        </div>
        <!-- end of navbar-collapse -->
      </div>
      <!-- end of container -->
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <div
      id="header"
      class="header"
      style="background-image: url({{ asset('../images/images/bg-main.jpg') }}); background-size: cover"
    >
      <div class="imgBox">
        <img src="{{ asset('images/images/reguler-logo.png') }}" alt="" />
        <h4>
          Online Class via
          <div class="boxZoom">
            <img src="{{ asset('images/images/zoom.png') }}{% static 'img/images/' %}" alt="" />
          </div>
        </h4>
        <h4>
          Ikuti kelas Reguler mulai Februari 2022
          <br />
          Pendaftaran dibuka: 06 Januari 2022
        </h4>
        <hr class="divGreen" />

        <a class="btnDaftar" href="https://bit.ly/pendaftarankelasreguler2022"
          >Daftar Sekarang</a
        >
      </div>
    </div>
    <!-- end of header -->

    <center>
      <div id="timer">
        <div class="container bg-color" data-aos="fade-up">
          <p class="caption-timer">COUNTDOWN</p>
          <p id="demo"></p>
        </div>
      </div>
    </center>

    <!-- Statement -->
    <div id="statement" class="basic-1">
      <div class="container-xxl">
        <div class="row">
          <div class="col-12 problemGenNow">
            <h4>
              Ingin anak-anak belajar coding tanpa keluar rumah?
              <span class="colorWhite">
                <br />
                Tapi takut komunikasi anak-anak terbatas?</span
              >
            </h4>
            <h4>
              Ingin meningkatkan literasi membaca anak-anak?
              <span class="colorWhite">
                <br />
                Tapi bingung melalui cara apa?</span
              >
            </h4>
            <h4>
              Ingin ada kegiatan yang seru & bermanfaat untuk anak-anak sehabisa pulang sekolah?
              <span class="colorWhite">
                <br />
                Tapi tidak mau cuma maen game aja?</span
              >
            </h4>
          </div>
        </div>
        <div class="row">
          <div class="col-xxl-12">
            <div class="text-container">
              <h4 style="padding-bottom: 20px">
                Atasi hal tersebut dengan ikuti:
              </h4>
              <h1 data-aos="fade-up">
                Kelas Reguler Online <br />
                <span class="colorGreen">Clevio Coder Camp</span>
              </h1>

              <p class="p-large" data-aos="fade-up" data-aos-delay="60">
                <strong>Kelas Reguler Online Clevio Coder Camp</strong> adalah
                kelas yang berjalan seminggu sekali. Semester kali ini Kelas Reguler Clevio di level 3D Game 
                dan PC Game akan bekerja sama dengan <strong>BacaPibo</strong> untuk pembelajaran literasi. Pembelajaran ini 
                bertujuan mengasah perkembangan daya imajinasi dan empati, serta mendorong kemampuan anak 
                dalam menganalisa dan berpikir kritis. Pembelajaran ini akan diterapkan menggunakan tema-tema 
                materi yang diambil dari buku-buku digital perpustakaan <strong>BacaPibo</strong> .
              </p>

              <p class="p-large" data-aos="fade-up" data-aos-delay="60"></p>
              <!-- <img src="images/statement.jpg" alt="alternative">
                        <h6>Donna Staple, Founder</h6> -->

              <p class="p-large" data-aos="fade-up" data-aos-delay="80">
                Presented by:
              </p>
              <div class="row desktop-view">
                <div class="col-xxl-12">
                  <img
                    src="{{ asset('images/images/logos-reguler.png') }}"
                    alt="alternative"
                    data-aos="fade-up"
                    data-aos-delay="90"
                  />
                </div>
              </div>

              <div class="row mobile-view">
                <div class="col-xxl-6">
                  <img
                    src="{{ asset('images/images/logo-clevio-camp.png') }}"
                    alt="alternative"
                    data-aos="fade-up"
                    data-aos-delay="90"
                  />
                </div>
                <div class="col-xxl-6">
                  <img
                  style="margin-top: 50px; width: 300px"
                    src="{{ asset('images/images/bacapibo.png') }}"
                    alt="alternative"
                    data-aos="fade-up"
                    data-aos-delay="90"
                  />
                </div>
              </div>
            </div>
            <!-- end of text-container -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of statement -->

    <!-- Details 1 -->
    <div id="kategori" class="basic-2">
      <div class="container-xxl">
        <div class="text-container">
          <h1 data-aos="fade-up">
            Benefit yang akan
            <br />
            <span class="colorGreen"> Kamu Dapatkan! </span>
          </h1>
        </div>

        <div class="wrapper">
          <div class="card">
            <div class="card-body">
              <img src="{{ asset('images/images/benefit/icon1.png') }}" alt="" />
              <h5>
                Skill Komunikasi &
                <br />
                Presentasi
              </h5>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="{{ asset('images/images/benefit/icon2.png') }}" alt="" />
              <h5>
                Problem
                <br />
                Solving
              </h5>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="{{ asset('images/images/benefit/icon3.png') }}" alt="" />
              <h5>
                Bintang
                <br />
                Karakter
              </h5>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="{{ asset('images/images/benefit/icon4.png') }}" alt="" />
              <h5>
                Kepekaan
                <br />
                Sosial
              </h5>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="{{ asset('images/images/benefit/icon5.png') }}" alt="" />
              <h5>
                Membuat
                <br />
                Karya Sendiri
              </h5>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="{{ asset('images/images/benefit/icon6.png') }}" alt="" />
              <h5
                style="
                  padding: 20px 0px 0px 0px;
                  height: 127px;
                  display: flex;
                  align-content: center;
                  justify-content: center;
                  align-items: center;
                "
              >
                Kurikulum
              </h5>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="{{ asset('images/images/benefit/icon7.png') }}" alt="" />
              <h5
                style="
                  padding: 20px 0px 0px 0px;
                  height: 127px;
                  display: flex;
                  align-content: center;
                  justify-content: center;
                  align-items: center;
                "
              >
                Bilingual
              </h5>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="{{ asset('images/images/benefit/icon8.png') }}" alt="" />
              <h5>
                Product
                <br />
                Launching
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of details 1 -->

    <!-- Statement -->
    <div id="workshop" class="basic-1">
      <div class="container-xxl">
        <div class="text-container">
          <h1 data-aos="fade-up">
            Timeline <br />
            <span class="colorGreen">Kelas Reguler</span>
          </h1>
        </div>

        <div class="row">
          <div class="col-xxl-12">
            <div class="timeline">
              <div class="boxes left" data-aos="fade-up">
                <div class="content">
                  <h2>Mulai Kelas</h2>
                  <p>
                    Kelas akan dimulai dari tanggal akan diadakan secara <br />
                    <b> 2 Februari 2022</b>
                  </p>
                </div>
              </div>
              <div class="boxes right" data-aos="fade-up">
                <div class="content">
                  <h2>Semester</h2>
                  <p>
                    <b>Satu semester</b> kelas akan berjumlah
                    <b
                      >16 kali pertemuan <br />
                      (4 bulan)</b
                    >
                  </p>
                </div>
              </div>
              <div class="boxes left" data-aos="fade-up">
                <div class="content">
                  <h2>Jadwal Kelas</h2>
                  <p>
                    Kelas akan berjalan
                    <b
                      >Seminggu Sekali <br />
                      (Senin - Sabtu)</b
                    >
                  </p>
                </div>
              </div>
              <div class="boxes right" data-aos="fade-up">
                <div class="content">
                  <h2>Durasi Kelas</h2>
                  <p>
                    Durasi perhari mulai <b>60 menit (Kelas 1 - 3 SD)</b> dan
                    <br />
                    <b> 90 menit (Kelas 4 SD keatas) </b>
                  </p>
                </div>
              </div>

              <div class="boxes left" data-aos="fade-up">
                <div class="content">
                  <h2>Waktu Kelas</h2>
                  <p>
                    Kelas dimulai tersedia <b>2 waktu</b> mulai<b>
                      <br />
                      13.00 WIB atau 15.30 WIB</b
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of container -->
    </div>
    <!-- end of statement -->

    <!-- Sylabus -->
    <section id="sylabus" class="basic-2">
      <div class="container-xxl">
        <div class="text-container">
          <h1 data-aos="fade-up">
            Syllabus <br />
            <span class="colorGreen">Kelas Reguler</span>
          </h1>
        </div>

        <div id="lightgallery" class="owl-carousel carouselSylabus">
          <a href="{{ asset('images/images/syllabus/img1.jpg') }}">
            <img src="{{ asset('images/images/syllabus/img1.jpg') }}" alt="" />
          </a>

          <a href="{{ asset('images/images/syllabus/img2.jpg') }}">
            <img src="{{ asset('images/images/syllabus/img2.jpg') }}" alt="" />
          </a>

          <a href="{{ asset('images/images/syllabus/img3.jpg') }}">
            <img src="{{ asset('images/images/syllabus/img3.jpg') }}" alt="" />
          </a>

          <a href="{{ asset('images/images/syllabus/img4.jpg') }}">
            <img src="{{ asset('images/images/syllabus/img4.jpg') }}" alt="" />
          </a>

          <a href="{{ asset('images/images/syllabus/img5.jpg') }}">
            <img src="{{ asset('images/images/syllabus/img5.jpg') }}" alt="" />
          </a>

          <a href="{{ asset('images/images/syllabus/img6.jpg') }}">
            <img src="{{ asset('images/images/syllabus/img6.jpg') }}" alt="" />
          </a>

        </div>
      </div>
    </section>
    <!-- end of sylabus -->

    <!-- Details 1 -->
    <div id="kategori" class="basic-1">
      <div class="container-xxl">
        <div class="text-container">
          <h1 data-aos="fade-up">
            Ikuti Kelasnya!
            <br />
            <span class="colorGreen"> Dapatkan Prestasi! </span>
          </h1>
        </div>

        <div class="wrapperGift">
          <div class="card">
            <div class="card-body">
              <img src="{{ asset('images/images/prestasi/icon1.png') }}" alt="" />
              <h5>
               Sertifikat
              </h5>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="{{ asset('images/images/prestasi/icon2.png') }}" alt="" />
              <h5>
                Rekaman
                <br />
                Kelas
              </h5>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="{{ asset('images/images/prestasi/icon3.png') }}" alt="" />
              <h5>
                Merchandise
              </h5>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="{{ asset('images/images/prestasi/icon4.png') }}" alt="" />
              <h5>
                Licence
                <br />
                to Code
              </h5>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="{{ asset('images/images/prestasi/icon5.png') }}" alt="" />
              <h5>
               Raport
              </h5>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="{{ asset('images/images/prestasi/icon6.png') }}" alt="" />
              <h5>
                Perpustakaan <br> Digital <img src="{{ asset('images/images/bacapibo.png') }}" alt="" style="border: none;
                border-radius: 0;
                box-shadow: none;
                width: 40%;
                background: none;
                padding: 0px;
                left: -31px;
                top: 11px;">
              </h5>
            </div>
          </div>


        </div>
      </div>
    </div>
    <!-- end of details 1 -->

    <!-- Jadwal -->
    <section id="jadwal" class="basic-2">
      <div class="container-xxl">
        <div class="text-container">
          <h1 data-aos="fade-up">
            Jadwal <br />
            <span class="colorGreen">Kelas Reguler</span>
          </h1>
        </div>

        <div id="lightgalleryJadwal" class="owl-carousel carouselSylabus">
          <a href="{{ asset('images/images/jadwal/jadwal-01.jpg') }}">
            <img src="{{ asset('images/images/jadwal/jadwal-01.jpg') }}" alt="" />
          </a>

          <a href="{{ asset('images/images/jadwal/jadwal-02.jpg') }}">
            <img src="{{ asset('images/images/jadwal/jadwal-02.jpg') }}" alt="" />
          </a>

          <a href="{{ asset('images/images/jadwal/jadwal-03.jpg') }}">
            <img src="{{ asset('images/images/jadwal/jadwal-03.jpg') }}" alt="" />
          </a>

          <a href="{{ asset('images/images/jadwal/jadwal-04.jpg') }}">
            <img src="{{ asset('images/images/jadwal/jadwal-04.jpg') }}" alt="" />
          </a>

          <a href="{{ asset('images/images/jadwal/jadwal-05.jpg') }}">
            <img src="{{ asset('images/images/jadwal/jadwal-05.jpg') }}" alt="" />
          </a>

          <a href="{{ asset('images/images/jadwal/jadwal-06.jpg') }}">
            <img src="{{ asset('images/images/jadwal/jadwal-06.jpg') }}" alt="" />
          </a>

          <a href="{{ asset('images/images/jadwal/jadwal-07.jpg') }}">
            <img src="{{ asset('images/images/jadwal/jadwal-07.jpg') }}" alt="" />
          </a>
        </div>
      </div>
    </section>
    <!-- end of jadwal -->

    <!-- Jadwal -->
    <section id="sylabus" class="basic-1">
      <div class="container-xxl">
        <div class="text-container">
          <h1 data-aos="fade-up">
            Testimoni <br />
            <span class="colorGreen">Kelas Reguler</span>
          </h1>
        </div>

        <div class="owl-carousel carouselSylabus">
          
          <div class="boxCard">
            <div class="imgBox">
              <img src="{{ asset('images/images/icon-clevio.png') }}" alt="">
            </div>
            <div class="contentBox">
              <i class='bx bxs-quote-alt-left'></i>&nbsp;
              Anak saya jadi lebih fokus dan gampang menata apa yang dia mau setelah ikut kelas Clevio Coder Camp
              &nbsp;<i class='bx bxs-quote-alt-right' ></i>
              <br>
              <div style="margin-top: 20px; color: #000;">
                <span style="font-size: 14px;">Ernest Ferdinan Syarif</span>
                <br>
                <span style="font-size: 12px;">Ortu Coder</span>
              </div>
              
            </div>
          </div>

          <div class="boxCard">
            <div class="imgBox">
              <img src="{{ asset('images/images/icon-clevio.png') }}" alt="">
            </div>
            <div class="contentBox">
              <i class='bx bxs-quote-alt-left'></i>&nbsp;
              Pelayanannya sudah bagus dan sangat cepat. Sebenarnya sebelum pandemi sudah pengen ikut kelas Clevio. Tapi, karena gak bisa keluar rumah, untungnya Clevio menyediakan kelas online jadi gampang belajarnya. Kelasnya bagus dan keren untuk mengembangkan anak yang kreatif jadi bisa bikin lebih pede dan punya skill tambaha untuk masa depan.
              &nbsp;<i class='bx bxs-quote-alt-right' ></i>
              <br>
              <div style="margin-top: 20px; color: #000;">
                <span style="font-size: 14px;">Ibu Intan </span>
                <br>
                <span style="font-size: 12px;">Ortu Coder</span>
              </div>
            </div>
          </div>

          <div class="boxCard">
            <div class="imgBox">
              <img src="{{ asset('images/images/icon-clevio.png') }}" alt="">
            </div>
            <div class="contentBox">
              <i class='bx bxs-quote-alt-left'></i>&nbsp;
              Anaknya antusias, apalagi dikelas yang ke-3 ini dia sudah beradaptasi dengan baik. Dengan anak saya mengikuti kelas Clevio ini dia bisa melakukan kegiatan yang positif, membuat dia jadi lebih kreatif dan berpikir logis. Jadi sangat bagus untuk orang tua yang ingin anaknya jadi lebih kreatif dan berpikir logis.
              &nbsp;<i class='bx bxs-quote-alt-right' ></i>
              <br>
              <div style="margin-top: 20px; color: #000;">
                <span style="font-size: 14px;">Bapak Agung</span>
                <br>
                <span style="font-size: 12px;">Ortu Coder</span>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- end of jadwal -->

    <!-- Invitation -->
    <div id="invitation" class="basic-6">
      <div class="container-xxl">
        <div class="wrapperInvitation">
          <div class="row">
            <div class="col-md-6 col-sm-12 tal">
              <h1>
                Yuk Ciptakan Karya-Mu
              </h1>
              <h3>
                Dikelas Reguler Clevio!
              </h3>
            </div>
            <div class="col-md-6 col-sm-12 boxJoin">
              <a class="btnJoin" href="https://bit.ly/pendaftarankelasreguler2022">Daftar Sekarang!</a>
              <p>Mau coba dulu? <a href="https://bit.ly/trialclevio">Yuk Ikuti Trialnya!</a></p>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- end of invitation -->

    <!-- Footer -->
    <div class="footer">
      <div class="container-xxl">
        <div class="row">
          <div class="col-xxl-12">
            <div class="image-container">
              <img
                src="{% static 'images/white-logo.png' %}"
                alt=""
                style="width: 200px"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of footer -->

    <!-- Copyright -->
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="p-small" style="color: #ffffff">
              2022 Copyright ©
              <a class="no-line" href="http://clev.io" style="color: #ffffff"
                >Clevio Camp</a
              >
            </p>
          </div>
          <!-- end of col -->
        </div>
        <!-- enf of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of copyright -->
    <!-- end of copyright -->

    <!-- Scripts -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    <script src="{{ asset('scripts/jquery.min.js') }}"></script>
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('scripts/bootstrap.min.js') }}"></script>
    <!-- Bootstrap framework -->
    <script src="{{ asset('scripts/jquery.easing.min.js') }}"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('scripts/swiper.min.js') }}"></script>
    <!-- Swiper for image and text sliders -->
    <script src="{{ asset('scripts/jquery.magnific-popup.js') }}"></script>
    <!-- Magnific Popup for lightboxes -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="{{ asset('scripts/lightgallery.min.js') }}"></script>
    <script src="{{ asset('scripts/lg-thumbnail.umd.js') }}"></script>
    <script src="{{ asset('scripts/lg-zoom.umd.js') }}"></script>

    <script src="{{ asset('scripts/scripts.js') }}"></script>
    <!-- Custom scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script>
      // Set the date we're counting down to
      var countDownDate = new Date('February 6, 2022 10:00:00').getTime();

      // Update the count down every 1 second
      var x = setInterval(function () {
        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor(
          (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById('demo').innerHTML =
          days + ' D ' + hours + ' H ' + minutes + ' M ' + seconds + ' S ';

        // If the count down is finished, write some text
        if (distance < 0) {
          clearInterval(x);
          document.getElementById('demo').innerHTML = 'EXPIRED';
        }
      }, 1000);
    </script>

    <script type="text/javascript">
      lightGallery(document.getElementById('lightgallery'), {
        plugins: [lgZoom, lgThumbnail],
      });
    </script>

<script type="text/javascript">
  lightGallery(document.getElementById('lightgalleryJadwal'), {
    plugins: [lgZoom, lgThumbnail],
  });
</script>

    <script>
      $('.carouselSylabus').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
          1000: {
            items: 3,
          },
          1280: {
            items: 3,
          },
        },
      });
    </script>
  </body>
</html>
