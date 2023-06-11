<?php
// Mengambil nilai dari form input
$id = $_GET['id'];

// Memeriksa apakah data produk dengan ID yang diberikan ada di database
$sql = "SELECT * FROM produk_themes WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Memperbarui data produk
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $kategori = $_POST['kategori'];

        // Mengunggah file thumbnail
        if ($_FILES['thumbnail']['name']) {
            $thumbnailPath = 'localfile/thumbnail/' . $_FILES['thumbnail']['name'];
            move_uploaded_file($_FILES['thumbnail']['tmp_name'], $thumbnailPath);
            // Simpan $thumbnailPath ke database sesuai kebutuhan
        }

        // Mengunggah file video
        if ($_FILES['video']['name']) {
            $videoPath = 'localfile/videos/' . $_FILES['video']['name'];
            move_uploaded_file($_FILES['video']['tmp_name'], $videoPath);
            // Simpan $videoPath ke database sesuai kebutuhan
        }

        // Pastikan untuk melakukan sanitasi dan validasi input sebelum menggunakannya dalam kueri SQL

        $sql = "UPDATE produk_themes SET judul = '$judul', deskripsi = '$deskripsi', kategori = '$kategori', updated_at = NOW() WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            header("Location: index.php?section=produk");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    echo "Data produk tidak ditemukan.";
}

$conn->close();
?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="index.php?section=produk">Produk</a></li>
                    <li class="breadcrumb-item active">Update Produk</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Update Produk</h3>
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group" hidden>
                                        <label for="judul" hidden>id</label>
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" name="judul" class="form-control" value="<?php echo $row['judul']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control"><?php echo $row['deskripsi']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="thumbnail">Thumbnail</label>
                                        <input type="file" name="thumbnail" class="form-control-file">
                                        <div class="embed-responsive embed-responsive-14by9 mt-3">
                                            <?php if ($row['thumbnail']) : ?>
                                                <img src="<?php echo $row['thumbnail']; ?>" alt="Thumbnail" controls style="max-width: 100%; height: auto;">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="video">Video</label>
                                        <input type="file" name="video" class="form-control-file" value="">
                                        <div class="embed-responsive embed-responsive-16by9 mt-3">
                                            <?php if ($row['video']) : ?>
                                                <video src="<?php echo $row['video']; ?>" controls></video>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <select name="kategori" class="form-control">
                                            <option value="app" <?php if ($row['kategori'] == 'app') echo 'selected'; ?>>Pernikahan</option>
                                            <option value="card" <?php if ($row['kategori'] == 'card') echo 'selected'; ?>>Khitanan</option>
                                            <option value="web" <?php if ($row['kategori'] == 'web') echo 'selected'; ?>>Aqiqoh</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div><!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->