<?php

//exercício 1

$a = 2;
$b = "2";

if  ($a == $b)
echo "As duas variavéis são iguais";
else
echo "As duas variavéis são diferentes";           

//exercício 2

if ( $a === $b)
echo "<br>O tipo das variavéis são iguais";
else
echo "<br>O tipo das variavéis são diferentes"; 

//exercício 3
$resultado = $a % 2;
if ( $resultado == 0 )                                                                              
echo "<br>Resto igual a 0";

//exercício 4

$mes = "Agosto=";

if ($mes === "Julho")
echo '<br>'. $mes;
else
echo "<br>Mês não reconhecido";      

//exercício 5

$nota = 7.0;

if($nota < 6.0)
echo "<br>reprovado";
else
echo "<br>aprovado";

//exercício 6

$dias = "Fevereiro";

switch ($dias) {
    case "Janeiro":
        echo "<br>Janeiro pode ter 31 dias";
    break;
    case "Fevereiro":
        echo "<br>Fevereiro pode ter 28 dias (29 em anos bissextos)";
    break;
    case "Março":
        echo "<br>Março pode ter 31 dias";
    break;
    case "Abril":
        echo "<br>Abril pode ter 30 dias";
    break;
    case "Maio":
        echo "<br>Maio pode ter 31 dias";
    break;
    case "Junho":
        echo "<br>Junho pode ter 30 dias";
    break;
    case "Julho":
        echo "<br>Julho pode ter 31 dias";
    break;
    case "Agosto":
        echo "<br>Agosto pode ter 31 dias";
    break;
    case "Setembro":
        echo "<br>Setembro pode ter 30 dias";
    break;
    case "Outubro":
        echo "<br>Outubro pode ter 31 dias";
    break;
    case "Novembro":
        echo "<br>Novembro pode ter 30 dias";
    break;
    case "Dezembro":
        echo "<br>Dezembro pode ter 31 dias";
    break;
    default :
    echo "<br>Mês não reconhecido";
}

?>