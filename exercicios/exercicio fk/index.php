//Verifique a variável $tecnologia_busca e imprima o framework disponível. Caso o framework não seja 'PHP', 'Java' ou 'JavaScript' imprima "Framework não disponível".

<?php

$tecnologia_busca = "Java";
$framework = "";

switch($tecnologia_busca) {
 case 'PHP': $framework = "Laravel"; 
 break;
 case 'Java': $framework = "Spring"; 
 break;
 case 'JavaScript': $framework = "Next"; 
 break;
 default : $framework = "Framework não disponível"; 
 break;
}

echo $framework;