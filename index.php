<?php
include('./layouts/header.php');
?>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Add the logo image before the text -->
        <img src="assets/img/bc.png" alt="Logo" style="max-height: 50px; margin-right: 10px;"> <!-- Logo image -->

        <!-- Text "SMK Bina Cendekia" -->
        <h1 class="sitename">SMK Bina Cendekia</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#visimisi">Profil</a></li>
          <li><a href="#features">Jurusan</a></li>
          <li><a href="#gallery">Fasilitas</a></li>
          <li><a href="ppdb.php">Info PPDB</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>


  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background" style="min-height: 100vh; padding: 80px 0;">
      <img src="assets/img/school.jpg" alt="" class="hero-bg">

      <div class="container">
        <div class="row gy-8 justify-content-between">
          <div class="col-lg-5 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/p1.png" width="600px" height="auto" class=" animated" alt="">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-in">
            <h2>SMK Bina Cendekia Cirebon</h2>
            <p>Jadilah bagian dari SMK Bina Cendekia Cirebon, tempat di mana masa depanmu dimulai dengan pendidikan berkualitas, keterampilan nyata, dan peluang karir yang tak terbatas!.</p>
            <div class="d-flex">
              <a href="daftar.php" class="btn-get-started">Lihat Selengkapnya >></a>
            </div>
          </div>
        </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>
    </section>

    <!--visimisi-->
    <section id="details" class="details section">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/bc.png" class="img-fluid" alt="" style="width: 75%%; height: 300px;">
          </div>
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            <h1><b>SMK Bina Cendekia Cirebon </b></h1>
            <p>merupakan lembaga pendidikan yang berkomitmen untuk menghasilkan lulusan yang tidak hanya terampil, tetapi juga memiliki karakter yang baik. Dengan kurikulum yang berfokus pada pengembangan keterampilan praktis dan ilmu pengetahuan yang relevan dengan kebutuhan dunia industri, sekolah ini mempersiapkan siswa untuk siap menghadapi tantangan di dunia kerja. Fasilitas yang lengkap dan tenaga pengajar yang berkompeten mendukung setiap siswa untuk berkreasi dan mengasah kemampuan mereka, sehingga siap berkontribusi dalam pembangunan bangsa.</p>
            <p>Di SMK Bina Cendekia Cirebon, siswa tidak hanya belajar, tetapi juga dilatih untuk menjadi profesional yang kompeten dan siap berkarya di berbagai bidang. Sekolah ini memberikan pendidikan yang berfokus pada keterampilan dan penguatan karakter, menjadikannya pilihan tepat bagi mereka yang ingin meniti karier masa depan. Dengan pendidikan yang menyeluruh, SMK Bina Cendekia Cirebon siap mencetak generasi muda yang siap menghadapi tantangan global dan memberikan kontribusi positif bagi masyarakat.</p>
          </div>
        </div>
      </div>
    </section>
    <!--/visimisi>

<--jurusan-->
    <section id="team" class="team section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Keahlian</h2>
        <div><span>Hadir Dengan Pilihan Kompetensi
          </span> <span class="description-title">Keahlian</span></div>
      </div>

      <div class="container">
        <div class="row gy-5">

          <!-- Team Member 1 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic">
                <img src="assets/img/team/a.jpeg" class="img-fluid" alt="" style="width: 100%; height: 500px; object-fit: cover;">
              </div>
              <div class="member-info">
                <h4>Rekayasa Perangkat Lunak (RPL)</h4>
                <span>Rekayasa Perangkat Lunak (RPL) adalah jurusan yang fokus pada pengembangan perangkat lunak</span>
                <p>
                <div class="d-flex">
                  <a href="rpl.php" class="btn-get-started" style="color: #003366;">Lihat Selengkapnya >></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <!-- Team Member 2 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic">
                <img src="assets/img/team/b.jpeg" class="img-fluid" alt="" style="width: 100%; height: 500px; object-fit: cover;">
              </div>
              <div class="member-info">
                <h4>Layanan Kesehatan</h4>
                <span>Jurusan Layanan Kesehatan fokus pada manajemen dan perawatan medis di fasilitas kesehatan.</span>
                <p>
                <div class="d-flex">
                  <a href="lk.php" class="btn-get-started" style="color: #003366;">Lihat Selengkapnya >></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <!-- Team Member 3 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic">
                <img src="assets/img/team/c.jpeg" class="img-fluid" alt="" style="width: 100%; height: 500px; object-fit: cover;">
              </div>
              <div class="member-info">
                <h4>Tata Busana</h4>
                <span>
                  Jurusan Tata Busana mempelajari desain dan pembuatan busana. Lulusan bekerja di industri fashion.</span>
                <p>
                <div class="d-flex">
                  <a href="tabus.php" class="btn-get-started" style="color: #003366;">Lihat Selengkapnya >></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>
      </div>

      <div class="container" style="margin-top: 40px;">
        <div class="row gy-5">

          <!-- Team Member 4 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic">
                <img src="assets/img/team/d.jpeg" class="img-fluid" alt="" style="width: 100%; height: 500px; object-fit: cover;">
              </div>
              <div class="member-info">
                <h4>Desain Komunikasi Visual</h4>
                <span>Jurusan Desain Komunikasi Visual fokus pada pembuatan desain grafis untuk menyampaikan pesan.</span>
                <p>
                <div class="d-flex">
                  <a href="dkv.php" class="btn-get-started" style="color: #003366;">Lihat Selengkapnya >></a>
                </div>
              </div>
            </div>
          </div>
          <!-- End Team Member -->

          <!-- Team Member 5 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic">
                <img src="assets/img/team/a.jpeg" class="img-fluid" alt="" style="width: 100%; height: 500px; object-fit: cover;">
              </div>
              <div class="member-info">
                <h4>Teknik Bodi Otomotif</h4>
                <span>Jurusan Teknik Bodi Otomotif mempelajari perbaikan dan pembuatan bodi kendaraan.</span>
                <p>
                <div class="d-flex">
                  <a href="tbo.php" class="btn-get-started" style="color: #003366;">Lihat Selengkapnya >></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <!-- Team Member 6 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic">
                <img src="assets/img/team/b.jpeg" class="img-fluid" alt="" style="width: 100%; height: 500px; object-fit: cover;">
              </div>
              <div class="member-info">
                <h4>Samsung Tech Institute</h4>
                <span>
                  Samsung Tech Institute adalah pelatihan teknologi untuk karir di Samsung.</span>
                <p>
                <div class="d-flex">
                  <a href="sti.php" class="btn-get-started" style="color: #003366;">Lihat Selengkapnya >></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>
      </div>
    </section>


    <!--/jurusan-->





    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Fasilitas</h2>
        <div><span>Fasilitas</span> <span class="description-title">di SMK Bina Cendekia Cirebon</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/rpl.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/rpl.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
              </a>
              <div class="caption" style="text-align: center; padding: 5px; background-color: rgb(11, 21, 110); color: white; font-size: 12px;">
                Fasilitas RPL
              </div>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/lk.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/lk.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
              </a>
              <div class="caption" style="text-align: center; padding: 5px; background-color:  rgb(11, 21, 110); color: white; font-size: 12px;">
                Fasilitas LK
              </div>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/tbo.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/tbo.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
              </a>
              <div class="caption" style="text-align: center; padding: 5px; background-color:  rgb(11, 21, 110); color: white; font-size: 12px;">
                Fasilitas TBO
              </div>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/tabus.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/tabus.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
              </a>
              <div class="caption" style="text-align: center; padding: 5px; background-color:  rgb(11, 21, 110); color: white; font-size: 12px;">
                Fasilitas Tabus
              </div>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/sti.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/sti.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
              </a>
              <div class="caption" style="text-align: center; padding: 5px; background-color:  rgb(11, 21, 110); color: white; font-size: 12px;">
                Fasilitas STI
              </div>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/perpus.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/perpus.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
              </a>
              <div class="caption" style="text-align: center; padding: 5px; background-color:  rgb(11, 21, 110); color: white; font-size: 12px;">
                Fasilitas Perpustakaan
              </div>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/toilet.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/toilet.jpg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
              </a>
              <div class="caption" style="text-align: center; padding: 5px; background-color:  rgb(11, 21, 110); color: white; font-size: 12px;">
                Fasilitas Toilet
              </div>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/rpl.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/rpl.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
              </a>
              <div class="caption" style="text-align: center; padding: 5px; background-color:  rgb(11, 21, 110); color: white; font-size: 12px;">
                Fasilitas RPL
              </div>
            </div>
          </div><!-- End Gallery Item -->

        </div>

      </div>

    </section>
    <!--Gallery Section -->



    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <img src="assets/img/school.jpg" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <!-- Team Section -->
   
<!-- Section Title -->

  <h1 class="text-center">Wujudkan Impianmu Bersama <br>
SMK BINA CENDEKIA CIREBON</h1>
  <div class="text-center"><h5>SMK Bina Cendekia Cirebon menjadi wahana bertumbuh untuk mempersiapkan diri melanjutkan perjalanan menuntut ilmu di Perguruan Tinggi Negeri.</h5></div>
</div><!-- End Section Title -->

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="center">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/team/d.jpeg" width="25%" class="img-fluid" alt="">
      <img src="assets/img/team/d.jpeg" width="25%" class="img-fluid" alt="">
      <img src="assets/img/team/d.jpeg" width="25%" class="img-fluid" alt="">
    </div>
    <div class="carousel-item">
    <img src="assets/img/team/d.jpeg" width="25%" class="img-fluid" alt="">
      <img src="assets/img/team/d.jpeg" width="25%" class="img-fluid" alt="">
      <img src="assets/img/team/d.jpeg" width="25%" class="img-fluid" alt="">
    </div>
    <div class="carousel-item">
    <img src="assets/img/team/d.jpeg" width="25%" class="img-fluid" alt="">
      <img src="assets/img/team/d.jpeg" width="25%" class="img-fluid" alt="">
      <img src="assets/img/team/d.jpeg" width="25%" class="img-fluid" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
          </div>
</div>
<style>
  .center {
  text-align: center;
}
</style>

<div class="container mt-3">
  <div class="row gy-5">

   
</section><!-- /Team Section -->
          </section>
<!-- End testimonial item -->


    <!-- Details Section -->
    <section id="details" class="details section">
      <div class="container">
        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/p1.png" width="500px" height="auto" class=" animated" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Alasan mengapa Anda harus mempertimbangkan untuk masuk ke SMK Bina Cendekia Cirebon:</h3>
            <p>
            <ul>
              <li style="display: flex; align-items: center; margin: 10px 0; padding: 10px; background-color: #fff; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"><i class="bi bi-check"></i><span> Menggunakan kurikulum yang relevan dengan kebutuhan industri dan perkembangan teknologi.</span></li>
              <li style="display: flex; align-items: center; margin: 10px 0; padding: 10px; background-color: #fff; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"><i class="bi bi-check"></i> <span> Guru yang berpengalaman di bidangnya.</span></li>
              <li style="display: flex; align-items: center; margin: 10px 0; padding: 10px; background-color: #fff; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"><i class="bi bi-check"></i> <span> Dilengkapi dengan ruang kelas yang nyaman dan laboratorium modern.</span></li>
              <li style="display: flex; align-items: center; margin: 10px 0; padding: 10px; background-color: #fff; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"><i class="bi bi-check"></i><span> Memiliki kerjasama dengan perusahaan untuk pengalaman kerja nyata.</span></li>
              <li style="display: flex; align-items: center; margin: 10px 0; padding: 10px; background-color: #fff; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"><i class="bi bi-check"></i> <span> Menyediakan berbagai jurusan yang siap memasuki dunia kerja.</span></li>
              <li style="display: flex; align-items: center; margin: 10px 0; padding: 10px; background-color: #fff; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"><i class="bi bi-check"></i> <span> Fokus pada pengembangan keterampilan interpersonal dan profesional.</span></li>
              <li style="display: flex; align-items: center; margin: 10px 0; padding: 10px; background-color: #fff; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"><i class="bi bi-check"></i> <span> Memiliki akreditasi yang menunjukkan kualitas pendidikan yang tinggi.</span></li>
              <li style="display: flex; align-items: center; margin: 10px 0; padding: 10px; background-color: #fff; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"><i class="bi bi-check"></i><span> Beragam kegiatan ekstrakurikuler yang mendukung pengembangan minat dan bakat.</span></li>
            </ul>

          </div>
        </div><!-- End Features Item -->



      </div>

    </section>
    <!-- End Details Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <div><span>Check Our</span> <span class="description-title">Contact</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section>
    <!-- /Contact Section -->
  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Bootslander</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Bootslander</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>