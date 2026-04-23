<html>
<head>
    <meta charset="UTF-8">
    <title>Encuesta</title>
    <link rel="stylesheet" href="Estilo.css">
</head>
<body>
    <header class="titulo">Comienzo de la encuesta</header>
    <article class="cuerpo">
<form action="hola.php">
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
        <article>
        <?php
    include 'salas de la casa/sala principal.php';
    ?>
        </article>


            <article>
            <?php
    include 'salas de la casa/cocina.php';
    ?>
            </article>



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