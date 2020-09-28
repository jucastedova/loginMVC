<?php

require_once '../Model/user.php';
include '../Model/conexion.php';

$email = $_POST['email'];
$password = $_POST['psw'];

// echo "El email es: {$email} y la contraseña es {$psw}";

// Crear el objeto user a partir de la clase User. 
// Instanciamos la clase, creamos variable en memoria que tiene de valor lo que hayan escrito en el formulario
$user = new User($email, $password);

echo $user->getEmail();
echo "<br>";
echo $user->getPassword();

// Preparamos la consulta
$sql = "SELECT * FROM tbl_user WHERE email=? and password=?";
// Para que no nos hagan inyecciones SQL
$smt = $pdo->prepare($sql);
// Sustituimos los parámetros de ? por lo que tiene que ser
$smt->bindParam(1, $email);
$smt->bindParam(2, $password);
// Ejecutamos la consulta
$smt->execute();

// Número de personas que encuentra
$numUsers = $smt->rowCount();
echo $numUsers;

if($numUsers == 1) {
    // Redireccionamos a Home
    header('Location:../View/home.php');
}else{
    // Fallo en la autenticación
    header('Location:../View/vista_login.html?error=1');
}

?>