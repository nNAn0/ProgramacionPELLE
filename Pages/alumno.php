<?php
include('db.php'); // Incluye el archivo de conexión a la base de datos

// Consulta para obtener la lista de estudiantes
$sql = "SELECT * FROM alumnos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $students = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $students = [];
}

// Página HTML
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página del Colegio</title>
    <link rel="stylesheet" href="styleform.css">
</head>
<body>
    <h1>Lista de Estudiantes</h1>

    <label>Buscar Alumnos de:</label>
    <select id="curso-filter">
        <option value="">SALA</option>
        <option value="2">Sala Celeste (2)</option>
        <option value="3">Sala Amarilla (3) </option>
        <option value="4">Sala Naranja (4)</option>
        <option value="5">Sala Roja (5)</option>
    </select>

    <!-- TABLA -->
    <!-- para que se pueda mover de forma horizontal usamos este div -->
    <div class="table-responsive">
    <!-- formato de la tabla: con bordes y negra -->
    <table class="table table-bordered table-dark">
<!-- un nombre de que es lo que estamos mostrando -->
    <caption style="text-transformation:uppercase">Lista de alumnos</caption>

        <thead class="thead-dark">
        <tr class="table-secondary">
        <th scope="col" style="color: blue">DNI</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Edad</th>
        <th scope="col">Fecha de Nacimiento</th>
        <th scope="col">Ingreso al jardin</th>
        <th scope="col">Salud</th>
        <th scope="col">Observaciones</th>
        </tr>
        </thead>
    </div>

        <?php foreach ($students as $student) { ?>
            <tr class="student-row">
                <td class="bg-warning" scope="row"><?php echo $student['DNI']; ?></td>
                <th class="table-warning"><?php echo $student['nombre']; ?></th>
                <td><?php echo $student['apellidopat'], " ", $student['apellidomat']; ?></td>
                <td><?php echo $student['idsala']; ?></td>
                <td ><?php echo $student['nacimiento']; ?></td>
                <!-- colspan="2" -->
                <td><?php echo $student['fechaingreso']; ?></td>
                <td><?php echo $student['salud']; ?></td>
                <td><?php echo $student['observaciones']; ?></td>
            </tr>
        <?php } ?>
    </table>
<!-- codigo nuevo -->
<a href="/pellegrini/proyectoFinal2/index.php" class="btn-evaluacion"> Inicio</a>
<!-- codigo nuevo -->
    <script>
        // Filtrado de estudiantes por curso
        const cursoFilter = document.getElementById('curso-filter');
        const studentRows = document.querySelectorAll('.student-row');

        cursoFilter.addEventListener('change', function () {
            const selectedCurso = cursoFilter.value;

            studentRows.forEach(row => {
                const curso = row.querySelector('td:nth-child(3)').textContent;
                if (selectedCurso === '' || selectedCurso === curso) {
                    row.style.display = 'table-row';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>