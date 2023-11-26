<?php
require_once("../config/koneksi.php");

$data = json_decode(file_get_contents("php://input"));

if ($data->id_produk != null) {
  $id = $data->id_produk;
  $name = $data->nama_produk;
  $type = $data->tipe_produk;
  $price = $data->harga;
  $stock = $data->stok;
  $info = $data->keterangan;

  $sql = $connection->prepare("UPDATE produk SET nama_produk=?, tipe_produk=?, harga=?, stok=?, keterangan=? WHERE id_produk=?");
  $sql->bind_param('sssisi', $name, $type, $price, $stock, $info, $id);
  $sql->execute();

  if ($sql) {
    echo json_encode(array('RESPONSE => SUCCESS'));
  } else {
    echo json_encode(array('RESPONSE => FAILED'));
  }
} else {
  echo "FAILED";
}
