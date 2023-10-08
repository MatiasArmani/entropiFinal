<!-- process_investigator.php -->
<?php
// Suponiendo que ya tienes un archivo 'database.php' con tu conexión a la base de datos
include 'database.php';
$datoRecibido = $_GET['username'];
echo $datoRecibido;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $birth_date = $_POST["birthDate"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $profession = $_POST["profession"];

    // Insertar datos del investigador
 
    $sql = "UPDATE Investigator SET name='".$name."', surname='".$surname."', birthdate='".$birth_date."' ,description='".$description."' WHERE username='".$datoRecibido."'";
    if (mysqli_query($conn, $sql)) {

            $sqll = "INSERT INTO invcat (username, cat) VALUES ('$datoRecibido', '$category')";
            mysqli_query($conn, $sqll);
            $sqlll = "INSERT INTO invprof (username, prof) VALUES ('$datoRecibido', '$profession')";
            mysqli_query($conn, $sqlll);

        echo "Investigator successfully registered!";
        header("Location: dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Invalid request method.";
}
?>