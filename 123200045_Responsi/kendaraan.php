<?php
    session_start();
    include "config.php";
    $username = $_SESSION['username'];                             
    $query = "SELECT * FROM petugas WHERE username='$username'";
    $result = mysqli_query($connect, $query); 
    
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
        .table{

            background-color:#28a745;
            color:white;
        }
        .bar{
            color:black;
            padding:0 10px 0 0;
            margin:2px 2px 3px 2px;
        }
        .button{
            background-color:#28a745;
            color:white;
            padding:0 10px 0 10px;
            
            
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

<nav class="navbar navbar-expand-lg" style="background-color:#82b29f;margin:0;padding:0 20px 0 20px;font-family:Times New Roman;">
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
    </ul>
  </div>
</nav>
<div>
<a class="btn btn-success, button" href="tambah.php" style="position:absolute;left: 10px;margin:10px;"role="button">+ Tambah</a>
    </div><br><br>
    <center><div>
        <table class="col text-center" style="width:90%">
            <tr class="table">
                <th>No</th>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Tanggal Barang</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Harga Satuan</th>
                <th>Total harga</th>
                <th>Aksi</th>
    </tr>
    <?php
    include "config.php";
    $query = mysqli_query($connect, "SELECT * FROM inventaris WHERE kategori='Kendaraan'");
    $noUrut = 0;
    while($data=mysqli_fetch_array($query))
    { $noUrut++;
        
        $total=$data['harga']*$data['jumlah'];
    ?>
    <tr>
    <td><?php echo $noUrut ?></td>
    <td><?php echo $data['kode_barang']; ?></td>
    <td><?php echo $data['nama_barang']; ?></td>
    <td><?php echo $data['jumlah']; ?></td>
    <td><?php echo $data['satuan']; ?></td>
    <td><?php echo $data['tgl_datang']; ?></td>
    <td><?php echo $data['kategori']; ?></td>
    <td><?php echo $data['status_barang']; ?></td>
    <td><?php echo "Rp." . number_format($data['harga'], 0, ".", "."); ?></td>
    <td><?php echo "Rp." . number_format($total, 0, ".", "."); ?></td>
    <td>
    <a class="btn btn-success btn-sm, button" href="edit.php?kode_barang=<?php echo $data['kode_barang'];?>" role="button">Edit</a>
    <a class="btn btn-success btn-sm, button" href="hapus.php?kode_barang=<?php echo $data['kode_barang'];?>" role="button">Hapus</a>
    </td>
    </tr>
            <?php }
            ?>
    </table>

    </div></center>
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