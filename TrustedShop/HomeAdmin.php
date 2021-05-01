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
                <a class="nav-link active" href="HomeAdmin.php">
                  Home <span class="sr-only">(current)</span>
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
                <a class="nav-link" href="Vendor.php">
                  Vendor
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <h1>Hello <?= $_SESSION['User'];?></h1>
          <h6>10 Barang yang paling laku</h6>
          <table border="1">
            <tr>
              <th>No.</th>
              <th>Nama Barang</th>
              <th>Telah Terjual</th>
            </tr>
            <?php 
            $sql = "SELECT P.Nama_Barang, SUM(O.Quantity) AS 'totalQ' FROM product P INNER JOIN orders O ON P.ID_Product = O.ID_Barang GROUP BY P.Nama_Barang ORDER BY SUM(O.Quantity) DESC";
            $stmt = $pdo ->query($sql);
            $i = 1;
            while ($row = $stmt->fetch()) {
              ?>
              <tr>
                <td><?= $i;?></td>
                <td><?= $row['Nama_Barang'];?></td>
                <td><?= $row['totalQ'];?></td>
              </tr>
              <?php
              $i++;
            }
             ?>
          </table>
          <h6>Stock barang yang ada dibawah 10 unit</h6>
          <table border="1">
            <tr>
              <th>No.</th>
              <th>Nama Barang</th>
              <th>Quantity</th>
            </tr>
            <?php 
            $sql1 = "SELECT * FROM product WHERE Quantity <= 10 ORDER BY Quantity ASC";
            $stmt1 = $pdo->query($sql1);
            $i=1;
            while ($row1 = $stmt1->fetch()) {
               ?>
               <tr>
                 <td><?= $i;?></td>
                 <td><?= $row1['Nama_Barang'];?></td>
                 <td><?= $row1['Quantity'];?></td>
               </tr>
                <?php
                $i++;
             } ?>
          </table>
        </main>
    </div>
  </body>
</html>
