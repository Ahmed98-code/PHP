<?php
require 'mazzo.php';

$mazzo= new Mazzo();
echo '<pre>';
//var_dump($mazzo);
$mazzo->mischia();
//$mazzo->mischia();

$mazzo->scendi();
$mazzo->scendi();
$mazzo->scendi();
$mazzo->scendi();

$mazzo->mostra();