<?php
class UserModel extends model
{
    protected $phone;
    protected $password;
    protected $id;
    protected $phoneErr;
    protected $passwordErr;

    public function __construct()
    {
        parent::__construct();
        $this->phone    = '';
        $this->password = '';

        $this->phoneErr    = '';
        $this->passwordErr = '';
    }

    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPhoneErr()
    {
        return $this->phoneErr;
    }
    public function setPhonelErr($phoneErr)
    {
        $this->phoneErr = $phoneErr;
    }

    public function getPasswordErr()
    {
        return $this->passwordErr;
    }
    public function setPasswordErr($passwordErr)
    {
        $this->passwordErr = $passwordErr;
    }

    public function findUserByPhone($phone)
    {
        $this->dbh->query('select * from users where phone= :phone');
        $this->dbh->bind(':phone', $phone);

        $userRecord = $this->dbh->single();
        return $this->dbh->rowCount();
    }

    public function phoneExist($phone)
    {
        return $this->findUserByPhone($phone) > 0;
    }
}
