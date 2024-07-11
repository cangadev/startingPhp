<?php

    function mediaIdade(){
        $idade1= 10;
        $idade2=11;
        $idade3=12;

        $mediaIdade = ($idade1+$idade2+$idade3)/3;

        return $mediaIdade;
    }

    echo mediaIdade()."<br>";

    // PARAMETRO OU ARGUMENTO

    function OLA($texto){
        return "ola $texto";
    }
    echo OLA("Lucio")."<br>";

    //definir valor default no parameto/argumento

    function OLA1($texto = "mundo"){
        return "ola $texto";
    }
    echo OLA1()."<br>";
    echo OLA1("José")."<br><br>";

    //OS PARAMETROS SEM VALOR DEFAULT DEVEM ESTAR SEMPRE NA ESQUERDA, o contrário dá erro

    function OLA2($nome,$texto = "mundo"){
        return "ola $nome desejo-te $texto";
    }
    echo OLA2("José")."<br>";

    //RECEBER VÁRIOS PARAMENTRO
    function OLA3(){
        $parametros = func_get_args();

        return $parametros;
    }

    var_dump(OLA3("ola",12,1212,212));

    //Outra forma de receber vários valores no parametro
    function OLA4(...$numbers){
        return $numbers;
    }
    var_dump( OLA4("dkks","ksjdjs",1212));

    //DEFINIR O TIPO DOS PARAMETROS
    function OLA5(int ...$numbers){
        return $numbers;
    }
    var_dump( OLA5(34,2,1212));

    //SOMAR TODOS OS VALORES DO ARRAY

    function OLA6(int ...$numbers){
        return array_sum($numbers);
    }
    var_dump(OLA6(1,4,5));

    //DEFINIR O TIPO DE RETORNO
    function OLA7(int ...$numbers):string{
        return array_sum($numbers);
    }
    var_dump(OLA7(1,4,5));

?>