<?php

$confirm = "";

if ($_POST){
    $email = $_POST['email'];
    $cpf_cnpj = $_POST['cpf-cnpj'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $ramo = $_POST['ramo'];
    $cor1 = $_POST['cor1'];
    $cor2 = $_POST['cor2'];
    $referencia = $_POST['referencia'];
    
    if(is_numeric($cpf_cnpj) && is_numeric($telefone) ){
            
            $confirm.= "<div class='sucesso'>";
            $confirm.= "<h3>Confirmando dados orçamento:</h3> ";
            $confirm.= "Email: ".$email;
            $confirm.= "<br>";
            $confirm.= "<br>CPF ou CNPJ: ".$cpf_cnpj;
            $confirm.= "<br>";
            $confirm.= "<br>Nome da empresa: ".$nome;
            $confirm.= "<br>";
            $confirm.= "<br>Telefone: ".$telefone;
            $confirm.= "<br>";
            $confirm.= "<br>Ramo: ".$ramo;
            $confirm.= "</div>";
        }else{
            $confirm.= "<div class='erro'>";
            $confirm.= "<p>Dados invalidos</p>";
            $confirm.= "</div>";
        }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="painel">
        <h2>Confirmação</h2>
        <div class="conteudo-painel">
            <?php
            echo $confirm;
            ?>
            <a class="botao" href="index.php">Cancelar</a>
            <a class="botao" href="enviado.php">Enviar</a>
        </div>
    </div>
    
</body>
</html>

