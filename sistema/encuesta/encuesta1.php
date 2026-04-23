<html>
<head>
    <meta charset="UTF-8">
    <title>Encuesta</title>
    <link rel="stylesheet" href="Estilo.css">
</head>
<body>
    <header class="titulo">Comienzo de la encuesta</header>
    <article class="cuerpo">
<form action="suma de vectores.php">
        <div>
Esta es una encuesta que nos dira las probabilidades de que su casa tenga una proliferacion de mosquitos. por favor responda con honestidad
        </div>




    <article>
    <?php
    include 'salas de la casa/cuartos.php';
    ?>
    </article>


    <article>
    <?php
    include 'salas de la casa/baño.php';
    ?>
    </article>


    <article>
    <?php
    include 'salas de la casa/patio.php';
    ?>
    </article>


    <article>
    <?php
    include 'salas de la casa/cocina.php';
    ?>
    </article>


    <?php
    include 'salas de la casa/garaje.php';
    ?>


    <input type="submit" value="Enviar"> <input type="reset" value="Reiniciar">
</form>

</article>
<footer>
    <div class="alumnos">alumnos: <br>
        <a href="#">ortellado,</a> <a href="#">garcia,</a>  <a href="#">ozuna.</a>
    </div>
</footer> 
</body>
</html>