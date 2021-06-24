<?php
class Adminprofile extends view{
  public function output(){
    $title = $this->model->title;
   
    require APPROOT . '/views/inc/adminheader.php';
 ?>

<div>
</div>

            <?php
            foreach($this->model->readProfile($_SESSION['ID']) as $item){
            
            ?>


<div>
<input type="button" onclick="window.location.href='<?php echo URLROOT . 'public/admin/editAdminprofile'; ?>';" id="blue_button1" value="Edit"> </input>
</div>


<div>
<u id="Hello"> Hello <?php echo  $item->name;?><u>
</div>


<div>
<b id="Name"> <?php echo  $item->name;?> <b>
</div>

<div>
<b id="Password"> <?php echo  $item->password;?> <b>
</div>


<span class="circle">
<img src="../../public/img/party.jpg" alt="Avatar" style="width:180px">
</span>

<?php
             }  
             ?>

<?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>