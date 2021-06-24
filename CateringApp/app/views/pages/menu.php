<?php
class menu extends view{
  public function output(){
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    $category_products = $this->model->get_items_on_search();
    require APPROOT . '/views/inc/header.php';
 ?>

    <div class="top-banner">
        <h1>Menu</h1>
        <p>Your imagination our catering.</p>
    </div>
    <div style="display:flex; width:100%; justify-content:center;margin-top:30px;">
      <form method="GET" style="width:50%; display:flex; justify-content:center; align-items:center">
        <input type="text" name="search" style="flex:1;padding:5px 10px;">
        <input type="submit" class="btn-primary" value="search" style="padding:5px;">
      </form>
    </div>

    <?php foreach($category_products as $k => $products){
      if(!empty($products)){
      ?>
      <div class="main-body">
    <section class="products-content">
  <div class="container">
    <div class="products-area category-area">
      <!-- heading -->
        <h1 class="heading"><?=$k?> </h1>
       
      <div class="row">

        <div class="menu-items flex wrap">

            <?php
            foreach($products as $item){
            
            ?>
            <div class="item">
                <div class="image-container imgHolder">
                    <img src="../img/<?php echo $item->img; ?>" alt=""> 
                    
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
      
      <?php
      }
      }?>
    <!-- <div class="main-body">
    <section class="products-content">
  <div class="container">
    <div class="products-area category-area">
      heading
        <h1 class="heading">Apptiezers </h1>
       
     
      
      <div class="row">

        <div class="menu-items flex wrap">

            <?php
            foreach($this->model->readMenuApp() as $item){
            
            ?>
            <div class="item">
                <div class="image-container imgHolder">
                    <img src="../img/<?php echo $item->img; ?>" alt=""> 
                    
                        <span>Price: <?php echo $item->price?>LE</span>
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
      heading
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
      heading
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
    </div> -->
    <?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>