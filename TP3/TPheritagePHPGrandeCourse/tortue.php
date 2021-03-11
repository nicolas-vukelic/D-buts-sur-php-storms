<?php
require_once('Animal.php');
/**************************************************************************
* Source File	:  tortue.php
* Author                   :  Frédérique de Robien
* Project name         :  Accueil Win'Design version 16* Created                 :  08/11/2019
* Modified   	:  08/11/2019
* Description	:  Definition of the class tortue
**************************************************************************/

class tortue  extends Animal			
{
	//Attributes
	private $epaisseurCarapace; // type : int

	//Operations
	public function __construct($s,$a,$e){
		parent::__construct($s,$a);
        $this->epaisseurCarapace = $e;
        // TODO implement
	}
	// La variable RetVal est de type String
	public function __toString()
	{
        $messaget = parent::__toString()."d'épaisseur de carapace".$this->epaisseurCarapce;
	// TODO implement
	return $messaget;
	}
	
	public function avancer()
	 {
        
        $this->position = $this->position + 6;
		// TODO implement
	
	}
 	
	 
	

} // End Class tortue
?>