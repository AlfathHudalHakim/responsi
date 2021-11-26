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
        .login
        {
            width:30%;
            margin-top:90px;
            margin-left:36%;
            border-style: solid;
            border-radius: 20px;
            padding:30px;
            background-color: #82b29f;
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
        <a class="nav-link" style="color:black;padding:0px;"href="#">Login <span class="sr-only">(current)</span></a>
      </li>
      </li>
    </ul>
  </div>
</nav>
<div class="container, login">
          <div class="row">
            <div class="col text-center" >
              <h1>Login</h1>
            </div>
          </div>
          <form action="ceklogin.php" method="post">
                <div class="form-group">
                    <label >Username</label>
                    <input type="text" name="username" class="form-control"  aria-describedby="usrname" placeholder="Masukkan Username Anda">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control"  placeholder="Masukkan Password Anda">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>













    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>