<?php
class checkout extends view{
  public function output(){
    $title = $this->model->title;
    $submit = $this->model->submit_checkout();
    $shopingcartModel = Util\pathBuilder('models', 'shopingcartModel');
    require_once($shopingcartModel);
    $shopingcartModel = new shopingcartModel;
    require APPROOT . '/views/inc/aboutheader.php';
    $cart_items = $shopingcartModel->getCartItems();
    if($submit)
    $cart_items = $shopingcartModel->setOrder($submit);
    
 ?>
<style>
.row-x {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container-x {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  margin-top:200px;
}

input[type=text],input[type=date] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container-x {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.button-x {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.button-x:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row-x {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}</style>

<div id="img">
<b>Check Out</b>
</div><div class="row-x">
  <div class="col-75">
    <div class="container-x">
      <form action="" method="POST">

        <div class="row-x">
          <div class="col-50">
            <h3>Billing Info</h3>
            <?php
              if($submit){
                ?>
                <div style="background:rgba(0,255,0,0.3);color:green;padding:10px 20px;">
                Your request has been submitted, Thank you for ordering!
                </div>
                <?php
              }
            ?>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="John M. Doe">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="phone"><i class="fa fa-phone"></i>Phone</label>
            <input type="text" id="phone" name="phone" placeholder="0123456789">
            <label for="order_date"><i class="fa fa-clock"></i> Order Date</label>
            <input type="date" id="order_date" name="order_date" placeholder="">
          </div>
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" name="checkout" value="Checkout" class="button-x">
      </form>
    </div>
  </div>

</div>
</div>
<?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>