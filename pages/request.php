<!DOCTYPE html>
<html lang="en">

<head>

<?php include("header.php"); ?>

</head>
<?php if($tampil['role']=="warga"){ ?>
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

                <div class="col-xl-12 col-lg-12 col-md-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h3 class="m-0 font-weight-bold text-primary">FORM REQUEST SWAB</h3>
                                </div>
                                <div class="card-body">
                                    <form class="user" method="post" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            Tanggal Swab<br>
                                            <input type="date" name="tgl" class="form-control form-control-user"
                                                placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            Jumlah Anggota<br>
                                            <input type="number" name="jumlah" class="form-control form-control-user"
                                                placeholder="Jumlah" required>
                                        </div>
                                        <div class="form-group">
                                            Upload Bukti Transaksi Pembayaran<br>
                                            <input type="file" name="file"  required>
                                        </div>
                                        <input type="hidden" id="status" name="status" value="Belum Diproses">
                                        <div class="form-group">
                                            <input type="submit" name="submit" class="btn btn-primary" style="width:100%;">
                                                
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Biaya Swab (per-orang)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 900.000,-</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Konfirmasi Status</div>
                                            <div class="p mb-0 font-weight-bold text-gray-800">Status Pengajuan Berubah Paling Lambat 2 X 24 Jam (Hari Kerja)</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Rekening</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">01231431 (BCA)</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bookmark fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Progress Request Swab</h6>
                                </div>
                                <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tgl Swab</th>
                                            <th>Jumlah Swab</th>
                                            <th>Status</th>
                                        </tr>

                                    <tbody>
                                    <?php
                                        $query2 = "select * from swab WHERE id_user='$id_user'";
                                        $hasil2 = mysqli_query($koneksi,$query2);
                                        while($tampil2=mysqli_fetch_array($hasil2)){  
                                    ?>
                                        <tr>
                                            <td><?php echo date('d/m/Y', strtotime($tampil2['tgl'])); ?></td>
                                            <td><?php echo $tampil2['jumlah']; ?></td>
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
                </div>
                

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php
                error_reporting(0);

                $id_user        = $tampil['id_user'];
                $tgl            = $_POST['tgl'];
                $jumlah           = $_POST['jumlah'];
                $status = $_POST['status'];
                $submit            = $_POST['submit'];
                
                if($submit){

                    $rand = rand();
                    $ekstensi =  array('png','jpg','jpeg');
                    $filename = $_FILES['file']['name'];
                    $ukuran = $_FILES['file']['size'];
                    $ext = pathinfo($filename, PATHINFO_EXTENSION);

                    if(!in_array($ext,$ekstensi) ) {
                        echo "<script>alert('FORMAT GAMBAR DALAM PNG/JPG/JPEG!');history.go(-1);</script>";
                    }else{
                        if($ukuran < 2097152 ){		
                            $xx = $rand.'_'.$filename;
                            move_uploaded_file($_FILES['file']['tmp_name'], '../img/'.$rand.'_'.$filename);
                            mysqli_query($koneksi, "INSERT INTO swab VALUES('','$id_user','$tgl','$jumlah','$xx','$status')");
                            echo "<script>alert('BERHASIL MENGIRIM REQUEST SWAB');window.location.replace('request.php');</script>";
                        }else{
                            echo "<script>alert('UKURAN MAKS 2MB!');history.go(-1);</script>";
                        }
                    }
                }
                
            ?>

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