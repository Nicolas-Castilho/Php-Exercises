<?php

//exercício 1

$nome = 'Nicolas';  

//exercício 2

$sobrenome = "Castilho";

//exercício 3

echo $nome. '<br>' . $sobrenome;

//exercício 4 

echo "<br>O tipo de variavél nome é : " . gettype($nome);
echo "<br>O tipo de variavél sobrenome é : " . gettype($sobrenome);

//exercício 5

$a = 7;
$b = 5.7;

// exercício 6

$resultado = $a + $b;

//exercício 7

echo "<br>O resultado é: " . $resultado++;
echo "<br>Conferência: " . $resultado. '<br >';

var_dump($resultado);

//exercício 8

echo "<br>Valor da variável com gettype: nome: " .  gettype($nome);
echo "<br>Valor da variável com gettype: sobrenome: " .  gettype($sobrenome);
echo "<br>Valor da variável com gettype: a: " .  gettype($a);
echo "<br>Valor da variável com gettype: b: " .  gettype($b);
echo "<br>Valor da variável com gettype: resultado: " .  gettype($resultado);

//adendo
$valores = array(0,1.0,7,"sal");
echo "<br>com gettype: " . gettype($valores). '<br>';
var_dump($valores);

//comparações

var_dump(0 == "a"); // 0 == 0 -> true
var_dump("1" == "01"); // 1 == 1 -> true
var_dump("10" == "1e1"); // 10 == 1= -> true
var_dump(100 == "1e2"); // 100 == 100 -> true

?>