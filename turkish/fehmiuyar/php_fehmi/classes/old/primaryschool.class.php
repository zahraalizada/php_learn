<?php

trait PrimarySchool
{
    use Person;
    public  $information = "Bunu da aldim";
    public function StudentInfo(){
       return "Ogrencinin yasi ".$this->age;
   }
}

?>