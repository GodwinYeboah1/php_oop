<?php

class Atom {
    // always set it to private
    private $name;
    private $electrons;
    private $protons;

    public function __construct($name, array $electrons,array $protons){
        $this->name = $name;
        $this->electrons = $electrons;
        $this->protons = $protons;
    }


    public function setName($name) {
      $this->name = $name;
    }
  
    public function getName(){
      return $this->name;
    }

    public function getNumberOfElectrons(){
        return count($this->electrons);
    }

    public function getNumberOfProtons(){
        return count($this->protons);
    }
  }