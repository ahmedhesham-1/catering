<?php
class Index extends view{
  public function output(){
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    require APPROOT . '/views/inc/header.php';
 ?>


<div class="Head">
        <h1>Louki's Catering</h1>
        <p>Redefining the role of the caterer.</p>
    </div>

     <div class="MainBody">

        <div class="heading">
        <h1>Our Services</h1>
        <p>Serving a great memories.</p>
        
        
        <div class="menu-items flex ">
            <div class="homerow">


                <div class="homecolumn">

                <div class="item">
                <h1>Birth Day:</h1>
                <div class="image-container">
                <img src="https://creationsbycathy.net/wp-content/uploads/2012/06/100th-bd-party.jpg" alt="">    
                </div>
                
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam ipsam aliquam ullam perspiciatis. Atque fuga, adipisci possimus eos optio quo distinctio, eum corrupti ut officia aspernatur natus totam perferendis quos.   </p>
            </div>
            <div class="item">
                 <h1>Wedding:</h1>
                <div class="image-container">
                    <img src="https://www.weddingjournalonline.com/wp-content/uploads/2020/09/Wedding-Reception-Games.png" alt="">    
                </div>
                
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam ipsam aliquam ullam perspiciatis. Atque fuga, adipisci possimus eos optio quo distinctio, eum corrupti ut officia aspernatur natus totam perferendis quos.   </p>
            </div>
            </div>

            
            <div class="homecolumn">
            <div class="item">
                <h1>Party:</h1>

                <div class="image-container">
                    <img src="https://zone1-ibizaspotlightsl.netdna-ssl.com/sites/default/files/styles/auto_1500_width/public/article-images/135189/slideshow-1569845072.jpg" alt="">    
                </div>
                
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam ipsam aliquam ullam perspiciatis. Atque fuga, adipisci possimus eos optio quo distinctio, eum corrupti ut officia aspernatur natus totam perferendis quos.   </p>
            </div>
            
            <div class="item">
                <h1>Event:</h1>

                <div class="image-container">
                    <img src="http://thebrokerhub.com/en/app/upload/691552467670.jpg" alt="">    
                </div>
                
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