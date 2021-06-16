<?php
class userprofile extends view{
  public function output(){
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    require APPROOT . '/views/inc/header.php';
 ?>

<div>
<button type="button" id="blue_button1">Edit </button>
</div>


<div>
<u id="Hello"> Hello User <u>
</div>


<div>
<b id="Name"> Name <b>
</div>

<div>
<b id="Phone"> Phone <b>
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