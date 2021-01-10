<?php

ob_start();
session_start();

require_once 'koneksi.php';

        if(isset($_POST['submit'])){

                $nik = trim(htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['nik'])));
                $password = trim(htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['password'])));
                
                
                    
                    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE nik='$nik' AND password=MD5('$password')");

                    if(mysqli_num_rows($query) > 0){
                        list($id_user, $nik, $nama, $role) = mysqli_fetch_array($query);

                        //buat session
                        $_SESSION['id_user'] = $id_user;
                        $_SESSION['nik'] = $nik;
                        $_SESSION['nama'] = $nama;
                        $_SESSION['role'] = $role;
                        
                        echo $_SESSION['id_user'];

                        header("Location: pages/index.php");
                        die();
                    } else {

                        //session error
                       echo "<script>alert('NIK dan Password Salah!');history.go(-1);</script>";
                        die();
                    }
            
        }
?>