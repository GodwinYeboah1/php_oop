<?php 
 
require_once __DIR__.'/Electron.php';
require_once __DIR__ . '/Proton.php';
require_once __DIR__ .'/Atom.php';


$proton = new Proton();
$proton->setName("godwin");

$electron = new Electron();
$electron->setName('Moses');


$electron = array();
$proton = array();

// pushes array into array list 
array_push($electron, $electron);
array_push($proton,$proton);

$atom = new Atom("Hydrogen", array(), array());

echo "This is an " . $atom->getName(). "\n";
echo "This has " . $atom->getNumberOfElectrons(). "\n";
echo "This has " . $atom->getNumberOfProtons(). "\n";
