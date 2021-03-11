<?php
require_once('Animal.php');
require_once('lapin.php');
require_once('tortue.php');
//$animal= new Animal("bidule",17);
//instanciation d'un animal 

//instanciation de 2 lapins et 1 tortue
$lapin1=new lapin ("rabbit",9,"Blanche");

$lapin2=new lapin ("machin",8,"Grise");

$lapin3=new lapin ("bidule",8,"Noire");

$tortue1=new tortue ("Michelangelo",7,60);

$tortue2=new tortue ("Leonardo",7,60);

//afficher les informations de la tortue

//les ajouter dans un tableau d'Animaux
$tabcourse = array($lapin1,$lapin2,$lapin3,$tortue1,$tortue2);

//parcourir le tableau et les faire avancer selon les préconisations



 foreach ($tabcourse as $tab)
 {
     
     for($i=0;$i<5;$i++)
     {
         
     
     $tab->avancer();
     echo "</br>";
     echo $tab->__toString();
 }
 }
$resultat=0;
$gagnant="";
foreach($tabcourse as $tab)
        {
    if($tab->getPosition() > $resultat)
    {
    $resultat=$tab->getPosition();
        $gagnant =$tab->__toString();
        }

}

echo "</br>";
echo "Le gagnant est :".$gagnant;
 // afficher le gagnant !
?>