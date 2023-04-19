<?php

class db
{
    private $host = "localhost";
    private $dbname = "veriler_db";
    private $user = "root";
    private $password = "";
    private $db;

    public function __construct()
    {
        $connectionString = 'mysql:host='.$this->host.";dbname=".$this->dbname;

        try {
            $this->db = new PDO($connectionString, $this->user, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo " Bir hata ile karsilasildi, hata: " . $ex->getMessage();
        }
    }


    // DB-DEN BUTUN VERILERI GETIREN FONKSYON
    public function getRow($query)
    {
        return $this->db->query($query)->fetch(PDO::FETCH_ASSOC);
    }


    // QUERY FONKSIYONU TUM FONKSIYONLAR ICIN
    public function query($query,$parameters = null)
    {
        if ($parameters){
            $result = $this->db->prepare($query)->execute($parameters);
        } else{
            $result = $this->db->prepare($query)->execute();
        }
        if($result){
            return true;
        } else{
            return false;
        }

    }



}


?>