<?php 
include "koneksi.php";
session_start();

if (isset($_POST['login'])) {
    try {
           $username = $_POST['username'];
           $password = $_POST['password'];
           $sql = "SELECT * FROM customer WHERE Username= ? and Password= ?";
           $stmt = $pdo->prepare($sql);
           $data = [
              $_POST['username'],
              $_POST['password']
           ];
           $stmt->execute($data);
           $row = $stmt->fetch();
           $user = $row['Username'];
           $roll = $row['Roll'];
           $pass = $row['Password'];
           $id = $row['CustomerID'];
           if ($username == $user && $password == $pass) 
             {
              $_SESSION['username']  = $username;
              $_SESSION['Roll']  = $roll;
              $_SESSION['password']=$password;
              $_SESSION['Customer_ID']=$id;
                if($_SESSION['Roll']=='1'){
                  //admin
              	header("location:admin.php");
              } else{
                //user
                header("location:customer.php");
              }
              }	
              else {
                
                echo "<script>
                var r = confirm('Login anda Salah!');
                if (r == true) {
                    window.location.href='/Project_web/Login.php';
                }
                  </script>";
              }
        }    
        catch (PDOException $e) {
        $e->getMessage();
    }
}
?>
