<?php
if (isset($_POST['submit'])) {
$kategori = $_POST['kategori'];
$status_barang = $_POST['status_barang'];
$sql = $db->query("INSERT INTO inventaris (kategori, status_barang) VALUES ('$kategori', '$status_barang') ");
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
          color : white;
          padding:10px 0 0 0 ;
          margin:0;
        }
        .login
        {
            width:45%;
            margin-top:10px;
            margin-left:30%;
            border-radius: 20px;
        }
        label{
            padding: 0 0 0 10px;
            
        }
        .input{
            padding: 0 45% 0 0;
            float:right;
        }
        select{
            padding: 0 45% 0 0;
            float:right;
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
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" style="color:black;padding:0px;"href="#">Tambah Inventaris <span class="sr-only">(current)</span></a>
      </li>
      </li>
    </ul>
  </div>
</nav>
<div class="login">
    <div class="col text-center" style="background-color:#28a745
; color:white;">
              Tambah Data Inventaris
            </div><br>
        <form action="input.php"  method="post">
            <div class="form-group">
            <label >Kode Barang</label>
            <input class="input"type="text" name="kode_barang"  placeholder="  Kode Barang"></div>
            <div class="form-group">
            <label >Nama Barang</label>
            <input class="input"type="text" name="nama_barang"  placeholder="  Nama Barang"></div>
            <div class="form-group">
            <label >Jumlah</label>
            <input class="input"type="number" min="1" max="10000000000"style="padding: 0 0 0 0;margin:0 63% 0 0; width:12%;" name="jumlah"  placeholder="  Jumlah"></div>
            <div class="form-group">
            <label >Satuan</label>
            <input class="input"type="text" style="padding: 0 0 0 0;margin:0 63% 0 0; width:12%;" name="satuan"  placeholder="  Satuan"></div>
            <div class="form-group">
            <label >Tanggal Datang</label>
            <input class="input"type="date" style="padding: 0 25% 0 1%;margin:0 25% 0 0;width:50%" name="tgl_datang"></div>
            <div class="form-group">
            <label>Kategori</label>
            <select name="kategori" style="padding: 0 25% 0 1%;margin:0 25% 0 0;width:50%">
                <option value="Bangunan">Bangunan</option>
                <option value="Kendaraan">Kendaraan</option>
                <option value="Alat Tulis Kantor">Alat Tulis Kantor</option>
                <option value="Elektronik">Elektronik</option></select></div>
            <div class="form-group">
            <label>Status</label>
            <label style="margin-left:15%;"><input type="radio"name="status_barang"value="Baik">&nbsp;Baik</label>
            <label><input type="radio"name="status_barang"value="Perawatan">&nbsp;Perawatan</label>
            <label><input type="radio"name="status_barang"value="Rusak">&nbsp;Rusak</label></div>
            <div class="form-group">
            <label >Harga Satuan</label>
            <input class="input"type="number" name="harga" min="1" max="10000000000000000000" placeholder="  Harga Satuan"></div>
            <center><button class="btn btn-success" type="submit">Simpan</button>&nbsp;&nbsp;
            <a class="btn btn-success" href="index.php" role="button">Batal</a></center>
        </div>
</div>
        
        </form>
        
        












    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>