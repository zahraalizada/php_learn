<?php
namespace myfolder\meyve;
class Fruit
{

    protected $name;
    protected $color;
    const NUMBER = 19;

    public static $myVlaue = "Ben statik bir deyiskenim";

    function __construct()
    {
        echo " vay be buraya ulastim";
    }

    protected function tanisma()
    {
        $text = "Merhaba tanisdigma sevindim <br>";
        return $text;
    }

    function Messages()
    {
        $text= $this->tanisma();
        $text = "Meyvenin Adi: {$this->name}<br>";
        $text .= "Meyvenin Rengi: {$this->color}<br>";
        $text .= "Meyvenin Kilosu: " . self::NUMBER;

        return $text;
    }


    function setName($fruitName)
    {
        $this->name = $fruitName;
    }

    function getName()
    {
        return $this->name;
    }

    function setColor($fruitColor)
    {
        $this->color = $fruitColor;
    }

    function getColor()
    {
        return $this->color;
    }

    function setWeight($fruitWeight)
    {
        $this->weight = $fruitWeight;
    }

    function getWeight()
    {
        return $this->weight;
    }


    function defaultValue($name = "Bilinmiyor", $color = "Bilinmiyor")
    {
        $text = "Meyve adi ve rengi: <br> $name - $color";
        return $text;
    }



//    function __destruct()
//    {
//    }


}


?>