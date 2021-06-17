<?php
class Login extends view
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
                <h1>Sign In</h1>
                <form action="" method="post">
                    <input type="text" name="phone" placeholder="Phone Number" required><br>
                    <input type="password" name="password" placeholder="password" required><br>
                    <input type="submit" value="Sign In">
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