<?php
class contact extends view{
  public function output(){
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    require APPROOT . '/views/inc/contactusheader.php';
 ?>

<div id="img">
<b>Contact Us<b>
</div>
<div id="map">

</div>

<p id="loc" > OUR LOCATION: <p>
<p id="get" > GET IN TOUCH:<p>
 <form>
<label id="name" >Name</label>
<input id="boxname" type="text" name="n" > 

<label id="ph" >Phone</label>
<input id="boxph" type="text" name="ph" >

<label id="sub" >Subject</label>
<input id="boxsub" type="text" name="s" >

<label id="message" >Message</label>
<input id="boxmes" type="text" name="m" >

<button type="button" class="send"> SEND </button>
</form>

<?php
 require APPROOT . '/views/inc/footer.php';

  }
}
?>