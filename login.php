<?php session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$query = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);

if ($cek) {
    $_SESSION['username']=$username;
    ?><script language="javascript"> window.location="upload.php";</script><?php
    
}
else {
    ?><script language="javascript"> window.location="index.php";</script><?php
    
}
?>