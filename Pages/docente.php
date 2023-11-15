<?php 
    $servidor="localhost";
    $usuario="root";
    $pass="";
    $base="jardin";
    $conexion= mysqli_connect($servidor,$usuario,$pass,$base);
    if(isset($_POST['guardar'])){#si apreté el botón guardar
        if(!$conexion){#si no se pudo hacer la conexión
            echo "ERROR EN LA CONEXION CON LA BASE DE DATOS" .$base;
        }
        // else{
        //     $alumno=$_POST['alumno'];
        //     $nomap=$_POST['nomap'];
        //     $edad=$_POST['edad'];
        //     $date=$_POST['date'];
        // }
    }
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="stylelog.css">
            <title>Document</title>
        </head>
        <body>
            <!-- Pagina de la docente -->
        <header>
            <nav>
                <div>
                <a class="header-btn" href="alumno.php"><button class="btn">Alumno (entrar sin registro)</button></a>
                </div>
            </nav>
        </header>
        <!-- Login -->
        <?php
        include("conexion_bd.php");
        include("controlador.php")
        ?>
            <center>
            <form method="post" action="">
            <label for="exampleInputEmail1" class="form-label">Mail</label><br>
                <input type="text" class="form-control form-control-lg bg-gray-800 border-dark" id="exampleInputEmail1" name="usuario" value="" style="width:auto"><br>
                <Label for="exampleInputPassword1" class="form-label">DNI</label><br>
                <input type="password" class="form-control form-control-lg bg-gray-800 border-dark" id="exampleInputPassword1" name="password" value="" style="width:auto"><br>
                <input type="submit" name="guardar" class="btn" style="border-color:green" value="GUARDAR"></input>
            </form>
            </center>
  

            