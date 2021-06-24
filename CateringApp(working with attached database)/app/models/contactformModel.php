<?php
class contactformModel extends model{
     public $title = 'MIU SE305 Blog V1.0';
     public $subtitle = 'Example of MVC PHP framework';

     public function showForm(){
          
          $this->dbh->query("SELECT * FROM contact ");
          return $this->dbh->resultSet();
     }

     public function deleteForm($id){
          
          $this->dbh->query("DELETE FROM contact WHERE ID=:ID");
          $this->dbh->bind(':ID', $id);
          return $this->dbh->execute();
           
         
   }
}