<?php
    $servername="localhost";
    $username="root";
    $password="";
    $databasename="webhb";
    $conn=mysqli_connect($servername,$username,$password,$databasename);
    if(!$conn){
        die('Không thể kết nối: ' . mysqli_connect_error());
    }
?>