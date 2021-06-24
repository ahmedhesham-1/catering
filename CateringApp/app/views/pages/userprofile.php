<?php
class userprofile extends view{
  public function output(){
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    require APPROOT . '/views/inc/header.php';
 ?>


            <?php
            foreach($this->model->readProfile($_SESSION['ID']) as $item){
            
            ?>
<div>
<input type="button" onclick="window.location.href='<?php echo URLROOT . 'public/pages/edituserprof'; ?>';" id="blue_button1" value="Edit"> </input>
</div>


<div>
<u id="Hello"> Hello <?php echo  $item->name; ?><u>
</div>


<div>
<b id="Name"> <?php echo  $item->name; ?> <b>
</div>

<div>
<b id="Phone"> <?php echo  $item->phone; ?> <b>
</div>

<div>
<b id="Password"> <?php echo  $item->password; ?> <b>
</div>


<span class="circle">
<img src=<?php echo URLROOT . $item->profilePic; ?> alt="Avatar" style="width:180px">
</span>

<?php
             }  
             ?>

<?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>
