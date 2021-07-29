<?php
class Stringa {

    private $testo='';
    public function __construct($stringa){
        $this->testo=$stringa;
    }
    public function __toString(){
        return $this->testo;
    }
    public function strtoupper(){
        return strtoupper($this->testo);       
    }
    public function strtolower(){
        return strtolower($this->testo);       
    }
    public function load($var){
        $this->testo=$var;
    }
}