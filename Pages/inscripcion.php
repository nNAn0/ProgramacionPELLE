<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- estilo del formulario css -->
    <link rel="stylesheet" href="styleform.css">
</head>

<!-- formulario que quiero -->
<body>

    <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="inscripcion.php" method="POST">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Introduce el nombre del alumno..." data-sb-validations="required" data-sb-can-submit="no" name="nombre">
                        <label for="name">Nombre</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">No introdujiste el nombre del alumno.</div>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" name="apellido_pat">
                        <label for="name">Apellido Paterno</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">No introdujiste el nombre del alumno.</div>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="text" name="apellido_mat">
                        <label for="email">Apellido Materno</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="number"  name="DNI">
                        <label for="name">DNI</label>
                        <div class="invalid-tooltip"> Dni es requerido.</div>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="date" name="nacimiento">
                        <label for="name">Fecha de nacimiento</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="date" name="fechaingreso">
                        <label for="name">Fecha de ingreso</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">No introdujiste el ingreso.</div>
                    </div>

                    <div class="form-check">
                    <input type="radio" class="form-check-input" id="validationFormCheck2" value="obra social"name="salud" required>
                    <label class="form-check-label" for="validationFormCheck2">Tengo obra social</label>
                    </div>
                    <div class="form-check mb-3">
                        <input type="radio" class="form-check-input" id="validationFormCheck3" value="sin obra social" name="salud" required>
                        <label class="form-check-label" for="validationFormCheck3">Sin obra social</label>
                        <div class="invalid-feedback">Indique si tiene obra social</div>
                    </div>

                    <div class="mb-3">
                        <select class="form-select" required aria-label="select example" name="idsala">
                         <option value="">Seleccione la sala</option>
                        <option value="2">Sala Celeste</option>
                        <option value="3">Sala Amarilla</option>
                        <option value="4">Sala Naranja</option>
                        <option value="5">Sala Roja</option>
                        </select>
                        <div class="invalid-feedback">No seleccionaste la salita</div>
                    </div>


                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required" data-sb-can-submit="no" name="observaciones"></textarea>
                        <label for="message">Observaciones</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br>
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">enviar</button></div>
                </form>
            </div>
        </div>
</body>

</html>
        
        <?php
include("db.php");

if ($conn==false) {
    echo 'la conexiòn es nula' ;
}
else {
    echo'La conexiòn es exitosa ';
}

$dni = isset($_POST['DNI'])?$_POST['DNI']:null;
$nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
$nacimiento = isset($_POST['nacimiento'])?$_POST['nacimiento']:null;
$fechaingreso = isset($_POST['fechaingreso'])?$_POST['fechaingreso']:null;
$observaciones = isset($_POST['observaciones'])?$_POST['observaciones']:null;
$apellido_mat = isset($_POST['apellido_mat'])?$_POST['apellido_mat']:null;
$salud  = isset($_POST['salud'])?$_POST['salud']:null;
$apellido_pat = isset($_POST['apellido_pat'])?$_POST['apellido_pat']:null;
$sala = isset($_POST['idsala'])?$_POST['idsala']:null;

echo' Subiste la información de ', ($nombre), ' correctamente';

if ($dni == null || $nombre == null || $nacimiento == null || $fechaingreso == null || $observaciones == null || $apellido_mat == null || $apellido_pat == null || $salud == null || $sala == null) {
    echo 'La información en alguno de los campos es nula.';
} else {
    if (is_nan($dni)) {
        echo 'wtf you doin';
    } else {
        $query = "INSERT INTO alumnos(DNI, nombre, apellidomat, apellidopat, nacimiento, fechaingreso, observaciones, salud, idsala) 
        VALUES ('$dni', '$nombre', '$apellido_mat', '$apellido_pat', '$nacimiento', '$fechaingreso', '$observaciones', '$salud', '$sala');";

    $enviar = mysqli_query($conn, $query);
    }
    
}


?>