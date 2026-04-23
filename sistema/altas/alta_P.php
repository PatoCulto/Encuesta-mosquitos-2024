<head>
    <link rel="stylesheet" href="http://localhost/encuesta_mosquito/sistema/encuesta/Estilo.css">
</head>
<?php
session_start();
$_session=$name=$_POST['nombre'];
$_SESSION['nombre']=$name;
$_session=$lastName=$_POST['apellido'];
$_SESSION['apellido']=$lastName;
$_session=$Ident=$_POST['DNI'];
$_SESSION['DNI']=$Ident;
$_session=$num_House=$_POST['IdCasa'];
$_SESSION['IdCasa']=$num_House;

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['DNI'];
$nro_Casa=$_POST['IdCasa'];


$host="localhost:3306";
$usuario="root";
$pass="";
$base="mosquitos";
$conexion=mysqli_connect($host,$usuario,$pass,$base);
$consulta=mysqli_query($conexion, "select IdPersona from personas");
$idPersona=mysqli_fetch_field($consulta);

$column=mysqli_num_fields($consulta);
$filas=mysqli_num_rows($consulta);

$idPersonaB=$filas;

if ($IdPersonaB = $filas) {
    $IdPersonaB = $idPersonaB + 1;
}
    
    mysqli_query($conexion,"INSERT personas (IdPersona, nombre, apelido, DNI, IdCasa) values ('$IdPersonaB','$nombre','$apellido','$dni','$nro_Casa')");
    echo "<b><i>registro completo, puede continuar con la encuesta</i></b>";
?>

<?php
include '../encuesta/ini_encuesta.php';
?>