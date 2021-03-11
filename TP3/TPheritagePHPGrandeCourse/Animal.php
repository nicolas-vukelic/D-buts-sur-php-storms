<?php
require_once('lapin.php');
require_once('tortue.php');
/**************************************************************************
* Source File	:  Animal.php
* Author                   :  Frédérique de Robien
* Project name         :  Accueil Win'Design version 16* Created                 :  08/11/2019
* Modified   	:  08/11/2019
* Description	:  Definition of the class Animal
**************************************************************************/

abstract class Animal 			
{
	//Attributes
	private $surnom; // type : String
	private $age; // type : int
	protected $position; // type : int

	//accesseurs
	public function getPosition(){
		return $this->position;// ACOMPLETER
		}
	//Operations
	
	public function __construct($s, $a){
		$this->surnom = $s;
		$this->age = $a;
		$this->position = 0; //à la création d'un animal, il se positionne à la position 0 soit à la ligne de départ
	}
	// La variable RetVal est de type String
	public function __toString()
	{
        $message = $this->surnom.$this->age.'ans, à la position'.$this->position;
	// TODO implement
	return $message;
	}
	
	public abstract function avancer(); //méthode abstraite qui force les classes filles à la rédéfinir


} // End Class Animal

?>