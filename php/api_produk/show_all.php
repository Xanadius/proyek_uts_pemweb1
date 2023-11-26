<?php
require_once("../config/koneksi.php");

$query = "SELECT * FROM produk ORDER BY id_produk ASC";
$myArray = array();

if ($result = mysqli_query($connection, $query)) {
  while ($row = mysqli_fetch_assoc($result)) {
    $myArray[] = $row;
  }

  mysqli_close($connection);
  echo json_encode($myArray);
}
