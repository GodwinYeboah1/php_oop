<?php

class Atom {
    // always set it to private
    private $name;

    public function setName($name) {
      $this->name = $name;
    }
  
    public function getName(){
      return $this->name;
    }
  }