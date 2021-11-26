<?php
include "config.php";

$kode_barang = $_GET['kode_barang'];

$query="DELETE FROM inventaris WHERE kode_barang='$kode_barang'";
$hasil=mysqli_query($connect, $query);

if($hasil){
    header("location:data_inventaris.php");
}
else{
    echo "Data gagal dihapus!";
}
?>