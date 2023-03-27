<?php
namespace myfolder\otomobil;
class Skoda extends Car
{
    public function info(): string
    {
        $text = "Ceyka mali " . $this->name;
        return $text;
    }
}

?>