<style>
.rosso {color:red}
.verde {color:green}
.blu {color:blue}
.arancione {color:orange}
.sotto {text-decoration: underline}
.sopra {text-decoration: overline}
</style>
<?php
$old=0;
$default= '123 123456 1234567890 12345678901';
if ($_SERVER['REQUEST_METHOD']=='POST'){
    // separa la stringa ricevuta:
    $words=explode(' ',$_POST['message']);
    foreach($words as $word){
        $len=strlen($word);
        if ($len<=3)             {$class='rosso';}
        if ($len>3 && $len <=6)  {$class='verde';}
        if ($len>6 && $len <=10) {$class='blu';}
        if ($len>10)             {$class='arancione';}
        if (isset($_POST['size'])){ // devo controllare la lunghezza
        //    echo 'len:' . $len . 'old:' . $old . '<br>';
            if ($len>$old){          $class.=' sopra';
             }else {                 $class.=' sotto';
             }
            $old=$len;
        }
        echo '<span class="'. $class. '">'.$word.'</span> ';
    }
}
?>
<form method='POST'>
<textarea name='message' cols="60" rows="10">
<?php 
    echo $_POST['message']?? $default ;
?>
</textarea>
<input type='checkbox' name='size'>

<input type='submit' name='invia'>
</form>