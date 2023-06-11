    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Laporan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Laporan Keuangan</li>
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
                        <div class="card-header">
                            <a href="index.php?section=keuanganAdd" class="card-title btn btn-primary card-link">Tambah</a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis</th>
                                        <th>Tema</th>
                                        <th>Jumlah</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Ambil data dari database dan masukkan ke dalam tabel
                                    $sql = "SELECT * FROM laporan_keuangan";
                                    $result = mysqli_query($conn, $sql);
                                    $no = 1;
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $no . "</td>";
                                            echo "<td>" . $row['nama'] . "</td>";
                                            echo "<td>" . $row['jenis'] . "</td>";
                                            echo "<td>" . $row['tema'] . "</td>";
                                            echo "<td>" . $row['jumlah'] . "</td>";
                                            echo "<td>" . $row['tgl_order'] . "</td>";
                                            echo "<td>";
                                            echo "<a href='index.php?section=keuanganUpdate&id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Edit</a>";
                                            echo "<a href='keuanganDelete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm ml-2'>Hapus</a>";
                                            echo "</td>";
                                            echo "</tr>";
                                            $no++;
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div><!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->