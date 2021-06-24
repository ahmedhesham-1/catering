<?php
// class shopingcartModel extends model{
//      public $title = 'MIU SE305 Blog V1.0';
//      public $subtitle = 'Example of MVC PHP framework';
// }


class shopingcartModel extends Model{
     public $title = 'Food Catering';
     public $subtitle = 'Example of MVC PHP framework';

	public $productsQuantity;

	function __construct(){
        parent::__construct();
		$this->productsQuantity=array();
	}

	public function addToCart(){
// 	unset($_SESSION["cart_item"]);
	/* case "add":*/
		if(!empty($_POST["quantity"])) {
			
			$productById = $this->dbh->query("SELECT * FROM products WHERE ID='" . $_POST["id"] . "'");
			$productById = $this->dbh->single();

			$itemArray = array($_POST["id"] =>
			array('name'=>$productById->name, 'ID'=>$_POST["id"], 'quantity'=>$_POST["quantity"], 'price'=>$productById->price, 'image'=>$productById->img));
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($_POST["id"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($_POST["id"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
								if($_SESSION["cart_item"][$k]["quantity"] <= 0){
									unset($_SESSION["cart_item"][$k]);				
								}
							}
					}
				} else {
					//bug here
					if($_POST['quantity'] > 0)
						$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				if($_POST['quantity'] > 0)
					$_SESSION["cart_item"] = $itemArray;
			}
		}
	}

	public function getCartItems(){
		if(!empty($_SESSION["cart_item"])) {
			return $_SESSION["cart_item"];
		}
		else{
			return false;
		}
	}

	public function removeCartItem(){

		if(isset($_GET['remove']))
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
				if($_GET["remove"] == $k)
					unset($_SESSION["cart_item"][$k]);				
				if(empty($_SESSION["cart_item"]))
					unset($_SESSION["cart_item"]);
			}
		}
	}
	public function emptyCartItems(){
		if(isset($_GET['empty']))
		unset($_SESSION["cart_item"]);
	}

	function addProduct($productID,$q){
		if (array_key_exists((string)$productID,$this->productsQuantity))
			$this->productsQuantity[(string)$productID]+= $q;
		else
			$this->productsQuantity[(string)$productID]= $q;
	}

	function removeProduct($productID){
		unset($this->productsQuantity[(string)$productID]); 
	}

	function emptyCart(){
		unset($this->productsQuantity); 
		$this->productsQuantity=array();
	}
}