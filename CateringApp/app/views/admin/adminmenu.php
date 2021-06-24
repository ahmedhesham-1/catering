<?php
class adminmenu extends view{
  public function output(){
    $title = $this->model->title;
   
    
    require APPROOT . '/views/inc/adminheader.php';
 ?>
  <style>
body {
  background-image: url(../../public/img/backAdd.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  
}
.h1, h1 {
    font-size: 34px;
    color:white;
}
</style>

    <div class="AMenu">
        <h1>Admin Menu</h1>
        <p>Your imagination our catering.</p>
    </div>
    

    <div class="main-body">
    <section class="products-content">
  <div class="container">
    <div class="products-area category-area">
      <!-- heading -->
      <div class="add prod" >
      <a style="margin-left:650px; color:white; background-color: rgb(47 47 47);"  href="<?php echo URLROOT . 'public/admin/addProduct'; ?>" class="btn cart px-auto heading ">ADD PRODUCT</a>
        <h1 class="heading">Apptiezers </h1>
      </div>
       
      
      <div class="row">

        <div class="menu-items flex wrap">

            <?php
            
            foreach($this->model->readMenuApp() as $item){
            
            ?>
            <div class="item">
                <div class="image-container imgHolder">
                    <img src="<?php echo URLROOT . $item->img; ?>" alt=""> 
                    
                        <span>Price: <?php echo $item->price?>LE</span>
                        </div>
                <h2><?php echo $item->name?></h2>
                <p><?php echo $item->description?></p>

                <form method="post" action="editProduct">  
               <button name="edit" value="<?php echo $item->ID;?>" onclick="window.location.href='<?php echo URLROOT . 'public/admin/editProduct'; ?>';"class="btn cart px-auto">Edit</button>
                </form>
                <form method="post" action="" name="delete">
                <button name="delete" value="<?php echo $item->ID;?>" class="btn cart px-auto">Delete</button>
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
                    
                        <span>Price: <?php echo $item->price?>LE</span>
                        </div>
                <h2><?php echo $item->name?></h2>
                <p><?php echo $item->description?></p>

              <form method="post" action="editProduct">  
               <button name="edit" value="<?php echo $item->ID;?>" onclick="window.location.href='<?php echo URLROOT . 'public/admin/editProduct'; ?>';"class="btn cart px-auto">Edit</button>
                </form>
                <form method="post" action="" name="delete">
                <button name="delete" value="<?php echo $item->ID;?>" class="btn cart px-auto">Delete</button>
               </form>            </div>

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
                    
                        <span>Price: <?php echo $item->price?>LE</span>
                        </div>
                <h2><?php echo $item->name?></h2>
                <p><?php echo $item->description?></p>

                <form method="post" action="editProduct">  
               <button name="edit" value="<?php echo $item->ID;?>" onclick="window.location.href='<?php echo URLROOT . 'public/admin/editProduct'; ?>';"class="btn cart px-auto">Edit</button>
                </form>
                <form method="post" action="" name="delete">
                <button name="delete" value="<?php echo $item->ID;?>" class="btn cart px-auto">Delete</button>
               </form>            </div>

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