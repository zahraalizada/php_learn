<?php
namespace myfolder\otomobil;
abstract class Car
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function info(): string;



}

?>