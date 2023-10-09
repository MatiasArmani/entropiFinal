<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
	/* conect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
?>


<?php
//include 'database.php';

// Por simplicidad, no estoy conectando a una base de datos aquí. 
// Deberías conectar y guardar los datos del usuario en la base de datos.
$user_username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password']; // Recuerda siempre encriptar las contraseñas antes de guardarlas
$role = $_POST['role'];
 
// Es importante encriptar las contraseñas antes de guardarlas en la base de datos
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Inserta los datos en la tabla USER
$sql = "INSERT INTO User (username, mail, password_hash) VALUES ('$user_username', '$email', '$hashed_password')";


if ($con->query($sql) === TRUE) {
    echo "New user registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Aquí guardarías el email y contraseña en la base de datos.

if ($role == 'researcher') {
    
    $sqlinv = "INSERT INTO Investigator (username) VALUES ('$user_username')";
    if ($con->query($sqlinv) === TRUE) {
    echo "New user registered successfully";
    }
    header("Location: registerinv.php?username=$user_username");
} elseif ($role == 'organization') {
    $sqlorg = "INSERT INTO Organization (username) VALUES ('$user_username')";
    if ($con->query($sqlorg) === TRUE) {
    echo "New user registered successfully";
    } 
    header("Location: registerorg.php?username=$user_username");

} else {
    // Manejar error si se necesita
    echo "Error en el registro";
    echo $email;
echo $password;
echo $role;
}

?>
