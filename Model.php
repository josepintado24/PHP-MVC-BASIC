<?php declare(strict_types=1);
//Clases Abstractas que permitira conectarnos a Mysql
abstract class Model {
    //atributos
    private static $dbHost='localhost';
    private static $dbUser='root';
    private static $dbPass='';
    //private static $dbName='mexflix';
    protected $dbName;
    private static $dbCharset='utf8';
    private $conn;
    protected $query;
    protected $rows=array();

    //Metodos
    //Metodos abstractos para CRUD de clases que hereden
    abstract protected function create(array $statusData) :void ;
    abstract protected function read(string $status_id):Array;
    abstract protected function update(array $statusData):void;
    abstract protected function delete(string $status_id):void;

    //Metodos privados para conectara a la Base de Datos
    private function dbOpen () :void {
        $this->conn=new mysqli(
            self::$dbHost,
            self::$dbUser,
            self::$dbPass,
            $this->dbName
        );
        $this->conn->set_charset(self::$dbCharset);
    }

    //Metodos privados para desconectar a la Base de Datos
    private function dbClose ():void {
        $this->conn->close();
    }

    protected function setQuery():void{
        $this->dbOpen();
        $this->conn->query($this->query);
        $this->dbClose();
    }

    protected function getQuery():Array{
        $this->dbOpen();
        $result=$this->conn->query($this->query);
        while ($this->rows[]=$result->fetch_assoc());
        $result->close();
        $this->dbClose();
        array_pop($this->rows);
        return $this->rows;
    }
}