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

    private function ConnectDB()
    {
        $SQL = "mysql:host=" . $this->MYSQL_HOST . ";dbname=" . $this->MYSQL_DB;
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

    // connect db end

    // baglantiyi ac
    public function __construct()
    {
        $this->ConnectDB();
    }

    private function myQuery($query, $params = null)
    {
        if (is_null($params)) {
            $this->stmt = $this->pdo->query($query);
        } else {
            $this->stmt = $this->pdo->prepare($query);
            $this->stmt->execute($params);
        }
        return $this->stmt;
    }

    public function Limit($query, $p1=1, $p2=NULL){
        $this->stmt=$this->pdo->prepare($query);
        $this->stmt->bindParam(1,$p1, \PDO::PARAM_INT);
        if(!is_null($p2))
            $this->stmt->bindParam(2,$p2, \PDO::PARAM_INT);
        $this->stmt->execute();
        return $this->stmt->fetchAll();

    }

    //coklu veri kullanimi icin
    public function getRows($query, $params = null)
    {
        try {
            return $this->myQuery($query, $params)->fetchAll();
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
    //tek veri kullanimi icin
    public function getRow($query, $params = null)
    {
        try {
            return $this->myQuery($query, $params)->fetch();
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
    //tek satir ve sutun verisi icin
    public function getColumn($query, $params = null)
    {
        try {
            return $this->myQuery($query, $params)->fetchColumn();
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
    // kayit EKLEMEK icin
    public function Insert($query, $params = null)
    {
        try {
            $this->myQuery($query,$params);
            return $this->pdo->lastInsertId();
        } catch (\PDOException $e){
            die($e->getMessage());
        }
    }
    // kayit GUNCELLEMEK icin
    public function Update($query, $params = null)
    {
        try {

            return $this->myQuery($query,$params)->rowCount();
        } catch (\PDOException $e){
            die($e->getMessage());
        }
    }
    // kayit SILMEK icin
    public function Delete($query, $params = null)
    {
        return $this->Update($query, $params);
    }

    //Database olusturmak
    public function CreateDB($query)
    {
        $myDB = $this->pdo->query($query . " CHARACTER SET " . $this->CHARSET . ' COLLATE ' . $this->COLLATION);
        return $myDB;
    }
    //Table Islemleri
    public function TableOperations($query)
    {
        $myTable = $this->pdo->query($query);
        return $myTable;
    }
    // Tablo bakimi icin kodlar
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
                    echo $items[0]." adli Tablo bakimlariniz yapildi<br>";
                } else {
                    echo "Bir hata olustu";
                }
            }
        }
    }


    public function __destruct()
    {   //baglantiyi kapat
        $this->pdo = NULL;
    }


} // class end

?>