<?php
require_once 'UserModel.php';
class LoginModel extends UserModel
{
    public  $title = 'User Login Page';

    public function login($phone, $password)
    {
        $this->dbh->query('SELECT * from users WHERE phone = :phone');
        $this->dbh->bind(':phone', $phone);

        $record = $this->dbh->single();
        $hash_pass = $record->password;
    }
}
