<?php

require_once 'autoload.php';

use Luiz\Banco\Modelo\Conta\Conta;
use Luiz\Banco\Modelo\Conta\ContaPoupanca;
use Luiz\Banco\Modelo\Conta\Titular;
use Luiz\Banco\Modelo\CPF;
use Luiz\Banco\Modelo\Endereco;

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Luiz Schons',
        new Endereco('Guarapuava', 'Tancredo Neves', 'Marechal Deodoro', '316')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();