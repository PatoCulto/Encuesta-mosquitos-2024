<html>
    <head>
        <title>hola</title>
        <link rel="stylesheet" href="Estilo.css">
    </head>
</html>
<body>
    <header class="titulo">Encuesta</header>
<?php
session_start();
$_session=$Ncuartos=$_POST['cuartos'];
$_SESSION['cuartos']=$Ncuartos;

$_session=$Nbaños=$_POST['baño'];
$_SESSION['baño']=$Nbaños;

$_session=$NsalaP=$_POST['salaP'];
$_SESSION['salaP']=$NsalaP;

$_session=$Ncocina=$_POST['cocina'];
$_SESSION['cocina']=$Ncocina;

$_session=$Ngaraje=$_POST['garaje'];
$_SESSION['garaje']=$Ngaraje;

$_session=$Npatio=$_POST['patio'];
$_SESSION['patio']=$Npatio;


$Ncuartos=$_POST['cuartos'];
$Nbaños=$_POST['baño'];
$NsalaP=$_POST['salaP'];
$Ncocina=$_POST['cocina'];
$Ngaraje=$_POST['garaje'];
$Npatio=$_POST['patio'];
$a=array(6);


$a[2]= '<article class="cuartos">
<h3>Cuartos</h3>
<div>
¿Tiene mucha humedad? <br>
<input type="radio" name="radio1" value="1">Si<br>
<input type="radio" name="radio1" value="0">No<br>
</div>
<br>
<div>
¿Tiene plantas? <br>
<input type="radio" name="radio2" value="1">Si<br>
<input type="radio" name="radio2" value="0">No<br>
</div>
<br>
<div>
¿Limpia el agua de la maceta con frecuencia? <br>
<input type="radio" name="radio3" value="1">Si<br>
<input type="radio" name="radio3" value="0">No<br>
</div>
<br>
<div>
¿Tiene botellas o vasos con agua olvidados? <br>
<input type="radio" name="radio4" value="1">Si<br>
<input type="radio" name="radio4" value="0">No<br>
</article>' ;


$a[0]= '<article class="baño">
<h3>Sala del baño</h3>

<div>
<b><i>¿Con cuanta frecuencia se limpia el baño?</i></b> <br>
<br>
    Con frecuencia (cada pocos dias) <input type="radio" name="paco" value="10"> <br>
<br>
    Una vez a la semana<input type="radio" name="paco" value="20"><br>
<br>
    Una vez al mes<input type="radio" name="paco" value="50"><br>
<br>
    No lo limpio<input type="radio" name="paco" value="100"><br>
</div>
<br>
<div>
    ¿Suele estar húmedo? <br>
    <input type="radio" name="radio5" value="1">Si<br>
    <input type="radio" name="radio5" value="0">No<br>
</div>
<br>
<div>
    ¿Tiene fugas de agua? <br>
    <input type="radio" name="radio6" value="1">Si<br>
    <input type="radio" name="radio6" value="0">No<br>
</div>

<div>
            ¿Se estanca el agua? <br>
            <input type="radio" name="radio6_2" value="1">Si<br>
            <input type="radio" name="radio6_2" value="0">No<br>
        </div>
<br>
</article>' ;



$a[5]= '<article class="sala-principal">
<h3>Sala princial</h3>

<div>¿Tiene macetas?<br>
    <input type="radio" name="radio15" value="1">Si<br>
    <input type="radio" name="radio15" value="0">No<br>
<br>
<div>¿Su casa sufre de estancamiento de agua? <br>
    <input type="radio" name="radio16" value="1">Si<br>
    <input type="radio" name="radio16" value="0">No<br>
<br>
<div>¿Tiene baldes con agua? <br>
    <input type="radio" name="radio17" value="1">Si<br>
    <input type="radio" name="radio17" value="0">No<br>
<br>
<div>¿Suele entrar agua? <br>
    <input type="radio" name="radio18" value="1">Si<br>
    <input type="radio" name="radio18" value="0">No<br>
<br>
<div>¿Tiene humedad en la casa? <br>
    <input type="radio" name="radio19" value="1">Si<br>
    <input type="radio" name="radio19" value="0">No<br>
<br>
<br>
</article>' ;


$a[1]= '<article class="cocina">
<h3>Cocina</h3>

<div>
    ¿Tiene mucha humedad? <br>
    <input type="radio" name="radio20" value="1">Si<br>
    <input type="radio" name="radio20" value="0">No<br>
</div>
<br>
<div>
    ¿Se le tapa el fregadero? <br>
    <input type="radio" name="radio21" value="1">Si<br>
    <input type="radio" name="radio21" value="0">No<br>
</div>
<br>
<div>
    ¿Tiene botellas o vasos con agua olvidados? <br>
    <input type="radio" name="radio22" value="1">Si<br>
    <input type="radio" name="radio22" value="0">No<br>
</div>
<br>
<div>
    ¿Tiene fugas de agua? <br>
    <input type="radio" name="radio23" value="1">Si<br>
    <input type="radio" name="radio23" value="0">No<br>
</div>
<br>
<div>
    ¿Su heladera suele soltar agua? <br>
    <input type="radio" name="radio24" value="1">Si<br>
    <input type="radio" name="radio24" value="0">No<br>
</div>
</article>' ;


$a[3]= '<article class="garaje">
<h3>Garaje</h3>
<div>
    tiene goteras? <br>
    <input type="radio" name="radio25" value="1">Si<br>
    <input type="radio" name="radio25" value="0">No<br>
</div>
<br>
<div>
    ¿Tiene lavarropa allí? <br>
    <input type="radio" name="radio26" value="1">Si<br>
    <input type="radio" name="radio26" value="0">No<br>
</div>
<br>
<div>
    En caso de que tenga lavarropa <br>
    ¿Suele estancar agua? <br>
    <input type="radio" name="radio27" value="1">Si<br>
    <input type="radio" name="radio27" value="0">No<br>
</div>
</article>' ;


$a[4]= '<article class="patio">
<h3>Patio</h3>

<div>
    ¿Tiene macetas? <br>
    <input type="radio" name="radio7" value="1">Si<br>
    <input type="radio" name="radio7" value="0">No<br>
</div>
<br>
<div>
    ¿Tiene ruedas tiradas? <br>
    <input type="radio" name="radio8" value="1">Si<br>
    <input type="radio" name="radio8" value="0">No<br>
</div>
<br>
<div>
    ¿La tierra absorbe el agua despues de la lluvia? <br>
    <input type="radio" name="radio9" value="1">Si<br>
    <input type="radio" name="radio9" value="0">No<br>
</div>
<br>
<div>
    ¿Tiene una fuente de agua estatica? <br>
    <input type="radio" name="radio10" value="1">Si<br>
    <input type="radio" name="radio10" value="0">No<br>
</div>
<br>
<div>
    ¿Tiene una pileta/piscina? <br>
    <input type="radio" name="radio11" value="1">Si<br>
    <input type="radio" name="radio11" value="0">No<br>
</div>
<br>
<div>
    Si tiene una pileta/piscina ¿La limpia con frecuencia? <br>
    <input type="radio" name="radio12" value="1">Si<br>
    <input type="radio" name="radio12" value="0">No<br>
</div>
<br>
<div>
    ¿En epoca de frio la desarma y la limpia? <br>
    <input type="radio" name="radio13" value="1">Si<br>
    <input type="radio" name="radio13" value="0">No<br>
</div>
<br>
<div>
    En caso de que tenga mascotas ¿Limpia sus platos de agua y comida con frecuencia? <br>
    <input type="radio" name="radio14" value="1">Si<br>
    <input type="radio" name="radio14" value="0">No<br> 
</article>' ;



?>

<?php
$baño=$_POST['1'];

if($baño <= 1){
    $baño=$a[0];
}else{
    $baño="";
}


$cocina=$_POST['2'];

if($cocina <= 3){
    $cocina=$a[1];
}else{
    $cocina="";
}


$cuarto=$_POST['3'];

if($cuarto <= 5){
    $cuarto=$a[2];
}else{
    $cuarto="";
}


$garaje=$_POST['4'];

if($garaje <= 7){
    $garaje=$a[3];
}else{
    $garaje="";
}


$patio=$_POST['5'];

if($patio <= 9){
    $patio=$a[4];
}else{
    $patio="";
}


$sala_P=$_POST['6'];

if($sala_P <= 11){
    $sala_P=$a[5];
}else{
    $sala_P="";
}

?>
<form action="procesa.php" method="post">
<div class="chato">
<?php
for ($I=0; $I < $Ncuartos ; $I++) { 
    echo "<br>";
    echo $cuarto;
}

 for ($II=0; $II < $Nbaños ; $II++) { 
    echo "<br>";
    echo $baño;
 }

for ($III=0; $III < $NsalaP ; $III++) { 
    echo "<br>";
    echo $sala_P;
}

for ($IV=0; $IV < $Ncocina ; $IV++) { 
    echo "<br>";
    echo $cocina;
}

 for ($V=0; $V < $Ngaraje ; $V++) { 
    echo "<br>";
    echo $garaje;
 }
 
for ($VI=0; $VI < $Npatio ; $VI++) { 
    echo "<br>";
    echo $patio;
}
 echo "<br>";
 ?>
 </div>
 <input type="submit" value="Aceptar"> <input type="reset" value="Borrar">
 </form>
<footer>
        <div class="alumnos">alumnos: <br>
            <a href="#">Ortellado,</a> <a href="#">Garcia,</a>  <a href="#">Ozuna.</a>
          </div>
    </footer> 
</body>