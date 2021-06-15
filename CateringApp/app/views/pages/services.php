<?php
class services extends view{
  public function output(){
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    require APPROOT . '/views/inc/header.php';
 ?>





<div class="Head">
        <h1>Our Services</h1>
        <p>We Spread Love.</p>
    </div>



<div class="MainBody">

<div class="heading">




<div class="menu-items flex ">
    <div class="homerow">


        <div class="homecolumn">

    <div class="item">
        <div class="image-container">
        <img src="images/bd.jpg" alt="">    
        </div>
        <h2>Birth Day</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam ipsam aliquam ullam perspiciatis. Atque fuga, adipisci possimus eos optio quo distinctio, eum corrupti ut officia aspernatur natus totam perferendis quos.   </p>
    </div>
    <div class="item">
        <div class="image-container">
            <img src="images/wedd.jpg" alt="">    
        </div>
        <h2>Wedding</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam ipsam aliquam ullam perspiciatis. Atque fuga, adipisci possimus eos optio quo distinctio, eum corrupti ut officia aspernatur natus totam perferendis quos.   </p>
    </div>
    </div>

    
    <div class="homecolumn">
    <div class="item">
        <div class="image-container">
            <img src="images/party.jpg" alt="">    
        </div>
        <h2>Party</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam ipsam aliquam ullam perspiciatis. Atque fuga, adipisci possimus eos optio quo distinctio, eum corrupti ut officia aspernatur natus totam perferendis quos.   </p>
    </div>
    
    <div class="item">
        <div class="image-container">
            <img src="images/event.jpg" alt="">    
        </div>
        <h2>Event</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam ipsam aliquam ullam perspiciatis. Atque fuga, adipisci possimus eos optio quo distinctio, eum corrupti ut officia aspernatur natus totam perferendis quos.   </p>
    </div>
    </div>
    
</div>       
</div>
 

<?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>