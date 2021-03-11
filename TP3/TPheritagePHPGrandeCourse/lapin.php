<?php
require_once('Animal.php');
/**************************************************************************
* Source File	:  lapin.php
* Author                   :  Frédérique de Robien
* Project name         :  Accueil Win'Design version 16* Created                 :  08/11/2019
* Modified   	:  08/11/2019
* Description	:  Definition of the class lapin
**************************************************************************/

class lapin  extends Animal			
{
	//Attributes
	private $couleurFourrure; // type : int

	//Operations
	public function __construct($s,$a,$c){
		parent::__construct($s,$a);
        $this->couleurFourrure = $c;
        // TODO implement
	}
	
// La variable RetVal est de type String
	function __toString()
	{
        $messagel = parent::__toString()."de couleur".$this->couleurFourrure;
	// TODO implement
	return $messagel;
	}



public function avancer()
	 {
    
		$aleat = rand(0,10);
        $this->position = $this->position + $aleat;
    
    // TODO implement
	
	}

// End Class lapin
}
?>