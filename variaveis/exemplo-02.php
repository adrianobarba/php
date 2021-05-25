<?php

/*$anoNascimento = 1990;

$nomeCompleto = "";*/
// Na linha de baixo temos uma variável com número no nome

$nome1 = "Adriano";

$sombreNome = "Barbosa";

$nomeCompleto = $nome1 . $sombreNome; // dessa forma os nomes ficam juntos sem espaço, se usar o + e a variável for númerica ele vai somar

$nomeCompleto1 = $nome1 . " " . $sombreNome;

echo $nomeCompleto;
echo "</br>";
echo $nomeCompleto1;
exit;

echo $nome1;

echo "<br/>";

unset($nome1);  //esse comando apaga a variável podendo colocar mais de uma variável separando com virgula

if(isset($nome1)){

echo $nome1;
}

?>