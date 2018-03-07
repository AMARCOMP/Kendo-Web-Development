<!DOCTYPE html>
<html lang="en">
<head>
  <title>Review_page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/mystyle.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/cartStyle.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/FluidCheckout.css">
    <link rel="shortcut icon" href="images/Paperbag%20Orange.ico" />
    <script src="js/checkout.js"></script>
    <link rel ="stylesheet" type ="text/css" href ="stylesheet/SwatchStyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    #procedure {
      display: -webkit-inline-box;
    }
    #procedure #welcome #text,
    #procedure #delivery #text,
    #procedure #review #text {
      color: #068d35;
    }
    #procedure #payment #text {
      color: #F99C1C;
    }
    #procedure > hr {
      border: 3px solid #068d35;
      width: 160px;
      margin: 26px 10px;
    }

  </style>
</head>
<body>
<!-- header begins -->

  <?php include 'header.php'; ?>
  
<!-- header ends -->
<div class="container-fluid" style="margin-top: 10%;margin-bottom: 3%;">

<div style="margin-left:17%">  
<div id="procedure">
    <div id="welcome">
      <span class="fa-stack fa-3x" style="font-size: 27px;">
        <i class="fa fa-circle fa-stack-2x" style="color: #068d35;"></i>
        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
      </span>
      <p class="text-center" id="text">Welcome</p>
    </div>
    <hr>
    <div id="delivery">
       <span class="fa-stack fa-3x" style="font-size: 27px;">
        <i class="fa fa-circle fa-stack-2x" style="color: #068d35;"></i>
        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
      </span>
      <p class="text-center" id="text" style="color: #068d35">Delivery</p>
    </div>
    <hr style="border: 3px solid #068d35 ">
    <div id="review">
      <span class="fa-stack fa-3x" style="font-size: 27px;">
        <i class="fa fa-circle-thin fa-stack-2x" style="color: #F99C1C;"></i>
        <i class="fa fa-circle fa-stack-1x fa-inverse" style="color: #F99C1C;"></i>
      </span>
      <p class="text-center" id="text" style="color:  #F99C1C ">Review</p>
    </div>
    <hr style="border:3px solid #dfdfdf ;">
    <div id="payment">
       <span class="fa-stack fa-3x" style="font-size: 27px;">
        <i class="fa fa-circle fa-stack-2x" style="color:  #dfdfdf ;"></i>
        <i class="fa fa-check fa-stack-1x fa-inverse" style="color:#dfdfdf "></i>
      </span>
      <p class="text-center" id="text" style="color:  #dfdfdf ">Payment</p>
    </div>
  </div>
</div>



<!--cart Panel started-->

<div class="row" style="width:100%;margin-top:5%;">
  <div class="col-md-7 col-lg-7" style="width: 67.333%">
  <div class="panel panel-default" style="border-bottom:0px hidden white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
    <div class="panel-heading">
    <ul class="list-inline" style="list-style:none">
    <li> Items</li>
    <li style="margin-left:36%;"> Quantity</li>
    <li style="margin-left:5%;"> Manufacturer</li>
    <li style="margin-left:10%;"> ItemPrice</li>
    <li style="margin-left:10%;">Subtotal</li>
    </ul>
   </div>
    <div class="panel-body cart-body">
    <div class="row" style="border-block-end:2px solid #ddd;padding: 1%;">

    <div class="col-md-5 col-lg-5" style="width: 39.667%">
      <div class="prdt-image" style="display: -webkit-inline-box;">
        <img src="img/pic1.png" style="height:110px;width:100px">
        <div class="prdt-info" style="margin-left: 5%;width:70%;">
        <div style="position: relative;"><span class=" text-center product-name">Product Title A Long Nameoftheproduct is used</span></div>
        <div style="margin-top:5%;">
        <span>Size :</span>
        <span class="product-size"> S</span></div>
        <div style="margin-top: 2%"><span>Color :</span>
        <label class="color-label" style="background-color: black;height:10px;width:10px;margin-bottom:0px;"></label></div>
        </div>
      </div>
    </div>
    <div class="col-md-1 col-lg-1" style="width:8.33%;"><input type="number" name="product-quantity" value="2" style="width:-moz-available;"></div>
    <div class="col-md-3 col-lg-3 text-center" style="width: 25%;"> <span class=" manufacturer-name">Manufacturer Name</span></div>
    <div class="col-md-1 col-lg-1" style="width:10.33%;"> <p class="price" style="font-size:15px;color:gray;"><i style="font-size:14px" class="fa">&#xf156;</i> 559</p></div>
    <div class="col-md-2 col-lg-2 text-center"><h4 class="subtotal-price" style="font-size:18px;color:green;"><i style="font-size:17px;" class="fa">&#xf156;</i> 559</h4></div>

    </div>

   
      
    </div>
  </div>
  </div>
  <div class="col-md-5 col-lg-5" style="width: 31.667%;">
    <div class="panel panel-default" style="border-bottom:0px hidden white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
    <div class="panel-heading text-center"><b style="font-size: 25px">Summary</b></div>
    <div class="panel-body">
      <div>
      <ul style="list-style: none;width:100%">
      <li style="float: left">Items</li><li class="text-right"><b>2</b></li>
      <li style="float: left;"> Subtotal</li><li class="text-right"> <i style="font-size:16px;" class="fa">&#xf156;</i><b style="font-size: 16px"> 1118</b></li>
      <li> <del>Shipping Charges </del></li><li></li>
      <li> <del>Tax</del></li><li></li>
      </ul>
      <hr style="border: 3px solid gray;">
      <div>
      <span style="font-size: 20px;float:left;color: green">Order Total</span>
      <div style="margin-left:10%; ">
      <h4 class="cart-total-value text-right" style="font-size:20px;color:green;"><i style="font-size:20px;" class="fa">&#xf156;</i> <span style="font-weight: bold;">1118</span></h4>

      </div>
      </div>

    </div>
  </div>
</div>
<center>
<a href="payment.php">
<button type="button" class="btn-lg buy" style="width: 99.2%;padding:4.5%;font-size:20px;font-weight: bold;border-bottom:0px hidden white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
          <span class="glyphicon glyphicon-credit-card"></span>&nbsp &nbsp CheckOut
        </button></a></center>


  </div>

</div>
<div>
<a href="#" style="background-color: white;
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    margin-left:1%"></a></div>
</div>


<!-- footer begins -->

  <?php include 'footer.php'; ?>

<!-- footer ends -->
  

   
</body>
</html> 