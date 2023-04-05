<?php

class Dog{

    // Properities
    var $eye = "brown";
    var $nose = "big";
    var $fur = "white";

    // Methods

    public function showAll()
    {
        return $this->eye."<br>".$this->nose."<br>".$this->fur;
    }
}

class Pitbull extends Dog {
    var $name = "Pitbull";
    public function showAll()
    {
        return $this->name."<br>".$this->eye.",".$this->nose.",".$this->fur;
    }

}

// $dog1 = new Dog();
// echo $dog1->showAll();

    $pitbull = new Pitbull();
    echo $pitbull->showAll();

?>