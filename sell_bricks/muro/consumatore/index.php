<meta http-equiv="refresh" content="5">
<?php
include('functions.php');

$data= read();
//print_r($data);
if (!empty($_GET['action']) && $_GET['action']=='finanzia'){
 $data['d']+=100;
 save($data);
 header('location:index.php');

}

echo 'mattoni:' . $data['m'].'     <a href="buy.php?what=m">compra</a><br>';
echo 'cemento:' . $data['c'].'     <a href="buy.php?what=c">compra</a><br>';
echo 'denaro: ' . $data['d'].' <a href="?action=finanzia">finanza </a><br>';


echo '<hr>';
echo    '<a href="build.php">costruisci</a><br>';
echo '<hr>';

if(!empty($data['wall'])){
    echo $data['wall'];
}else {
    echo "nessun muro";
}

//$data=['m'=>1,'c'=>2, 'd'=>300];
//save($data);




