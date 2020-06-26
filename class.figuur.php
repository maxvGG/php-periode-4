<?php 
abstract class Figuur {
    public static $PI = 3.1415;
    protected $x;
    protected $y;
    private $omschrijving;
    
    abstract public function berekenOppervlakte();
    
    /**
    * 
    */
    public function __construct($Ix ,$Iy){
        $this->setX($Ix);
        $this->setY($Iy);
    }   
    public function setX($Ix) {
        if(!is_integer($Ix)&& !is_float($Ix)) {
            die('Ix is geen int');
      }
        $this->x= $Ix;
    }
    public function setY($Iy) {
        if(!is_integer($Iy)&& !is_float($Iy)) {
            die ('Iy is geen int');
        }
        $this->y=$Iy;
    }

    public function getOmschrijving() {

    }

    public function setOmschrijving($omschrijving){
       if(!is_string($omschrijving)) {
        die('dit is geen omschrijving');
       }
       $this->omschrijving = $omschrijving;
    }

}

?>