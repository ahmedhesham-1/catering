<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../layout/css/style.css">

    <title>Add Products</title>
</head>

<body>

    <?php include('../includes/AdminHeader.php'); ?>

    <div class="container" style="margin-top:200px;">
    <div class="row">
 <div class="col-md-6" style="top:30px;">                  
<img src="images/party.jpg" width="300" height="300">
 
 
                                         
<input type="file" class="new" name="uploadfile"  value=""/>
<input type="submit" class="new" name="pho" value="Add photo"/>
</div>




<div class="col-md-6">

<h3>New Name</h3>

 <input type="text" class="inputFields" name="name" placeholder="Name"  pattern="[A-Za-z\s+]{2,10}" title="Please enter a valid product name."/>



<h3>New Description</h3>

  <input type="text" class="inputFields" name="description" placeholder="Description" pattern="[A-Za-z\s+]{2,1000}" title="Please enter a valid description text." />



<h3>New Price</h3>

  <input type="number" class="inputFields" name="price" placeholder="Price" pattern="[0-9]{1,10000}" title="Please enter valid price" />

 


<input type="submit" class="new" name="prbt" value="Save" />
</div>
</div>
</div>
</body>
</html>