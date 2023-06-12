    <?php
    $id = $_SESSION['user_id'];

    // Menghandle permintaan upload gambar
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["profile_picture"])) {
        $target_dir = "localfile/profile/";
        $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Cek apakah file gambar valid
        $check = getimagesize($_FILES["profile_picture"]["tmp_name"]);
        if ($check !== false) {
            echo "File adalah gambar - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }

        // Cek apakah file sudah ada
        if (file_exists($target_file)) {
            echo "Maaf, file sudah ada.";
            $uploadOk = 0;
        }

        // Batasi ukuran file
        if ($_FILES["profile_picture"]["size"] > 500000) {
            echo "Maaf, ukuran file terlalu besar.";
            $uploadOk = 0;
        }

        // Izinkan hanya beberapa format file tertentu
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Maaf, hanya format JPG, JPEG, PNG, dan GIF yang diperbolehkan.";
            $uploadOk = 0;
        }

        // Cek jika $uploadOk bernilai 0
        if ($uploadOk == 0) {
            echo "Maaf, file tidak berhasil diupload.";
            // Jika semua cek berhasil, upload file
        } else {
            if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
                echo "File " . basename($_FILES["profile_picture"]["name"]) . " berhasil diupload.";

                // Mendapatkan nama file baru
                $newFileName = basename($_FILES["profile_picture"]["name"]);

                // Mengeksekusi query untuk memperbarui data pengguna dengan nama file gambar baru
                $sql = "UPDATE users SET profile = '$newFileName' WHERE id = '$id'"; // Ganti id dengan id pengguna yang sesuai
                if ($conn->query($sql) === TRUE) {
                    echo "Data pengguna berhasil diperbarui.";
                } else {
                    echo "Terjadi kesalahan saat memperbarui data pengguna: " . $conn->error;
                }
            } else {
                echo "Maaf, terjadi kesalahan saat mengupload file.";
            }
        }
    }

    // Menghandle permintaan menyimpan nama pengguna
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
        $name = $_POST["name"];

        // Mengeksekusi query untuk menyimpan nama pengguna ke dalam database
        $sql = "UPDATE users SET username = '$name' WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
            echo "Nama pengguna berhasil disimpan.";
        } else {
            echo "Terjadi kesalahan saat menyimpan nama pengguna: " . $conn->error;
        }
    }
    ?>

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Setting</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Setting</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Profile Picture</h3>
                        </div>
                        <div class="card-body">
                            <img src="<?php echo $_SESSION['profile']; ?>" class="img-fluid mb-2" alt="Profile">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <input type="file" name="profile_picture" class="form-control-file">
                                <button type="submit" class="btn btn-primary mt-2">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Name</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <form method="POST" action="">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value="<?php echo $_SESSION['username']; ?>">
                                    <button type="submit" class="btn btn-primary mt-2">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>