<?php
    /* creamos una variable */
    $division = 23519;
    //imprimir en pantalla
    echo 'el numero decimal es: '.$division;
    //primer paso creamos un ciclo while
    function binary($division){
        //creamos un array para almacenar los residuos de la division
        $resultresidus = array();
        while($division > 0){
            //dividimos para 2 --> binario
            echo '<br>';
            $result = $division / 2;
            echo 'el resultados es: '.$result;
            $residus = $division % 2;
            //echo ' residuo es: '.$residus;
            //el residuo lo guardamos en un array
            $resultresidus[] = $residus;
            $division = intval($result);
        }
        //ordenamos el resultado que es el residuo de la division 
        krsort($resultresidus);
        //creamos un foreach
        foreach($resultresidus as $key => $value){
            echo $value;
        }
    }
    //imprimimos por pantalla el resultado
    echo ' y el binario es: ';
    $binario = binary($division);
?>