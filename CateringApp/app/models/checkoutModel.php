<?php
// require_once(_ROOT_ . "model/Model.php");
class checkoutModel extends model{
public $title = 'About MIU SE305 Blog';

  public $tittle = 'Checkout';
  public $id;
  public $name;
  public $order_date;
  public $price;
  public $quantity;
  public $totalprice;
  public $image;

  function __construct()
  {
	
	parent::__construct();
  }  
  
  function get_id()
    {
        return $this->id;
    }
    function get_name()
    {
        return $this->name;
    }
    function get_price()
    {
        return $this->price;
    }
    function get_date()
    {
        return $this->order_date;
    }
    function get_quantity()
    {
        return $this->quantity;
    }
    function totalprice()
    {
       return $this->totalprice= $this->price*$this->quantity;
        
        return $this->totalprice;
    }
    function get_image()
    {
      return $this->image;
    }
    public function submit_checkout(){
         if(isset($_POST['checkout'])){
              $name=$_POST['name'];
              $address=$_POST['address'];
              $phone=$_POST['phone'];
              $checkout_data = date('Y-m-d');
              $order_date=$_POST['order_date'];

              $this->dbh->query('INSERT INTO checkout VALUES(\'\',:name,:address,:phone,:checkout_date,:order_date)');
              $this->dbh->bind(':name',$name);
              $this->dbh->bind(':address',$address);
              $this->dbh->bind(':phone',$phone);
              $this->dbh->bind(':checkout_date',$checkout_data);
              $this->dbh->bind(':order_date',$order_date);

              if($this->dbh->execute()){
                   $this->dbh->query('SELECT id FROM checkout ORDER BY id DESC LIMIT 1');
                   $last_item = $this->dbh->single();
                   return $last_item->id;
              }
         }
         return false;
     }


}  


?>