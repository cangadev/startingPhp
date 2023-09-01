<?php
$condicao = true;

while($condicao){
    $number = rand(1, 20);

    if($number != 7){
        echo $number."<br>";
    }else if($number == 7){
        echo $number." SETE";
        break;
    };
};
echo "<br><br><br>";

$total = 150;
$desconot = 0.9;

do{

    $total *= $desconot;

}while($total >= 100);

echo $total;
?>


