    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Member</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Member</li>
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
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Video</th>
                                        <th>Thumbnail</th>
                                        <!--<th>Kategori</th>-->
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Ambil data dari database dan masukkan ke dalam tabel
                                    $sql = "SELECT * FROM produk_themes";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['judul'] . "</td>";
                                            echo "<td>" . $row['deskripsi'] . "</td>";
                                            echo "<td><a href='" . $row['video'] . "'>Lihat Video</a></td>";
                                            echo "<td><a href='" . $row['thumbnail'] . "'>Kunjungi thumbnail</a></td>";
                                            //echo "<td>" . $row['kategori'] . "</td>";
                                            echo "<td>";
                                            //echo "<a href='produkUpdate.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Edit</a>";
                                            echo "<a href='produkDelete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm ml-2'>Hapus</a>";
                                            echo "</td>";
                                            echo "</tr>";
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