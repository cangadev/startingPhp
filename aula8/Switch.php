<?php
$diaSemana = date("w");

echo "Sabes que dia de semana é hoje?";
echo "<br><br>";

switch($diaSemana){
    case 0: echo "Hoje é Domingo";
    break;
    case 1: echo "Hoje é Seg.Feira";
    break;
    case 2: echo "Hoje é Terç.Feira";
    break;
    case 3: echo "Hoje é Quar.Feira";
    break;
    case 4: echo "Hoje é Quinta Feira";
    break;
    case 5: echo "Hoje é Sexta Feira";
    break;
    case 6: echo "Hoje é Sábado";
    break;
    default: echo "Dia inválido";

}

?>


