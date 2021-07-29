<?php
include('functions.php');

$data= read();
//print_r($data);


echo 'mattoni:' . $data['m'].'     <a href="buy.php?what=m">compra</a><br>';
echo 'cemento:' . $data['c'].'     <a href="buy.php?what=c">compra</a><br>';
echo 'denaro: ' . $data['d'];

echo '<hr>';
echo    '<a href="build.php">costruisci</a><br>';
echo '<hr>';

//$data=['m'=>1,'c'=>2, 'd'=>300];
//save($data);




