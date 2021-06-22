<?php
class Adminprofile extends view{
  public function output(){
    $title = $this->model->title;
   
    require APPROOT . '/views/inc/adminheader.php';
 ?>

<div>
</div>

<div>
<input type="button" onclick="window.location.href='<?php echo URLROOT . 'public/admin/editAdminprofile'; ?>';" id="blue_button1" value="Edit"> </input>
</div>


<div>
<u id="Hello"> Hello Admin <u>
</div>


<div>
<b id="Name"> Name <b>
</div>

<div>
<b id="Password"> Password <b>
</div>


<span class="circle">
<img src="../../public/img/party.jpg" alt="Avatar" style="width:180px">
</span>


<?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>