<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Adriano Barbosa");
$cad->setEmail("Adriano@hcode.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();

?>