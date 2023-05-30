<?php
// Mengambil nilai dari form input
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori'];

// Menghubungkan ke database
include "config/config.php";

// Mengunggah foto thumbnail ke dalam folder
$targetDirThumbnail = "localfile/thumbnails/"; // Ubah sesuai dengan direktori penyimpanan thumbnail
$targetFileThumbnail = $targetDirThumbnail . basename($_FILES["thumbnail"]["name"]);
$uploadOk = 1;
$imageFileTypeThumbnail = strtolower(pathinfo($targetFileThumbnail, PATHINFO_EXTENSION));

// Memeriksa apakah file gambar valid
$checkThumbnail = getimagesize($_FILES["thumbnail"]["tmp_name"]);
if ($checkThumbnail === false) {
    echo "File bukan gambar.";
    $uploadOk = 0;
}

// Memeriksa apakah file sudah ada
if (file_exists($targetFileThumbnail)) {
    echo "Maaf, file thumbnail sudah ada.";
    $uploadOk = 0;
}

// Memeriksa ukuran file thumbnail
if ($_FILES["thumbnail"]["size"] > 5000000) {
    echo "Maaf, ukuran file thumbnail terlalu besar. Maksimal 5MB.";
    $uploadOk = 0;
}

// Memeriksa jenis file thumbnail yang diperbolehkan
$allowedImageTypes = array("jpg", "jpeg", "png");
if (!in_array($imageFileTypeThumbnail, $allowedImageTypes)) {
    echo "Maaf, hanya file JPG, JPEG, dan PNG yang diperbolehkan untuk thumbnail.";
    $uploadOk = 0;
}

// Mengunggah file thumbnail jika semua kriteria terpenuhi
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $targetFileThumbnail)) {
        echo "Foto thumbnail berhasil diunggah.";

        // Mengunggah video ke dalam folder
        $targetDirVideo = "localfile/videos/"; // Ubah sesuai dengan direktori penyimpanan video
        $targetFileVideo = $targetDirVideo . basename($_FILES["video"]["name"]);
        $uploadOk = 1;
        $videoFileType = strtolower(pathinfo($targetFileVideo, PATHINFO_EXTENSION));

        // Memeriksa apakah file video valid
        $checkVideo = $_FILES["video"]["type"];
        if (strpos($checkVideo, 'video/') !== 0) {
            echo "File bukan video.";
            $uploadOk = 0;
        }

        // Memeriksa apakah file sudah ada
        if (file_exists($targetFileVideo)) {
            echo "Maaf, file video sudah ada.";
            $uploadOk = 0;
        }

        // Memeriksa ukuran file video
        if ($_FILES["video"]["size"] > 50000000) {
            echo "Maaf, ukuran file video terlalu besar. Maksimal 50MB.";
            $uploadOk = 0;
        }

        // Memeriksa jenis file video yang diperbolehkan
        $allowedVideoTypes = array("mp4", "avi", "mov", "mkv");
        if (!in_array($videoFileType, $allowedVideoTypes)) {
            echo "Maaf, hanya file MP4, AVI, MOV, dan MKV yang diperbolehkan untuk video.";
            $uploadOk = 0;
        }

        // Mengunggah file video jika semua kriteria terpenuhi
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["video"]["tmp_name"], $targetFileVideo)) {
                echo "Video berhasil diunggah.";

                // Menyimpan data ke dalam tabel produk
                $thumbnail = $targetFileThumbnail;
                $video = $targetFileVideo;
                $sql = "INSERT INTO produk_themes (judul, deskripsi, thumbnail, video, kategori, created_at, updated_at) 
                    VALUES 
                    ('$judul', '$deskripsi', '$thumbnail', '$video', '$kategori', NOW(), NOW())";

                if ($conn->query($sql) === TRUE) {
                    header("Location: index.php?section=produk");
                    exit;
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Maaf, terjadi kesalahan saat mengunggah video.";
            }
        }
    } else {
        echo "Maaf, terjadi kesalahan saat mengunggah foto thumbnail.";
    }
}

$conn->close();
