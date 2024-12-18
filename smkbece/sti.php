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

</body>
<?php
include'./layouts/footer.php';
?>