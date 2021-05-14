<?php

class Pessoa {

	public $nome; //Atributo

	public function falar(){ //Método

		return "O meu nome é ".$this->nome;
	}
}

$adriano = new Pessoa();
$adriano->nome = "Adriano Barbosa";
echo $adriano->falar();

?>