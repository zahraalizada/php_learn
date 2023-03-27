<?php

namespace myfolder\db;

class Database
{
    private $MYSQL_HOST = 'localhost';
    private $MYSQL_USER = 'root';
    private $MYSQL_PASS = '';
    private $MYSQL_DB = 'sifirdanphp';
    private $CHARSET = 'UTF8';
    private $COLLATION = 'utf8_general_ci';
    private $pdo = null;
    private $stmt = null;


    private function ConnectDB(){


        $SQL = "mysql:host=" . $this->MYSQL_HOST . ";dbname=" . $this->MYSQL_DB;
//        $SQL = "mysql:host=".$this->MYSQL_HOST;

        try {
            $this->pdo = new \PDO($SQL, $this->MYSQL_USER, $this->MYSQL_PASS);
            $this->pdo->exec("SET NAMES  '" . $this->CHARSET . "' COLLATE '" . $this->COLLATION . "'");
            $this->pdo->exec("SET CHARACTER SET '" . $this->CHARSET . "'");
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);


        } catch (\PDOException $e) {
            die("PDO ile veritabanina ulasilamadi" . $e->getMessage());
        }
    }
    public function __construct()
    {
        $this->ConnectDB();

    }

    public function getTable($query,$params=null){
        if (is_null($params)){
            $this->stmt=$this->pdo->query($query);
        } else{
            $this->stmt=$this->pdo->prepare($query);
            $this->stmt->execute($params);
        }
        return $this->stmt;
    }

    public function CreateDB($query)
    {
        $myDB = $this->pdo->query($query . " CHARACTER SET " . $this->CHARSET . ' COLLATE ' . $this->COLLATION);
        return $myDB;
    }

//    public function CreateTable($query){
////                "CREATE Table uye (
////                MemberID int(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
////                MemberUsername varchar(60) NOT NULL UNIQUE KEY ,
////                MemberName varchar(60) NOT NULL,
////                MemberLastname varchar(60) NOT NULL,
////                MemberEmail varchar(90) NOT NULL UNIQUE KEY,
////                MemberConfirm tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
////                AddTime TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP) ENGINE=InnoDB DEFAULT CHARACTER SET UTF8 COLLATE utf8_general_ci");
//        $myTable = $this->pdo->query($query);
//        return $myTable;
//    }

//    public function CopyTable($query){
//        $myCopyTable=$this->pdo->query($query);
//        if($myCopyTable){
//            $this->pdo->query("INSERT INTO backupmembers SELECT * FROM members");
//        }
//        return $myCopyTable;
//    }

    public function TableOperations($query, $myFetch)
    {
        $myTable = $this->pdo->query($query,$myFetch);
        return $myTable;
    }

    public function Maintenance()
    {
        $myTable = $this->pdo->query("SHOW TABLES");
        $myTable->setFetchMode(\PDO::FETCH_NUM);
        if ($myTable) {
            foreach ($myTable as $items) {


                $check = $this->pdo->query("CHECK TABLE " . $items[0]);
                $analyze = $this->pdo->query("ANALYZE TABLE " . $items[0]);
                $repair = $this->pdo->query("REPAIR TABLE " . $items[0]);
                $optimize = $this->pdo->query("OPTIMIZE TABLE " . $items[0]);
                if ($check == true && $analyze == true && $repair == true && $optimize == true) {
                    echo $items[0]." Tablo bakimlariniz yapildi<br>";
                } else {
                    echo " bir hata olusdu";
                }
            }
        }
    }


    public function __destruct()
    {
        $this->pdo = null;
    }
}

?>