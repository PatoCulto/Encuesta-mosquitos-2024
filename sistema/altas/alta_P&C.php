<?php
session_start();
$_session=$name=$_POST['nombre'];
$_SESSION['nombre']=$name;
$_session=$lastName=$_POST['apellido'];
$_SESSION['apellido']=$lastName;
$_session=$Ident=$_POST['DNI'];
$_SESSION['DNI']=$Ident;
$_session=$num_House=$_POST['nro_Casa'];
$_SESSION['nro_Casa']=$num_House;

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['DNI'];
$nro_Casa=$_POST['nro_Casa'];

$barrio=$_POST['barrio'];
$chacra=$_POST['chacra'];
$sector=$_POST['sector'];
$calle=$_POST['calle'];
$nro_calle=$_POST['nro_calle'];

$host="localhost:3306";
$usuario="root";
$pass="";
$base="mosquitos";
$conexion=mysqli_connect($host,$usuario,$pass,$base);


    mysqli_query($conexion,"INSERT casas (nro_Casa, barrio, chacras, sector, calle) values ('$nro_Casa', '$barrio', '$chacra', '$sector', '$calle')");
    mysqli_query($conexion,"INSERT personas (nombre, apellido, DNI, nro_Casa) values ('$nombre','$apellido','$dni','$nro_Casa')");
    
    echo "<b><i>registro completo, puede continuar con la encuesta</i></b>";
?>

<?php
include 'configuracionador.php';
?>