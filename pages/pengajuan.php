
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

                <div class="col-xl-6 col-lg-12 col-md-9">
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h3 class="m-0 font-weight-bold text-primary">FORM SURAT PENGAJUAN</h3>
                            </div>
                            <div class="card-body">
                                <form class="user" method="post" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        Nama<br>
                                        <input type="text" name="nama" class="form-control form-control-user"
                                            placeholder="Nama" required>
                                    </div>
                                    <div class="form-group">
                                        NIK<br>
                                        <input type="text" name="nik" class="form-control form-control-user"
                                        placeholder="NIK" required>
                                    </div>
                                    <div class="form-group">
                                        Alamat<br>
                                        <input type="text" name="alamat" class="form-control form-control-user"
                                        placeholder="Alamat" required>
                                    </div>
                                    <div class="form-group">
                                        Pekerjaan<br>
                                        <input type="text" name="pekerjaan" class="form-control form-control-user"
                                            placeholder="Pekerjaan" required>
                                    </div>
                                    <div class="form-group">
                                        Gaji<br>
                                        <input type="number" name="gaji" class="form-control form-control-user"
                                            placeholder="Gaji" required>
                                    </div>
                                    <div class="form-group">
                                        Upload Bukti Slip Gaji<br>
                                        <input type="file" name="file"  required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-primary" style="width:100%;">
                                            <!-- Kirim -->
                                        <!-- </button> -->
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php
                error_reporting(0);

                $nama      = $_POST['nama'];
                $nik      = $_POST['nik'];
                $alamat      = $_POST['alamat'];
                $pekerjaan      = $_POST['pekerjaan'];
                $gaji           = $_POST['gaji'];
                
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
                            mysqli_query($koneksi, "INSERT INTO pengajuan VALUES('','$nama','$nik','$alamat','$pekerjaan','$gaji','$xx')");
                            echo "<script>alert('BERHASIL MENGIRIM SURAT PENGAJUAN');window.location.replace('pengajuan.php');</script>";
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