<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $tema = $_POST['tema'];
    $jumlah = $_POST['jumlah'];
    $tgl_order = $_POST['tgl_order'];

    // Lakukan sanitasi dan validasi data sebelum menggunakannya dalam kueri SQL

    $sql = "UPDATE laporan_keuangan SET nama = '$nama', jenis = '$jenis', tema = '$tema', jumlah = '$jumlah', tgl_order = '$tgl_order' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">';
        echo 'alert("Data produk berhasil diupdate.");';
        echo 'window.location.href = "index.php?section=keuangan";';
        echo '</script>';
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Ambil data produk berdasarkan ID
    $id = $_GET['id'];
    $sql = "SELECT * FROM laporan_keuangan WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // Tampilkan formulir dengan data awal
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
                        <li class="breadcrumb-item active">Update Laporan Keuangan</li>
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
                                    <h3 class="card-title">Update Laporan</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis">Jenis</label>
                                            <input type="text" name="jenis" class="form-control" value="<?php echo $row['jenis']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tema">Tema</label>
                                            <input type="text" name="tema" class="form-control" value="<?php echo $row['tema']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah">Jumlah Uang</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp</span>
                                                </div>
                                                <input type="number" name="jumlah" class="form-control" value="<?php echo $row['jumlah']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_order">Tanggal</label>
                                            <input type="date" name="tgl_order" class="form-control" value="<?php echo $row['tgl_order']; ?>" required>
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
<?php
}
?>