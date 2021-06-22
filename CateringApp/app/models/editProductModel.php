<?php
class editProductModel extends model{
     public $title = 'About MIU SE305 Blog';

     public function readMenuProd(){

     //   $this->dbh->query("SELECT ID FROM products");
     $this->dbh->query("SELECT * FROM products");
        return $this->dbh->resultSet();
   }

}