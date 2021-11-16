<?php

$data_atual = getDate();
$dia_semana = $data_atual['wday'];

$escala = ["Amanda", "João", "Juliana", "Rogério", "Bianca", "Roberto", "Kelly"];

$plantao = $escala[$dia_semana];

echo "O funcionário de plantão é: " . $plantao;