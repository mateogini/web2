<?php

class TiposModel{
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_stock;charset=utf8', 'root', '');
    }
    public function getType(){
        $query = $this->db->prepare("SELECT * FROM tipos");
        $query->execute();
        $tipos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $tipos;
    }
}