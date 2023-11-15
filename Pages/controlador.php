    <?php 
if (!empty($_POST["guardar"])) {
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div class="alert alert-danger"> Campos Vacíos</div>';
    } else {
        $usuario=$_POST["usuario"];
        $clave=$_POST["password"];
        $sql=$conexion->query("select * from usuario where usuario='$usuario' and clave='$clave' ");
        if($datos=$sql->fetch_object()){
            header("location: salita.php");
        }else{
            echo '<div class="alert alert-danger"> ACCESO DENEGADO</div>';
        }
    }
    
}
    ?>