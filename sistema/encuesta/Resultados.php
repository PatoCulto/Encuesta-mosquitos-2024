<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="Estilo.css">
    <title>Document</title>
</head>
<header class="titulo">Resultado</header>
<body>
    <?php
        include 'nav_Bar.php';
    ?>
    <br><center>
    <table border="1">
        <th colspan="8">Resultados</th>
            <tr>
                <td>Cuartos</td>
                <td>Baños</td>
                <td>Sala Principal</td>
                <td>Cocina</td>
                <td>Garaje</td>
                <td>Patio</td>
                <td>Total</td>
            </tr>
            <tr>
                <td><?php echo $cuartosuma;  ?></td>
                <td><?php echo $bañosuma;  ?></td>
                <td><?php echo $salaprincipalsuma;  ?></td>
                <td><?php echo $cocinasuma;  ?></td>
                <td><?php echo $garajesuma;  ?></td>
                <td><?php echo $patiosuma;  ?></td>
                <td><?php echo $total;  ?></td>
            </tr>
    </table></center>
    <footer class="footer-Resul">
  <div class="alumnos">alumnos: <br>
    <a href="#">ortellado,</a> <a href="#">garcia,</a>  <a href="#">ozuna.</a>
  </div>
  </footer>
</body>
</html>