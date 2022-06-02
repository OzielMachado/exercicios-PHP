<?php
    //4)Criar uma função que retorna a data atual por extenso. Ex: 12 de Maio de 2020.

    function data(){
        $meses=Array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
        echo date("d")." de ".$meses[date("m")-1]." de ".date("Y");
    }
    data();

?>