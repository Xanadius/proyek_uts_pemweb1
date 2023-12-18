<?php
include "dateTime.php";
if (empty($_POST['nama'] || $_POST['email'])) {
  header("Location:kosong.php");
} else {
  echo "<center>Nama : " . $_POST['nama'] . "</center><br>";
  echo "<center>Email : " . $_POST['email'] . "</center><br>";
  echo "<center>Jam : " . $jam . "</center><br>";
  echo "<center>Hari : " . $hari . "</center><br>";
  echo "<center>Tanggal : " . $tanggal . "</center><br>";
}
