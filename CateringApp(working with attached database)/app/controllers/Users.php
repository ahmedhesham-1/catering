<?php

class Users extends Controller
{
    public function register()
    {
        $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $registerModel->setName(trim($_POST['name']));
            $registerModel->setPhone(trim($_POST['phone']));
            $registerModel->setPassword(trim($_POST['password']));
            $registerModel->setConfirmPassword(trim($_POST['confirm_password']));

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
            
            //validation
            if (empty($registerModel->getName())) {
                $registerModel->setNameErr('Please enter a name.');
            }elseif (!preg_match($nameValidation->getName())) {
                $registerModel->setNameErr ('Name can only contain letters and numbers.');
            }


            if (empty($registerModel->getPhone())) {
                $registerModel->setPhoneErr('Please enter an phone');
            } elseif ($registerModel->PhoneExist($_POST['phone'])) {
                $registerModel->setPhoneErr('Phone is already registered');
            }


            if (empty($registerModel->getPassword())) {
                $registerModel->setPasswordErr('Please enter a password');
            } elseif (strlen($registerModel->getPassword()) < 4) {
                $registerModel->setPasswordErr('Password must contain at least 4 characters');
            }

            if ($registerModel->getPassword() != $registerModel->getConfirmPassword()) {
                $registerModel->setConfirmPasswordErr('Passwords do not match');
            }

            if (
                empty($registerModel->getNameErr()) &&
                empty($registerModel->getPhoneErr()) &&
                empty($registerModel->getPasswordErr()) &&
                empty($registerModel->getConfirmPasswordErr())
            ) {
                //Hash Password
                $registerModel->setPassword(password_hash($registerModel->getPassword(), PASSWORD_DEFAULT));

                if ($registerModel->signup()) {
                    header('location: ' . URLROOT . 'public/users/login');
                } else {
                    die('Error in sign up');
                }
            }
        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'users/Register.php';
        require_once $viewPath;
        $view = new Register($this->getModel(), $this);
        $view->output();
    }
    public function login()
    {
        $userModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process form
            $userModel->setPhone(trim($_POST['phone']));
            $userModel->setPassword(trim($_POST['password']));

            //validate login form
            if (empty($userModel->getPhone())) {
                $userModel->setPhoneErr('Please enter an phone');
            } elseif (!($userModel->PhoneExist($_POST['phone']))) {
                $userModel->setPhoneErr('No user found');
            }

            if (empty($userModel->getPassword())) {
                $userModel->setPasswordErr('Please enter a password');
            } elseif (strlen($userModel->getPassword()) < 4) {
                $userModel->setPasswordErr('Password must contain at least 4 characters');
            }


         

            if($x=$userModel->findUserByPhone($_POST['phone'])){
                $ty=$x->type;
                $_SESSION['ID']=$x->ID;
                if($ty== 'user'){
                    
                header('location: ' . URLROOT . 'public/pages/index');
                }else if($ty== 'admin'){
                    
                header('location: ' . URLROOT . 'public/admin/adminmenu');
                }
            }


        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'users/login.php';
        require_once $viewPath;
        $view = new Login($userModel, $this);
        $view->output();
    }
}

