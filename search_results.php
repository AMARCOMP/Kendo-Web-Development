<?php

    $dbc = mysqli_connect("localhost", "root", "");
    if(!$dbc) {
        die("Server connection failed: " . mysqli_error());
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


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" href="images/Paperbag%20Orange.ico" />

  <style type="text/css">
    #main-page {
      padding-top: 150px;
    }
      #product-detail #image img {
          width: 100%;
          height: 100%;
      }  
  </style>

</head>
<body>


<!-- header begins -->

  <?php include 'header.php'; ?>
  
<!-- header ends -->



<!-- Main content begins -->

  <div class="container-fluid" id="main-page" style="background-color: #cce4e5;">
    <div id="main-body">
      <div class="row">


      <!-- left column of the main body begins -->

        <div class="col-md-3" style="margin-bottom: 2%;">
          <div id="left-body">
            <div id="header">
              <p>Look for a manufacturer</p>
              <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="manufacturerlist" aria-describedby="mnftext">
                <option selected></option>
                <option value="1">Addidas</option>
                <option value="2">Nike</option>
                <option value="3">Puma</option>
                <option value="4">Reebok</option>
              </select>
              <p class="text-right"><small id="mnftext" class="form-text text-muted">View your desired manufacturer</small></p>
            </div>
            <div id="main-cont">
              <h4><strong>Filter products</strong></h4>
              <div id="classification">

                  <p><a href="#people" data-toggle="collapse" aria-expanded="false" aria-controls="people">Category&nbsp;<span class="caret"></span></a></p>
                  <div class="collapse" id="people">
                    <p><a href="#clothtype" data-toggle="collapse" aria-expanded="false" aria-controls="clothtype"><strong>Men</strong>&nbsp;<span class="caret"></span></a></p>
                    <div class="collapse" id="clothtype">
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">All</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">T-Shirts</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Trousers</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Shirts</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Jeans</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Lowers</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Traditional</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Others</label>
                    </div>
                    <p><a href="#clothtype1" data-toggle="collapse" aria-expanded="false" aria-controls="clothtype1"><strong>Women</strong>&nbsp;<span class="caret"></span></a></p>
                    <div class="collapse" id="clothtype1">
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">All</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">T-Shirts</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Trousers</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Shirts</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Jeans</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Lowers</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Traditional</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Others</label>
                    </div>
                    <p><a href="#clothtype2" data-toggle="collapse" aria-expanded="false" aria-controls="clothtype2"><strong>Kids</strong>&nbsp;<span class="caret"></span></a></p>
                    <div class="collapse" id="clothtype2">
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">All</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">T-Shirts</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Trousers</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Shirts</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Jeans</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Lowers</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Traditional</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Others</label>
                    </div>
                  </div>
                  

              </div> 
              <hr>
              <div id="price-select"> 

              <p><a href="#price-range" data-toggle="collapse" aria-expanded="false" aria-controls="price-range">Price&nbsp;<span class="caret"></span></a></p>  
              <div class="collapse" id="price-range">
                <p>Range<i class="fa">&#xf156</i><input type="number" name="start"/> <span style="margin-left: 2%;">to<span> <input type="number" name="end"></p>
              </div>
              </div>
              <hr>
              <div id="brand-select">
                <p><a href="#brand-name" data-toggle="collapse" aria-expanded="false" aria-controls="brand-name">Brand&nbsp;<span class="caret"></span></a></p>  
                <div class="collapse" id="brand-name">
                  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="manufacturerlist">
                    <option selected>Select your brand...</option>
                    <option value="1">Addidas</option>
                    <option value="2">Nike</option>
                    <option value="3">Puma</option>
                    <option value="4">Reebok</option>
                  </select>
                </div>
              </div>
              <hr>
              <div id="size-select">
                <p><a href="#size-range" data-toggle="collapse" aria-expanded="false" aria-controls="size-range">Size&nbsp;<span class="caret"></span></a></p>
                <div class="collapse" id="size-range">
                  <label class="checkbox"><input type="checkbox" name="size" value="">S</label>
                  <label class="checkbox"><input type="checkbox" name="size" value="">M</label>
                  <label class="checkbox"><input type="checkbox" name="size" value="">L</label>
                  <label class="checkbox"><input type="checkbox" name="size" value="">XL</label>
                  <label class="checkbox"><input type="checkbox" name="size" value="">XXL</label>
                </div>
              </div>
              
            </div>
          </div>
        </div>

        <!-- left column of the main body ends -->



        <!-- right column of the main body begins -->

        <div class="col-md-9">
          <div id="products">

        <?php
              
            $query = "SELECT * FROM product";
            $raw_results = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($bdc));  
            
            while($rows = mysqli_fetch_array($raw_results)) 
            {
        ?>    
            
              <div id="product-detail">
                  <div id="image">
                     <img src="product_registration/<?php echo $rows['Main_image'];?>icon.dev"; > 
                  </div>
                  <div id="image-detail">
                    <h4><?php echo $rows["Name"]; ?></h4>
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
              
              
              
                <div id="product-detail">
                  <div id="image">
                      <img src="images/KendoEdit.jpg" alt="product image" >
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
            
            <a href="product_description.php">
                <div id="product-detail">
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
            </a>
            <a href="product_description.php">
                <div id="product-detail">
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
            </a>
            <a href="product_description.php">
                <div id="product-detail">
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
            </a>    
                <div id="product-detail">
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
                <div id="product-detail">
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
                <div id="product-detail">
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
                <div id="product-detail">
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
                <div id="product-detail">
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
                <div id="product-detail">
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
                <div id="product-detail">
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
                <div id="product-detail">
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

                <div id="product-detail">
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
            

          </div>
        </div>

        <!--  right part of the main body ends -->


      </div>	
    </div>
  </div>

<!-- main body ends -->



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