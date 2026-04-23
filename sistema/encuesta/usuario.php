<?php
session_start();
$alia=$_SESSION['alias'];
$name=$_SESSION['nombre'];
$lastName=$_SESSION['apellido'];
$Ident=$_SESSION['DNI'];
$num_House=$_SESSION['nro_Casa'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="EstiloV.css">
    <link rel="stylesheet" href="Estilo.css">
    <title>Nanai</title>
</head>
<body>
<header class="titulo">USUARIO</header>
    <?php
    include 'nav_bar.php';
    ?>
    <br>
    <br>
    <center>
<?php
$host="localhost:3306";
$usuario="root";
$pass="";
$base="mosquitos";
$conexion=mysqli_connect($host,$usuario,$pass,$base);
$resultado=mysqli_query($conexion,"SELECT * FROM Usuarios WHERE alias='$alia'");
$column=mysqli_num_fields($resultado);
$filas=mysqli_num_rows($resultado);
?>
<?php
    echo "<table border='1'>";
    $paraTitleHead=$column+2;
    echo "<tr><th colspan=$paraTitleHead>listado de Usuario</th>";
    echo "</tr>";
    echo "<tr>";
    for($i=0;$i<=$column-1;$i++)
        {
            $finfo=mysqli_fetch_field($resultado);
            echo "<th> $finfo->name </th>";
        }
    echo "</tr>";
    for ($ii=0; $ii <=$filas-1; $ii++) 
        { 
            $rerar=mysqli_fetch_array($resultado);
            echo "<tr>";
            for ($ic=0; $ic <=$column ; $ic++)
            { 
                if ($ic<$column-1)
                    {
                        echo "<td> $rerar[$ic] </td>";
                    }else{
                        if($ic<=$column-1)
                        {
                            echo "<td> $rerar[$ic] </td>";  
                        }
                    }
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>

    <table border="1">
            <th colspan="6">Registro de persona</th>
            <tr>
                <td>nombre</td>
                <td>apellido</td>
                <td>DNI</td>
                <td>numero de casa</td>
            </tr>
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $lastName; ?></td>
                <td><?php echo $Ident; ?></td>
                <td><?php echo $num_House; ?></td>
            </tr>
    </center>
<?php 

?>
    <footer class="footer-usuario">
  <div class="alumnos">alumnos: <br>
    <a href="#">ortellado,</a> <a href="#">garcia,</a>  <a href="#">ozuna.</a>
  </div>
  </footer>
    
</body>
</html>