<?php
session_start();
$Ncuartos=$_SESSION['cuartos'];
$Nbaños=$_SESSION['baño'];
$NsalaP=$_SESSION['salaP'];
$Ncocina=$_SESSION['cocina'];
$Ngaraje=$_SESSION['garaje'];
$Npatio=$_SESSION['patio'];
//Cuarto
if ($Ncuartos < 1) {

}elseif ($Ncuartos = 1) {
    $cuarto1 = $_POST['cuartos1_0'];
    $cuarto2 = $_POST['cuartos2_0'];
    $cuarto3 = $_POST['cuartos3_0'];
    $cuarto4 = $_POST['cuartos4_0'];
}elseif ($Ncuartos > 1 && $Ncuartos < 50) {
    for ($I=0; $I < $Ncuartos ; $I++) { 
    $cuarto1_.$I = $_POST['cuartos1_'.$I];
    $cuarto2_.$I = $_POST['cuartos2_'.$I];
    $cuarto3_.$I = $_POST['cuartos3_'.$I];
    $cuarto4_.$I = $_POST['cuartos4_'.$I];
    }   
}



//Baño
if ($Nbaños < 1) {

}elseif ($Nbaños = 1) {
    $baño1 = $_POST['baño1_0'];
    $baño2 = $_POST['baño2_0'];
    $baño3 = $_POST['baño3_0'];
    $baño4 = $_POST['baño4_0'];
}elseif ($Nbaños > 1 && $Nbaños < 50) {
    for ($II=0; $II < $Nbaños ; $II++) { 
    $baño1_.$II = $_POST['baño1_'.$II];
    $baño2_.$II = $_POST['baño2_'.$II];
    $baño3_.$II = $_POST['baño3_'.$II];
    $baño4_.$II = $_POST['baño4_'.$II];
    }   
}




//Patio
if ($Npatio < 1) {

}elseif ($Npatio = 1) {
    $patio1 = $_POST['patio1_0'];
    $patio2 = $_POST['patio2_0'];
    $patio3 = $_POST['patio3_0'];
    $patio4 = $_POST['patio4_0'];
    $patio5 = $_POST['patio5_0'];
    $patio6 = $_POST['patio6_0'];
    $patio7 = $_POST['patio7_0'];
    $patio8 = $_POST['patio8_0'];
}elseif ($Npatio > 1 && $Npatio < 50) {
    for ($III=0; $III < $Npatio ; $III++) { 
    $patio1_.$III = $_POST['patio1_'.$III];
    $patio2_.$III = $_POST['patio2_'.$III];
    $patio3_.$III = $_POST['patio3_'.$III];
    $patio4_.$III = $_POST['patio4_'.$III];
    $patio5_.$III = $_POST['patio5_'.$III];
    $patio6_.$III = $_POST['patio6_'.$III];
    $patio7_.$III = $_POST['patio7_'.$III];
    $patio8_.$III = $_POST['patio8_'.$III];
    }   
}




//sala principal
if ($NsalaP < 1) {

}elseif ($NsalaP = 1) {
    $sala_P1 = $_POST['sala-P1_0'];
    $sala_P2 = $_POST['sala-P2_0'];
    $sala_P3 = $_POST['sala-P3_0'];
    $sala_P4 = $_POST['sala-P4_0'];
    $sala_P5 = $_POST['sala-P5_0'];
}elseif ($NsalaP > 1 && $NsalaP < 50) {
    for ($IV=0; $IV < $NsalaP ; $IV++) { 
    $sala_P1_.$IV = $_POST['sala-P1_'.$IV];
    $sala_P2_.$IV = $_POST['sala-P2_'.$IV];
    $sala_P3_.$IV = $_POST['sala-P3_'.$IV];
    $sala_P4_.$IV = $_POST['sala-P4_'.$IV];
    $sala_P5_.$IV = $_POST['sala-P5_'.$IV];
    }   
}




//cocina
if ($Ncocina < 1) {

}elseif ($Ncocina = 1) {
    $cocina1 = $_POST['cocina1_0'];
    $cocina2 = $_POST['cocina2_0'];
    $cocina3 = $_POST['cocina3_0'];
    $cocina4 = $_POST['cocina4_0'];
    $cocina5 = $_POST['cocina5_0'];
}elseif ($Ncocina > 1 && $Ncocina < 50) {
    for ($V=0; $V < $Ncocina ; $V++) { 
    $cocina1_.$V = $_POST['cocina1_'.$V];
    $cocina2_.$V = $_POST['cocina2_'.$V];
    $cocina3_.$V = $_POST['cocina3_'.$V];
    $cocina4_.$V = $_POST['cocina4_'.$V];
    $cocina5_.$V = $_POST['cocina5_'.$V];
    }   
}

//garaje
if ($Ngaraje < 1) {

}elseif ($Ngaraje = 1) {
    $garaje1 = $_POST['garaje1_0'];
    $garaje2 = $_POST['garaje2_0'];
    $garaje3 = $_POST['garaje3_0'];
}elseif ($Ngaraje > 1 && $Ngaraje < 50) {
    for ($VI=0; $VI < $Ngaraje ; $VI++) { 
    $garaje1_.$VI = $_POST['garaje1_'.$VI];
    $garaje2_.$VI = $_POST['garaje2_'.$VI];
    $garaje3_.$VI = $_POST['garaje3_'.$VI];
    }   
}




//Cuarto
if ($Ngaraje < 1) {

}elseif ($Ngaraje = 1) {

    if ($cuarto1 >= 1){
        $cuarto1 = 10;
        }else{
            $cuarto1 = 0;
        }
        
        
        
        if ($cuarto2 >= 1){
        $cuarto2 = 10;
        }else{
            $cuarto2 = 0;
        }
        
        
        
        if ($cuarto3 >= 1){
        $cuarto3 = 10;
        }else{
            $cuarto3 = 0;
        }
        
        
        
        if ($cuarto4 >= 1){
        $cuarto4 = 10;
        }else{
            $cuarto4 = 0;
        }
}elseif ($Ncuartos > 1 && $Ncuartos < 50) {
    for ($I=0; $I >= $Ncuartos ; $I++) { 

        if ($cuarto1_.$I >= 1){
            $cuarto1_.$I = 10;
            }else{
                $cuarto1_.$I = 0;
            }
            
            
            
            if ($cuarto2_.$I >= 1){
            $cuarto2_.$I = 10;
            }else{
                $cuarto2_.$I = 0;
            }
            
            
            
            if ($cuarto3_.$I >= 1){
            $cuarto3_.$I = 10;
            }else{
                $cuarto3_.$I = 0;
            }
            
            
            
            if ($cuarto4_.$I >= 1){
            $cuarto4_.$I = 10;
            }else{
                $cuarto4_.$I = 0;
                echo $cuarto4_.$I;
            }
    }   
}




// Baño
if ($Nbaños < 1) {

}elseif ($Nbaños = 1) {
    
    if ($baño1 >= 1){
        $baño1 = 10;
        }else{
            $baño1 = 0;
        }
        
        if ($baño2 >= 1){
        $baño2 = 10;
        }else{
            $baño2 = 0;
        }
        
        
        
        if ($baño3 >= 1){
        $baño3 = 10;
        }else{
            $baño3 = 0;
        }
        
        
        if ($baño4 >= 1){
            $baño4 = 10;
            }else{
                $baño4 = 0;
            }


}elseif ($Nbaños > 1 && $Nbaños < 50) {
    for ($II=0; $II < $Nbaños ; $II++) { 


    if ($baño1_.$II >= 1){
        $baño1_.$II = 10;
        }else{
            $baño1_.$II = 0;
        }

        if ($baño2_.$II >= 1){
        $baño2_.$II = 10;
        }else{
            $baño2_.$II = 0;
        }



        if ($baño3_.$II >= 1){
        $baño3_.$II = 10;
        }else{
            $baño3_.$II = 0;
        }


        if ($baño4_.$II >= 1){
            $baño4_.$II = 10;
            }else{
                $baño4_.$II = 0;
            }
            }   
}


//pato

if ($Npatio < 1) {

}elseif ($Npatio = 1) {

if ($patio1 >= 1){
$patio1 = 10;
}else{
    $patio1 = 0;
}



if ($patio2 >= 1){
$patio2 = 10;
}else{
    $patio2 = 0;
}



if ($patio3 >= 1){
$patio3 = 10;
}else{
    $patio3 = 0;
}



if ($patio4 >= 1){
$patio4 = 10;
}else{
    $patio4 = 0;
}



if ($patio5 >= 1){
$patio5 = 10;
}else{
    $patio5= 0;
}



if ($patio6 >= 1){
$patio6 = 10;
}else{
    $patio6 = 0;
}


if ($patio7 >= 1){
    $patio7 = 10;
}else{
        $patio7 = 0;
}


if ($patio8 >= 1){
    $patio8 = 10;
}else{
    $patio8= 0;
}

}elseif ($Npatio > 1 && $Npatio < 50) {
    for ($III=0; $III < $Npatio ; $III++) { 

if ($patio1_.$III >= 1){
$patio1_.$III = 10;
}else{
    $patio1_.$III = 0;
}



if ($patio2_.$III >= 1){
$patio2_.$III = 10;
}else{
    $patio2_.$III = 0;
}



if ($patio3_.$III >= 1){
$patio3_.$III = 10;
}else{
    $patio3_.$III = 0;
}



if ($patio4_.$III >= 1){
$patio4_.$III = 10;
}else{
    $patio4_.$III = 0;
}



if ($patio5_.$III >= 1){
$patio5_.$III = 10;
}else{
    $patio5_.$III= 0;
}



if ($patio6_.$III >= 1){
$patio6_.$III = 10;
}else{
    $patio6_.$III = 0;
}


if ($patio7_.$III >= 1){
    $patio7_.$III = 10;
}else{
        $patio7_.$III = 0;
}


if ($patio8_.$III >= 1){
    $patio8_.$III = 10;
}else{
    $patio8_.$III= 0;
}        

            }   
}

//Sala Principal

if ($NsalaP < 1) {

}elseif ($NsalaP = 1) {
if ($sala_P1 >= 1){
$sala_P1 = 10;
}else{
    $sala_P1 = 0;
}


if ($sala_P2 >= 1){
    $sala_P2 = 10;
}else{
    $sala_P2 = 0;
}


if ($sala_P3 >= 1){
    $sala_P3 = 10;
}else{
    $sala_P3 = 0;
}


if ($sala_P4 >= 1){
    $sala_P4 = 10;
}else{
    $sala_P4 = 0;
}


if ($sala_P5 >= 1){
    $sala_P5 = 10;
}else{
    $sala_P5 = 0;
}
}elseif ($NsalaP > 1 && $NsalaP < 50) {
    for ($IV=0; $IV < $NsalaP ; $IV++) { 

    if ($sala_P1_.$IV >= 1){
$sala_P1_.$IV = 10;
}else{
    $sala_P1_.$IV = 0;
}

if ($sala_P2_.$IV >= 1){
    $sala_P2_.$IV = 10;
}else{
    $sala_P2_.$IV = 0;
}


if ($sala_P3_.$IV >= 1){
    $sala_P3_.$IV = 10;
}else{
    $sala_P3_.$IV = 0;
}


if ($sala_P4_.$IV >= 1){
    $sala_P4_.$IV = 10;
}else{
    $sala_P4_.$IV = 0;
}


if ($sala_P5_.$IV >= 1){
    $sala_P5_.$IV = 10;
}else{
    $sala_P5_.$IV = 0;
}
    }   
}


//cocina
if ($Ncocina < 1) {

}elseif ($Ncocina = 1) {


    if ($cocina1 >= 1){
    $cocina1 = 10;
}else{
    $cocina1 = 0;
}


if ($cocina2 >= 1){
    $cocina2 = 10;
}else{
    $cocina2 = 0;
}


if ($cocina3 >= 1){
    $cocina3 = 10;
}else{
    $cocina3 = 0;
}


if ($cocina4 >= 1){
    $cocina4 = 10;
}else{
    $cocina4 = 0;
}


}elseif ($Ncocina > 1 && $Ncocina < 50) {
    for ($V=0; $V < $Ncocina ; $V++) { 


    if ($cocina1_.$V >= 1){
    $cocina1_.$V = 10;
}else{
    $cocina1_.$V = 0;
}


if ($cocina2_.$V >= 1){
    $cocina2_.$V = 10;
}else{
    $cocina2_.$V = 0;
}


if ($cocina3_.$V >= 1){
    $cocina3_.$V = 10;
}else{
    $cocina3_.$V = 0;
}


if ($cocina4_.$V >= 1){
    $cocina4_.$V = 10;
}else{
    $cocina4_.$V = 0;
}

    }   
}


//garaje

if ($Ngaraje < 1) {

}elseif ($Ngaraje = 1) {
    if ($garaje1 >= 1){
        $garaje1 = 10;
    }else{
        $garaje1 = 0;
    }
    
    
    if ($garaje2 >= 1){
        $garaje2 = 10;
    }else{
        $garaje2 = 0;
    }
    
    
    if ($garaje3 >= 1){
        $garaje3 = 10;
    }else{
        $garaje3 = 0;
    }
}elseif ($Ngaraje > 1 && $Ngaraje < 50) {
    for ($VI=0; $VI < $Ngaraje ; $VI++) { 

        if ($garaje1_.$VI >= 1){
            $garaje1_.$VI = 10;
        }else{
            $garaje1_.$VI = 0;
        }
        
        
        if ($garaje2_.$VI >= 1){
            $garaje2_.$VI = 10;
        }else{
            $garaje2_.$VI = 0;
        }
        
        
        if ($garaje3_.$VI >= 1){
            $garaje3_.$VI = 10;
        }else{
            $garaje3_.$VI = 0;
        }
    }   
}

$arraysito=array(6);
if($Ncuartos < 1) {
    $arraysito[1]=0;
}elseif ($Ncuartos = 1) {
    $arraysito[1]= $cuarto1 + $cuarto2 + $cuarto3 + $cuarto4;
}elseif ($Ncuartos > 1 && $Ncuartos < 50) {
    for ($I=0; $I >= $Ncuartos ; $I++) { 
        $arraysito[1]= $cuarto1_.$I + $cuarto2_.$I + $cuarto3_.$I + $cuarto4_.$I;
    }   
};
$cuartosuma= $arraysito[1];



if($Nbaños < 1) {
    $arraysito[2]=0;
}elseif ($Nbaños = 1) {
    $arraysito[2]= $baño1 + $baño2 + $baño3 + $baño4;
}elseif ($Nbaños > 1 && $Nbaños < 50) {
    for ($II=0; $II < $Nbaños ; $II++) { 
    $arraysito[2]= $baño1_.$II + $baño2_.$II + $baño3_.$II + $baño4_.$II;
    }   
};
$bañosuma= $arraysito[2];



if ($NsalaP < 1) {
    $arraysito[3]=0;
}elseif ($NsalaP = 1) {
    $arraysito[3]= $sala_P1 + $sala_P2 + $sala_P3 + $sala_P4 + $sala_P5;
}elseif ($NsalaP > 1 && $NsalaP < 50) {
    for ($III=0; $III < $NsalaP ; $III++) { 
    $arraysito[3]=$sala_P1_.$III + $sala_P2_.$III + $sala_P3_.$III + $sala_P4_.$III + $sala_P5_.$III;
    }   
};
$salaprincipalsuma= $arraysito[3];


if ($Ncocina < 1) {
    $arraysito[4]=0;
}elseif ($Ncocina = 1) {
    $arraysito[4]= $cocina1 + $cocina2 + $cocina3 + $cocina4 + $cocina5;
}elseif ($Ncocina > 1 && $Ncocina < 50) {
    for ($IV=0; $IV < $Ncocina ; $IV++) { 
    $arraysito[4]= $cocina1_.$IV + $cocina2_.$IV + $cocina3_.$IV + $cocina4_.$IV + $cocina5_.$IV;
    }   
};
$cocinasuma= $arraysito[4];


if ($Ngaraje < 1) {
    $arraysito[5]=0;
}elseif ($Ngaraje = 1) {
    $arraysito[5]= $garaje1 + $garaje2 + $garaje3;
}elseif ($Ngaraje > 1 && $Ngaraje < 50) {
    for ($V=0; $V < $Ngaraje ; $V++) { 
    $arraysito[5]= $garaje1_.$V + $garaje2_.$V + $garaje3_.$V;
    }   
};
$garajesuma= $arraysito[5];


if ($Npatio < 1) {
    $arraysito[6]=0;
}elseif ($Npatio = 1) {
    $arraysito[6]= $patio1 + $patio2 + $patio3 + $patio4 + $patio5 + $patio6 + $patio7 + $patio8;
}elseif ($Npatio > 1 && $Npatio < 50) {
    for ($VI=0; $VI < $Npatio ; $VI++) { 
    $arraysito[6]= $patio1_.$VI + $patio2_.$VI + $patio3_.$VI + $patio4_.$VI + $patio5_.$VI + $patio6_.$VI + $patio7_.$VI + $patio8_.$VI;
    }   
};

$patiosuma= $arraysito[6];
$total= $cuartosuma + $bañosuma + $salaprincipalsuma + $cocinasuma + $garajesuma + $patiosuma;



include 'Resultados.php';
?>