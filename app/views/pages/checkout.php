<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/css/checkout.css">
    <link rel="stylesheet" href="layout/css/style.css">
</head>
<body>

<?php include('includes/header.php'); ?>

<div id="img">
<b>Check Out<b>
</div>

<div  id="shipping">
<U> Shipping Option:  </u>
</div>

<div id="radio">
<input type="radio" name="check1" value="check1">
<b> Pick Up </b>
<br>
<input type="radio" name="check2" value="check2">
<b> Ship To Home </b>
<div>


<form>  
    <label id="fn">First name</label>
    <label id="ln">Last name</label>
    <br>  
    <input id="boxfn" type="text" name="fn" > 
    <input id="boxln" type="text" name="ln">
    <br> 

    <label id= "ph" >Phone</label>
    <br>  
    <input id="boxph" type="text" name="ph" >
    <br> 

    <label id= "ad" >Address</label>
    <br>  
    <input id="boxad" type="text" name="ad" >
    <br>
    <input id="boxad2" type="text" name="ad" >
    <br>  

    <label id="cy">City</label>
    <br>  
    <input id="boxcy" type="text" name="cy" >
    <br> 

    <label id="dt">Order Date</label>
       <br>  
    <input id="boxdt" type="date" name="dt" >
    <br> 

</form>  
</div>

 <p id="product">PRODUCT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<P>
 <p id="total">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOTAL<P>


<div id="list1">
<p> PROD1 <P>
<br>
<p> PROD1 <p>
<br>
<p> PROD1 </p>
</div>


<div id="list2">
<p> 00 <P>
<br>
<p> 00 <p>
<br>
<p> 00 </p>
<br>
<br>
<p> 00 <P>
<br>
<p> 00 <p>
</div>


<div id="sub">
<p> SUBTOTAL <P>
<br>
<p> TOTAL <p>
</div>

<button type="button" class="place"> Place Order </button>


<div class="vl"></div>




</body>
</html>