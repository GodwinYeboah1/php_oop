<?php 
require_once __DIR__ .'/Atom.php';
require_once __DIR__ .'/ParticleFactory.php';

class AtomManager{

    const HYDROGEN = 'Hydrogen';
    const OXYGEN = 'Oxygen';
    const HELUIM = 'Helium';
    const LITHIUM = 'Lithum';

    private $particles;
    // the atom manager needs the number of particles from other files
    // this file need the info data so we dependecy inject here 
    public function __constructor(array $particles)
    {
        $this->particles = $particles;
    }

    // then we build the atom bellow 
    // Time consuming operation

    public function build()
    {
        $atom = new Atom();
        $atomState = FALSE;

        if( count($this->particles) == 2) {
            $atom->setName(AtomManager::HYDROGEN);
            return $atom;
        }
        elseif (count($this->particles) == 4)
        {
            $atom->setName(AtomManager::HELUIM);
            return $atom;
        }
        elseif ( count($this->particles) == 6)
        {
            $atom->setName(AtomManager::LITHIUM);
            return $atom;
        }
        elseif ( count($this->particles) == 16)
        {
            $atom->setName(AtomManager::OXYGEN);
            return $atom;
        }

        // if it is not recongrize it return false
        return $atomState;
    }

}