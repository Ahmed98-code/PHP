<?php

 
require 'vendor/autoload.php';

$code = $_GET['code'] ?? '081231723897';
$format=$_GET['format'] ?? 'html';


switch ($format) {

case 'png':
    $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
    header("Content-type: image/png");
    break;
    
case 'svg':
    $generator = new Picqer\Barcode\BarcodeGeneratorSVG();
    break;

case 'jpg':
    $generator = new Picqer\Barcode\BarcodeGeneratorJPG();
    header("Content-type: image/jpg");
    break;
case 'html':
default:
    $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
  
}
echo $generator->getBarcode($code, $generator::TYPE_CODE_128);

