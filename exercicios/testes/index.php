<?php
$expedicao = new DateTime();
$data_validade = new DateTime();
$data_validade->add(new DateInterval('P5Y'));

echo 'Data de expedição: ' . $expedicao->format('d-m-Y') . '<br>';
echo 'Data de validade: ' . $data_validade->format('d-m-Y') . '<br>';
