<?php


class Student
{
    private $name;
    private $id;

    public function __construct($name = "New Student", $id = 1)
    {
        $this->name = $name;
        $this->id = $id;
    }

    public function showInfo()
    {
        echo "Student name is $this->name and student id is $this->id.\n";
    }

}

$student1 = new Student();
$student1->showInfo();
$student2 = new Student("Chris", 2);
$student1->showInfo();


?>