<?php

include('functions.php');

$data=read();

$msg='muro costruito';
// controllo se il muro non esiste lo creo 
// controllando di avere due mattoni e un cemento

if(empty($data['wall'])){ // nuovo muro
    if($data['c']>0 && $data['m']>1){ // posso costruire
        $data['wall']='[]|[]';
        $data['c']-=1;
        $data['m']-=2;
        
    }else{
        $data['wall']='';
        $msg="magazzino insufficiente";
    }

} else {
    if($data['c']>0 && $data['m']>0){ // posso costruire
        $data['wall'].='|[]';
        $data['c']-=1;
        $data['m']-=1;
    }else {
        $msg="magazzino insufficiente";
    }
}
save($data);


?>
<head>  
<meta http-equiv="refresh" content="1; URL='index.php'" />
</head>
<?php
echo $msg;