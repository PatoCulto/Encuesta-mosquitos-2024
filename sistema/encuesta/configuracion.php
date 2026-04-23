<html>
<head>
    <meta charset="UTF-8">
    <title>Encuesta</title>
    <link rel="stylesheet" href="Estilo.css">
</head>
<body>
    <header class="titulo">ELIJA SU CONFIGURACION</header>
    <?php
    include 'nav_Bar.php';
    ?>
   <article class="cuerpo">
         <div>
        <p>la configuracion es el tipo de casa que tiene usted. elija que configuracion que mas se adecue a su casa. por favor elija bien, esto repercutira en la encuesta.</p>
    </div>

    <article class="configuracion">
        <h3>configuracion 1</h3>
        Un cuarto, un baño, un patio, una sala principal, cocina, graje. <br>
        <button><a href="encuesta1.php">aceptar</a></button>
    </article>
    <br>

    <article class="configuracion">
        <h3>configuracion 2</h3>
        un cuarto, un baño, sin patio, una sala principal, cocina. <br>
        <button><a href="encuesta2.php">aceptar</a></button>
    </article>
    <br>
    <article class="configuracion">
        <h3>configuracion 3</h3>
        dos cuartos, dos baños, un patio grande, una sala principal, cocina, graje. <br>
        <button><a href="encuesta3.php">aceptar</a></button>
    </article>
    <br>
    <article class="configuracion">
        <h3>configuracion 4</h3>
        dos cuartos, un baño, un patio pequeño, cocina y sala principal juntos, graje. <br>
        <button><a href="encuesta4.php">aceptar</a></button>
    </article>
    <br>
    <article class="configuracion">
        <h3>configuracion 5</h3>
        mas de dos cuartos, un baño, un patio grande, cocina y sala principal juntos. <br>
        <button><a href="encuesta5.php">aceptar</a></button>
    </article>

        <article class="configuracion-dinamica">
            <h3>configuracion personalizada</h3>
           <a href="configuracionador.html"><button>ir</button></a>
        </article>
        <br>
    
   </article>
   <footer>
    <div class="alumnos">alumnos: <br>
        <a href="#">ortellado,</a> <a href="#">garcia,</a>  <a href="#">ozuna.</a>
      </div>
</footer>
</body>
</html>