<!DOCTYPE html>
<html lang="en">

<head>

<?php include("header.php"); ?>

</head>

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
                            <h6 class="m-0 font-weight-bold text-primary">Data Penerima Bansos</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $query2 = "select * from databansos";
                                        $hasil2 = mysqli_query($koneksi,$query2);
                                        while($tampil2=mysqli_fetch_array($hasil2)){  
                                    ?>
                                        <tr>
                                            <td><?php echo $tampil2['nama']; ?></td>
                                            <td><?php echo $tampil2['nik']; ?></td>
                                            <td><?php echo $tampil2['alamat']; ?></td>
                                            <td>
                                                <?php if($tampil['role']=="rt"){ ?>
                                                    <a href="act-databansos.php?id_databansos=<?php echo $tampil2['id_databansos'];?>" onclick="return confirm('Yakin Akan Merubah Status?')">
                                                <?php
                                                }
                                                    if($tampil2['status']=="Tersalurkan"){
                                                        echo "<button type='submit' name='' class='btn btn-primary'>".$tampil2['status']."</button>";
                                                    }else{
                                                        echo "<button type='submit' name='' class='btn btn-danger'>".$tampil2['status']."</button>";
                                                    }
                                                ?>
                                                </a>
                                            </td>
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

</html>