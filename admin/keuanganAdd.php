<?php
ob_start(); // Mulai output buffering

// Cek apakah ada output yang dihasilkan sebelumnya di file ini
if (ob_get_length()) {
    ob_end_clean(); // Hapus output sebelumnya
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $tema = $_POST['tema'];
    $jumlah = $_POST['jumlah'];
    $tgl_order = $_POST['tgl_order'];

    // Lakukan sanitasi dan validasi data sebelum menggunakannya dalam kueri SQL

    $sql = "INSERT INTO laporan_keuangan (nama, jenis, tema, jumlah, tgl_order) VALUES ('$nama', '$jenis', '$tema', '$jumlah', '$tgl_order')";
    if ($conn->query($sql) === TRUE) {
        // Tampilkan pesan alert menggunakan JavaScript
        echo '<script type="text/javascript">';
        echo 'alert("Data produk berhasil ditambahkan.");';
        echo 'window.location.href = "index.php?section=keuangan";';
        echo '</script>';
        ob_end_flush(); // Tampilkan output ke browser
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
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
                    <li class="breadcrumb-item"><a href="index.php?section=produk">Keuangan</a></li>
                    <li class="breadcrumb-item active">Tambah Laporan Keuangan</li>
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
                                <h3 class="card-title">Tambah Laporan</h3>
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis">Jenis</label>
                                        <input type="text" name="jenis" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tema">Tema</label>
                                        <input type="text" name="tema" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah">Jumlah Uang</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="number" name="jumlah" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_order">Tanggal</label>
                                        <input type="date" name="tgl_order" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
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