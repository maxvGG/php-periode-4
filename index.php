<?php 
include 'class.figuur.php';
include 'class.cilinder.php';
include 'class.vierkant.php';

// verplicht
$cilinder = new Cilinder(10,3);
echo " het oppervlakte van de (verplichte) cilinder is: ". $cilinder->berekenoppervlakte(). " cm2 <br>";
// verplicht
$vierkant = new Vierkant(5,5);
echo " het oppervlakte van de (verplichte) vierkant is: ". $vierkant->berekenoppervlakte(). " cm2 <br>";

$vierkant = new Vierkant(4,90);
echo " het oppervlakte van mijn bureau is ong. ". $vierkant->berekenoppervlakte(). " cm2 <br>";

$cilinder =  new Cilinder(12.5,2.5);
echo " het oppervlakte van de mijn fles is: ". $cilinder->berekenoppervlakte(). " cm2 <br>";

?>