<?php
require_once 'editProductModel.php';
class adminmenuModel extends model{
     public $title = 'About MIU SE305 Blog';


     
     public function readMenuApp(){

        $this->dbh->query("SELECT * FROM products WHERE category='appetizers'");
        return $this->dbh->resultSet();
   }

   public function readMenuSal(){

        $this->dbh->query("SELECT * FROM products WHERE category='salads'");
        return $this->dbh->resultSet();
   }

   public function readMenuMainDish(){

        $this->dbh->query("SELECT * FROM products WHERE category='maindish'");
        return $this->dbh->resultSet();
   }

   public function deleteProd($id){
          
          $this->dbh->query("DELETE FROM products WHERE ID=:ID");
          $this->dbh->bind(':ID', $id);
          return $this->dbh->execute();
           
         
   }
}