<?php
class Calculate
{
    private $result =0;

    function __construct($number)
    {
        $this->result=$number;
    }
    function Sum($number)
    {
        $this->result += $number;
        return $this;
    }
    function Sub($number) // subtraction
    {
        $this->result -= $number;
        return $this;
    }
    function Mul($number) //multiplication
    {
        $this->result *= $number;
        return $this;
    }
    function Div($number) // division
    {
        $this->result /= $number;
        return $this;
    }
    function Print()
    {
        return $this->result;
    }
}
?>