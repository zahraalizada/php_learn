<?php
namespace myfolder\otomobil;
class Nissan extends Car
{
    public function info():string
    {
        $text="Japon mali ".$this->name;
        return $text;
    }
}

?>