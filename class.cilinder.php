<?php
class Cilinder extends Figuur {
    /**
     *  @param float $Ih height of the cilinder
     *  @param float $Ir radius of the cylinder
     * 
     */

    public function __construct($Ih,$Ir)
    {
        parent::__construct($Ih, $Ir);
        $this->seth($Ih);
        $this->setR($Ir);
    }
   

    public function getH($Ih) {
        $this->setH($Ih);
        echo $Ih;
    }
    public function getR($Ir){
        $this->setR($Ir);
    }

    public function setH($Ih) {
        if(!is_integer($Ih) && !is_float($Ih)) {
            die('dit gaat niet 1');
      }
      $this->h= $Ih;
    }
    public function setR($Ir) {
        if(!is_integer($Ir) && !is_float($Ir)) {
            die('dit gaat niet 2');
      }
      $this->r= $Ir;
    }
    public function berekenoppervlakte() {
        $opp = (2 * Figuur::$PI * ($this->r * $this->r)) + (2 * Figuur::$PI * $this->r * $this->h);
        
        return $opp;
    }

}

?>