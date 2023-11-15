    <?php 
if (!empty($_POST["guardar"])) {
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div class="alert alert-danger"> Campos Vacíos</div>';
    } else {
        $usuario=$_POST["usuario"];
        $dni=$_POST["password"];
        $sql=$conexion->query("select * from docente where usuario='$usuario' and dni='$dni' ");
        if($datos=$sql->fetch_object()){
            header("location: /proyectoFinal2/login/salita.php");
        }else{
            echo '<div class="alert alert-danger"> ACCESO DENEGADO</div>';
        }
    }
    
}
    ?>