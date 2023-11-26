<?php
require_once("../config/koneksi.php");

$name = $_REQUEST['nama'];
$email = $_REQUEST['email'];
$phone_number = $_REQUEST['no_telp'];
$address = $_REQUEST['alamat'];
$product = $_REQUEST['nama_produk'];
$total = $_REQUEST['jumlah_pembelian'];

$sql = "INSERT INTO pembeli(nama_pembeli, email, no_telp, alamat_rumah, nama_produk, jumlah_pembelian) VALUES ('$name','$email','$phone_number','$address','$product', '$total')";

$rs = mysqli_query($connection, $sql);

mysqli_close($connection);
