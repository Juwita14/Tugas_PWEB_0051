<?php session_start();
include "koneksi.php";?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
    <body>
    <div class="container">
<?php
if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
   if(!isset($_POST["username"])){
        include "koneksi.php";

        $query=mysqli_query($koneksi,"select * from user");
        $jumlah=mysqli_num_rows($query);
    ?>

<div class="container-fluid">
        <div class="col-md-12 mt-3">
            <h1 class="col-md-12 mb-3">Upload Gambar</h1>
            <form action="result.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-12 form-group">
                    <label>Username</label>
        	            <input type="text" class="form-control" name="username" placeholder="Username">
    	            <label>Password</label>
        	            <input type="text" class="form-control" name="password" placeholder="Password">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-3 my-3">
                    <input type="submit" class="btn btn-primary p-2" value="Upload">
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