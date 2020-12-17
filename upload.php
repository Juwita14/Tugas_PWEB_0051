<?php 
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="bootstrap.css" rel="stylesheet">
        <link href="jumbotron.css" rel="stylesheet">
        <link rel="stylesheet" href="sign.css">
    </head>
    <body>
    <body>
    <div class="container">
<?php

if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    $username = $_SESSION['username'];

    if(!isset($_POST["username"])){
        include "koneksi.php";

        $query=mysqli_query($koneksi,"select * from user where username='$username'and password='$password'");
        $jumlah=mysqli_num_rows($query);
    ?>

<div class="container-fluid">
        <div class="col-md-12 mt-3">
            <h1 class="col-md-12 mb-3">Upload Gambar</h1>
            <form action="result.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-12 form-group">
                    <label>Username</label>
                    <input tyle="text" name="username" class="form-control" value=<?php echo $_SESSION['username']?>
                    <label>Password</label>
                    <input tyle="text" name="passwordid" class="form-control" value=<?php echo $password?>
                    <label>Gambar</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-3 my-3">
                    <input type="submit" class="btn btn-primary p-2" value="Upload">
                    <a class="btn btn-primary p-2" href="log.php">Log</a>
                </div>
            </form>
        </div>
    </div>
<?php
    }else{
        ?>Anda tidak boleh mengakses halaman ini. silahkan <a href="index.php">Login dahulu</a><?php
    }
}
else{
    ?>Anda tidak boleh mengakses halaman ini. silahkan <a href="index.php">Login dahulu</a><?php
}
    
    ?>
    </div>
</body>
</html>
