<?php
$hostname = "localhost"; //hostname
$username = "root"; //username untuk login ke mysql
$password = ""; //password untuk login ke mysql
$database = "vaksin"; //nama database

$konek = new mysqli($hostname, $username, $password, $database);

if ($konek->connect_error) {
    // jika terjadi error, matikan proses dengan die() atau exit();
    die('KONEKSI GAGAL!: ' . $connect->connect_error);
}
