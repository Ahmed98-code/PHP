<?php

include('functions.php');

$data=read();

$what=$_GET['what']; // leggo c o m
$result=['w'=>$what, 'qty'=>0, 'status'=>'ko'];

if($data[$what]){
    $data['d']++;  // guadagno 1
    $data[$what]--;   //decremento il magazzino 
    save($data);
    $result['qty']=1; 
    $result['status']='ok';
}

// restituisci un json
echo json_encode($result);