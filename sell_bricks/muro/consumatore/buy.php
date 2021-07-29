<?php

include('functions.php');

$data=read();

$what=$_GET['what']; // leggo c o m
if($data['d']==0){
  die('sei senza soldi');

}
// 64, 68, 74, 79 82 86
// devo decidere su quale il server;
$produttori=['172.16.2.64', '172.16.2.82' ];
// prendi a caso;
shuffle($produttori);
$produttore= $produttori[0];

$url=':8080/serverside/lezione22/produttore/sell.php?what=' . $what;
$url='http://' . $produttore . $url;
//echo $url;die();


$json=file_get_contents($url);
$result=json_decode($json,1);
//print_r($result); die();

if($result['status']=='ok'){
//incrementare il magazzino e decrementare il denaro
    $data[$what]++;
    $data['d']--;
    save($data);

}

header('location:index.php');



