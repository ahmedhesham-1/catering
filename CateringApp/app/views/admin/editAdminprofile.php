 <?php
class editAdminprofile extends view{
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
    
 
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../layout/css/style2.css">
    <link rel="stylesheet" href="../layout/css/style.css">
</head>
<body>

<div>
</div>
 

</div>




<?php
            foreach($this->model->readProfile() as $item){
            
            ?>
<div>
<button type="button" id="blue_button1">Edit </button>
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
