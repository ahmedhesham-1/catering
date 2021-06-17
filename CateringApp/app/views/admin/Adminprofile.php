 
<?php
class Adminprofile extends view{
  public function output(){
    $title = $this->model->title; 
 ?>

<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../layout/css/style2.css">
    <link rel="stylesheet" href="../layout/css/style.css">
</head>
<body>
<?php include('../includes/AdminHeader.php'); ?>
<div>
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

?>
</body>
</html>
<img src="../images/party.jpg" alt="Avatar" style="width:180px">
</span>


</body>
</html>
