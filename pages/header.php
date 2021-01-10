<?php
    require_once "../koneksi.php";
    ob_start();
    //cek session
    session_start();

    if(empty(isset($_SESSION['id_user']))){

        echo "<script>alert('Anda Belum Login!!!');history.go(-1);</script>";
        header("Location: ../index.php");
        // echo $_SESSION['id_user'];
        die();
    }else{
        require_once '../koneksi.php';
        $id_user = $_SESSION['id_user'];
        $data = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user = '$id_user'");
        $tampil = mysqli_fetch_array($data);
    }
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Bansos</title>

<!-- Custom fonts for this template-->
<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="../css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">