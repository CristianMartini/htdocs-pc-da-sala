<?php
class Triangulo{
    private $a;
    private $b;
    private $c;

    public function __construct($a,$b,$c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
       
    }

    public function obtertipo() {
        if($this->a == $this->b  && $this->b == $this->c )return "Equilatero";
        if($this->a == $this->b  || $this->b == $this->c || $this->a == $this->c )return "Isósceles";
        return "Escaleno";
    }
}



    




?>