<?php
include ('./layouts/header.php');
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pendaftaran PPDB</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: Arial, sans-serif;
    }

    /* Latar belakang menggunakan gambar */
    .background {
      background-image: url('https://www.example.com/background.jpg'); /* Ganti dengan URL gambar latar belakang yang diinginkan */
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      height: 100vh; /* Pastikan gambar menutupi seluruh layar */
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Container untuk form */
    .container {
      width: 80%;
      margin: 0 auto;
      padding: 30px;
      background-color: rgba(255, 255, 255, 0.8); /* Transparansi latar belakang form */
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Judul */
    h2 {
      text-align: center;
      color: #2c3e50;
      font-size: 2.5em;
    }

    .section-title {
      text-align: center;
      margin-bottom: 30px;
    }

    .description-title {
      font-weight: bold;
      color: #2980b9;
    }

    form {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-size: 1.1em;
      color: #333;
      margin-bottom: 8px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
      font-size: 1em;
      box-sizing: border-box;
    }

    .form-group input[type="radio"] {
      width: auto;
      margin-right: 5px;
    }

    .form-group textarea {
      resize: vertical;
      min-height: 100px;
    }

    .form-group button {
      width: 100%;
      padding: 12px;
      background-color: #2980b9;
      color: white;
      font-size: 1.2em;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .form-group button:hover {
      background-color: #3498db;
    }

    .form-group input[type="file"] {
      padding: 0;
    }

    .form-group select,
    .form-group input[type="file"] {
      cursor: pointer;
    }

    /* Responsive design */
    @media (max-width: 768px) {
      .container {
        width: 90%;
      }

      h2 {
        font-size: 2em;
      }
    }
  </style>
</head>
<body>

  <div class="background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Form Pendaftaran PPDB</h2>
        <div><span>Daftarkan Diri Anda</span> <span class="description-title">Sekarang</span></div>
      </div>

      <form action="/submit-ppdb" method="POST">

        <!-- Nama Lengkap -->
        <div class="form-group">
          <label for="nama_lengkap">Nama Lengkap</label>
          <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap" required>
        </div>

        <!-- Tempat Lahir -->
        <div class="form-group">
          <label for="tempat_lahir">Tempat Lahir</label>
          <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir" required>
        </div>

        <!-- Tanggal Lahir -->
        <div class="form-group">
          <label for="tanggal_lahir">Tanggal Lahir</label>
          <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>

        <!-- Jenis Kelamin -->
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <label for="jenis_kelamin_laki">Laki-Laki</label>
          <input type="radio" id="jenis_kelamin_laki" name="jenis_kelamin" value="Laki-Laki" required>
          <label for="jenis_kelamin_perempuan">Perempuan</label>
          <input type="radio" id="jenis_kelamin_perempuan" name="jenis_kelamin" value="Perempuan" required>
        </div>

        <!-- Alamat -->
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea id="alamat" name="alamat" placeholder="Masukkan alamat lengkap" rows="4" required></textarea>
        </div>

        <!-- No. Telepon -->
        <div class="form-group">
          <label for="no_telepon">No. Telepon</label>
          <input type="tel" id="no_telepon" name="no_telepon" placeholder="Masukkan nomor telepon" required>
        </div>

        <!-- Nama Orang Tua -->
        <div class="form-group">
          <label for="nama_ortu">Nama Orang Tua</label>
          <input type="text" id="nama_ortu" name="nama_ortu" placeholder="Nama orang tua/wali" required>
        </div>

        <!-- Pendidikan Orang Tua -->
        <div class="form-group">
          <label for="pendidikan_ortu">Pendidikan Orang Tua</label>
          <select id="pendidikan_ortu" name="pendidikan_ortu" required>
            <option value="">Pilih Pendidikan Orang Tua</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="D1/D2">D1/D2</option>
            <option value="S1">S1</option>
            <option value="S2/S3">S2/S3</option>
          </select>
        </div>

        <!-- Pilihan Jurusan -->
        <div class="form-group">
          <label for="jurusan">Pilihan Jurusan</label>
          <select id="jurusan" name="jurusan" required>
            <option value="">Pilih Jurusan</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Akuntansi">Akuntansi</option>
            <option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
            <option value="Desain Grafis">Desain Grafis</option>
            <option value="Multimedia">Multimedia</option>
          </select>
        </div>

        <!-- Foto Siswa -->
        <div class="form-group">
          <label for="foto_siswa">Foto Siswa</label>
          <input type="file" id="foto_siswa" name="foto_siswa" accept="image/*" required>
        </div>

        <!-- Button Submit -->
        <div class="form-group">
          <button type="submit" class="btn-submit">Daftar</button>
        </div>

      </form>
    </div>
  </div>

</body>
</html>

