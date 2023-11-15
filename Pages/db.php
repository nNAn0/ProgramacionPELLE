<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "jardin";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}else{
    echo "succesfull";
}
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