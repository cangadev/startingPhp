<?php

    function test($processo){
        //Demorando...
        $processo();
    }

    test(function(){
        echo "Processando...";
    });

    //============================

    $ola = function(){
        echo "Olaaa";
    };
    $ola();
?>