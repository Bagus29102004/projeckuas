<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$NP=$_POST['NP'];
$NAMA=$_POST['NAMA'];
$SIZE=$_POST['SIZE'];
$ALAMAT=$_POST['ALAMAT'];
$HARGA=$_POST['HARGA'];
$SEPATU=$_POST['SEPATU'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into pesanan(NP,NAMA,SIZE,ALAMAT,HARGA,SEPATU) 
                        values ('$NP', '$NAMA', '$SIZE', '$ALAMAT', '$HARGA' , '$SEPATU')");

if($simpan==true){

    header("location:tampil-pesanan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>