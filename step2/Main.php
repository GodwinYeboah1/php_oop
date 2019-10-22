<?php 
 

require_once __DIR__ .'/Atom.php';
require_once __DIR__ .'/ParticleFactory.php';
require_once __DIR__ .'/AtomManager.php';
require_once __DIR__.'/Electron.php';
require_once __DIR__ . '/Proton.php';

$pFactory = new ParticleFactory();
$particles = $pFactory->create();

// what type of atom is this ?
$atomManager = new AtomManager($particles);

$atom = $atomManager->build();

if ($atom)
{
    echo "This is an atom called". $atom->getName() . "\n";
}
else 
{
    echo "This atom does not exits. \n";
}