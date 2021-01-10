<?php
        
require_once 'koneksi.php';
error_reporting(0);

$nama       = $_POST['nama'];
$nik        = $_POST['nik'];
$alamat     = $_POST['alamat'];
$no_hp      = $_POST['no_hp'];
$email      = $_POST['email'];
$password   = $_POST['pass1'];
$password2  = $_POST['pass2'];

if($_POST['role']){

    $query = "SELECT nik FROM user WHERE nik='$nik'";
    $hasil = mysqli_query($koneksi,$query);
    
    if(isset($_POST['submit'])){
    
            if(mysqli_num_rows($hasil) == 0){
                    if($password == $password2){
                        if(strlen($password) < 5){
                            echo "<script>alert('Password minimal 5 karakter!');history.go(-1);</script>";
                        }else{

                            $pass = md5($password);

                            $sql = "INSERT INTO user VALUES('','$nama','$nik','$alamat','$no_hp','$email','$pass','rt')";
                            $kueri = mysqli_query($koneksi, $sql);

                            if($kueri){
                                echo "<script>alert('Berhasil Mendaftar.'); document.location='index.php'</script>";
                            } else {
                                echo "<script>alert('Data gagal dimasukkan');history.go(-1);</script>";
                                
                            }
                        }
                    }else{   
                       echo "<script>alert('Password yang dimasukkan tidak sama!');history.go(-1);</script>";
                    }
                
            }else{   
                       echo "<script>alert('NIK sudah terdaftar');history.go(-1);</script>";
            }
        


        
    }else{ echo "<script>alert('GAGAL');history.go(-1);</script>"; }


}else{

    $query = "SELECT nik FROM user WHERE nik='$nik'";
    $hasil = mysqli_query($koneksi,$query);
    
    if(isset($_POST['submit'])){
    
            if(mysqli_num_rows($hasil) == 0){
                    if($password == $password2){
                        if(strlen($password) < 5){
                            echo "<script>alert('Password minimal 5 karakter!');history.go(-1);</script>";
                        }else{

                            $pass = md5($password);

                            $sql = "INSERT INTO user VALUES('','$nama','$nik','$alamat','$no_hp','$email','$pass','warga')";
                            $kueri = mysqli_query($koneksi, $sql);

                            if($kueri){
                                echo "<script>alert('Berhasil Mendaftar.'); document.location='index.php'</script>";
                            } else {
                                echo "<script>alert('Data gagal dimasukkan');history.go(-1);</script>";
                                
                            }
                        }
                    }else{   
                       echo "<script>alert('Password yang dimasukkan tidak sama!');history.go(-1);</script>";
                    }
                
            }else{   
                       echo "<script>alert('NIK sudah terdaftar');history.go(-1);</script>";
            }
        


        
    }else{ echo "<script>alert('GAGAL');history.go(-1);</script>"; }

}

?>
