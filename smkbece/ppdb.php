<?php
// Mengaktifkan pelaporan error untuk debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Menyertakan file yang diperlukan
include './layouts/header.php';
include '../koneksi.php';

// Memeriksa koneksi database
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query SQL
$query = "SELECT ip.id_pendaftaran, s.asal_sekolah, s.jenis_kelamin, ip.status_pendaftaran, j.jurusan, s.nama_lengkap
          FROM info_pendaftaran ip
          JOIN siswa s ON ip.nisn = s.nisn
          JOIN jurusan j ON ip.id_jurusan = j.id_jurusan";

$result = mysqli_query($conn, $query);

// Memeriksa apakah query berhasil
if (!$result) {
    die("Query gagal: " . mysqli_error($conn));
}
?>

<body class="index-page">
    <?php include './layouts/nav.php'; ?>
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="<?= ASSETS_PATH ?>img/hero-bg-2.jpg" alt="" class="hero-bg">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <h3 class="text-dark">Informasi Pendaftaran Siswa Baru 2025</h3>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <input type="search" placeholder="Cari Nama, Asal Sekolah ..." class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Asal Sekolah</th>
                                        <th scope="col">Jurusan</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while ($pendaftaran = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $pendaftaran['nama_lengkap']; ?></td>
                                            <td><?php echo $pendaftaran['jenis_kelamin']; ?></td>
                                            <td><?php echo $pendaftaran['asal_sekolah']; ?></td>
                                            <td><?php echo $pendaftaran['jurusan']; ?></td>
                                            <td><?php echo $pendaftaran['status_pendaftaran']; ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
               
