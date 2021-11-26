<?php
    session_start();
    include "config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM petugas WHERE username='$username' && password='$password'";

    $res = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($res);

    if($row>0)
    {
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        $_SESSION['nama_lengkap']=$fullname;
        $_SESSION['email']=$email;
        $_SESSION['no_telp']=$email;
        header("location:index.php");
    }

    else
    {
        header("location:login.php");
    }
?>