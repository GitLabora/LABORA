<?php
class M_supplier{
    protected $conn;

    public function __construct(){
        $this->conn = new Database;
        $this->conn = $this->conn->dbObject();
    }

    public function getAllSuppliers(){
        $result =mysqli_query($this->conn , "SELECT * FROM supplier") ;
        return $result;       
    }

}
?>