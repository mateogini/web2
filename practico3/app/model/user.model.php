<?php 


 class UserModel{

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_stock;charset=utf8', 'root', '');
    }

    public function getUser($email){
        $query = $this->db->prepare("SELECT * FROM 'login' WHERE email = ?");
        $query->execute([$email]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
