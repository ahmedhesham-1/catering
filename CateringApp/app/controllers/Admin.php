<?php
class Admin extends Controller
{

    public function adminmenu()
    {

        $adminmenuModel = $this->getModel();
        if (isset($_POST['delete']))
        {
        
            if ($adminmenuModel->deleteProd($_POST['delete']))
            {
                echo '<script> window.location = "adminmenu";
                alert("Deleted!");
              </script>'; 
            }
            header('location: ' . URLROOT . 'public/admin/adminmenu');
        }
       
        
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
                    die('Error adding prod');
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
        $editProductModel = $this->getModel();
        
        if (isset($_POST['update']))
        {
                    $editProductModel->setName($_POST['name']);
                    $editProductModel->setDescription($_POST['description']);
                    $editProductModel->setPrice($_POST['price']);
                    //$editProductModel->setImg($_POST['img']);
                    $editProductModel->setProduct($_POST['update']);
                   if($editProductModel->updateProduct()){
                     echo '<script> window.location = "editProduct";
                alert("Edited!");
              </script>'; 
                   }
                    header('location: ' . URLROOT . 'public/admin/adminmenu');
        }


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
        $ordersModel = $this->getModel();
        if (isset($_POST['delete']))
        {
        
            if ($ordersModel->deleteOrder($_POST['delete']))
            {
                echo '<script> window.location = "orders";
                alert("Deleted!");
              </script>'; 
            }
            header('location: ' . URLROOT . 'public/admin/orders');
        }
        $viewPath = VIEWS_PATH . 'admin/orders.php';
        require_once $viewPath;
        $ordersView = new orders($this->getModel(), $this);
        $ordersView->output();
    }
}