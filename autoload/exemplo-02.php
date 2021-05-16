<?php

function incluirClasses($nomeClasse){

	require_once($nomeClasse. ".php");
}

sql_autoload_register("");


$carro = new DelRey();

$carro->acelerar(80);
?>