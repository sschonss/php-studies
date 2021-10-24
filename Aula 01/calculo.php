<?php

$resultado = "";

if ($_POST){
    $distancia = $_POST['distancia'];
    $autonommia = $_POST['autonomia'];
    
    if(is_numeric($distancia) && is_numeric($autonommia) ){

        if($distancia > 0 &&  $autonommia > 0){
            $valorGasolina = 5.80;
            $valorAlcool = 4.06;
            $valorDiesel = 4.51;
            
            $calculoGasolina = ($distancia / $autonommia) * $valorGasolina;
            $calculoGasolina = number_format($calculoGasolina, 2, ';', '.');
            
            $calculoAlcool = ($distancia / $autonommia) * $valorAlcool;
            $calculoAlcool = number_format($calculoAlcool, 2, ';', '.');
            
            $calculoDiesel = ($distancia / $autonommia) * $valorDiesel;
            $calculoDiesel = number_format($calculoDiesel, 2, ';', '.');
            
            $resultado.= "<div class='sucesso'>";
            $resultado.= "O valor total gasto sera de: ";
            $resultado.= "<ul>";
            $resultado.= "<li><b>Gasolina: R$ </b>".$calculoGasolina."<li/>";
            $resultado.= "<li><b>Alcool: R$ </b>".$calculoAlcool."<li/>";
            $resultado.= "<li><b>Diesel: R$ </b>".$calculoDiesel."<li/>";
            $resultado.= "</ul>";
            $resultado.= "</div>";
        }else{
            $resultado.= "<div class='erro'>";
            $resultado.= "<p>O valor da distancia e da autonomia devem ser maiores que zero!</p>";
            $resultado.= "</div>";
        }

    } else{
        $resultado.= "<div class='erro'>";
        $resultado.= "<p>Valores nao inseridos corretamente</p>";
        $resultado.= "</div>";
        
    }
    
   
}else{
    $resultado.= "<div class='erro'>";
    $resultado.= "<p>Nenhum dado foi recebido pelo formulario</p>";
    $resultado.= "</div>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Calculo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="painel">
        <h2>Resultado Calculo</h2>
        <div class="conteudo-painel">
            <?php
            echo $resultado;
            ?>
            <a class="botao" href="index.php">Voltar</a>
        </div>
    </div>
    
</body>
</html>

