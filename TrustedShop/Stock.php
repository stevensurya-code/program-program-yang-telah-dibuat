<?php 
session_start();
require 'conn.php';
 ?>
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
                <a class="nav-link" href="Home.php">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="Stock.php">
                  Stock <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Transaksi.php">
                  <span data-feather="bar-chart-2"></span>
                  Transaksi
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Input_Barang.php">
                  Input Barang
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Input_Transaksi.php">
                  Input Transaksi
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <h3>Stock Barang</h3>
          <table border="1">
            <thead>
              <tr>
                <th>ID Barang</th>
                <th>Nama Vendor</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Quantity</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $i = 0;
                $sql = "SELECT * FROM product";
                $stmt = $pdo->query($sql);
                while ($row = $stmt->fetch()){
                  $id_v = $row['ID_Vendor'];
                  $sql1 = "SELECT * FROM Vendor WHERE ID_Vendor = '$id_v'";
                  $stmt1=$pdo->query($sql1);
                  $row1 = $stmt1->fetch();
              ?>
              <tr>
                  <td><?= $row['ID_Product']; ?></td>
                  <td><?= $row1['Nama_Vendor']; ?></td>
                  <td><?= $row['Nama_Barang']; ?></td>
                  <td><?= $row['Deskripsi']; ?></td>
                  <td><?= $row['Harga_Beli']; ?></td>
                  <td><?= $row['Harga_Jual']; ?></td>
                  <td><?= $row['Quantity']; ?></td>
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
