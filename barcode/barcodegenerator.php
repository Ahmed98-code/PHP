<?php

 
require 'vendor/autoload.php';


if($_SERVER['REQUEST_METHOD']=='POST'){

    $code = $_REQUEST['code'] ?? '081231723897';
    $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
    
    echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($code, $generator::TYPE_CODE_128)) . '">';

}else {
?>

<form method='post'>
    <input type='text' name='code'>
    <input type='submit' >
</form>

<?php
}

