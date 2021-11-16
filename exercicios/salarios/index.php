<?php
//Corrija o código abaixo para somar os elementos do array $salarios e imprimir a média dos salários da empresa.

$salarios = array (2500, 1800, 3000);
$soma_salarios = 0;

foreach ($salarios as $salario) {
  $soma_salarios += $salario;
}

$media_salario = $soma_salarios / count($salarios);

echo "A média de salário da empresa é de : R$ " . $media_salario;