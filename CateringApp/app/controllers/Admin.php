<?php
class Admin extends Controller
{

    public function adminmenu()
    {
        $viewPath = VIEWS_PATH . 'admin/adminmenu.php';
        require_once $viewPath;
        $adminmenuView = new adminmenu($this->getModel(), $this);
        $adminmenuView->output();
    }
    public function addProduct()
    {
        $addProductView = $this->getModel();
      
        $addProductModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $addProductModel->setName(trim($_POST['name']));
            $addProductModel->setPrice(trim($_POST['price']));
            $addProductModel->setDescription(trim($_POST['description']));
            $addProductModel->setCategory(trim($_POST['category']));
            $addProductModel->setImg(trim($_POST['img']));

                if ($addProductModel->addProd()) {
                    header('location: ' . URLROOT . 'public/admin/addProduct');
                } else {
                    die('Error in sign up');
                }
            
        }
        // Load form
        $viewPath = VIEWS_PATH . 'admin/addProduct.php';
        require_once $viewPath;
        $addProductView = new addProduct($this->getModel(), $this);
        $addProductView->output();
    }

     public function editProduct()
    {
        $viewPath = VIEWS_PATH . 'admin/editProduct.php';
        require_once $viewPath;
        $editProductView = new editProduct($this->getModel(), $this);
        $editProductView->output();
    }

    public function adminprofile()
    {
        $viewPath = VIEWS_PATH . 'admin/Adminprofile.php';
        require_once $viewPath;
        $adminprofileView = new adminprofile($this->getModel(), $this);
        $adminprofileView->output();
    }
    public function editadminprofile()
    {
        $viewPath = VIEWS_PATH . 'admin/editAdminprofile.php';
        require_once $viewPath;
        $editadminprofileView = new editadminprofile($this->getModel(), $this);
        $editadminprofileView->output();
    }

    public function orders()
    {
        $viewPath = VIEWS_PATH . 'admin/orders.php';
        require_once $viewPath;
        $ordersView = new orders($this->getModel(), $this);
        $ordersView->output();
    }
}