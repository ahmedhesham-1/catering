<?php
class Register extends view
{
  public function output()
  {
    $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';
  ?>



<div class="flex align-center justify-center h-100">
        <div class="box-wrapper flex relative">
            <div class="or-sep"></div>
            <div class="item left">
                <h1>Sign Up</h1>
                <form action="" method="post">
                    <input type="text" name="name" placeholder="Name"><br>
                    <input type="text" name="phone" placeholder="Phone Number"><br>
                    <input type="password" name="password" placeholder="password"><br>
                    <input type="password" name="confirm_password" placeholder="Re-Type password    "><br>
                    <input type="submit" value="Sign Up">
                </form>
            </div>
            <div class="item right">
                
            </div>
        </div>
    </div>



  <?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>