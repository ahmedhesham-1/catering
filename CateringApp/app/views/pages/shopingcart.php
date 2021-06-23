<?php
class shopingcart extends view{
  public function output(){
    $title = $this->model->title;
    require APPROOT . '/views/inc/aboutheader.php';
    $this->model->addToCart();
    $this->model->removeCartItem();
    $this->model->emptyCartItems();
    $cart_items = $this->model->getCartItems();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_SESSION['postdata'] = $_POST;
      unset($_POST);
      header("Location: ?");
      exit;
  }
 ?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
</head>


<div class="top-banner">
        <h1>Cart</h1>
        <p>Just one click to happines!</p>
    </div>
</div>
<!--Section: Block Content-->
<section class="px-5">

  <!--Grid row-->
<?php if($cart_items){ ?> 
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-8">

      <!-- Card -->
      <div class="card wish-list mb-3">
        <div class="card-body">
          <h5 class="mb-4">Cart (<span><?= count($cart_items); ?></span> items)</h5>
          <a href="?empty" style="color:black"> <i class="fas fa-trash-alt"></i> Empty Cart</a>
          <?php foreach($cart_items as $k => $item){ ?>
            <div class="row mb-4">
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                <img class="img-fluid w-100"
                  src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h5><?= $item['name'] ?></h5>
                  </div>
                  <div>
                    <div class="def-number-input number-input safari_only mb-0 w-100">
                      
                      <input class="quantity" min="0" name="quantity" value="<?= $item['quantity'] ?>" type="number">
                      <form action="" method="POST">
                        <button class="btn btn-primary" type="submit" name="quantity" value="1">
                        <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn btn-secondary" type="submit" name="quantity" value="-1">
                        <i class="fas fa-minus"></i>
                        </button>
                        <input type="hidden" name="id" value="<?=$item['ID']?>">
                      </form>
                    </div>
                    <small id="passwordHelpBlock" class="form-text text-muted text-center">
                      (Note, <?= $item['quantity'] ?> piece)
                    </small>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a href="?remove=<?= $k ?>" style="color:black;" class="card-link-secondary small text-uppercase mr-3"><i
                        class="fas fa-trash-alt mr-1"></i> Remove item </a>
                    <!--
                      <a href="#!" type="button" class="card-link-secondary small text-uppercase"><i
                        class="fas fa-heart mr-1"></i> Move to wish list </a>
                         -->
                  </div>
                  <p class="mb-0"><span><strong><?= $item['price'] ?> egp/piece</strong></span></p>
                </div>
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <?php } ?>
          
          <p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase, adding
            items to your cart does not mean booking them.</p>

        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
     <!-- <div class="card mb-3">
        <div class="card-body">

          <h5 class="mb-4">Expected shipping delivery</h5>

          <p class="mb-0"> Thu., 12.03. - Mon., 16.03.</p>
        </div>
      </div>
      --> 
      <!-- Card -->

   
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4">

      <!-- Card -->
      <div class="card mb-3">
        <div class="card-body">

          <h5 class="mb-3">The total amount of</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>The total amount of</strong>
                <strong>
                  <p class="mb-0">(including VAT)</p>
                </strong>
              </div>
              <?php
              $total = 0;
              foreach($cart_items as $item){
               $total +=  intval($item['price'])*intval($item['quantity']);
              }?>
              <span><strong><?= $total ?> egp</strong></span>
            </li>
          </ul>

          <button type="button" class="btn btn-primary btn-block waves-effect waves-light">go to checkout</button>

        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div class="card mb-3">
        <div class="card-body">

          <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample1"
            aria-expanded="false" aria-controls="collapseExample1">
            Add a discount code (optional)
            <span><i class="fas fa-chevron-down pt-1"></i></span>
          </a>

          <div class="collapse" id="collapseExample1">
            <div class="mt-3">
              <div class="md-form md-outline mb-0">
                <input type="text" id="discount-code1" class="form-control font-weight-light"
                  placeholder="Enter discount code">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card -->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->
  <?php }else{
    ?> <h1>No items in cart !</h1> <?php
  } ?>

</section>
<!--Section: Block Content-->


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>