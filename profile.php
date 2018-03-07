<?php

    $dbc = mysqli_connect("localhost", "root", "");
    if(!$dbc) {
        die("Server connection failed : " . mysqli_error($dbc));
        exit();
    }
    
    $dbs = mysqli_select_db($dbc, "trial");
    if(!$dbs) {
        die("Database connection failed : " . mysqli_error($dbc));
        exit();
    }
    
    session_start();
    $username = $_SESSION['login_user'];
    //$name = $_SESSION['login_name'];

    //$query = "SELECT * FROM subscribers WHERE username='$username'";
    //$raw_results = mysqli_query($dbc, $query) or  trigger_error("Query MySQL Error: " . mysqli_error($dbc));     
    //$results = mysqli_fetch_array($raw_results);
    //$name = $results['Name'];
    
?>



<!DOCTYPE html>
<html>
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
          width: 100%;
          height: 100%;
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

  

  <nav class="navbar navbar-toggleable-md navbar-light navbar-fixed-top bg-faded">
    <div class="container-fluid" id="top-head">
    <div class="top-bar">
      <div class="logo-image">
        <a href="#">
         <!-- <img src="images/KendoEdit1.jpg"> -->
         <img src="images/KendoEdit1.jpg"
            data-src-600px = "images/KendoEdit1-600px.jpg"
            data-src-800px = "images/KendoEdit1-800px.jpg"
            alt="">
        </a>  
      </div>
    <div class="left-top">  
      <div class="search-bar">
        <form class="form-inline my-2 my-lg-0" method="GET" action="search_results.php">
          <div class="input-group">
           <input type="text" name="search" class="form-control mr-sm-2" placeholder="Search for anything" aria-describedby="search-addon" required>
            <button type="submit"><span class="input-group-addon" id="search-addon"><i class="fa fa-search" aria-hidden="true" style="color: #a99191;"></i></span></button>
          </div> 
        </form>
      </div>
      <div class="cart-btn btn-group" data-toggle="buttons">
        <label class="btn btn-default active">
          <input type="checkbox" checked autocomplete="off" name=""><i class="fa fa-shopping-cart"></i>&nbsp;Cart
        </label>
       <!-- <button type="submit" class="btn btn-default"><i class="fa fa-shopping-cart"></i>&nbsp;Cart</button> -->
        <label class="btn btn-default">
          <input type="checkbox" autocomplete="off" name="noOfItems">0
        </label>
      </div>
    </div>  
    </div>  

    <!--
      <div class="row">
        <div class="col-xs-12">
          <div class="col-md-5">
            <div class="logo-image">
              <img src="images/KendoEdit1.jpg"> 
            </div>
          </div>
          <div class="col-md-7">
            <div class="row" style="margin-top: 5%;">
              <div class="col-md-3">
                <div id="cart-btn">
                  <button class="btn btn-default" ><span class="glyphicon glyphicon-shopping-cart"></span> Cart &nbsp;<span class="badge" style="border-radius: 2px;">8</span></button>
                </div>
              </div>
              <div class="col-md-9">
                <form class="form-inline" method="get" action="search.php">
                  <div id="search-bar" class="input-group" style="width: 90%;">
                    <input type="text" class="form-control" size="60" name="search" placeholder="Search for anything" aria-describedby="search-btn" required>
                    <span class="input-group-addon glyphicon glyphicon-search" id="search-btn"></span> 
                  </div>  
                </form> 
              </div>
            </div>    
          </div>
        </div>  
      </div>     
      -->

      <div class="navbar-header">
        <!-- <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#nav-menu" aria-controls="nav-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
      </div>
      <div class="collapse navbar-collapse" id="nav-menu">
        <ul class="nav navbar-nav navbar-right"> 
            
          <li class="nav-item">
            <a href="profile.php" class="btn btn-default">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="btn btn-default">Contact</a>
          </li> 
          <li class="nav-item">
            <a href="#" class="btn btn-default">About Us</a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="trigger btn btn-default" id="loginbtn" data-placement="bottom">Logout</a>
          </li>
          <li class="nav-item" style="margin-right: 0;">
            <a href="#" class="trigger btn btn-default" id="signupbtn" data-placement="bottom"><?php echo $username ;?></a>  
          </li>

        </ul>
      </div>
     
    </div>
  </nav>
  

  
<!-- header ends -->    
    
    

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
      $raw_results = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($dbc));     
          
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

</body>
</html>