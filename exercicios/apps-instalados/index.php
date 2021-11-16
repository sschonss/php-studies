<?php

$apps = array(
  array("nome" => "ifood", "instalado" => false),
  array("nome" => "whatsapp", "instalado" => true),
  array("nome" => "uber", "instalado" => true),
);

foreach ($apps as $app) {

  if ($app["instalado"] == false) {
    echo "Deseja instalar o app: " . $app["nome"];
  }
}
