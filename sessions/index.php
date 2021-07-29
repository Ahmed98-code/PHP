<?php
session_start();

if(isset($_SESSION['id'])){
    echo "BENVENUTO UTENTE ". $_SESSION['id'];
?>
    <form action="logout.php" method="POST">
        <input type="submit" value="logout">
    </form>    
<?php
}else{
    echo "non hai accesso alla pagina"
?>
    <form action="login.php" method="POST">
        <input type="submit" value="login">
    </form> 
<?php   
}
?>