
<div class="header flex">
    <div class="header-logo fl-1">
        <img src="<?php echo URLROOT . 'public/img/logoBack.jpg'; ?>" alt="">
    </div>
    <div class="header-nav fl-2 flex">
        <p>
             <a href="<?php echo URLROOT . 'public/admin/orders'; ?>">Orders</a>
        </p>
       
        <p>
             <a href="<?php echo URLROOT . 'public/admin/adminmenu'; ?>">Menu</a>
        </p>
        <p>
             <a href="<?php echo URLROOT . 'public/admin/contactform'; ?>">Contact Forms</a>
        </p>

      
    </div>
    <div class="header-buttons fl-1">
        <input type="button" onclick="window.location.href='<?php echo URLROOT . 'public/admin/Adminprofile'; ?>';" class="btn alt" value="profile">
        <input type="button" onclick="window.location.href='<?php echo URLROOT . 'public/pages/Index'; ?>';" class="btn alt" value="sign out">

    </div>
</div>