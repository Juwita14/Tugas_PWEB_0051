<?php
    $host='localhost';
    $user='root';
    $password='root';
    $database='db_tugas';
    $koneksi=mysqli_connect($host,$user,$password,$database);
// mysql_select_db($database,$koneksi);
//cek koneksi
    if($koneksi){
        // echo "berhasil koneksi";
    }else{
        echo "gagal koneksi";
    }
?> 