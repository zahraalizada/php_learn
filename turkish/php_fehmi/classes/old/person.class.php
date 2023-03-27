<?php

trait  Person
{
    private $name;
    private $surname;
    protected $age;

    public function __construct($firstname, $lastname,$age)
    {
        $this->name = $firstname;
        $this->surname = $lastname;
        $this->age = $age;
    }

    function FullName()
    {
        return $this->name . " " . $this->surname;
    }
    public function PrintMe()
    {
        return $this->name." Cok Eglenceli <br>";
    }


}

?>