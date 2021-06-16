<?php
class Pages extends Controller
{

    public function index()
    {
        $viewPath = VIEWS_PATH . 'pages/Index.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }

    public function about()
    {
        $viewPath = VIEWS_PATH . 'pages/about.php';
        require_once $viewPath;
        $aboutView = new about($this->getModel(), $this);
        $aboutView->output();
    }

    public function contact()
    {
        $viewPath = VIEWS_PATH . 'pages/contact.php';
        require_once $viewPath;
        $contactView = new contact($this->getModel(), $this);
        $contactView->output();
    }
    public function edituserprof()
    {
        $viewPath = VIEWS_PATH . 'pages/edituserprof.php';
        require_once $viewPath;
        $edituserprofView = new edituserprof($this->getModel(), $this);
        $edituserprofView->output();
    }

    public function menu()
    {
        $viewPath = VIEWS_PATH . 'pages/menu.php';
        require_once $viewPath;
        $menuView = new menu($this->getModel(), $this);
        $menuView->output();
    }

    public function userprofile()
    {
        
        $viewPath = VIEWS_PATH . 'pages/userprofile.php';
        require_once $viewPath;
        $userprofileView = new userprofile($this->getModel(), $this);
        $userprofileView->output();
    }

    public function services()
    {
        $viewPath = VIEWS_PATH . 'pages/services.php';
        require_once $viewPath;
        $servicesView = new services($this->getModel(), $this);
        $servicesView->output();
    }

    public function feedback()
    {
        $viewPath = VIEWS_PATH . 'pages/feedback.php';
        require_once $viewPath;
        $feedbackView = new feedback($this->getModel(), $this);
        $feedbackView->output();
    }

    public function shopingcart()
    {
        $viewPath = VIEWS_PATH . 'pages/shopingcart.php';
        require_once $viewPath;
        $shopingcartView = new shopingcart($this->getModel(), $this);
        $shopingcartView->output();
    }
}
