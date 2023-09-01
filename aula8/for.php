<?php

for($i=0; $i<=10; $i++){

    echo $i."<br>";

};

echo "<br><br>";

/*for($i=0; $i<=100; $i++){

    if($i>20 && $i<=29) continue;

    if($i===78) break;

    echo $i."<br>";
}*/

$anoAtual = date("Y");

$anoNascimento = 2002;

for ($i = $anoAtual; $i>=$anoNascimento; $i--){
  
    echo $i."<br>";
    
}
?>


