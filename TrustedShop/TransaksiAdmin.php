<?php 
session_start();
require 'conn.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Dashboard Template for Bootstrap</title>

    <link href="Assets/bootstrap.min.css" rel="stylesheet">

    <link href="Assets/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Trusted Shop</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="SignOut.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="HomeAdmin.php">
                  Home 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="StockAdmin.php">
                  Stock
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="TransaksiAdmin.php">
                  <span data-feather="bar-chart-2"></span>
                  Transaksi <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Input_BarangAdmin.php">
                  Input Barang
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Input_TransaksiAdmin.php">
                  Input Transaksi
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Staff.php">
                  Staff
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Vendor.php">
                  Vendor
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <h3>List Transaksi</h3>
          <table border="1">
            <thead>
              <tr>
                <th>ID Transaksi</th>
                <th>Nama Customer</th>
                <th>Alamat Customer</th>
                <th>Tanggal Transaksi</th>
                <th>No Telphone Customer</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Total Harga</th>
                <th>Tindakan</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $i = 0;
                $sql = "SELECT * FROM transaksi";
                $stmt = $pdo->query($sql);
                while ($row = $stmt->fetch()){
                  $id_c = $row['ID_Customer'];
                  $sql1 = "SELECT * FROM Customer WHERE ID_Customer = '$id_c'";
                  $stmt1 = $pdo->query($sql1);
                  $row1 = $stmt1->fetch();
                  $id_tr = $row['ID_Transaksi'];
                  $sql2 = "SELECT * FROM orders WHERE ID_Transaksi = '$id_tr'";
                  $stmt2 = $pdo-> query($sql2);
                  $row2 = $stmt2->fetch();
                  $id_br = $row2['ID_Barang'];
                  $sql3 = "SELECT * FROM product WHERE ID_Product = $id_br";
                  $stmt3 = $pdo ->query($sql3);
                  $row3= $stmt3-> fetch();
              ?>
              <tr>
                  <td><?= $row['ID_Transaksi']; ?></td>
                  <td><?= $row1['Nama_Customer']; ?></td>
                  <td><?= $row1['Alamat']; ?></td>
                  <td><?= $row['Tanggal_Transaksi']; ?></td>
                  <td><?= $row1['No_Telp']; ?></td>
                  <td><?= $row3['Nama_Barang'];?></td>
                  <td><?= $row2['Quantity'];?></td>
                  <td><?= $row['Total_Harga']; ?></td>
                  <td><a href="DeleteTr.php?id=<?=$row['ID_Transaksi'];?>"><button>Delete</button></a></td>
              </tr>
              <?php
                }
              ?>
            </tbody>
          </table>
        </main>
    </div>
  </body>
</html>
