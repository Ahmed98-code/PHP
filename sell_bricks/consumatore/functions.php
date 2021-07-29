<?php


//leggi il file dei dati in un array


function save($data){
    // produce un stream json e poi lo salva nel file 
    $json= json_encode($data);
    file_put_contents('file.json', $json);
}

function read(){
    $json=file_get_contents('file.json');
    $data=json_decode($json, 1);
    return $data;
}