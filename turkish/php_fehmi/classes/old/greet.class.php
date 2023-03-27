<?php
class greet {

  function __construct()
  {
      echo self::welcome();
  }

    public static function welcome() {
        $text = "Hello PHP OOP <br>";
        return $text;
    }


}


?>