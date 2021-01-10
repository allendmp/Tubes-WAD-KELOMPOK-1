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

                <div class="col-xl-12 col-lg-12 col-md-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h3 class="m-0 font-weight-bold text-primary">EDIT PROFIL</h3>
                                </div>
                                <div class="card-body">
                                    <form class="user" method="post" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            NIK<br>
                                            <input type="text" name="nik" value="<?php echo $tampil['nik']; ?>" class="form-control form-control-user" readonly>
                                        </div>
                                        <div class="form-group">
                                            Nama Lengkap<br>
                                            <input type="text" name="nama" value="<?php echo $tampil['nama']; ?>" class="form-control form-control-user"  required>
                                        </div>
                                        <div class="form-group">
                                            Alamat<br>
                                            <input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>"  class="form-control form-control-user"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            No HP<br>
                                            <input type="number" name="no_hp" value="<?php echo $tampil['no_hp']; ?>"  class="form-control form-control-user"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            Email<br>
                                            <input type="email" name="email" value="<?php echo $tampil['email']; ?>"  class="form-control form-control-user"
                                                required>
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
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h3 class="m-0 font-weight-bold text-primary">EDIT PASSWORD</h3>
                                </div>
                                <div class="card-body">
                                    <form class="user" method="post" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                        Password Lama <br>
                                            <input type="password" name="passlama" class="form-control form-control-user" required>
                                        </div>
                                        <div class="form-group">
                                        Password Baru <br>
                                            <input type="password" name="passbaru" class="form-control form-control-user" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit2" class="btn btn-primary" style="width:100%;">
                                                <!-- Kirim -->
                                            <!-- </button> -->
                                        </div>
                                    </form>
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
                
                $submit            = $_POST['submit'];
                $submit2            = $_POST['submit2'];
                
                
                if($submit){
                    
                    $nama       = $_POST['nama'];
                    $alamat     = $_POST['alamat'];
                    $no_hp      = $_POST['no_hp'];
                    $email      = $_POST['email'];

                        $query3      = "UPDATE user SET nama='$nama', alamat='$alamat', no_hp='$no_hp', email='$email' WHERE id_user='$id_user'";

                        $hasil3      = mysqli_query($koneksi,$query3) or die (mysqli_error($koneksi));

                        if($hasil3){
                            echo "<script>alert('Berhasil Mengedit Profil');window.location.replace('edit-profil.php');</script>";
                        }else{
                            echo "<script>alert('Gagal Mengedit');</script>";
                        }
                    
                    

                    
                    
                }else if($submit2){

                    $query2 = "SELECT * FROM user WHERE id_user='$id_user'";
                    $hasil2 = mysqli_query($koneksi,$query2);
                    $tampil2 = mysqli_fetch_array($hasil2);

                    $password         = $_POST['passlama'];
                    $password2        = $_POST['passbaru'];

                    if($tampil2['password'] == md5($password)){
                        if(strlen($password2) < 5){
                            echo "<script>alert('Password minimal 5 karakter!');history.go(-1);</script>";
                        }else{

                            $pass = md5($password2);
                
                            $query      = "UPDATE user SET password='$pass' WHERE id_user='$id_user'";

                            $hasil      = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));

                            if($hasil){
                                echo "<script>alert('Berhasil Mengubah Password');window.location.replace('edit-profil.php');</script>";
                            }else{
                                echo "<script>alert('Gagal Mengubah Password');</script>";
                            }
                        }

                    }else{   
                        echo "<script>alert('Password Lama yang dimasukkan tidak sama!');history.go(-1);</script>";
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

</html>