<?php
include './koneksi.php';

// Query untuk mengambil gambar terbaru
$sql = "SELECT * FROM landing_page_images ORDER BY updated_at DESC LIMIT 1";
$result = $conn->query($sql);

$image_url = "";
$image_description = "";
if ($result->num_rows > 0) {
    // Ambil data gambar terbaru
    $row = $result->fetch_assoc();
    $image_url = $row['image_url'];
    $image_description = $row['description'];
} else {
    $image_url = 'default-image.jpg';  // Jika tidak ada gambar, tampilkan gambar default
}

$conn->close();
?>
