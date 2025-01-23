
<?php

$NP=$_POST['NP'];
$NAMA=$_POST['NAMA'];
$SIZE=$_POST['SIZE'];
$ALAMAT=$_POST['ALAMAT'];
$HARGA=$_POST['HARGA'];
$SEPATU=$_POST['SEPATU'];

include "koneksi.php";

$simpan=$koneksi->query("insert into pesanan(NP,NAMA,SIZE,ALAMAT,HARGA,SEPATU) 
                        values ('$NP', '$NAMA', '$SIZE', '$ALAMAT' ,'$HARGA' , '$SEPATU')");

if($simpan==true){

    header("location:input-pesanan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>