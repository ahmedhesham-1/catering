<?php
class editProduct extends view{
  public function output(){
    $title = $this->model->title;
   
    require APPROOT . '/views/inc/adminheader.php';
    require APPROOT . '/views/admin/adminmenu.php';
    
 ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../layout/css/style.css">
</head>

   <div class="container" style="margin-top:200px;">
    <div class="row">
 

<?php
$PID=$_POST['edit'];
            foreach($this->model->readMenuProd($PID) as $item){
            $pid1=$item->ID;
            ?>

<div class="col-md-4" style="top:50px;">                  
 <img src="<?php echo URLROOT . $item->img; ?>" width="300" height="300" alt="">  

<input type="file" class="new" name="uploadfile"  placeholder="Change Photo"/>
</div>

<div class="col-md-4">
    <div class="row" style="margin-bottom:120px;">
  <h3>Current Name:</h3> 
  
  
      <h4> <?php echo $item->name?></h4> 
     </div>
     
     <div class="row"   style="margin-bottom:90px;">
     <h3>Current Description:</h3>
     
   <h4> <?php echo $item->description?></h4> 
     </div>

     <div class="row">
     <h3>Current Price:</h3>
    <h4> <?php echo $item->price?></h4> 
     </div>

</div>
     <?php
            }  
             ?>



<div class="col-md-4">

<form method="post" action="editProduct" name="update" >
<h3>New Name</h3>

 <input type="text" class="inputFields" name="name" placeholder="New name"  pattern="[A-Za-z\s+]{2,10}" title="Please enter a valid product name."/>

<h3>New Description</h3>

  <input type="text" class="inputFields" name="description" placeholder="New description" pattern="[A-Za-z\s+]{2,1000}" title="Please enter a valid description text." />

<h3>New Price</h3>

  <input type="number" class="inputFields" name="price" placeholder="New Price" pattern="[0-9]{1,10000}" title="Please enter valid price" />
  
                  
 <button  value="<?php echo $pid1; ?>" onclick="window.location.href='<?php echo URLROOT . 'public/admin/adminmenu'; ?>';"class="btn cart px-auto">update</button>
                   

</form>

</div>
</div>
</div>
<?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>