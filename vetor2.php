<?php
//vetor com indices nomeados

$estados = array("SP" =>"São Paulo",
                 "MG"=>"Minas Gerais",
                 "RJ"=>"Rio De Janeiro");

foreach($estados as $ind=> $valor)
{
    echo "$valor ($ind) <br>";
}


?>