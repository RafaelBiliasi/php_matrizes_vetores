<?php

//matriz com indices de colunas e de linha ordenado

$matriz1 = array(
array("nome"=> "João","p1"=> 7.5,"p2"=> 10.0,"trabalho"=> 9.0),
array("nome"=> "Maria","p1"=> 6.5,"p2"=> 5.5,"trabalho"=> 2.5),
array("nome"=> "Paulo","p1"=> 10.0,"p2"=> 5.0,"trabalho"=> 10.0),
array("nome"=> "Pedro","p2"=> 9.0,"p2"=> 9.0,"trabalho"=> 9.0),
array("nome"=> "Carla","p1"=> 7.5,"p2"=> 8.0,"trabalho"=> 8.5),
);

echo "{$matriz1[0]['nome']}";
foreach($matriz1 as $vetor)
{
    foreach($vetor as $dado)
    {
        echo "$dado <br>";
    }
    echo"<br>";
}



?>