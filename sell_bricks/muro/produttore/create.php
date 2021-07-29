<?php

include('functions.php');

$data=read();

$what=$_GET['what']; // leggo c o m

if($data['d']){
    $data['d']=$data['d'] - 0.5;  // spendo 0.5
    $data[$what]++;   //incremento il magazzino 
     sleep(1);
     save($data);
}

header('location:index.php');
