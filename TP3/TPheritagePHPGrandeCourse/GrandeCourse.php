<?php

/**************************************************************************
* Source File	:  GrandeCourse.php
* Author                   :  Frédérique de Robien
* Project name         :  Accueil Win'Design version 16* Created                 :  08/11/2019
* Modified   	:  08/11/2019
* Description	:  Definition of the class GrandeCourse
**************************************************************************/
class GrandeCourse 			
{
	//Attributes
	private $dateCourse; // type : Date
	// A COMPLETER

	//Operations
	public function __construct($d){
		$this->dateCourse = $d;
		// A COMPLETER
	}
	
	function demarrer()
	 {
		// TODO implement

	}
	
	function ajouterParticipantAnimal($animal)
	{
			// TODO implement
		
	}
    function listeParticipants()
    {
        // TODO implement : en précisant si c'est un lapin ou une tortue (principe du polymorphisme)

    }
	
} // End Class GrandeCourse

?>