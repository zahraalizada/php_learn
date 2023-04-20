<?php

class myAccount{

    // Properities , Attributes, Fields

    // Access modifier (private,protected,public)

    private $myid =1;
    private $myname = "Zahra Alizada";
    private $mybalance = 2000;

    //Methods

    public function __construct($id,$name,$balance){
        $this->myid = $id;
        $this->myname = $name;
        $this->mybalance = $balance;

    }

    public function showInfos(){
        echo $this->myid." - ";
        echo $this->myname." - ";
        echo $this->mybalance;
    }

}


class MySpecialAccount extends myAccount{
    private $myinterest;

    public function __construct($myid, $myname, $mybalance, $myinterest)
    {
        parent::__construct($myid, $myname, $mybalance);
        $this->myinterest = $myinterest;
    }

    public function getInterest()
    {
        return $this->myinterest;
    }

    public function showInfos()
    {
        parent::showInfos();
        echo "Vadeli Bakiye: $this->myinterest <br>";
    }

}


$specialaccount = new MySpecialAccount(5,"Can Yucel",7000,"book");

$specialaccount->showInfos();


?>