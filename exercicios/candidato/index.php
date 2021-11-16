<?php

$candidato = array(
  "nome" => "Fernando Souza",
  "tecnologias" => array("PHP", "Java", "JavaScript", "Python")
);
$tecnologias = $candidato['tecnologias'];

$tecnologia_busca = "PHP";

$i = 0;

while ($i < count($tecnologias)) {
  if ($tecnologias[$i] == $tecnologia_busca) {
    echo "O candidato aprovado";
  }

  $i++;
}
