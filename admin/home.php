    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="">Dashboard</a></li>
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
                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Data Member</h5>
                            <?php
                            // Query untuk mengambil jumlah produk dari tabel produk
                            $sql = "SELECT COUNT(*) AS total_user FROM users";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $jumlah_user = $row["total_user"];
                            } else {
                                $jumlah_user = 0;
                            }
                            ?>
                            <p class="card-text">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <span class="info-box-icon bg-info"><i class="fas fa-user"></i></span>

                                    <div class="info-box-content">
                                        <a href="index.php?section=member" style="text-decoration: none; color: black;">
                                            <span class="info-box-text">Jumlah Member</span>
                                        </a>
                                            <span class="info-box-number"><?php echo $jumlah_user; ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            </p>
                            <!--<a href="#" class="card-link">Lihat Member</a>-->
                        </div>
                    </div><!-- /.card -->
                </div>

                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Data Produk</h5>
                            <?php
                            // Query untuk mengambil jumlah produk dari tabel produk
                            $sql = "SELECT COUNT(*) AS total_produk FROM produk_themes";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $jumlah_produk = $row["total_produk"];
                            } else {
                                $jumlah_produk = 0;
                            }
                            ?>
                            <p class="card-text">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <span class="info-box-icon bg-danger"><i class="fas fa-box"></i></span>

                                    <div class="info-box-content">
                                        <a href="index.php?section=produk" style="text-decoration: none; color: black;">
                                            <span class="info-box-text">Jumlah Produk</span>
                                        </a>
                                        <span class="info-box-number"><?php echo $jumlah_produk; ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            </p>
                            <!--<a href="index.php?section=produk" class="card-link">Lihat Produk</a>-->
                        </div>
                    </div><!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->