<?php
require_once("../config/koneksi.php");

if (isset($_POST['nama_produk']) && isset($_POST['tipe_produk']) && isset($_POST['harga']) && isset($_POST['stok']) && isset($_POST['keterangan'])) {
  $name = $_POST['nama_produk'];
  $type = $_POST['tipe_produk'];
  $price = $_POST['harga'];
  $stock = $_POST['stok'];
  $info = $_POST['keterangan'];

  $sql = $connection->prepare("INSERT INTO produk(nama_produk, tipe_produk, harga, stok, keterangan) VALUES (?, ?, ?, ?, ?)");
  $sql->bind_param('sssis', $name, $type, $price, $stock, $info);
  $sql->execute();

  if ($sql) {
    echo json_encode(array('RESPONSE => SUCCESS'));
  } else {
    echo "FAILED";
  }
}
