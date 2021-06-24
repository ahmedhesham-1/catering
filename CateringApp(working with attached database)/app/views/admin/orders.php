<?php
class orders extends view{
  public function output(){
    $title = $this->model->title;
   
    require APPROOT . '/views/inc/adminheader.php';
 ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../layout/css/style.css">
</head>
  
<div class="ordershead" >
  <h1>ORDERS</h1>
 
</div>
<br>

  <table class="table table-striped">
  <thead class="thead-light">
  <tr>
  <th scope="col">Order Number</th>
  <th scope="col">User Name</th>
  <th scope="col">Phone Number</th>
  <th scope="col">Addres</th>
  <th scope="col">Date</th>
  <th scope="col">Order Details</th>
  <th scope="col">user ID</th>
  </tr>
   </thead>
   <?php
            
            foreach($this->model->showOrders() as $item){
            
            ?>
  <tr>
  <tbody>
    <td><?php echo $item->orderID?></td>
    <td><?php echo $item->username?></td>
    <td><?php echo $item->phonenumber?></td>
    <td><?php echo $item->address?></td>
    <td><?php echo $item->date?></td>
    <td><?php echo $item->orderDetails?></td>
    <td><?php echo $item->userID?></td>

     <form method="post" action="" name="delete">
     <td><button  name="delete" value="<?php echo $item->orderID;?>" class="bt btn-secondary">
     </form>
                <svg style="color:black;"xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
</svg>
    </button></td></tr>
  </tr>
  </tbody>
  <?php
             }  
             ?>
</table>

</div>
<?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>