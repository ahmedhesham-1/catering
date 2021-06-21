<?php
class userprofileModel extends model{
     public $title = 'MIU SE305 Blog V1.0';
     public $subtitle = 'Example of MVC PHP framework';



     public function readProfile($x){
          
          $this->dbh->query("SELECT * FROM users WHERE ID=':ID'");
          $this->dbh->bind(':ID', $x);
          return $this->dbh->resultSet();
     }
}
