<?php

$messes = array(
	"Janeiro", "Fevereiro", "Março",
 "Abril", "Maio", "Junho",
  "Julho", "Agosto", "Setembro",
   "Outubro","Novembro", "Dezembro",
    );

//foreach ($messes as $mes) {

foreach ($messes as $index => $mes) {

	echo "Index: ".$index."<br>";
	echo "O mês é: ".$mes. "<br><br>";
}

?>