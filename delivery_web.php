<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delivery_page</title>
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
  <style>
  input{
    border: 1.2px solid  #dfdfdf ; }
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
      margin: 27px 10px;
    }
    .fa-stack{
      font-size:27px;
    }

  </style>
</head>
<body>
<!-- header begins -->

 <?php include 'header.php'; ?>
    
<!-- header ends -->
    
<div class="container-fluid" style="margin-top: 10%;margin-bottom: 3%;">
<div style="margin-left:17%;">  
<div id="procedure">
    <div id="welcome">
      <span class="fa-stack fa-3x">
        <i class="fa fa-circle fa-stack-2x" style="color: #068d35;"></i>
        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
      </span>
      <p class="text-center" id="text">Welcome</p>
    </div>
    <hr>
    <div id="delivery">
       <span class="fa-stack fa-3x">
        <i class="fa fa-circle-thin fa-stack-2x" style="color: #F99C1C;"></i>
        <i class="fa fa-circle fa-stack-1x fa-inverse" style="color: #F99C1C;"></i>
      </span>
      <p class="text-center" id="text">Delivery</p>
    </div>
    <hr style="border: 3px solid #dfdfdf ">
    <div id="review">
      <span class="fa-stack fa-3x">
        <i class="fa fa-circle fa-stack-2x" style="color:  #dfdfdf ;"></i>
        <i class="fa fa-check fa-stack-1x fa-inverse" style="color:#dfdfdf "></i>
      </span>
      <p class="text-center" id="text" style="color:  #dfdfdf ">Review</p>
    </div>
    <hr style="border:3px solid #dfdfdf ;">
    <div id="payment">
       <span class="fa-stack fa-3x">
        <i class="fa fa-circle fa-stack-2x" style="color:  #dfdfdf ;"></i>
        <i class="fa fa-check fa-stack-1x fa-inverse" style="color:#dfdfdf "></i>
      </span>
      <p class="text-center" id="text" style="color:  #dfdfdf ">Payment</p>
    </div>
  </div>
</div>

<!--Delivery Address Panel started-->

<div class="row" style="width:100%;">
  <div class="col-md-7 col-lg-7" style="width: 67.333%; margin-left: 1%;margin-top: 4%;">
  <div class="panel panel-default" style="border-bottom:0px hidden white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
    <div class="panel-heading">
    <div class="text-center">
    <spam > Delivery Address</spam></div>
   </div>
    <div class="panel-body">
    <div class="delivery-form">
        <form method="post" action="" style="margin-left: 7%;">
        <span>Name </span>
        <input type="text" name="customer-name" placeholder="Enter Full Name" style="width:86%;margin-left: 6%;">
        
        <br/><br/>
         <span>Address</span> 
         <textarea name="customer-address" placeholder="House No./Flat/Firm No. /Colony/Street No." rows="2" cols="50" style="width: 86%;margin-left: 4.3%;"></textarea>

         <br/><br/>

        <span>Ctiy</span>
         <input type="text" name="customer-city" placeholder="City" style="width:86%;margin-left: 7.5%;">
        <br/><br/>
        <span>PIN</span> 
        <input type="text" name="pin" pattern="[0-9]{4}" maxlength="6" placeholder="Enter 6 digit PIN code" style="width:86%;margin-left: 8%;">
        <br/><br/>
        <span>State</span>
         <input type="text" name="customer-State" placeholder="State" style="width:86%;margin-left: 7%;">
        <br/><br/>
        <span>Mobile No. </span>
        <input type="text" name="pin" pattern="[0-9]{10}" maxlength="10" placeholder="10 digit Mobile no." style="width:86%;margin-left: 3%;">
         <br/><br/>
         <span>Email ID</span>
          <input type="email" name="customer-email" placeholder="E-mail id" style="width:86%;margin-left: 5%;">
         <br/><br/>
         <input type="checkbox" name="set-as-default-address" value="" style="margin-left:11%;margin-top:15px"> &nbsp Set as default  address

        </form>
        

    </div>
    </div>
    </div>
    <a href="review_web.php">
    <button type="submit" style="width: 25.2%;padding:0.5%;font-size:20px;font-weight: bold; border:hidden; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-bottom: 5%;background-color: #447cbf;color:white;margin-left:75%;">
        <b>Proceed to payment</b></button></a>
    </div>
    <!-- order Summary-->

    <div class="col-md-5 col-lg-5" style="width: 31.667%;margin-top: 4%;">
    <div class="panel panel-default" style="border-bottom:0px hidden white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
    <div class="panel-heading text-center"><b style="font-size: 25px">Order Summary</b></div>
    <div class="panel-body" style="margin:8px;">
    <div cass="product-for-buying">
      <div style="border-bottom: 2px solid gray;margin-top: 2%;">
      
              <div style="height:50%;width:38%; display: -webkit-inline-box;">
                  <img src="img/pic1.png" height="160px" width="150px">
                  <div class="product-detail" style="margin-left:19%;width:-moz-max-content;">
                  <div style="border-bottom: 2px solid gray">
                      <h4 style="margin-top:0%; margin-left:2%;font-size:15px"> Name Of The Product</h4>
                      <a href="#"><h5>manufacturer Detail</h5></a>
                      <ul class="specs-list list-inline" style="list-style: none;margin-top: 9%;width:146%;">
                      <li> Size:</li><li id="size-specs" style="margin-left: 16%">S</li></ul>
                      <ul class="list-inline" style="list-style: none;"><li> Quantity:</li> <li style="margin-left:8%">1</li>  </ul>
                      <ul style="list-style: none;" class="list-inline"><li>Color :</li><li><label class="color-label square" style="background-color: black;height:15px;width:15px;margin-bottom: -1px;margin-left:64%"></label></li></ul>
                      </div>
                      <div>
                      <span>Subtotal</span><i style="font-size:16px;margin-left: 31%" class="fa">&#xf156;</i><b style="font-size: 16px"><span> 599</span></b>
                      </div>
                      
                  </div>
              </div>

              
        </div>
        <div style="border-bottom: 2px solid gray;margin-top: 2%;">
      
              <div style="height:50%;width:38%; display: -webkit-inline-box;">
                  <img src="img/pic1.png" height="160px" width="150px">
                  <div class="product-detail" style="margin-left:19%;width:-moz-max-content;">
                  <div style="border-bottom: 2px solid gray">
                      <h4 style="margin-top:0%; margin-left:2%;font-size:15px"> Name Of The Product</h4>
                      <a href="#"><h5>manufacturer Detail</h5></a>
                      <ul class="specs-list list-inline" style="list-style: none;margin-top: 9%;width:146%;">
                      <li> Size:</li><li id="size-specs" style="margin-left: 16%">S</li></ul>
                      <ul class="list-inline" style="list-style: none;"><li> Quantity:</li> <li style="margin-left:8%">1</li>  </ul>
                      <ul style="list-style: none;" class="list-inline"><li>Color :</li><li><label class="color-label square" style="background-color: black;height:15px;width:15px;margin-bottom: -1px;margin-left:64%"></label></li></ul>
                      </div>
                      <div>
                      <span>Subtotal</span><i style="font-size:16px;margin-left: 31%" class="fa">&#xf156;</i><b style="font-size: 16px"><span> 599</span></b>
                      </div>
                      
                  </div>
              </div>

              
        </div></div>
        <div class="order-total" style="margin-top:2%;color:green"><spam style="padding-left:9%;font-size: 20px;">Order Total</spam><i style="font-size:20px;margin-left: 47%" class="fa">&#xf156;</i><span style="font-size: 20px;">1198</span>

    </div>
  </div>
</div>


    <!--end Order Summary-->
    </div>
    </div>
    </div>

    


<!-- footer begins -->

  <?php include 'footer.php'; ?>

<!-- footer ends -->

  

   
</body>
</html> 