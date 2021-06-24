<?php
class editProductModel extends model
{
     public $title = 'About MIU SE305 Blog';
   protected $prodID;
   protected $name;
   protected $price;
   protected $description;
   protected $img;
   



   public function __construct()
   {
       parent::__construct();
       $this->name     = "";
       $this->price = "";
       $this->description = "";
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

   public function getImg()
   {
       return $this->img;
   }
   public function setImg($img)
   {
       $this->img = 'public/img/'. $img;
   }
   public function getProduct()
   {
      return $this->$prodID;
   }
   
   public function setProduct($prodID)
   {
      $this->prodID = $prodID;
   }


     public function readMenuProd($id){

     $this->dbh->query("SELECT * FROM products WHERE ID=:ID");
          $this->dbh->bind(':ID', $id);

          //$proddata = $this->dbh->single()
          return $this->dbh->resultSet();
   }

   public function UpdateProduct(){
    $id=$this->getProduct();
          $this->dbh->query ("UPDATE products SET name = ':name' , price = ':pprice' , description = ':pdescription' , img = ':img'  WHERE id = ':id' ");
          $this->dbh->bind(':id', $id);
          $this->dbh->bind(':pname', $this->name);
          $this->dbh->bind(':pdescription', $this->description);
          $this->dbh->bind(':pprice', $this->price);
          $this->dbh->bind(':img', $this->img);
          return $this->dbh->execute();
  
  }
   
 
}