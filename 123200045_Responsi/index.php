<?php
    session_start();
    include "config.php";
    $username = $_SESSION["username"];                             
    $query = "SELECT * FROM petugas WHERE username='$username'";
    $result = mysqli_query($connect, $query); 
    if(mysqli_num_rows($result)>0){
        $dataorder = mysqli_fetch_array($result);
        $_SESSION["nama_lengkap"] = $dataorder["nama_lengkap"];
      } 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Aplikasi Inventaris Berbasis Web</title>
    <style type="text/css">
        .banner{
          color:white;
          padding:10px 0 0 0 ;
          margin:0;
        }
        .bar{
            color:black;
            padding:0 10px 0 0;
            margin:2px 2px 3px 2px;
            text-decoration : none;
        }
        .button{
            background-color:#28a745;
            color:white;
            padding:0 10px 0 10px;
            margin:0 2px 1px 2px;
            position:absolute;
            right: 10px;
        }
        .footer{
            background-color:#28a745;
            color:white;
            text-align:center;
            margin:0 0 0 0;
            padding: 7px 0 7px 0;
        }
        
    
      </style>
  </head>
  <body>
  <div class="jumbotron jumbotron-fluid bg-success text-white, banner">
  <div class="container text-center">
    <h1 class="display-5" Style="font-family:lucida fax">DAFTAR INVENTARIS BARANG</h1>
    <h1 class="display-5" Style="font-family:lucida fax;margin-bottom:0;">KANTOR SERBA ADA</h1>
  </div>
</div>

<nav class="navbar navbar-expand-lg" style="background-color:#82b29f;margin:0;padding:3px 20px 0 20px;font-family:Times New Roman;">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link, bar" href="index.php">Beranda<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link, bar" href="data_inventaris.php"> Data Inventaris</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle, bar" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          List per Kategori
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item, bar" href="bangunan.php">Bangunan</a>
          <a class="dropdown-item, bar" href="kendaraan.php">Kendaraan</a><br>
          <a class="dropdown-item, bar" href="atk.php">Alat Tulis Kantor</a>
          <a class="dropdown-item, bar" href="elektronik.php">Elektronik</a>
        </div>
      </li>
      <a class="btn btn-success, button" href="logout.php" role="button">logout</a>
    </ul>
  </div>
</nav>
<div class="jumbotron" style="width:100%;margin:0;background-color:white;">
  <div class="container text-center"><br><br><br>
    <h3 class="display-5">Selamat Datang</h3><br><br>
    <h3 class="display-5"style="color:#0d5b3b;" ><?php echo $_SESSION['nama_lengkap']; ?></h3>
  </div>
</div>
<div class="footer" style="position:absolute;bottom:0;width:100%;">
    Inventaris 2016
</div>














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>