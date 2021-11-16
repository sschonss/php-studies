<?php
$compra = 100;
$saldo = 0;
$cartao_bloqueado = false;

if($cartao_bloqueado) {
  echo "Seu cartão está bloqueado.";
}else if ( $saldo < $compra ) {
  echo "Compra recusada";
} else {
  echo "Compra aprovada";
}