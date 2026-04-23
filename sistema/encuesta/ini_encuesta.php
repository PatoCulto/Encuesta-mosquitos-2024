<html>
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
        <link rel="stylesheet" href="Estilo.css">
        <script type="text/javascript">
function Numeros(string){
    var out = '';
    var filtro = '1234567890';
for (var i=0; i<string.length; i++)
if (filtro.indexOf(string.charAt(i)) != -1)
out +=string.charAt(i);
return out;
}
        </script>
</head>
<body>
    <header class="titulo">PRE ENCUESTA</header>
    <?php
    include 'nav_Bar.php';
    ?>
    <br>
    <br>
    <p>Por favor, registrese antes de comenzar.</p>
<div class="persona">
    <form action="../altas/alta_P.php" method="post">
        <table border="1">
            <th colspan="6">Registro de persona</th>
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>DNI</td>
                <td>Numero de casa</td>
            </tr>
            <tr>
                <td><input type="text" name="nombre" maxlength="30" required></td>
                <td><input type="text" name="apellido" maxlength="25" required></td>
                <td><input type="text" name="DNI" maxlength="8" required onkeyup="this.value=Numeros(this.value)"></td>
                <td><input type="text" name="IdCasa" maxlength="4" required onkeyup="this.value=Numeros(this.value)"></td>
            </tr>
            <tr>
                <td colspan="6" align="center"><input type="submit" value="Aceptar"><input type="reset" value="Borrar"></td>
            </tr>

        </table>
    </form>
</div>




    <p>elija las opciones que mas encajen con su casa</p>
    <form action="resive2(a revisar).php" method="post">

<div class="chato">


<br>
        cuartos: <br> si<input type="radio" name="3" value="5"> no<input type="radio" name="3" value="6" required> Cantidad: <input type="number" name="cuartos" id="cantidad" value="0"> <br><br> 
        Baño: <br> si<input type="radio" name="1" value="1"> no<input type="radio" name="1" value="2" required> Cantidad: <input type="number" name="baño" value="0"> <br> <br>
        Sala Principal: <br> si<input type="radio" name="6" value="11"> no<input type="radio" name="6" value="12" required> Cantidad: <input type="number" name="salaP" value="0"> <br><br>
        cocina: <br> si<input type="radio" name="2" value="3"> no<input type="radio" name="2" value="4" required> Cantidad: <input type="number" name="cocina" value="0"> <br><br>
        garaje:  <br> si<input type="radio" name="4" value="7"> no<input type="radio" name="4" value="8" required> Cantidad: <input type="number" name="garaje" value="0"> <br><br>
        Patio: <br> si<input type="radio" name="5" value="9"> no<input type="radio" name="5" value="10" required> Cantidad: <input type="number" name="patio" value="0"> <br><br>
        


        <input type="submit" value="Aceptar"> <input type="reset" value="Borrar">
    </form>

</div>
<br>
    <footer>
        <div class="alumnos">alumnos: <br>
<a href="#">Ortellado Ian,</a><a href="#"> Garcia Karen,</a><a href="#"> Ozuna Valentina.</a>        </div>
    </footer> 
</body>
</html>