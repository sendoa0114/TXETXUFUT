<?php
require("conex.php");

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$consultatodos = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$registros = mysqli_query($conexion, $consultatodos);

if (mysqli_fetch_array($registros)) {
    echo "<script>
    alert('Este usuario ya existe, no se puede registrar');
    window.location='alta.html';
    </script>";
} else {
    $insertar = "INSERT INTO usuarios (nombre, correo, usuario, clave)
                VALUES ('$nombre', '$correo', '$usuario', '$clave')";
    $resultado = mysqli_query($conexion, $insertar);
    if ($resultado) {
        echo "<script> 
        alert('Se ha registrado el usuario con éxito');
        window.location='index.html'; 
        </script>";
    } else {
        echo "<script> 
        alert('No se pudo registrar');
        window.history.go(-1); 
        </script>";
    }
}
?>
