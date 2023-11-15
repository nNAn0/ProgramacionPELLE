<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "jardin";

// $conn = mysqli_connect($servername, $username, $password, $database);

//  $conn->connect_error or die("error");
$conn= new mysqli("localhost", "root", "", "jardin0", "3306");
$conn->set_charset("utf8");
$conn->connect_error or die("error")
?>

<!-- <?php
    // //donde lo agrego
    // $servidor="localhost";
    // //
    // $user="root";
    // //contraseña
    // $pass="";
    
    // $base="biblioteca";
    // //
    // $conn=mysqli_connect($servidor,$user,$pass,$base);
?> -->