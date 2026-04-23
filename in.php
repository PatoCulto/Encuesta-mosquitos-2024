<html>
    <head>
        <link rel="stylesheet" href="Estilo.css">
    </head>
<body>
<?php
session_start();
$_session=$alia=$_POST['alias'];
$_SESSION['alias']=$alia;

if (!isset($_SESSION['alias'])) {
    $_SESSION['alias'] = $alia;
  }
  
$contra=$_POST['pass'];
$host="localhost:3306";
$usuario="root";
$pass="";
$base="mosquitos";
$conexion=mysqli_connect($host,$usuario,$pass,$base);
$resultado=mysqli_query($conexion, "SELECT cod_categoria FROM usuarios WHERE alias='$alia' AND pass='$contra'");
$colum=mysqli_num_fields($resultado);
$filas=mysqli_num_rows($resultado);
$rerar=mysqli_fetch_array($resultado);
switch($rerar[0]){
    case 1:
        include 'sistema/encuesta/inicio.php';
        break;
    case 2:
        include '../ADMIN/Menuadministrador.html';
        break;
    echo "<br>";
    default:
    echo "contraseña incorrecta";
    echo "<br>";
    echo "Por favor vuelva atras e intente nuvamente";
    echo "<br>";
    echo "<a href='http://localhost/encuesta_mosquito/Log.html'><p> <font size='8'>volver</font></p></a>";
    break;
}