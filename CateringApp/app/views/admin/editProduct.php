<?php
class editProduct extends view{
  public function output(){
    $title = $this->model->title;
   
    require APPROOT . '/views/inc/adminheader.php';
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
 <div class="col-md-4" style="top:50px;">                  
<img src="../images/party.jpg" width="300" height="300">
 
 
                                         
<input type="file" class="new" name="uploadfile"  value="upload photo"/>
<input type="submit" class="new" name="pho" value="Change photo"/>
</div>


<div class="col-md-4">
    <div class="row" style="margin-bottom:120px;">
    <h3>Current Name</h3>
    <p>
     </div>
     <div class="row"   style="margin-bottom:90px;">

     <h3>Current Description</h3>
     </div>
     <div class="row">
     <h3>Current Price</h3>
     </div>

</div>


<div class="col-md-4">

<h3>New Name</h3>

 <input type="text" class="inputFields" name="name" placeholder="New name"  pattern="[A-Za-z\s+]{2,10}" title="Please enter a valid product name."/>
 <input type="submit" class="new" name="namebt" value="Update name"/>


<h3>New Description</h3>

  <input type="text" class="inputFields" name="description" placeholder="New description" pattern="[A-Za-z\s+]{2,1000}" title="Please enter a valid description text." />
  <input type="submit" class="new" name="desbt" value="Update description" />


<h3>New Price</h3>

  <input type="number" class="inputFields" name="price" placeholder="New Price" pattern="[0-9]{1,10000}" title="Please enter valid price" />
  <input type="submit" class="new" name="prbt" value="Update price" />
 


<input type="submit" class="new" name="prbt" value="Save" />
</div>
</div>
</div>
<?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>