<?php
//array reverse
  $ar = [34, 54, 92, 453];
  $len=count($ar);
  for($i=0;$i<$len -1 /2 ;$i++){

    $temp = $ar[$i];
    $ar[$i] = $ar[$len-$i-1];
    $ar[$len-$i-1] = $temp;
  }

  print_r($ar)

//numeri primi
/*Ad ogni modo per numeri primi si intendono tutti quei numeri interi positivi che hanno solo due divisori. In altre parole è possibile definire numero primo, o semplicemente primo, un numero naturale maggiore di 1 divisibile per 1 e per se stesso.*/


function nprimi($n){

    for($i=1;$i<=$n;$i++){ 

      if(primo($i)){
        echo "il numero ". $i ." è primo";
      }
    }
  } 
  
  nprimi(100);  


function primo($number){

  $counter = 0; 
            for($j=1;$j<=$i;$j++){ 
  
  
                  if($number % $j==0){ 
  
                        $counter++;
                  }
            }
  
          if($counter==2){
            return true;
          }else{
            return false;
          }
}

primo(40);

//es 3 sbagliato

<?php
// Your code here!
 
function Tombola(){
  $array = [];

  for($i = 0; $i <= 100; $i++){
      $rand = rand(0,100);
      if(in_array($rand, $array)){
          $i--;
          continue;
      }else{
          $array[$i] = $rand;
      }
  }
  print_r($array) ;
}

Tombola();

?>