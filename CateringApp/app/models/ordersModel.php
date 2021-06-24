<?php
class ordersModel extends model{
     public $title = 'MIU SE305 Blog V1.0';
     public $subtitle = 'Example of MVC PHP framework';

     public function showOrders(){
          
          $this->dbh->query("SELECT * FROM orders ");
          return $this->dbh->resultSet();
     }

     public function deleteOrder($id){
          
          $this->dbh->query("DELETE FROM orders WHERE orderID=:ID");
          $this->dbh->bind(':ID', $id);
          return $this->dbh->execute();
           
         
   }
}