<?php
require_once("../config/koneksi.php");

$data = json_decode(file_get_contents("php://input"));

if ($data->id != null) {
  $id = $data->id;

  $sql = $connection->prepare("DELETE FROM pembeli WHERE id_pembeli=?");
  $sql->bind_param('i', $id);
  $sql->execute();

  if ($sql) {
    echo json_encode(array('RESPONSE => SUCCESS'));
  } else {
    echo json_encode(array('RESPONSE => FAILED'));
  }
} else {
  echo "FAILED";
}
