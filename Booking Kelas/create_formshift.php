<?php
include "koneksi.php";

session_start();
$RoomID = $_SESSION['Rid'];

$sql1 = "INSERT INTO shift (Keterangan, Status, Peminjam, RoomID) VALUES(?,?,?,?)";
$sql2 = "INSERT INTO shift (Keterangan, Status, Peminjam, RoomID) VALUES(?,?,?,?)";
$sql3 = "INSERT INTO shift (Keterangan, Status, Peminjam, RoomID) VALUES(?,?,?,?)";
$sql4 = "INSERT INTO shift (Keterangan, Status, Peminjam, RoomID) VALUES(?,?,?,?)";
$sql5 = "INSERT INTO shift (Keterangan, Status, Peminjam, RoomID) VALUES(?,?,?,?)";

$stmt1 = $pdo -> prepare($sql1);
$stmt1->execute(["8-10","1","0",$RoomID]);

$stmt2 = $pdo -> prepare($sql2);
$stmt2->execute(["10-12","1","0",$RoomID]);

$stmt3 = $pdo -> prepare($sql3);
$stmt3->execute(["12-14","1","0",$RoomID]);

$stmt4 = $pdo -> prepare($sql4);
$stmt4->execute(["14-16","1","0",$RoomID]);

$stmt5 = $pdo -> prepare($sql5);
$stmt5->execute(["16-18","1","0",$RoomID]);

header("location: admin.php");
?>