<?php

include_once("expiravel.php");
include_once("produto.php");
include_once("assinatura.php");

$Assinatura = new Assinatura();

$Assinatura->setCodigo(123);
$Assinatura->setNome('Assinatura Netflix');
$Assinatura->setPreco(49.99);
$Assinatura->setDataExpiracao("2022-10-20");

echo "Dias restantes da assinatura: {$Assinatura->getTempoRestante()->days}";
