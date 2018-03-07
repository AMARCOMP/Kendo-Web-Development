<?php

    $dbc = mysqli_connect("localhost", "root", "");
    if(!$dbc) {
        die("Server connection failed: " . mysqli_error($dbc));
        exit();
    }

    $dbs = mysqli_select_db($dbc, "trial");
    if(!$dbs) {
        die("Database connection failed: " . mysqli_error($dbc));
        exit();
    }

    

?>

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

  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">

  <!-- sweetAlert links -->    
  <script src="sweetAlert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="sweetAlert/dist/sweetalert.css">    
    

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" href="images/Paperbag%20Orange.ico" />


  <style type="text/css">
  	
  	#main-page > img {
  		max-width: 100%;
  		width: 100%;
  		height: 447px;
  		margin-bottom: 80px;
  	}
  	#main-page {
  		padding-right: 0;
  		padding-left: 0;
  		margin-top: 94px;
      overflow: hidden;
  		background-color: mintcream;
  	}

    .forshirts > div > img {
      margin-top: 20px;
      margin-left: 20px; 
      width: 100%;
      height: 323px;
      box-shadow: 2px 2px 9px rgba(0, 0, 0, 0.74);
    }
    .forjeans > div > img {
      margin-top: 20px;
      margin-left: -20px; 
      width: 100%;
      height: 323px;
      box-shadow: 2px 2px 9px rgba(0, 0, 0, 0.74);
    }
    .fortrousers > div > img {
      margin-top: 20px;
      margin-left: 20px; 
      width: 100%;
      height: 323px;
      box-shadow: 2px 2px 9px rgba(0, 0, 0, 0.74);
    }
    #shirts,
    #jeans,
    #trousers {
      display: -webkit-inline-box;
    }

  	#product {
		background-color: white;
		border-radius: 1%;
		max-width: 270px;
    width: 270px;
		margin: 20px 15px; 
    box-shadow: 2px 2px 9px rgba(0, 0, 0, 0.74);
	}
	#product #image {
		background-color: #447cbf;
		height: 200px;
		border-top-left-radius: 1%;
		border-top-right-radius: 1%;
	}
      #product #image img {
          height: 100%;
          width: 100%;
      }
	#product #image-detail {
		padding: 3% 5% 2% 5%;
	}
	#product #image-detail h4 {
		color: #447cbf;
		font-size: 16px;
	}
    #product #image-detail > div {
      display: -webkit-inline-box;
      margin: 10px auto;
    }
    #product #image-detail > div > span {
      margin-right: 80px;
    }
	#product #image-detail > p > input {
		width: 5%;
	    height: 13px;
	   /* background-color: black; */
	    border: 0;
	}
	#product #image-detail > p > #size {
		margin-right: 32%;
		font-size: 13px;
	}
	#product #image-detail > #price-detail #manuf {
		color: #f99c1c;
	}
	#product #image-detail > #price-detail #price {
		margin-left: 46%;
		color: #447cbf;
	}


	#product-name {
		max-width: 270px;
        width: 270px;
    padding: 1%;
	}
  #product-images #product-name > div {
    box-shadow: 2px 2px 6px darkgrey;
  }
  #featured-products #product-images {
    display: -webkit-inline-box;
  }
	#product-name #image {
		background-color: #447cbf;
		height: 200px;
		border-top-left-radius: 1%;
		border-top-right-radius: 1%;
	}
      #product-name #image img {
          width: 100%;
          height: 100%;
      }  
	#product-name #image-detail {
		padding: 3% 5% 2% 5%;
	}
	#product-name #image-detail h4 {
		color: #447cbf;
		font-size: 16px;
    text-align: -webkit-left;
	}
  #product-name #image-detail > div {
    display: -webkit-inline-box;
    margin: 10px auto;
  }
  #product-name #image-detail > div > span {
    margin-right: 44%;
  }
	#product-name #image-detail > #price-detail #price {
		margin-left: 36%;
		color: #447cbf;
	}
  #product-name #image-detail > #price-detail #manuf {
    color: #f99c1c;
  }
	#featured-products {
		margin: 7% auto 5% auto;
	}
  #featured-products #product-images {
    
  }
  </style>

</head>
<body>

<!-- header begins -->

  <?php include 'header.php'; ?>
  
<!-- header ends -->

    
    
    <?php if(!empty($_GET['input_error'])):?>
    	<script>
            setTimeout(function() {
                swal({
                    title: "<span color='red'>Invalid input!</span>",
                    text: "Please enter valid username and password",
                    html: true,
                    confirmButtonText: "Ok"
                }, function() {
                    window.location = "index.php";
                }, 1000);
            });
    	</script>	
     <?php endif;?>
    
    
    
    
    
    
              
     <?php if(!empty($_GET['verified'])):?>
    	<script>
            setTimeout(function() {
                swal({
                    title: "Congratulaions!",
                    text: "Email has been verified, you can login now",
                    type: "success",
                    confirmButtonText: "Ok"
                }, function() {
                    window.location = "index.php";
                }, 1000);
            });
    	</script>	
     <?php endif;?>
    
    
    
    
<!-- sweetAlert -->
               
     <?php if(!empty($_GET['submitted'])):?>
    	<script>
            setTimeout(function() {
                swal({
                    title: "Congratulaions!",
                    text: "Signed up successfully, now verify your mail",
                    type: "success",
                    confirmButtonText: "Ok"
                }, function() {
                    window.location = "index.php";
                }, 1000);
            });
    	</script>	
     <?php endif;?>     	
    
<!-- sweetAlert -->    
    

<div class="container-fluid" id="main-page">

<!-- front image begins -->
  <img src="images/Kendo.jpg"> 
<!-- front image ends -->


<!-- row no. 1 for shirts begins -->

  <div class="row forshirts" style="margin-bottom: 80px;">
    <div class="col-md-4">
      <img src="images/KendoEdit.jpg">	
    </div>
    <div class="col-md-8" style="padding-right: 57px;">
      <div id="shirts">

    <?php
          
      $query = "SELECT * FROM product";
      $raw_results = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($bdc));     
         
      while($rows = mysqli_fetch_array($raw_results))    
      {
    ?>  
      
          <div class="item" id="product">
	      	  <div id="image">
                 <img src="product_registration/<?php echo $rows['Main_image'];?>icon.dev" alt="product images"> 
	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4><?php echo $rows['Name'];?></h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>
      	</div>
      
    <?php  
      }
    ?>      
          
      	<!--

      	<div class="item" id="product">		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>

        -->

      	
      </div>

    </div>
  </div>
<!-- row no. 1 for shirts ends -->

<!-- row no. 2 for jeans begins -->
  <div class="row forjeans" style="margin-bottom: 80px;">
    
    <div class="col-md-8" style="padding-left: 69px;">
      <div id="jeans">

        <?php

          $query = "SELECT * FROM product";
          $raw_results = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($bdc));     

          while($rows = mysqli_fetch_array($raw_results))    
          {

        ?>  

              <div class="item" id="product">
                  <div id="image">
                     <img src="product_registration/<?php echo $rows['Main_image'];?>icon.dev" alt="product images"> 
                  </div>
                  <div id="image-detail">
                    <h4><?php echo $rows['Name'];?></h4>
                    <div>
                    <span id="size">S,M,L,XL,XXL</span>
                    <div class="foo"></div>
                    <div class="foo"></div>
                    <div class="foo"></div>
                    <div class="foo"></div>
                  </div>
                    <p id="price-detail">
                      <span id="manuf">Manufacturer</span>
                      <span id="price">Price</span>	
                    </p>
                  </div>
            </div>

        <?php  
          }
        ?>     


      	

      	
      </div>

    </div>

    <div class="col-md-4">
      <img src="images/KendoEdit.jpg">	
    </div>
  </div>
 <!-- row no. 2 for jeans ends --> 


 <!-- row no. 3 for trousers begins -->
  <div class="row fortrousers" style="margin-bottom: 80px;">
    <div class="col-md-4">
      <img src="images/KendoEdit.jpg">	
    </div>
    <div class="col-md-8" style="padding-right: 57px;">
      <div id="trousers">

      <?php
          
          $query = "SELECT * FROM product";
          $raw_results = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($bdc));     

          while($rows = mysqli_fetch_array($raw_results))    
          {
      ?>  
      
          <div class="item" id="product">
	      	  <div id="image">
                 <img src="product_registration/<?php echo $rows['Main_image'];?>icon.dev" alt="product images"> 
	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4><?php echo $rows['Name'];?></h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>
      	</div>
      
    <?php  
      }
    ?>     

    
      </div>
    </div>
  </div>


<!-- featured products begin -->
  <div class="container-fluid text-center" id="featured-products">
  	<h3 style="margin-bottom: 5%;"><strong style="font-size: 35px;">Featured Products</strong></h3>
  	<div id="product-images">
        
  		<div id="product-name">
            
         <?php
        
            $query = "SELECT * FROM product WHERE ID=21";
            $raw_results = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($bdc));
            $results = mysqli_fetch_array($raw_results);
        
         ?>
            
            
          <div>
  		      <div id="image">
                <img src="product_registration/<?php echo $results['Main_image'];?>icon.dev" alt="product images">   
	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4><?php echo $results['Name'];?></h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>
          </div>  	
  		</div>
  		<div id="product-name">
            
          <?php
            
            $query = "SELECT * FROM product WHERE ID=21";
            $raw_results = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($dbc));
            $results = mysqli_fetch_array($raw_results);
            
          ?>    
            
          <div>
  		      <div id="image">
                <img src="product_registration/<?php echo $results['Main_image'];?>icon.dev" alt="product images">  
	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4><?php echo $results['Name'];?></h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
          </div>  
  		</div>
  		<div id="product-name">
            
            <?php
            
                $query = "SELECT * FROM product WHERE ID=22";
                $raw_results = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($dbc));
                $results = mysqli_fetch_array($raw_results);

            ?>
            
              <div>
  			    <div id="image">
                  <img src="product_registration/<?php echo $results['Main_image'];?>icon.dev" alt="product images">     
	      	    </div>
	      	  <div id="image-detail">
	      	  	<h4><?php echo $results['Name'];?></h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>
          </div>  	
  		</div>
  		<div id="product-name">
            
            <?php
            
                $query = "SELECT * FROM product WHERE ID=23";
                $raw_results = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($dbc));
                $results = mysqli_fetch_array($raw_results);

            ?>
            
          <div>
  			    <div id="image">
                    <img src="product_registration/<?php echo $results['Main_image'];?>icon.dev" alt="product images">
	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4><?php echo $results['Name'];?></h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
          </div>  
  		</div>
  	</div>
  </div>
<!-- featured products end -->

</div>


<!-- footer begins -->

  <?php include 'footer.php'; ?>

<!-- footer ends -->
	


<script type="text/javascript">
  $(".btn-default").click(function() {
    $(this).toggleClass("down");
  })
</script>



</body>
</html>