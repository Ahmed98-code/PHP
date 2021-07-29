<?php

if(isset($_COOKIE['test'])){
    echo "hai visualizzato questa pagina il " . $_COOKIE['test'];
    echo '<a href="?remove=true">Cancella Cookie</a>';
}else{
    echo "BENVENUTO!";
    setcookie("test", date("d M Y H:i:s"), time() + 86400 * 365, "/myFolder/ex_php/cookies/");
}

if(isset($_GET['remove'])){
    setcookie("test", "", time() - 3600);
    header("location: /myFolder/ex_php/cookies/");
}
?>