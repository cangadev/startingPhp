<?php
$idade = -1;

echo "Posso conduzir_?";

echo "<br><br>";

if($idade>=0 && $idade < 18){
    echo "idade $idade não é permitido conduzir";
}else if($idade >= 18){
    echo "idade $idade é permitido conduzir";
}else{
    echo "idade inválida";
};

?>


