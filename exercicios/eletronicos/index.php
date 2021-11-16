<?php

//Defina a garantia baseado na categoria do produto. Adicione um ano caso o produto seja da categoria 'Eletrônicos'.

$garantia = new DateTime();
$categoria_produto = "Eletrônicos";

switch ($categoria_produto) {
    case 'Eletrônicos':
        $garantia->add(new DateInterval('P1Y'));
        break;
    case 'Ferramentas':
        $garantia->add(new DateInterval('P6M'));
        break;

    default:
        $garantia->add(new DateInterval('P2M'));
        break;
}

echo "Garantia válida até: " . $garantia->format('d-m-Y');
