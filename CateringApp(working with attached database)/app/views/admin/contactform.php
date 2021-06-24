<?php
class contactform extends view{
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
  <h1>Contact Forms</h1>
 
</div>
<br>

  <table class="table table-striped">
  <thead class="thead-light">
  <tr>
  <th scope="col">Form ID</th>
  <th scope="col">Name</th>
  <th scope="col">Phone</th>
  <th scope="col">Subject</th>
  <th scope="col">Message</th>
  </tr>
   </thead>
   <?php
            
            foreach($this->model->showForm() as $item){
            
            ?>
  <tr>
  <tbody>
     <td><?php echo $item->ID?></td>
    <td><?php echo $item->name?></td>
    <td><?php echo $item->phone?></td>
    <td><?php echo $item->subject?></td>
    <td><?php echo $item->message?></td>
    

     <form method="post" action="">
     <td><button  name="delet" value="<?php echo $item->ID;?>" class="bt3 btn-secondary">
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