
<?php
$data_atual = new DateTime();
$data_vencimento = new DateTime('2020-12-31');

$diferenca = $data_vencimento->diff($data_atual);
$diferenca_dias = $diferenca->format('%R%a');

if($diferenca_dias > 0){
  echo "A conta está atrasada!!!!";
}elseif ($diferenca_dias == 0) {
  echo "A conta venceu hoje!!!!!!.";
}else {
  echo "A conta ainda não venceu";
}