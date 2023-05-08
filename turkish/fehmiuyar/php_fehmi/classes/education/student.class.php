<?php

namespace myfolder\education;

class Student
{
    public $name;
    public $lastname;
    function __construct($firstName,$lastName)
    {
        $this->name= $firstName;
        $this->lastname=$lastName;
    }
    public function StudentInfo()
    {
        return $this->name." ".$this->lastname;
    }
}
?>