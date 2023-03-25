<?php

$raio = "";
$cir="";


$form = isset($_GET["raio"]);

if($form){
    $raio=floatval($_GET["raio"]);
    $circ=number_format(2*M_PI*$raio, 2);
  
}


?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Circunferencia</title>
</head>

<style>

        body{
            background-color: black;
            color: white;
            text-align: center;
        }

        div{
            background-color: rgba(255, 255, 255, 25%);
            width: 32%;
            border-radius: 20px;
            padding: 20px;
            margin: auto;
        }

        
        input{
            font-size: 20px;
            text-align:center;
        }


        .imagem{
            background-image:url("circulo.jpg");
            background-size:cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 200px; 
            color:red;
            font-size:30px;  
        }

        #idraio{
            position: relative;
            right: 50px;
            top:50px;
        }

        #idcirc{
            position: relative;
            left: 170px;
            bottom: 9px;
            width: 15%;            
        }

    </style>

<body>
    <h1>CÁLCULO DA CIRCUNFERÊNCIA</h1>
    <div>
        <form>
            <input type="number" name="raio" step="0.01" min="0" placeholder="RAIO" required="required">
            <br><br>
            <input type="submit" value="CALCULAR">
        </form>
    </div>
    <br><br>
    
    <?php if($form): ?>

        <div class="imagem">
           <div id="idraio"> <?=$raio?> </div>  
           <div id="idcirc"> <?=$circ?></div>
        </div>
      
    <?php endif; ?>


</body>
</html>