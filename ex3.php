<?php
    //3)Criar uma função que receba o intervalo entre dois números, retornando um array com os números impares divisíveis por 7, encontrados no intervalo informado.


    function imparesEdivisiveisSete($min,$max){
        for(;$min<=$max;$min++){
            if($min%2!=0 and $min%7==0){
                $vet[]=$min;
            } 
        }
        if(is_array($vet))
            for($i=0;$i<count($vet);$i++)
                echo $vet[$i]."</br>";
        else
            echo "Este intervalo não possui números ímpares e divisíveis por sete.";
    }

    imparesEdivisiveisSete(0,100);
?>