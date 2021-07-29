<?php
include 'Stringa.php';


$messaggio = new Stringa('Benvenuto');
//var_dump($messaggio);
echo $messaggio->strtoupper();
echo '<br>';
echo $messaggio->strtolower();
echo '<br>';

$messaggio->load('Benvenuto nuovo giorno');
echo $messaggio;