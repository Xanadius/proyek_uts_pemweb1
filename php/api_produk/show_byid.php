<?php
require_once("../config/koneksi.php");

$myArray = array();

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM produk WHERE id_produk=$id";


  if ($result = mysqli_query($connection, $query)) {
    while ($row = mysqli_fetch_assoc($result)) {
      $myArray[] = $row;
    }

    mysqli_close($connection);
    echo json_encode($myArray);
  }
}
