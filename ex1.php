<?php
    //1) Faça um script em PHP, capaz de gerar um array contendo os números pares encontrados no intervalo de 0 a 10.


    $vet=array();
    $cont=0;
    for($i=0;$i<=10;$i++){
        if($i%2==0){
            $vet[]=$i;
            echo $vet[$cont++]."</br>";
        }
    }
?>