<?php
class menuModel extends model{
     public $title = 'MIU SE305 Blog V1.0';
     public $subtitle = 'Example of MVC PHP framework';


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
}