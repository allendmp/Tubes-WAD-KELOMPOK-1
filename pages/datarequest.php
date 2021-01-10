<!DOCTYPE html>
<html lang="en">

<head>

<?php include("header.php"); ?>

</head>
<?php if($tampil['role']=="rt"){ ?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("sidebar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("main-header.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Request Swab</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Pengaju</th>
                                            <th>NIK</th>
                                            <th>Alamat</th>
                                            <th>Tgl Swab</th>
                                            <th>Jumlah Swab</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Pengaju</th>
                                            <th>NIK</th>
                                            <th>Alamat</th>
                                            <th>Tgl Swab</th>
                                            <th>Jumlah Swab</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $query2 = "select * from swab LEFT OUTER JOIN user ON swab.id_user=user.id_user";
                                        $hasil2 = mysqli_query($koneksi,$query2);
                                        while($tampil2=mysqli_fetch_array($hasil2)){  
                                    ?>
                                        <tr>
                                            <td><?php echo $tampil2['nama']; ?></td>
                                            <td><?php echo $tampil2['nik']; ?></td>
                                            <td><?php echo $tampil2['alamat']; ?></td>
                                            <td><?php echo date('d/m/Y', strtotime($tampil2['tgl'])); ?></td>
                                            <td><?php echo $tampil2['jumlah']; ?></td>
                                            <td>
                                                <img src="../img/<?php echo $tampil2['bukti']; ?>" width="200px">
                                            </td>
                                            <td>
                                                <?php if($tampil['role']=="rt"){ ?>
                                                    <a href="act-datarequest.php?id_swab=<?php echo $tampil2['id_swab'];?>" onclick="return confirm('Yakin Akan Merubah Status?')">
                                                <?php
                                                }
                                                    if($tampil2['status']=="Belum diproses"){
                                                        echo "<button type='submit' name='' class='btn btn-danger'>".$tampil2['status']."</button>";
                                                    }else if($tampil2['status']=="Sedang diproses"){
                                                        echo "<button type='submit' name='' class='btn btn-primary'>".$tampil2['status']."</button>";
                                                    }else{
                                                        echo "<button type='submit' name='' class='btn btn-success'>".$tampil2['status']."</button>";
                                                    }
                                                ?></td>
                                            
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("main-footer.php"); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    

    <?php include("footer.php"); ?>

</body>
<?php } ?>
</html>