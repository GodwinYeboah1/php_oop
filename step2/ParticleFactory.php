<?php 

require_once __DIR__.'/Electron.php';
require_once __DIR__ . '/Proton.php';


class ParticleFactory {
    public function create(){
        $nrOfElectrons = mt_rand(1,5);
        $nrOfProtons = mt_rand(1,5);

        $particles = array();

        for ($i=0; $i<$nrOfElectrons; $i++){

            $particles[] = new Electron('electron');
        }

        for ($i=0; $i<$nrOfProtons; $i++){

            $particles[] = new Proton('proton');
        }
        
        print_r("nr of particles:". "\n");
        // print_r("Nr of particles : ". count($particles). "\n");
        return $particles;

    }

}