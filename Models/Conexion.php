<?php
class Conexion{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'bd_acellu';
    private $puerto =  3306;
    private $charset = 'utf8';
    public $pdo =  null;
    private $atributos = [PDO::ATTR_CASE=>PDO::CASE_LOWER,PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_ORACLE_NULLS=>PDO::NULL_EMPTY_STRING,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ];
    function __construct() {
        $this->pdo = new PDO("mysql:dbname={$this->db}; host={$this->host}; port={$this->puerto}; charset={$this->charset}", 
        $this-> user,
        $this-> pass,
        $this-> atributos);
    }

}