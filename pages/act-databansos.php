<?php
    include "../koneksi.php";

    $id_databansos  = $_GET['id_databansos'];

    $query  = "select * from databansos WHERE id_databansos='$id_databansos'";
    $hasil  = mysqli_query($koneksi,$query);
    $tampil = mysqli_fetch_array($hasil);

    if($tampil['status']=="Tersalurkan"){

        $query      = "UPDATE databansos SET status='Belum Tersalurkan' WHERE id_databansos='$id_databansos'";

        $hasil      = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));

        if($hasil){
            echo "<script>alert('Berhasil Mengubah Status');window.location.replace('index.php');</script>";
        }else{
            echo "<script>alert('Gagal Mengubah');</script>";
        }

    }else{

        $query      = "UPDATE databansos SET status='Tersalurkan' WHERE id_databansos='$id_databansos'";

        $hasil      = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));

        if($hasil){
            echo "<script>alert('Berhasil Mengubah Status');window.location.replace('index.php');</script>";
        }else{
            echo "<script>alert('Gagal Mengubah');</script>";
        }

    }

?>
</div>
