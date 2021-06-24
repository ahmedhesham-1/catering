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
     public function get_categories_items(){
          $items= new stdClass();

          $this->dbh->query("SELECT * FROM categories ");
          $categories = $this->dbh->resultSet();

          foreach($categories as $category){
               $this->dbh->query("SELECT * FROM products WHERE category={$category->id}");
               $products = $this->dbh->resultSet();
               $items->{$category->name} = $products;
          }
          return $items;
     }

     public function get_items_on_search(){
          $items= new stdClass();
          if(isset($_GET['search'])){
               $this->dbh->query("SELECT * FROM categories ");
               $categories = $this->dbh->resultSet();

               foreach($categories as $category){
                    $this->dbh->query("SELECT * FROM products WHERE category={$category->id} AND name LIKE '%{$_GET['search']}%'");
                    $products = $this->dbh->resultSet();
                    $items->{$category->name} = $products;
               }
          }else{
               $items = $this->get_categories_items();
          }
          return $items;
     }
}