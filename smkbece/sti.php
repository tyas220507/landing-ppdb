<?php
include ('./layouts/header.php');
?>

<body class="index-page">

<?php
include('./layouts/nav.php');
?>
  <main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background" style="min-height: 100vh; padding: 80px 0;">
  <img src="<?= ASSETS_PATH ?>img/school.jpg" alt="" class="hero-bg">

  <div class="container">
    <div class="row gy-8 justify-content-between">
      <div class="col-lg-5 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
        <img src="<?= ASSETS_PATH ?>img/p1.png" width="600px" height="auto" class=" animated" alt="">
      </div>

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-in">
        <h2>Samsung Tech Institute</h2>
        <p style="text-align: justify;">Samsung Tech Institute (STI) adalah bidang yang fokus pada pengelolaan dan pengembangan sistem informasi untuk mendukung operasional dan pengambilan keputusan. 
          Prosesnya meliputi analisis kebutuhan, desain sistem, pengembangan perangkat lunak, dan pemeliharaan infrastruktur TI.</P>
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

 
 <section id="details" class="details section">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <img src="<?= ASSETS_PATH ?>img/logo_rpl.png" class="img-fluid" alt="" style="width: 100%; height: 500px;">
          </div>
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            <h1>Samsung Tech Institute (STI) SMK Bina Cendekia Cirebon</h1>
            <p style="text-align: justify;">Samsung Tech Institute (STI) adalah bidang yang berfokus pada pengelolaan, analisis, dan pengembangan sistem informasi untuk mendukung operasi dan keputusan organisasi. Proses dalam STI mencakup perancangan, implementasi, dan pemeliharaan sistem yang efisien, serta pengolahan data untuk mendukung pengambilan keputusan yang lebih baik. Tujuan utamanya adalah menciptakan solusi teknologi yang membantu organisasi dalam menghadapi tantangan bisnis dan memaksimalkan efisiensi. Karir di STI termasuk analis sistem, administrator database, dan manajer TI. Keahlian yang dibutuhkan antara lain pemrograman, analisis data, manajemen proyek, dan pemahaman teknologi terkini. STI menghadapi tantangan dalam mengelola data besar, keamanan siber, 
              dan perubahan teknologi, namun juga menawarkan peluang karir yang sangat luas di era digital saat ini.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="gallery" class="gallery section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Mengenai</h2>
  <div><span>Samsung Tech Institute</span> <span class="description-title">di SMK Bina Cendekia Cirebon</span></div>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row g-0">

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="<?= ASSETS_PATH ?>img/gallery/rpl.jpeg" class="glightbox" data-gallery="images-gallery">
          <img src="<?= ASSETS_PATH ?>img/gallery/rpl.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
        </a>
        <div class="caption" style="text-align: center; padding: 5px; background-color: rgba(0, 0, 0, 0.5); color: white; font-size: 12px;">
          Fasilitas RPL
        </div>
      </div>
    </div><!-- End Gallery Item -->
    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="<?= ASSETS_PATH ?>img/gallery/rpl.jpeg" class="glightbox" data-gallery="images-gallery">
          <img src="<?= ASSETS_PATH ?>img/gallery/rpl.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
        </a>
        <div class="caption" style="text-align: center; padding: 5px; background-color: rgba(0, 0, 0, 0.5); color: white; font-size: 12px;">
          Fasilitas RPL
        </div>
      </div>
    </div><!-- End Gallery Item -->
    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="<?= ASSETS_PATH ?>img/gallery/rpl.jpeg" class="glightbox" data-gallery="images-gallery">
          <img src="<?= ASSETS_PATH ?>img/gallery/rpl.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
        </a>
        <div class="caption" style="text-align: center; padding: 5px; background-color: rgba(0, 0, 0, 0.5); color: white; font-size: 12px;">
          Fasilitas RPL
        </div>
      </div>
    </div><!-- End Gallery Item -->
    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="<?= ASSETS_PATH ?>img/gallery/rpl.jpeg" class="glightbox" data-gallery="images-gallery">
          <img src="<?= ASSETS_PATH ?>img/gallery/rpl.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
        </a>
        <div class="caption" style="text-align: center; padding: 5px; background-color: rgba(0, 0, 0, 0.5); color: white; font-size: 12px;">
          Fasilitas RPL
        </div>
      </div>
    </div><!-- End Gallery Item -->
    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="<?= ASSETS_PATH ?>img/gallery/rpl.jpeg" class="glightbox" data-gallery="images-gallery">
          <img src="<?= ASSETS_PATH ?>img/gallery/rpl.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
        </a>
        <div class="caption" style="text-align: center; padding: 5px; background-color: rgba(0, 0, 0, 0.5); color: white; font-size: 12px;">
          Fasilitas RPL
        </div>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="<?= ASSETS_PATH ?>img/gallery/lk.jpeg" class="glightbox" data-gallery="images-gallery">
          <img src="<?= ASSETS_PATH ?>img/gallery/lk.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
        </a>
        <div class="caption" style="text-align: center; padding: 5px; background-color: rgba(0, 0, 0, 0.5); color: white; font-size: 12px;">
          Fasilitas LK
        </div>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="<?= ASSETS_PATH ?>img/gallery/tbo.jpeg" class="glightbox" data-gallery="images-gallery">
          <img src="<?= ASSETS_PATH ?>img/gallery/tbo.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
        </a>
        <div class="caption" style="text-align: center; padding: 5px; background-color: rgba(0, 0, 0, 0.5); color: white; font-size: 12px;">
          Fasilitas TBO
        </div>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="<?= ASSETS_PATH ?>img/gallery/tabus.jpeg" class="glightbox" data-gallery="images-gallery">
          <img src="<?= ASSETS_PATH ?>img/gallery/tabus.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
        </a>
        <div class="caption" style="text-align: center; padding: 5px; background-color: rgba(0, 0, 0, 0.5); color: white; font-size: 12px;">
          Fasilitas Tabus
        </div>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="<?= ASSETS_PATH ?>img/gallery/sti.jpeg" class="glightbox" data-gallery="images-gallery">
          <img src="<?= ASSETS_PATH ?>img/gallery/sti.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
        </a>
        <div class="caption" style="text-align: center; padding: 5px; background-color: rgba(0, 0, 0, 0.5); color: white; font-size: 12px;">
          Fasilitas STI
        </div>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="<?= ASSETS_PATH ?>img/gallery/perpus.jpeg" class="glightbox" data-gallery="images-gallery">
          <img src="<?= ASSETS_PATH ?>img/gallery/perpus.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
        </a>
        <div class="caption" style="text-align: center; padding: 5px; background-color: rgba(0, 0, 0, 0.5); color: white; font-size: 12px;">
          Fasilitas Perpustakaan
        </div>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="<?= ASSETS_PATH ?>img/gallery/toilet.jpg" class="glightbox" data-gallery="images-gallery">
          <img src="<?= ASSETS_PATH ?>img/gallery/toilet.jpg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
        </a>
        <div class="caption" style="text-align: center; padding: 5px; background-color: rgba(0, 0, 0, 0.5); color: white; font-size: 12px;">
          Fasilitas Toilet
        </div>
      </div>
    </div><!-- End Gallery Item -->

    <div class="col-lg-3 col-md-4">
      <div class="gallery-item">
        <a href="<?= ASSETS_PATH ?>img/gallery/rpl.jpeg" class="glightbox" data-gallery="images-gallery">
          <img src="<?= ASSETS_PATH ?>img/gallery/rpl.jpeg" class="img-fluid" alt="" style="width: 110%; height: 240px; object-fit: cover;">
        </a>
        <div class="caption" style="text-align: center; padding: 5px; background-color: rgba(0, 0, 0, 0.5); color: white; font-size: 12px;">
          Fasilitas RPL
        </div>
      </div>
    </div><!-- End Gallery Item -->

  </div>

</div>

</section>
  

</body>
<?php
include'./layouts/footer.php';
?>
