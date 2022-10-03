<?php

class CocaModel{
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_stock;charset=utf8', 'root', '');
    }

    public function getAllCocas(){
        $query = $this->db->prepare("SELECT * FROM pedidos");
        $query->execute();

        $cocas = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $cocas;
    }
    public  function insertPay($tipo_coca, $envases, $stock){
        $query= this->$db->prepare("INSERT INTO `pedidos`(`tipo_coca`, `envases`, `stock`) VALUES (?, ?, ?)");
        
        $query->execute([$tipo_coca, $envases, $stock]);
        
        return $this->$db->lastInsertId();

}
}