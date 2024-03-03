<?php
include("conex.php");
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$laConsulta= "SELECT * FROM usuarios WHERE usuario ='$usuario' AND clave ='$clave'";
$resultado = mysqli_query($conexion, $laConsulta);
$arrayUsuarioEncontrado = mysqli_fetch_array($resultado);

if($arrayUsuarioEncontrado){
    header("location:directo.html");
}else {
    echo"<script>
    alert('Usuario o contraseña incorrectos, vuelva a intentarlo');
    window.location='index.html';
    </script>";
}
?>
