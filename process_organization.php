<!-- process_organization.php -->
<?php
// Suponiendo que ya tienes un archivo 'database.php' con tu conexión a la base de datos
include 'database.php';
$datoRecibido = $_GET['username'];
echo $datoRecibido;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $name = $_POST["nameorg"];
    $description = $_POST["descriptionorg"];

    // Verificar que los campos no estén vacíos
    if (empty($name) || empty($description)) {
        echo "All fields are required!";
        exit; // Terminar el script aquí
    }

    // Insertar datos en la tabla organization

    $sql = "UPDATE Organization SET name='".$name."', description='".$description."' WHERE username='".$datoRecibido."'";

    $query_update = mysqli_query($conn,$sql);

    header("Location: dashboard.php");
} else {
    echo "Invalid request method.";
}

?>