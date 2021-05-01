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
                <a class="nav-link" href="TransaksiAdmin.php">
                  <span data-feather="bar-chart-2"></span>
                  Transaksi
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Input_BarangAdmin.php">
                  Input Barang
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Input_transaksiAdmin.php">
                  Input Transaksi
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Staff.php">
                  Staff
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="Vendor.php">
                  Vendor <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <h3>List Vendor</h3>
          <a href="VendorTambah.php"><button class="btn btn_primary">Tambah Vendor</button></a>
          <table border="1">
            <thead>
              <tr>
                <th>ID Vendor</th>
                <th>Nama Vendor</th>
                <th>Alamat Vendor</th>
                <th>No Telphone</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $i = 0;
                $sql = "SELECT * FROM vendor";
                $stmt = $pdo->query($sql);
                while ($row = $stmt->fetch()){
              ?>
              <tr>
                  <td><?= $row['ID_Vendor']; ?></td>
                  <td><?= $row['Nama_Vendor']; ?></td>
                  <td><?= $row['Alamat_Vendor']; ?></td>
                  <td><?= $row['No_Telp']; ?></td>
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
