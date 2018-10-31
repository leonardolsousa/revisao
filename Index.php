<?php

require_once("Conta.php");
require_once("Funcoes.php");

$conta1 = new Conta();
$conta1->setCliente("Joao Pedro");
$conta1->setNumero("111");
imprimirLinha($conta1->getCliente());
imprimirLinha($conta1->getNUmero());

?>