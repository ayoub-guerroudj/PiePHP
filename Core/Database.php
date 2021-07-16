<?php
namespace Core;
use \PDO;

class Database{

    private $host="localhost";
    private $db="PiePHP";
    private $user="bu";
    private $pass="rot";
    protected $conn;


    public function dbc(){
        try{
            $this->conn = new pdo("mysql:host=".$this->host.";dbname=".$this->db.";",$this->user,$this->pass,array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ));
        }catch(PDOException $pe){
            echo $pe->getMessage();
        }
        return $this->conn;
    }
}
// $po=new Database();
// $po->dbc();