<?php
class adminmenu extends view{
  public function output(){
    $title = $this->model->title;
   
    require APPROOT . '/views/inc/adminheader.php';
 ?>

    <div class="top-banner">
        <h1>Menu</h1>
        <p>Your imagination our catering.</p>
    </div>


    <div class="main-body">
    <section class="products-content">
  <div class="container">
    <div class="products-area category-area">
      <!-- heading -->
      <a style="margin-left:650px;" href="<?php echo URLROOT . 'public/admin/addProduct'; ?>" class="btn cart px-auto heading ">ADD PRODUCT</a>
        <h1 class="heading">Apptiezers </h1>
        
     
      
      <div class="row">

        <div class="menu-items flex wrap">

            <?php
            foreach($this->model->readMenuApp() as $item){
            
            ?>
            <div class="item">
                <div class="image-container imgHolder">
                    <img src="<?php echo URLROOT . $item->img; ?>" alt=""> 
                    
                        <span>Price: <?php echo $item->price?></span>
                        </div>
                <h2><?php echo $item->name?></h2>
                <p><?php echo $item->description?></p>
                <form method="post">
               <a href="<?php echo URLROOT . 'public/admin/editProduct'; ?>"name="edit" value="<?php $item->ID;?>" class="btn cart px-auto">Edit</a> or <a href="#"name="delete" value="delete" class="btn cart px-auto">Delete</a>
            </form>
            </div>

              <?php
             }  
             ?>
            
            </div>
            </div>
    </div>
    </div>
    </div>


    <div class="main-body">
    <section class="products-content">
  <div class="container">
    <div class="products-area category-area">
      <!-- heading -->
        <h1 class="heading">Salads </h1>
     
      
      <div class="row">

        <div class="menu-items flex wrap">

            <?php
            foreach($this->model->readMenuSal() as $item){
            
            ?>
            <div class="item">
                <div class="image-container imgHolder">
                    <img src="<?php echo URLROOT . $item->img; ?>" alt=""> 
                    
                        <span>Price: <?php echo $item->price?></span>
                        </div>
                <h2><?php echo $item->name?></h2>
                <p><?php echo $item->description?></p>
                <a href="<?php echo URLROOT . 'public/admin/editProduct'; ?>"name="edit" value="<?php $item->ID;?>" class="btn cart px-auto">Edit</a> or <a href="#"name="delete" value="delete" class="btn cart px-auto">Delete</a>
            </div>

              <?php
             }  
             ?>
            
            </div>
            </div>
    </div>
    </div>
    </div>

    <div class="main-body">
    <section class="products-content">
  <div class="container">
    <div class="products-area category-area">
      <!-- heading -->
        <h1 class="heading">Main Dish</h1>
     
      
      <div class="row">

        <div class="menu-items flex wrap">

            <?php
            foreach($this->model->readMenuMainDish() as $item){
            
            ?>
            <div class="item">
                <div class="image-container imgHolder">
                    <img src="<?php echo URLROOT . $item->img; ?>" alt=""> 
                    
                        <span>Price: <?php echo $item->price?></span>
                        </div>
                <h2><?php echo $item->name?></h2>
                <p><?php echo $item->description?></p>
                <a href="<?php echo URLROOT . 'public/admin/editProduct'; ?>"name="edit" value="<?php $item->ID;?>" class="btn cart px-auto">Edit</a> or <a href="#"name="delete" value="delete" class="btn cart px-auto">Delete</a>
            </div>

              <?php
             }  
             ?>
            
            </div>
            </div>
    </div>
    </div>
    </div>
    <?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>