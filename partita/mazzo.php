<?php
class Mazzo{
    private $carte=[];
    private $tavolo=[];
    private $semi=['cuori','quadri','fiori','picche'];

    public function __construct(){

        foreach($this->semi as $seme){
            for($n=1; $n<=13; $n++){ //per ogni seme presente nell'array semi{
                $this->carte[]=['seme'=>$seme, 'numero'=>$n];
            }
        }
       
    }
    public function mischia(){
        shuffle($this->carte);
    }
    public function scendi(){
        $carta=array_pop($this->carte);
        array_push($this->tavolo,$carta);

    }
    public function mostra(){
        foreach($this->tavolo as $carta){
            echo $carta['numero'] . ' di ' . $carta['seme'] . '<br>';

        }

    }


}