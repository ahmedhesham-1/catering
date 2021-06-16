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
}