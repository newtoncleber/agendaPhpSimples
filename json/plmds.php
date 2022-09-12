<?php

include('../conexao_.php');

$DB = $con -> prepare("select * from AGENDA");
$DB -> execute();

$dados = $DB ->fetchAll(\PDO::FETCH_OBJ);

$eventos=[];

$i=0;

foreach ($dados as $a){
    $inicial = explode(' ',$a->Inicio);
    $inicial = $inicial[0].'T'.$inicial[1];
    $final = explode(' ',$a->Fim);
    $final = $final[0].'T'.$final[1];

    $eventos[$i] = [
        "title" => $a->Email." - ".$a->Licenca." - ".$a->Operacao,
        "start" => $inicial,
        "end" => $final

    ];
    $i++;

}

echo json_encode($eventos);
?>