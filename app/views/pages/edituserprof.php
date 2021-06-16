<?php
class edituserprof extends view{
  public function output(){
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    require APPROOT . '/views/inc/header.php';
 ?>


<div>
<input type="file"   id="yellow_button" name="uploadfile"  value="upload photo"/>

</div>

<div>

<input type="submit"  id="blue_button" name="pho" value="Update"/>
</div>

<div>
<form>  
    <label id="User1">User 1</label>
    <br>  
    <input id="box1" type="text" name="New Name" placeholder="New Name" ><br>  

    <label id="number" >0112344234</label>
    <br>  
    <input id="box2" type="text" name="New Phone" placeholder="New Phone">
    <br>  
      
    <label id= "user123" >User123</label>
    <br>  
    <input id="box3" type="text" name="New Password" placeholder="New Password">
    <br>  
      
</form>  
</div>



<span class="circle2">
<img src="../../public/img/party.jpg" alt="Avatar" style="width:150px">
</span>

 <?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>