<?php

$Nome = 'João Barone'; // string
$Idade = 18; // int
$Peso = 78.500; // float
$Casado = true; // bool

echo $Nome .'<br/>' .$Idade .'<br/>' .$Peso .'<br/>' .$Casado .'<br/>'; 

$Cursos = [1,2,3,4]; //array

$a = 5;
$b = 6;

$adicao = $a + $b;
$subtracao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;
$resto = $a % $b;

echo "O resultado da soma é: " . $adicao;
echo "<br/>O resultado da subtração é: " . $subtracao;
echo "<br/>O resultado da multiplicação é: " . $multiplicacao;
echo "<br/>O resultado da divisão é: " . $divisao;
echo "<br/>O resultado do resto é: " . $resto .'<br/>';

echo "<h3>Pós-incremento</h3>";
$a = 5;
echo "Deve ser 5: " . $a++ ."<br />";
echo "Deve ser 6: " . $a ."<br />";

echo "<h3>Pré-incremento</h3>";
$a = 5;
echo "Deve ser 6: " . ++$a ."<br />";
echo "Deve ser 6: " . $a ."<br />";

echo "<h3>Pós-decremento</h3>";
$a = 5;
echo "Deve ser 5: " . $a-- ."<br />";
echo "Deve ser 4: " . $a ."<br />";

echo "<h3>Pré-decremento</h3>";
$a = 5;
echo "Deve ser 4: " . --$a ."<br />";
echo "Deve ser 4: " . $a ."<br />";

$a = "1";
$a = 1;

echo gettype($a); // a saída deve ser integer

$a = "1";
settype($a, "integer");

?>