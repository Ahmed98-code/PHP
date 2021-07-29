<?php
include('functions.php');

$data= read();
//print_r($data);


echo 'mattoni:' . $data['m'].'     <a href="create.php?what=m">produci</a><br>';
echo 'cemento:' . $data['c'].'     <a href="create.php?what=c">produci</a><br>';
echo 'denaro: ' . $data['d'];

echo '<hr>';
echo    '<a href="sell.php?what=m" target="_blank">vendi mattone per test!</a><br>';
echo    '<a href="sell.php?what=c" target="_blank">vendi cemento per test!</a><br>';
echo '<hr>';

/*$data=['m'=>100,'c'=>200, 'd'=>300];
save($data);
*/



