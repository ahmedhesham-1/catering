
<?php
error_reporting(0);
session_start();
?>
<div class="header flex">
    <div class="header-logo fl-1">
        <img src="<?php echo URLROOT . 'public/img/logoBack.jpg'; ?>"  onclick="window.location.href='<?php echo URLROOT . 'public/pages/index'; ?>';"alt="">
        
    </div>
    <div class="header-nav fl-2 flex">
        <p>
             <a href="<?php echo URLROOT . 'public/pages/index'; ?>">Home</a>
        </p>
        <p>
             <a href="<?php echo URLROOT . 'public/pages/about'; ?>">AboutUs</a>
        </p>
        <p>
            <a href="<?php echo URLROOT . 'public/pages/services'; ?>">Services</a>
        </p>
        <p>
             <a href="<?php echo URLROOT . 'public/pages/menu'; ?>">Menu</a>
        </p>
        <p>
             <a href="<?php echo URLROOT . 'public/pages/feedback'; ?>">Feedback</a>
        </p>
        <p>
             <a href="<?php echo URLROOT . 'public/pages/contact'; ?>">ContactUs</a>
        </p>

        <div style="display:flex">
        <p style="margin-right:5px;">
        <a href="<?php echo URLROOT . 'public/pages/shopingcart'; ?>">Cart</a>
        
        </p>
        <svg xmlns="http://www.w3.org/2000/svg" onclick="window.location.href='<?php echo URLROOT . 'public/pages/shopingcart'; ?>';"  width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        </div>
   
    </div>

    <?php
        if(isset($_SESSION['ID'])){
            ?>
    <div class="header-buttons fl-1">
        <input type="button" onclick="window.location.href='<?php echo URLROOT . 'public/pages/userprofile'; ?>';" class="btn alt" value="Profile">
    </div>

            
    <!-- <div class="header-buttons fl-1" style="margin-left:50px;">
         
          <a href="   echo URLROOT;     /controller/users/logout">logout</a>
    </div> -->


            <?php

        }else{
        ?>
<div class="header-buttons fl-1">
        <input type="button" onclick="window.location.href='<?php echo URLROOT . 'public/users/login'; ?>';" class="btn alt" value="Signin">
        <input type="button" onclick="window.location.href='<?php echo URLROOT . 'public/users/Register'; ?>';" class="btn alt" value="Signup">
    </div>
    <?php

    }
    ?>

</div>