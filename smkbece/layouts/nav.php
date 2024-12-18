<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center">
      <!-- Add the logo image before the text -->
      <img src="<?= ASSETS_PATH ?>img/bc.png" alt="Logo" style="max-height: 50px; margin-right: 10px;"> <!-- Logo image -->

      <!-- Text "SMK Bina Cendekia" -->
      <h1 class="sitename">SMK Bina Cendekia</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="<?= BASE_URL ?>index.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : '' ?>">Beranda</a></li>
        <li><a href="<?= BASE_URL ?>smkbece/#visimisi" class="<?= (basename($_SERVER['PHP_SELF']) == 'index.php' && strpos($_SERVER['REQUEST_URI'], '#visimisi') !== false) ? 'active' : '' ?>">Profil</a></li>
        <li><a href="<?= BASE_URL ?>smkbece/#features" class="<?= (basename($_SERVER['PHP_SELF']) == 'index.php' && strpos($_SERVER['REQUEST_URI'], '#features') !== false) ? 'active' : '' ?>">Jurusan</a></li>
        <li><a href="<?= BASE_URL ?>smkbece/#gallery" class="<?= (basename($_SERVER['PHP_SELF']) == 'index.php' && strpos($_SERVER['REQUEST_URI'], '#gallery') !== false) ? 'active' : '' ?>">Fasilitas</a></li>
        <li><a href="<?= BASE_URL ?>smkbece/ppdb.php" class="<?= (basename($_SERVER['PHP_SELF']) == 'ppdb.php') ? 'active' : '' ?>">Info PPDB</a></li>
        <li><a href="<?= BASE_URL ?>smkbece/#contact" class="<?= (basename($_SERVER['PHP_SELF']) == 'index.php' && strpos($_SERVER['REQUEST_URI'], '#contact') !== false) ? 'active' : '' ?>">Kontak</a></li>
      </ul>

      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

  </div>
</header>