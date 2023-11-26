<?php
require_once("../config/koneksi.php");

$data = json_decode(file_get_contents("php://input"));

if ($data->id_pembeli != null) {
  $id = $data->id_pembeli;
  $info = $data->keterangan;

  $sql = $connection->prepare("UPDATE pembeli SET keterangan=? WHERE id_pembeli=?");
  $sql->bind_param('si', $info, $id);
  $sql->execute();

  if ($sql) {
    echo json_encode(array('RESPONSE => SUCCESS'));
  } else {
    echo json_encode(array('RESPONSE => FAILED'));
  }
} else {
  echo "FAILED";
}
