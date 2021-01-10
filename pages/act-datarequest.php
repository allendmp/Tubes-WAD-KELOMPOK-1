<?php
    include "../koneksi.php";

    $id_swab  = $_GET['id_swab'];

    $query  = "select * from swab WHERE id_swab='$id_swab'";
    $hasil  = mysqli_query($koneksi,$query);
    $tampil = mysqli_fetch_array($hasil);

    if($tampil['status']=="Sedang diproses"){

        $query      = "UPDATE swab SET status='Selesai' WHERE id_swab='$id_swab'";

        $hasil      = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));

        if($hasil){
            echo "<script>alert('Berhasil Mengubah Status');window.location.replace('datarequest.php');</script>";
        }else{
            echo "<script>alert('Gagal Mengubah');</script>";
        }

    }else if ($tampil['status']=="Belum diproses"){

        $query      = "UPDATE swab SET status='Sedang diproses' WHERE id_swab='$id_swab'";

        $hasil      = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));

        if($hasil){
            echo "<script>alert('Berhasil Mengubah Status');window.location.replace('datarequest.php');</script>";
        }else{
            echo "<script>alert('Gagal Mengubah');</script>";
        }

    }else{

        $query      = "UPDATE swab SET status='Belum diproses' WHERE id_swab='$id_swab'";

        $hasil      = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));

        if($hasil){
            echo "<script>alert('Berhasil Mengubah Status');window.location.replace('datarequest.php');</script>";
        }else{
            echo "<script>alert('Gagal Mengubah');</script>";
        }

    }

?>
</div>
