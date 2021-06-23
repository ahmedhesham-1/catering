<?php
class menu extends view{
  public function output(){
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    require APPROOT . '/views/inc/header.php';
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
                <form action="./shopingcart" method="POST">
                <input type="hidden" name="id" value="<?= $item->ID ?>">
                <input type="hidden" name="quantity" value="1">
                <button type="submit" class="btn cart px-auto">Add to Cart</button>
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
                <form action="./shopingcart" method="POST">
                <input type="hidden" name="id" value="1">
                <input type="hidden" name="quantity" value="1">
                <button type="submit" class="btn cart px-auto">Add to Cart</button>
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
                    
                        <span>Price: <?php echo $item->price?></span>
                        </div>
                <h2><?php echo $item->name?></h2>
                <p><?php echo $item->description?></p>
                <form action="./shopingcart" method="POST">
                <input type="hidden" name="id" value="1">
                <input type="hidden" name="quantity" value="1">
                <button type="submit" class="btn cart px-auto">Add to Cart</button>
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
    <?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>