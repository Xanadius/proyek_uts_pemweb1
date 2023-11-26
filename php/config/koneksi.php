<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'proyek_uts');

$connection = new mysqli(HOST, USER, PASS, DB) or die("Koneksi error untuk mengakses database");
