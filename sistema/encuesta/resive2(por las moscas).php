<?php
session_abort();
?>
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



$a=array(6);


$a[2]= '<article class="cuartos">
<h3>Cuartos</h3>
<div>
¿Tiene mucha humedad? <br>
<input type="radio" name="cuarto1" value="1">Si<br>
<input type="radio" name="cuarto1" value="0">No<br>
</div>
<br>
<div>
¿Tiene plantas? <br>
<input type="radio" name="cuarto2" value="1">Si<br>
<input type="radio" name="cuarto2" value="0">No<br>
</div>
<br>
<div>
¿Limpia el agua de la maceta con frecuencia? <br>
<input type="radio" name="cuarto3" value="1">Si<br>
<input type="radio" name="cuarto3" value="0">No<br>
</div>
<br>
<div>
¿Tiene botellas o vasos con agua olvidados? <br>
<input type="radio" name="cuarto4" value="1">Si<br>
<input type="radio" name="cuarto4" value="0">No<br>
</article>' ;


$a[0]= '<article class="baño">
<h3>Sala del baño</h3>

<div>
<b><i>¿Con cuanta frecuencia se limpia el baño?</i></b> <br>
<br>
    Con frecuencia (cada pocos dias) <input type="radio" name="baño1" value="10"> <br>
<br>
    Una vez a la semana<input type="radio" name="baño1" value="20"><br>
<br>
    Una vez al mes<input type="radio" name="baño1" value="50"><br>
<br>
    No lo limpio<input type="radio" name="baño1" value="100"><br>
</div>
<br>
<div>
    ¿Suele estar húmedo? <br>
    <input type="radio" name="baño2" value="1">Si<br>
    <input type="radio" name="baño2" value="0">No<br>
</div>
<br>
<div>
    ¿Tiene fugas de agua? <br>
    <input type="radio" name="baño3" value="1">Si<br>
    <input type="radio" name="baño3" value="0">No<br>
</div>

<div>
            ¿Se estanca el agua? <br>
            <input type="radio" name="baño4" value="1">Si<br>
            <input type="radio" name="baño4" value="0">No<br>
        </div>
<br>
</article>' ;



$a[5]= '<article class="sala-principal">
<h3>Sala princial</h3>

<div>¿Tiene macetas?<br>
    <input type="radio" name="Sala-P1" value="1">Si<br>
    <input type="radio" name="Sala-P1" value="0">No<br>
<br>
<div>¿Su casa sufre de estancamiento de agua? <br>
    <input type="radio" name="Sala-P2" value="1">Si<br>
    <input type="radio" name="Sala-P2" value="0">No<br>
<br>
<div>¿Tiene baldes con agua? <br>
    <input type="radio" name="Sala-P3" value="1">Si<br>
    <input type="radio" name="Sala-P3" value="0">No<br>
<br>
<div>¿Suele entrar agua? <br>
    <input type="radio" name="Sala-P4" value="1">Si<br>
    <input type="radio" name="Sala-P4" value="0">No<br>
<br>
<div>¿Tiene humedad en la casa? <br>
    <input type="radio" name="Sala-P5" value="1">Si<br>
    <input type="radio" name="Sala-P5" value="0">No<br>
<br>
<br>
</article>' ;


$a[1]= '<article class="cocina">
<h3>Cocina</h3>

<div>
    ¿Tiene mucha humedad? <br>
    <input type="radio" name="cocina1" value="1">Si<br>
    <input type="radio" name="cocina1" value="0">No<br>
</div>
<br>
<div>
    ¿Se le tapa el fregadero? <br>
    <input type="radio" name="cocina2" value="1">Si<br>
    <input type="radio" name="cocina2" value="0">No<br>
</div>
<br>
<div>
    ¿Tiene botellas o vasos con agua olvidados? <br>
    <input type="radio" name="cocina3" value="1">Si<br>
    <input type="radio" name="cocina3" value="0">No<br>
</div>
<br>
<div>
    ¿Tiene fugas de agua? <br>
    <input type="radio" name="cocina4" value="1">Si<br>
    <input type="radio" name="cocina4" value="0">No<br>
</div>
<br>
<div>
    ¿Su heladera suele soltar agua? <br>
    <input type="radio" name="cocina5" value="1">Si<br>
    <input type="radio" name="cocina5" value="0">No<br>
</div>
</article>' ;


$a[3]= '<article class="garaje">
<h3>Garaje</h3>
<div>
    tiene goteras? <br>
    <input type="radio" name="garaje1" value="1">Si<br>
    <input type="radio" name="garaje1" value="0">No<br>
</div>
<br>
<div>
    ¿Tiene lavarropa allí? <br>
    <input type="radio" name="garaje2" value="1">Si<br>
    <input type="radio" name="garaje2" value="0">No<br>
</div>
<br>
<div>
    En caso de que tenga lavarropa <br>
    ¿Suele estancar agua? <br>
    <input type="radio" name="garaje3" value="1">Si<br>
    <input type="radio" name="garaje3" value="0">No<br>
</div>
</article>' ;


$a[4]= '<article class="patio">
<h3>Patio</h3>

<div>
    ¿Tiene macetas? <br>
    <input type="radio" name="patio1" value="1">Si<br>
    <input type="radio" name="patio1" value="0">No<br>
</div>
<br>
<div>
    ¿Tiene ruedas tiradas? <br>
    <input type="radio" name="patio2" value="1">Si<br>
    <input type="radio" name="patio2" value="0">No<br>
</div>
<br>
<div>
    ¿La tierra absorbe el agua despues de la lluvia? <br>
    <input type="radio" name="patio3" value="1">Si<br>
    <input type="radio" name="patio3" value="0">No<br>
</div>
<br>
<div>
    ¿Tiene una fuente de agua estatica? <br>
    <input type="radio" name="patio4" value="1">Si<br>
    <input type="radio" name="patio4" value="0">No<br>
</div>
<br>
<div>
    ¿Tiene una pileta/piscina? <br>
    <input type="radio" name="patio5" value="1">Si<br>
    <input type="radio" name="patio5" value="0">No<br>
</div>
<br>
<div>
    Si tiene una pileta/piscina ¿La limpia con frecuencia? <br>
    <input type="radio" name="patio6" value="1">Si<br>
    <input type="radio" name="patio6" value="0">No<br>
</div>
<br>
<div>
    ¿En epoca de frio la desarma y la limpia? <br>
    <input type="radio" name="patio7" value="1">Si<br>
    <input type="radio" name="patio7" value="0">No<br>
</div>
<br>
<div>
    En caso de que tenga mascotas ¿Limpia sus platos de agua y comida con frecuencia? <br>
    <input type="radio" name="patio8" value="1">Si<br>
    <input type="radio" name="patio8" value="0">No<br> 
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
    echo '<article class="cuartos">
    <h3>Cuartos</h3>
    <div>
    ¿Tiene mucha humedad? <br>
    <input type="radio" name="cuartos1_'.$I.'" value="1" required>Si<br>
    <input type="radio" name="cuartos1_'.$I.'" value="0" required>No<br>
    </div>
    <br>
    <div>
    ¿Tiene plantas? <br>
    <input type="radio" name="cuartos2_'.$I.'" value="1" required>Si<br>
    <input type="radio" name="cuartos2_'.$I.'" value="0" required>No<br>
    </div>
    <br>
    <div>
    ¿Limpia el agua de la maceta con frecuencia? <br>
    <input type="radio" name="cuartos3_'.$I.'" value="1" required>Si<br>
    <input type="radio" name="cuartos3_'.$I.'" value="0" required>No<br>
    </div>
    <br>
    <div>
    ¿Tiene botellas o vasos con agua olvidados? <br>
    <input type="radio" name="cuartos4_'.$I.'" value="1" required>Si<br>
    <input type="radio" name="cuartos4_'.$I.'" value="0" required>No<br>
    </article>';
}

 for ($II=0; $II < $Nbaños ; $II++) { 
    echo "<br>";
    echo '<article class="baño">
    <h3>Sala del baño</h3>
    
    <div>
    <b><i>¿Con cuanta frecuencia se limpia el baño?</i></b> <br>
    <br>
        Con frecuencia (cada pocos dias) <input type="radio" name="baño1_'.$II.'" value="10"> <br>
    <br>
        Una vez a la semana<input type="radio" name="baño1_'.$II.'" value="20"><br>
    <br>
        Una vez al mes<input type="radio" name="baño1_'.$II.'" value="50"><br>
    <br>
        No lo limpio<input type="radio" name="baño1_'.$II.'" value="100"><br>
    </div>
    <br>
    <div>
        ¿Suele estar húmedo? <br>
        <input type="radio" name="baño2_'.$II.'" value="1" required>Si<br>
        <input type="radio" name="baño2_'.$II.'" value="0" required>No<br>
    </div>
    <br>
    <div>
        ¿Tiene fugas de agua? <br>
        <input type="radio" name="baño3_'.$II.'" value="1" required>Si<br>
        <input type="radio" name="baño3_'.$II.'" value="0" required>No<br>
    </div>
    
    <div>
                ¿Se estanca el agua? <br>
                <input type="radio" name="baño4_'.$II.'" value="1" required>Si<br>
                <input type="radio" name="baño4_'.$II.'" value="0" required>No<br>
            </div>
    <br>
    </article>' ;
 }

for ($III=0; $III < $NsalaP ; $III++) { 
    echo "<br>";
    echo '<article class="sala-principal">
    <h3>Sala princial</h3>
    
    <div>¿Tiene macetas?<br>
        <input type="radio" name="sala-P1_'.$III.'" value="1" required>Si<br>
        <input type="radio" name="sala-P1_'.$III.'" value="0" required>No<br>
    <br>
    <div>¿Su casa sufre de estancamiento de agua? <br>
        <input type="radio" name="sala-P2_'.$III.'" value="1" required>Si<br>
        <input type="radio" name="sala-P2_'.$III.'" value="0" required>No<br>
    <br>
    <div>¿Tiene baldes con agua? <br>
        <input type="radio" name="sala-P3_'.$III.'" value="1" required>Si<br>
        <input type="radio" name="sala-P3_'.$III.'" value="0" required>No<br>
    <br>
    <div>¿Suele entrar agua? <br>
        <input type="radio" name="sala-P4_'.$III.'" value="1" required>Si<br>
        <input type="radio" name="sala-P4_'.$III.'" value="0" required>No<br>
    <br>
    <div>¿Tiene humedad en la casa? <br>
        <input type="radio" name="sala-P5_'.$III.'" value="1" required>Si<br>
        <input type="radio" name="sala-P5_'.$III.'" value="0" required>No<br>
    <br>
    <br>
    </article>';
}

for ($IV=0; $IV < $Ncocina ; $IV++) { 
    echo "<br>";
    echo '<article class="cocina">
    <h3>Cocina</h3>
    
    <div>
        ¿Tiene mucha humedad? <br>
        <input type="radio" name="cocina1_'.$IV.'" value="1" required>Si<br>
        <input type="radio" name="cocina1_'.$IV.'" value="0" required>No<br>
    </div>
    <br>
    <div>
        ¿Se le tapa el fregadero? <br>
        <input type="radio" name="cocina2_'.$IV.'" value="1" required>Si<br>
        <input type="radio" name="cocina2_'.$IV.'" value="0" required>No<br>
    </div>
    <br>
    <div>
        ¿Tiene botellas o vasos con agua olvidados? <br>
        <input type="radio" name="cocina3_'.$IV.'" value="1" required>Si<br>
        <input type="radio" name="cocina3_'.$IV.'" value="0" required>No<br>
    </div>
    <br>
    <div>
        ¿Tiene fugas de agua? <br>
        <input type="radio" name="cocina4_'.$IV.'" value="1" required>Si<br>
        <input type="radio" name="cocina4_'.$IV.'" value="0" required>No<br>
    </div>
    <br>
    <div>
        ¿Su heladera suele soltar agua? <br>
        <input type="radio" name="cocina5_'.$IV.'" value="1" required>Si<br>
        <input type="radio" name="cocina5_'.$IV.'" value="0" required>No<br>
    </div>
    </article>';
}

 for ($V=0; $V < $Ngaraje ; $V++) { 
    echo "<br>";
    echo '<article class="garaje">
    <h3>Garaje</h3>
    <div>
        tiene goteras? <br>
        <input type="radio" name="garaje1_'.$V.'" value="1" required>Si<br>
        <input type="radio" name="garaje1_'.$V.'" value="0" required>No<br>
    </div>
    <br>
    <div>
        ¿Tiene lavarropa allí? <br>
        <input type="radio" name="garaje2_'.$V.'" value="1" required>Si<br>
        <input type="radio" name="garaje2_'.$V.'" value="0" required>No<br>
    </div>
    <br>
    <div>
        En caso de que tenga lavarropa <br>
        ¿Suele estancar agua? <br>
        <input type="radio" name="garaje3_'.$V.'" value="1" required>Si<br>
        <input type="radio" name="garaje3_'.$V.'" value="0" required>No<br>
    </div>
    </article>';
 }
 
for ($VI=0; $VI < $Npatio ; $VI++) { 
    echo "<br>";
    echo '<article class="patio">
    <h3>Patio</h3>
    
    <div>
        ¿Tiene macetas? <br>
        <input type="radio" name="patio1_'.$VI.'" value="1" required>Si<br>
        <input type="radio" name="patio1_'.$VI.'" value="0" required>No<br>
    </div>
    <br>
    <div>
        ¿Tiene ruedas tiradas? <br>
        <input type="radio" name="patio2_'.$VI.'" value="1" required>Si<br>
        <input type="radio" name="patio2_'.$VI.'" value="0" required>No<br>
    </div>
    <br>
    <div>
        ¿La tierra absorbe el agua despues de la lluvia? <br>
        <input type="radio" name="patio3_'.$VI.'" value="1" required>Si<br>
        <input type="radio" name="patio3_'.$VI.'" value="0" required>No<br>
    </div>
    <br>
    <div>
        ¿Tiene una fuente de agua estatica? <br>
        <input type="radio" name="patio4_'.$VI.'" value="1" required>Si<br>
        <input type="radio" name="patio4_'.$VI.'" value="0" required>No<br>
    </div>
    <br>
    <div>
        ¿Tiene una pileta/piscina? <br>
        <input type="radio" name="patio5_'.$VI.'" value="1" required>Si<br>
        <input type="radio" name="patio5_'.$VI.'" value="0" required>No<br>
    </div>
    <br>
    <div>
        Si tiene una pileta/piscina ¿La limpia con frecuencia? <br>
        <input type="radio" name="patio6_'.$VI.'" value="1" required>Si<br>
        <input type="radio" name="patio6_'.$VI.'" value="0" required>No<br>
    </div>
    <br>
    <div>
        ¿En epoca de frio la desarma y la limpia? <br>
        <input type="radio" name="patio7_'.$VI.'" value="1" required>Si<br>
        <input type="radio" name="patio7_'.$VI.'" value="0" required>No<br>
    </div>
    <br>
    <div>
        En caso de que tenga mascotas ¿Limpia sus platos de agua y comida con frecuencia? <br>
        <input type="radio" name="patio8_'.$VI.'" value="1" required>Si<br>
        <input type="radio" name="patio8_'.$VI.'" value="0" required>No<br> 
    </article>';
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