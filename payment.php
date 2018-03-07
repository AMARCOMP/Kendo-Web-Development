<!DOCTYPE html>
<html lang="en-us">
<head>

  <title>Kendo</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" href="images/Paperbag%20Orange.ico" />    

  <style type="text/css">
      
  	#main-body-content {
  		padding-top: 150px;
  		padding-bottom: 50px;
  	}
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
    .fa-stack {
      font-size: 27px;
    }
    #form {
      box-shadow: 1px 1px 5px darkgrey;
    }
    #form h3,
    #order-summary h3 {
      border-bottom: 1px solid darkgray;
      padding-bottom: 16px;
      margin-bottom: 1px;
      padding-top: 20px;
    }
    #form #form-body {
      display: -webkit-box;
    }
    #form #form-body #form-button {
      margin-top: -1px;
    }
    #form #form-body #form-button ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 210px;
      border-right: 1px solid darkgray;
    }
    #form #form-body #form-button ul li {
      text-align: left;
      padding-top: 13px;
      padding-bottom: 10px;
    }
    #form #form-body #form-button ul li a {
      display: block;
      text-decoration: none;
      padding: 15px 35px;
      color: darkslategray;
    }
    #form #form-body #form-button ul li a:hover {
      background-color: rgba(51, 122, 183, 0.6);
    }
    #form #form-body #form-button ul li a.active,
    #form #form-body #form-button ul li a.focus {
      border-left: 5px solid #447cbf;
      /*border-right: 1px solid gray;*/
      border-top: 1px solid gray;
      border-bottom: 1px solid gray;
      padding: 14px 30px;
    } 
    #form #form-body #form-button-body {
      width: 600px;
    }
    #form #form-body #form-button-body #debit-card {
      padding: 15px;
    }
    #debit-card form .form-group .col-form-label {
      margin-top: 9px;
      font-weight: 100;
      color: black;
    }
    #debit-card form .form-group input[type="text"] {
      border-radius: 0;
    }
    #debit-card form .form-group {
      margin-bottom: 30px;
    }
    #order-summary {
      box-shadow: 1px 1px 5px darkgray;
    }
    #order-summary #product-body {
      text-align: left;
      padding: 12px 35px;
    }
    #order-summary #product-body p {
      color: #447cbf;
    }
    .table {
        border-bottom:0px !important;
    }
    .table td {
        border: 1px !important;
    }
    .fixed-table-container {
        border:0px !important;
    }

    .foo {
      border: 1px solid red;
      height: 15px;
      width: 15px;
    }
    .colr {
      background-color: red;
    }

  </style>


</head>
<body>

<!-- header begins -->

  <?php include 'header.php'; ?>
  
<!-- header ends -->


<div class="container-fluid text-center" id="main-body-content">	

<!-- steps tracking begins -->

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
        <i class="fa fa-circle fa-stack-2x" style="color: #068d35;"></i>
        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
      </span>
      <p class="text-center" id="text">Delivery</p>
    </div>
    <hr>
    <div id="review">
      <span class="fa-stack fa-3x">
        <i class="fa fa-circle fa-stack-2x" style="color: #068d35;"></i>
        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
      </span>
      <p class="text-center" id="text">Review</p>
    </div>
    <hr>
    <div id="payment">
      <span class="fa-stack fa-3x">
        <i class="fa fa-circle-thin fa-stack-2x" style="color: #F99C1C;"></i>
        <i class="fa fa-circle fa-stack-1x fa-inverse" style="color: #F99C1C;"></i>
      </span>
      <p class="text-center" id="text">Payment</p>
    </div>
  </div>

<!-- steps tracking ends -->

<!-- payment form begins -->

  <div class="row" style="margin-top: 60px;">
    <div class="col-md-8" style="padding-left: 135px;">
      <div id="form">
        <h3>Secure Payment</h3>
        <div id="form-body">
          <div id="form-button">
            <ul>
              <li><a class="Debit-Card active" href="#debit-card">Debit Card</a></li>    
              <li><a class="Credit-Card" href="#credit-card">Credit Card</a></li>
              <li><a class="Net-Banking" href="#net-banking">Net Banking</a></li>
              <li><a class="C-O-D" href="#cod">Cash On Delivery</a></li>
            </ul>
          </div>
          <div id="form-button-body">
            <!-- debit card payment begins -->

            <div id="debit-card">
              <form>
                <div class="form-group row">
                  <label for="card-input" class="col-md-3 col-form-label">Card Number</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="card-input" name="card-number" placeholder="Card number">
                  </div>  
                </div>
                <div class="form-group row">
                  <label for="expiry-date" class="col-md-3 col-form-label">Expiry Date</label>
                  <div class="col-md-9">  
                    <input type="month" class="form-control" id="expiry-date" name="expiry-date" style="border-radius: 0; width: 175px;">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="cvv-num" class="col-md-3 col-form-label">CVV Number</label>
                  <div class="col-md-9 text-left">    
                    <input type="number" id="cvv-num" name="cvv-num" placeholder="CVV No." style="padding: 4px 10px; font-size: 13px;">
                  </div>
                </div>
                <p style="color: #447cbf; text-align: -webkit-left;">
                  <i class="fa fa-shield fa-2x" aria-hidden="true"></i>
                  <small>&nbsp;100% payment protection</small>
                  <button type="submit" class="btn btn-primary" style="border-radius: 0; margin-left: 85px; padding: 6px 30px;">Pay</button>
                </p>
              </form>
            </div>

        <!-- debit card payment ends -->
          </div>
          
        </div>
      </div>
    </div>

    
  <script type="text/javascript">
    $(document).ready(function() {
      $('.Credit-Card').click(function() {
        $('#debit-card').hide(400);
        $('#net-banking').hide(400);
        $('#cod').hide(400);
        $('#credit-card').show();

        $('.Credit-Card').css('border-left','5px solid #447cbf');
        $('.Credit-Card').css('border-top', '1px solid gray');
        $('.Credit-Card').css('border-bottom', '1px solid gray');
        $('.Credit-Card').css('padding', '14px 30px');

        $('.Debit-Card').css('border','none');
        $('.Debit-Card').css('padding', '15px 35px');

        $('.Net-Banking').css('border','none');
        $('.Net-Banking').css('padding', '15px 35px');

        $('.C-O-D').css('border','none');
        $('.C-O-D').css('padding', '15px 35px');

      });
      $('.Debit-Card').click(function() {
        $('#debit-card').show(400);
        $('#net-banking').hide(400);
        $('#cod').hide(400);
        $('#credit-card').hide(400);

        $('.Debit-Card').css('border-left','5px solid #447cbf');
        $('.Debit-Card').css('border-top', '1px solid gray');
        $('.Debit-Card').css('border-bottom', '1px solid gray');
        $('.Debit-Card').css('padding', '14px 30px');

        $('.Credit-Card').css('border','none');
        $('.Credit-Card').css('padding', '15px 35px');

        $('.Net-Banking').css('border','none');
        $('.Net-Banking').css('padding', '15px 35px');

        $('.C-O-D').css('border','none');
        $('.C-O-D').css('padding', '15px 35px');

      });
      $('.Net-Banking').click(function() {
        $('#debit-card').hide(400);
        $('#net-banking').show(400);
        $('#cod').hide(400);
        $('#credit-card').hide(400);

        $('.Net-Banking').css('border-left','5px solid #447cbf');
        $('.Net-Banking').css('border-top', '1px solid gray');
        $('.Net-Banking').css('border-bottom', '1px solid gray');
        $('.Net-Banking').css('padding', '14px 30px');

        $('.Credit-Card').css('border','none');
        $('.Credit-Card').css('padding', '15px 35px');

        $('.Debit-Card').css('border','none');
        $('.Debit-Card').css('padding', '15px 35px');

        $('.C-O-D').css('border','none');
        $('.C-O-D').css('padding', '15px 35px');

      });
      $('.C-O-D').click(function() {
        $('#debit-card').hide(400);
        $('#net-banking').hide(400);
        $('#cod').show(400);
        $('#credit-card').hide(400);

        $('.C-O-D').css('border-left','5px solid #447cbf');
        $('.C-O-D').css('border-top', '1px solid gray');
        $('.C-O-D').css('border-bottom', '1px solid gray');
        $('.C-O-D').css('padding', '14px 30px');

        $('.Credit-Card').css('border','none');
        $('.Credit-Card').css('padding', '15px 35px');

        $('.Net-Banking').css('border','none');
        $('.Net-Banking').css('padding', '15px 35px');

        $('.Debit-Card').css('border','none');
        $('.Debit-Card').css('padding', '15px 35px');
      });
    });
  </script>  
    


    <div class="col-md-4" style="padding-right: 135px;">
      <div id="order-summary">
        <h3 class="text-center">Order Summary</h3>
        <div id="product-body">
          <h4>Sayitloud Men's Round Neck Printed T-Shirt</h4>
          <p>Sayitloud Corporation</p>
          <table class="table" style="width: 60%;">
            <tbody>
              <tr>
                <td>Size:</td>
                <td>S</td>
              </tr>
              <tr>
                <td>Color:</td>
                <td><div class="foo colr"></div></td>
              </tr>
              <tr>
                <td>Quantity:</td>
                <td>5</td>
              </tr>
            </tbody>
          </table>
          <hr style="border-top: 1px solid #BDBDBD; margin-bottom: 10px;">
          <table class="table">
            <tbody>
              <tr>
                <td style="font-size: 20px;">Subtotal</td>
                <td style="color: #70c38d; font-size: 18px;"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;500</td>
              </tr>
            </tbody>
          </table>
        </div>
        <hr style="margin-bottom: 0; margin-top: 0; border-top: 1px solid #9E9E9E;">
        <div id="product-body">
          <h4>Sayitloud Men's Round Neck Printed T-Shirt</h4>
          <p>Sayitloud Corporation</p>
          <table class="table" style="width: 60%;">
            <tbody>
              <tr>
                <td>Size:</td>
                <td>S</td>
              </tr>
              <tr>
                <td>Color:</td>
                <td><div class="foo colr"></div></td>
              </tr>
              <tr>
                <td>Quantity:</td>
                <td>5</td>
              </tr>
            </tbody>
          </table>
          <hr style="border-top: 1px solid #BDBDBD; margin-bottom: 10px;">
          <table class="table">
            <tbody>
              <tr>
                <td style="font-size: 20px;">Subtotal</td>
                <td style="color: #70c38d; font-size: 18px;"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;500</td>
              </tr>
            </tbody>
          </table>
        </div>
        <hr style="margin-bottom: 0; margin-top: 0; border-top: 1px solid #9E9E9E;">
        <div class="text-left" id="total">
          <table class="table">
            <tr>
              <td style="font-size: 30px;">Order Total</td>
              <td style="color: #70c38d; font-size: 30px;"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;1000</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>

<!-- payment form ends -->

</div>  


<!-- footer begins -->

  <?php include 'footer.php'; ?>

<!-- footer ends -->



</body>
</html>