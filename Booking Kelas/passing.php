<?php
include "koneksi.php";
session_start();
$temp = $_SESSION['Rid'];
echo $temp;
$sql = 'SELECT * FROM ruangan WHERE NamaRuangan = "$nama"';
$hasil = $pdo->query($sql);
$row = $hasil->fetch();
