<head>
    <link rel="stylesheet" href="../encuesta/Estilo.css">
</head>
<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$alia=$_POST['alias'];
$pass2=$_POST['pass'];
$dni=$_POST['DNI'];
$cod_categoria=$_POST['cod_categoria'];

$host="localhost:3306";
$usuario="root";
$pass="";
$base="mosquitos";
$conexion=mysqli_connect($host,$usuario,$pass,$base);

$consulta=mysqli_query($conexion, "select id_usuario from usuarios");
$column=mysqli_num_fields($consulta);
$filas=mysqli_num_rows($consulta);
$idUsuarioB=$filas;

if ($idUsuarioB = $filas) {
    $idUsuarioB = $idUsuarioB + 1;
}

    mysqli_query($conexion,"INSERT usuarios (id_usuario, alias, pass, nombre, apellido, DNI, cod_categoria) values ('$idUsuarioB','$alia','$pass2','$nombre','$apellido','$dni','$cod_categoria')");
?>
<?php
include 'c:/xampp/htdocs/encuesta_mosquito/Log.html';
?>