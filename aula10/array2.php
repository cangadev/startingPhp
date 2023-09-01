<form>
<input type="text" name="nome">
<input type="date" name="dat">
<input type="submit" value="Enviar">
</form>

<?php

if(isset($_GET)){
    foreach($_GET as $key => $value){
        echo "A chave do campo é: ".$key."<br>";
        echo "O valor é: ".$value."<br><br>";
    }
};

#OUTRO EXEMPLO
$meses = array(
    "January","febuary","Marcy",
    "April","May","Jun",
    "July","August","September",
    "Octuber","November","December"
);

foreach($meses as $indice => $mes){
    echo "Indice: ".($indice+1)."<br>";
    echo "O mes é: ".$mes."<br><br>";
};
?>


