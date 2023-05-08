<?php
class ChildClass extends ParentClass
{
   public function addInfo($name)
   {
       if($name == "Fehmi")
       {
           $prefix = "Bay ";
       } elseif ($name == "Ayfer")
       {
           $prefix = "Bayan ";
       }
       return "{$prefix} {$name}";
   }


}

?>