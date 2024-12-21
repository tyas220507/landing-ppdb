<?php
include './koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $image = $_FILES["image"];
    $description = $_POST["description"];
    
    // Menyimpan gambar ke folder server
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image["name"]);
    if (move_uploaded_file($image["tmp_name"], $target_file)) {
        // Menyimpan URL gambar ke database
        $sql = "INSERT INTO landing_page_images (image_url, description) VALUES ('$target_file', '$description')";
        if ($conn->query($sql) === TRUE) {
            echo "New image uploaded successfully";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Error uploading image.";
    }
}

$conn->close();
?>
