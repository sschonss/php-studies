<?php
   $codigo_pais = 55;

switch($codigo_pais){
   case 1:
   case 33:
   case 55: echo 'Ligação autorizada' ;break;

   default: echo "Esta ligação precisa de autorização do gerente"; break;
}
?>