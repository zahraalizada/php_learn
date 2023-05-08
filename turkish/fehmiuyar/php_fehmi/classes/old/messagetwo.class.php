<?php

trait MessageTwo
{
    private $info = "Nesne Yonumlu Programlama";
    public function PrintMe2()
    {
        return $this->info . " Cile coklu kalitim boyle yapilir";
    }

}

?>