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
                <a class="nav-link" href="Home.php">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Stock.php">
                  Stock
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Transaksi.php">
                  <span data-feather="bar-chart-2"></span>
                  Transaksi
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="Input_Barang.php">
                  Input Barang  <span class="sr-only">(current)</span>
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
          <h3>Input Barang</h3>
          <a href="TambahBarang.php"><button>Tambah Barang Baru</button></a>
          <form action="Input_BarangPros.php" method="post">
            <table>
              <tr>
                <td>Nama Barang :</td>
                <td> <select name="Prod" id="Prod">
                    <?php 
                    $sql = "SELECT * FROM Product";
                    $stmt=$pdo->query($sql);
                    while ($row = $stmt->fetch()) {
                     ?>
                    <option value="<?= $row['ID_Product'];?>"><?= $row['Nama_Barang'];?></option>
                    <?php } ?>
                  </select></td>
              </tr>
              <tr>
                <td>Nama Vendor :</td>
                <td><select name="Vend" id="Vend">
                    <?php 
                    $sql = "SELECT * FROM Vendor";
                    $stmt=$pdo->query($sql);
                    while ($row = $stmt->fetch()) {
                     ?>
                    <option value="<?= $row['ID_Vendor'];?>"><?= $row['Nama_Vendor'];?></option>
                    <?php } ?>
                  </select></td>
              </tr>
              <tr>
                <td>Harga Beli :</td>
                <td><input type="text" name="hargaB"></td>
              </tr>
              <tr>
                <td>Harga Jual :</td>
                <td><input type="text" name="hargaJ"></td>
              </tr>
              <tr>
                <td>Quantity :</td>
                <td><input type="text" name="quantity"></td>
              </tr>
            </table>
            <button>Submit</button>
          </form>
        </main>
    </div>
  </body>
</html>
