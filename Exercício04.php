<html><title>Aula3</title></html>

<?php

$arr = array(1,2,3,4);
foreach ($arr as $valor) {
    $valor = $valor * 2;
}

var_dump($arr);
echo "<hr/>";

$arr = array(1,2,3,4);
foreach ($arr as &$valor) {
    $valor = $valor * 2;
}

var_dump($arr);
echo "<hr/>";

$nomes = array("Nome 01<br/>", "Nome 02<br/>","Nome 03<br/>","Nome 04<br/>","Nome 05<br/>","Nome 06<br/>","Nome 07<br/>","Nome 08<br/>","Nome 09<br/>","Nome 10<br/>","Nome 11<br/>","Nome 12<br/>","Nome 01<br/>","Nome 13<br/>");
$numeros = [7,8,15,25,18,19,3,1,2,9,11,12,13,14,22,10];


//var_dump($nomes);

//var_dump($numeros);

//var_dump($estado);

//Exercício 1

for($i = 0; $i <= 9;$i++)
{
   echo $nomes[$i] . "<hr/>";
}

//Exercício 2

$total = 15;

$resultado = 0;

for($i = 0; $i <= $total; $i ++)
{
    $resultado += $numeros[$i];
}

echo "O resultado é: " . $resultado . "<hr/>";

$resultado2 = 0;

foreach ($numeros as $num)
{
    $resultado2 += $num;
}

echo "O resultado é: " . $resultado2 . "<hr/>";

//Exercício 3

$contador = 0;

do{
    echo $contador++ . ',';
} while($contador <= 100);
echo "<hr/>";

// Exercício 4

$contador2 = 0;

do{

if(($contador2 % 2) == 0)
{
    echo "O valor " . $contador2 . " é par";
}
else
{
    echo "///";
}

$contador2++;

}while($contador2 <= 100);
echo "<hr/>";

//Exercício 5

$contador3 = 500;

do{

if(($contador3 % 2) == 0)
{
    echo "O valor " .$contador3 . " é par";
}
else
{
    echo "///";
}

--$contador3;

}while($contador3 >= 0);
echo "<hr/>";

//Exercício 6

$arr = array(1,2,3,4,5,6,7,8,9,10);

$soma = 0;

foreach($arr as $num)
{
    if(($num % 2) != 0)
    {
        $soma += $num; 
    }

}
echo "O resultado da soma dos números ímpares é: " .$soma ."<hr/>";

//Exercício 7

$ar1 = array(23,10,55);
$ar2 = array(47,89,51);
array_multisort($ar1, $ar2);

var_dump($ar1);
echo "<br>";
var_dump($ar2);
echo "<hr/>";

$nomes = array("C"=>"Breno", "A"=>"Nicolas", "B"=>"Carlos", "D"=>"Lucas");
asort($nomes);
foreach($nomes as $chave => $valor){
    echo "$chave = $valor<br/>";
}

echo "<hr/>";

$nomes = array("C"=>"Breno", "A"=>"Nicolas", "B"=>"Carlos", "D"=>"Lucas");
arsort($nomes);
foreach($nomes as $chave => $valor){
    echo "$chave = $valor<br/>";
}

echo "<hr/>";

$nomes = array("C"=>"Breno", "A"=>"Nicolas", "B"=>"Carlos", "D"=>"Lucas");
krsort($nomes);
foreach($nomes as $chave => $valor){
    echo "$chave = $valor<br/>";
}

echo "<hr/>";

$nomes = array("C"=>"Breno", "A"=>"Nicolas", "B"=>"Carlos", "D"=>"Lucas");
ksort($nomes);
foreach($nomes as $chave => $valor){
    echo "$chave = $valor<br/>";

}

echo "<hr/>";

$pokemon = array('YVELTAL','JIRACHI','BELDUM','mew','obstagoon','amaura');
sort($pokemon);
echo "Exibição padrão: <br/>";
print_r($pokemon);

$pokemon = array("YVELTAL","JIRACHI","BELDUM","mew","obstagoon","amaura");
natcasesort($pokemon);
echo "<br>Exibição ignorando ordenação por caracteres maiúsculos: <br/>";
print_r($pokemon);
echo "<hr/>";

$pacientes = array('paciente-1','paciente-10','paciente-2','paciente-17');
sort($pacientes);
echo "Exibição padrão: <br/>";
print_r($pacientes);

$pacientes = array('paciente-1','paciente-10','paciente-2','paciente-17');
natsort($pacientes);
echo "<br>Exibição em \"Ordem natural\": <br/>";
print_r($pacientes);
echo "<hr/>";

$nomes = array("Breno","Nicolas","Carlos","Lucas");
rsort($nomes);
foreach($nomes as $chave => $valor){
    echo "$chave = $valor<br/>";
}

echo "<hr/>";

$jokenpo = array("Pedra","Papel","Tesoura");
srand((float)microtime()*1000000);
shuffle($jokenpo);
foreach ($jokenpo as $seq) {
    echo "$seq ";
}

echo "<hr/>";

$nomes = array("Breno","Nicolas","Carlos","Lucas");
sort($nomes);
foreach($nomes as $chave => $valor){
    echo "$chave = $valor<br/>";
}

echo "<hr/>";

$jogadores = array('jogador11','jogador27','jogador45','jogador23','jogador7');
uasort ( $jogadores , function ($a, $b) {
            return strnatcmp($a,$b);
        }
    );
print_r($jogadores);
echo "<hr/>";

$jogadores = array('jogador11','jogador27','jogador45','jogador23','jogador7');
usort ( $jogadores , function ($a, $b) {
            return strnatcmp($a,$b);
        }
    );
print_r($jogadores);
echo "<hr/>";

function minha_ordem($x, $y)
{
    if ($x == $y) 
        return 0;
  
    return ($x > $y) ? -1 : 1;
}

$alunos  = array("Roberto"=>"3","Maria"=>"1","Pedro"=>"4","Matheus"=>"5","Fernanda"=>"2");
uksort($alunos, "minha_ordem");
print_r($alunos);
echo "<hr/>";

//Exercício 8

$cores = array(3=>"vermelho",1=>"Roxo",5=>"Azul",2=>"Amarelo",4=>"Preto");
ksort($cores);
echo "Por ordem crescente: <br/>";
foreach($cores as $chave => $cor){
    echo "$chave = $cor<br/>";

}

echo "<hr/>";

$cores = array(3=>"vermelho",1=>"Roxo",5=>"Azul",2=>"Amarelo",4=>"Preto");
krsort($cores);
echo "Por ordem decrescente: <br/>";
foreach($cores as $chave => $cor){
    echo "$chave = $cor<br/>";
}

echo "<hr/>";

//Exercício 9

$estados = [
    'SP' => 'São Paulo',
    'MG' => 'Minas Gerais',
    'RJ' => 'Rio de Janeiro',
    'ES' => 'Espírito Santo'
];
ksort($estados);
foreach($estados as $sigla => $estado){
    echo "$sigla = $estado<br>";
}

?>