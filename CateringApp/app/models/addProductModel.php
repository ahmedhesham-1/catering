<?php
class addProductModel extends model{
    
     public $subtitle = 'Example of MVC PHP framework';
     
     
     public  $title = 'User Registration Page';
     protected $name;
     protected $price;
     protected $description;
     protected $category;
     protected $img;
     
 
 
 
     public function __construct()
     {
         parent::__construct();
         $this->name     = "";
         $this->price = "";
         $this->description = "";
         $this->category = "";
         $this->img = "";
     }
 
     public function getName()
     {
         return $this->name;
     }
 
     public function setName($name)
     {
         $this->name = $name;
     }
 
     public function getPrice()
     {
         return $this->price;
     }
 
     public function setPrice($price)
     {
         $this->price = $price;
     }
 
     public function getDescription()
     {
         return $this->description;
     }
     public function setDescription($description)
     {
         $this->description = $description;
     }
 
     public function getCategory()
     {
         return $this->category;
     }
     public function setCategory($category)
     {
         $this->category = $category;
     }
 
     public function getImg()
     {
         return $this->img;
     }
     public function setImg($img)
     {
         $this->img = 'public/img/'. $img;
     }

     public function addProd()
     {
         $this->dbh->query("INSERT INTO products (name, price, description, category, img) VALUES(:uname, :price, :description, :category, :img)");
         $this->dbh->bind(':uname', $this->name);
         $this->dbh->bind(':price', $this->price);
         $this->dbh->bind(':description', $this->description);
         $this->dbh->bind(':category', $this->category);
         $this->dbh->bind(':img', $this->img);
 
         return $this->dbh->execute();
     }
 }
