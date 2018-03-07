 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Product_description</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/mystyle.css">
    <link rel ="stylesheet" type ="text/css" href ="stylesheet/SwatchStyle.css">
    <link rel="shortcut icon" href="images/Paperbag%20Orange.ico" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!-- header begins -->

  <?php include 'header.php'; ?>
  
<!-- header ends -->

	<div class="container-fluid prdt-info">
  		

    			<div class="row" style="margin-top: 6%;">
    			<div class="col-md-6 col-lg-6 left-grid" style="width: 47%">
    			<div style="height:auto;width:89%;background-color: white;margin-left: 11%;padding-right: 9%;
    			position:static;">
    				<div class="prdt-image">
    					<!--Image Slider-->
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <!--<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/pic1.png" alt="product_view" style="width:100%;height: 100%;">
        
      </div>

      <div class="item">
        <img src="img/pic1.png" alt="product_view" style="width:100%;height: 100%;">
        
      </div>
    
      <div class="item">
        <img src="img/pic1.png" alt="product_view" style="width:100%;height: 100%;">
  
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>

      <span class="sr-only">Next</span>
    </a>
  </div>
						<!--End Image Slider-->
						<div class ="image-view">
            <div style="margin-left:33%;margin-top:2%;">
					<div class="portrait1">
    <img src="img/pic1.png">
</div>
<div class="portrait2">
    <img src="img/pic1.png">
</div>
<div class="portrait3">
    <img src="img/pic1.png">
</div>
</div>
						</div>
						</div> </div>
						
						</div>
						<!--Side Product Description Panel-->

					<div class="col-md-6 col-lg-6" style="width: 53%;padding-top: 2%">

						<div class="panel panel-default" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;">
    <div class="text-left panel-heading">Product Title</div>
    <div class="text-left panel-body">
     <h3 style="font-size:24px;float:left;color:green"><i style="font-size:24px" class="fa">&#xf156;</i> 559</h3>
     <div style="margin-top:4%;margin-left:12%"><font style="color:gray;" >
     <del>   433.33</del>  &nbsp 10% off
     </font> </div>
     <a href="#"><h5> Manufacturer name </h5></a>
     <table class="a">
     <tr>
     <td class="b">    Size &nbsp &nbsp :</td>
 
     <td class="b">
       <!-- Size Swatches-->
            <div class="swatch clearfix">
  
    
    <div data-value="Ivory" class="swatch-element color ivory">
     
      <input id="ivory" name="properties[Color]" value="M" checked="checked" type="radio">
      <label for="ivory" style="background-color: white;color:gray;">M</label>
    </div>
  
    
    <div data-value="Hot Pink" class="swatch-element color hot-pink">
      <input id="hot-pink" name="properties[size]" value="L" type="radio">
      <label for="hot-pink" style="background-color: white;color:gray;padding-bottom: 2px;">L</label>
    </div>
  
    
    <div data-value="Navy Blue" class="swatch-element color navy-blue">
      
      <input id="navy-blue" name="properties[size]" value="XL" type="radio">
      <label for="navy-blue" style="background-color: white;color: gray;">XL</label>
    </div>
  
    
    <div data-value="Olive" class="swatch-element color olive">
      
      <input id="olive" name="properties[size]" value="XXL" type="radio">
      <label for="olive" style="background-color: white;color:gray;">XXL</label>
    </div>
  
</div>
     </td></tr>
     <tr><td class="b">Color &nbsp &nbsp :</td><td class="b">
     <!-- Color Swatches-->
            <div class="swatch clearfix">
  
    
    <div data-value="Ivory" class="swatch-element color ivory">
     <div class="tooltip">Black</div>
      <input id="ivory" name="properties[Color]" value="Ivory" checked="checked" type="radio">
      <label for="ivory" style="background-color: black;"></label>
    </div>
  
    
    <div data-value="Hot Pink" class="swatch-element color hot-pink">
      <div class="tooltip">Hot Pink</div>
      <input id="hot-pink" name="properties[Color]" value="Hot Pink" type="radio">
      <label for="hot-pink" style="background-color: pink;"></label>
    </div>
  
    
    <div data-value="Navy Blue" class="swatch-element color navy-blue">
      <div class="tooltip">Navy Blue</div>
      <input id="navy-blue" name="properties[Color]" value="Navy Blue" type="radio">
      <label for="navy-blue" style="background-color: blue;"></label>
    </div>
  
    
    <div data-value="Olive" class="swatch-element color olive">
      <div class="tooltip">Olive</div>
      <input id="olive" name="properties[Color]" value="Olive" type="radio">
      <label for="olive" style="background-color: olive;"></label>
    </div>
  
</div>
            <!--End Swatch-->
            </td></tr>
     <tr><td class="b">Quantity &nbsp &nbsp :</td><td class="b"><input type="number" name="number-of-quantity" value="1" style="width:17%;"></tr>
     <tr><td class="b">Delivery &nbsp &nbsp :</td><td class="b">
        <div class="search" style="height:45%;">
<input type="text" class=" input-sm" maxlength="64" placeholder="Enter Pincode" />
 <button type="submit" class="btn btn-primary btn-sm" style="background-color: #2A343F;color: white;">Check</button>
</div>
	</td></tr>
     </table>
    
  </div>	
					</div>
					<div class="cart-button">
							<!--<button type="button" class="cart btn-lg" data-toggle="modal" data-target="#myModel">
          <span class="glyphicon glyphicon-shopping-cart"></span> &nbsp &nbsp Add To Cart
        </button>-->
        <!-- Model Window-->
         <button type="button" class="btn-lg cart" data-toggle="modal" data-target="#myModal">
          <span class="glyphicon glyphicon-shopping-cart"></span> &nbsp &nbsp Add To Cart
         </button>
         <!-- Modal -->
  <div class="modal fade modal-lg" id="myModal" role="dialog">
    <div class="modal-dialog" style="width:54%">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div><h4 class="modal-title"><b>Added To cart</b></h4></div>
          
        </div>
        <div class="modal-body" style="margin-bottom:2%">
          		<div style="height:250px;width:250px; display: -webkit-inline-box;">
            			<img src="img/pic1.png" height="250px" width="250px">
                  <div class="product-detail" style="margin-left:2%;width:-moz-max-content;">
                      <h4 style:"margin-top:0%;margin-left:2%;"> Name Of The Product</h4>
                      <h4 class="price" style="font-size:24px;color:green;"><i style="font-size:24px" class="fa">&#xf156;</i> 559</h4>
                      <a href="#"><h5>manufacturer Detail</h5></a>
                      <ul class="specs-list list-inline" style="list-style: none;margin-top: 9%;width:146%;">
                      <li> Size:</li><li id="size-specs" style="margin-left: 12%">S</li>
                      <li style="margin-left: 18%;"> Quantity:</li> <li style="width:58px;"><input type="number" name="number-of-quantity" value="1" style="width:100%;"></li>
                      </ul>  
                      <ul style="list-style: none;" class="list-inline"><li>Color :</li><li><label class="color-label square" style="background-color: black;height:15px;width:15px;margin-bottom: -1px;margin-left:64%"></label></li></ul>
                      <div>
                      <ul class="list-inline" style="list-style: none;">
                      <li><a href="cart_web.php"><button class="button" style="background-color: #2A343F;border: none;color: white;padding: 10px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;"><span class="glyphicon glyphicon-shopping-cart"></span> &nbsp &nbsp View Cart</button></a></li>
                      <li><a href="delivery_web.php"><button class="button" style="background-color: #447CBF;border: none;color: white;padding: 10px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;"> <span class="glyphicon glyphicon-credit-card"></span> &nbsp &nbsp Checkout</button></li>
                      </div>
                  </div>
				      </div>

              
        </div>
      </div>
      
    </div>
  </div>


        <!--End of Model Window-->

						<a href="delivery_web.php"><button type="button" class="btn-lg buy">
          <span class="glyphicon glyphicon-credit-card"></span> Buy Now
        </button></a>
					</div>
					<!--End Side Product Description Panel-->
					



						<!--Aside Product information View-->

						<!--End Product Information View-->
    				</div>

    </div>
    <div class="row" style="margin-top: 5%;margin-left: 0%;margin-right: 0%;">
    <div class="col-md-5" style="margin-left: 1%">
    <div class="panel panel-default" style="padding:0%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div>
  <div class="panel-body">

  <h4>Description</h4></div>
  <div style="padding:3.01%">
  <p id="product-description-value">Cotton is a soft, fluffy staple fiber that grows in a boll, or protective case, around the seeds of the cotton plants of the genus Gossypium in the mallow family Malvaceae. The fiber is almost pure cellulose. Under natural conditions, the cotton bolls will tend to increase the dispersal of the seeds.[clarification needed]

</p></div>
</div>
</div>
    </div>
    <div class="col-md-7" style="margin-left:0%;width:57.333%">
    <div class="panel panel-default" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
  <div class="panel-body">
  <h4>Specifications</h4>
  <div>
<table style="float:left;">

<tr>
	<th> Sales Package</th>
	<td><p id="sales-package-value"></p> </td>
	
</tr>
<tr>
	<th> Style Code</th>
	<td><p id="style-code-value"></p> </td>
	
</tr>
<tr>
	<th> Neck Type</th>
	<td> <p id="neck-type-value"></p></td>
	
</tr>
<tr>
	<th> Ideal For</th>
	<td><p id="ideal-for-value"></p> </td>
	
</tr>
<tr>
	<th> Size</th>
	<td><p id="size-value"></p> </td>
	
</tr>
<tr>
	<th> Pattern</th>
	<td><p id="pattern-value"></p> </td>
	
</tr>
<tr>
	<th> Sleeve </th>
	<td> <p id="sleeve-value"></p></td>
	
</tr>

</table>

</div>
<div>
<table class="specification">

<tr>
	<th> Fabric</th>
	<td><p id="fabric-value"></p> </td>
	
</tr>
<tr>
	<th> Sleeve Type</th>
	<td> <p id="sleeve-type-value"></p></td>
	
</tr>
<tr>
	<th> Reversible</th>
	<td> <p id="reversible-value"></p></td>
	
</tr>
<tr>
	<th> Fabric care</th>
	<td><p id="fabric-care-value"></p> </td>
  </tr>
</table>
</div>




  </div>
</div>
    </div>
    </div>

    </div>
        
<!-- footer begins -->

  <?php include 'footer.php'; ?>

<!-- footer ends -->

   
   
</body>
</html> 