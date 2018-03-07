<?php

  include ("dbconnect.php");
  
  function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
  }
  
  if($_SERVER["REQUEST_METHOD"] == "GET") {
	  $search = $_GET["search"];
  }
  
  $sql = "SELECT Name FROM product WHERE ('Name' LIKE '%".$search."%')";
  $raw_results = mysqli_query($dbc, $sql) or die(mysqli_error());
  
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/main.css">

  <!-- css files -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.css">


</head>
<body style="background-color: white;">
  <!--  
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="#">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#services">SERVICES</a></li>
          <li><a href="#portfolio">PORTFOLIO</a></li>
          <li><a href="#pricing">PRICING</a></li>
          <li><a href="#contact">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>
  -->
<div class="header">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="#">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown" id="">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sourcing Solutions
          <span class="glyphicon glyphicon-chevron-down"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Merchandise</a></li>
          <li><a href="#">Extras</a></li>
          <li><a href="#">Media</a></li> 
        </ul>
      </li> 
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services & Membership
          <span class="glyphicon glyphicon-chevron-down"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Merchandise</a></li>
          <li><a href="#">Extras</a></li>
          <li><a href="#">Media</a></li> 
        </ul>
      </li> 
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Help & Community
          <span class="glyphicon glyphicon-chevron-down"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Merchandise</a></li>
          <li><a href="#">Extras</a></li>
          <li><a href="#">Media</a></li> 
        </ul>
      </li> 
      </ul>
    <!--<div class="search-bar">-->
             <div class="dropdown">
  <button class="dropbtn1" style="margin-left: -27%; margin-bottom: -15%; margin-top: 25%;"><span class="glyphicon glyphicon-list"></span>&nbsp;Categories</button>
 <!-- <button class="dropbtn1" style="background-color: #334757; margin-top: 20px;"><span style="color: #9E9E9E; font-size: 20px;">Categories</span></button>-->
  <div class="dropdown-content" id="dcontent2"><div class="dropdown2">
    <button class="dropb2"><span style="color: black;">Machinery, Industrial Parts & Tools</span><span class="glyphicon glyphicon-chevron-right"></span></button><div class="dropdown-content2" style="left: 100%;top: 00%;">
          <a tabindex="-1" href="#">2nd level dropdown</a>
          <a tabindex="-1" href="#">2nd level dropdown</a></div></div>
          <div class="dropdown2">
    <button class="dropb2"><span style="color: black;">Health & Beauty</span><span class="glyphicon glyphicon-chevron-right"></span></button><div class="dropdown-content2" style="left: 100%;top: 00%;">
          <a tabindex="-1" href="#">2nd level dropdown</a>
          <a tabindex="-1" href="#">2nd level dropdown</a></div></div>
          <div class="dropdown2">
    <button class="dropb2"><span style="color: black;">Gifts, Sports & Toys</span><span class="glyphicon glyphicon-chevron-right"></span></button><div class="dropdown-content2" style="left: 100%;top: 00%;">
          <a tabindex="-1" href="#">2nd level dropdown</a>
          <a tabindex="-1" href="#">2nd level dropdown</a></div></div>
          <div class="dropdown2">
    <button class="dropb2"><span style="color: black;">Apparels, Textiles & Accessories</span><span class="glyphicon glyphicon-chevron-right"></span></button><div class="dropdown-content2" style="left: 100%;top: 00%;">
          <a tabindex="-1" href="#">2nd level dropdown</a>
          <a tabindex="-1" href="#">2nd level dropdown</a></div></div>
          <div class="dropdown2">
    <button class="dropb2"><span style="color: black;">Packaging, Advertising & Office</span><span class="glyphicon glyphicon-chevron-right"></span></button><div class="dropdown-content2" style="left: 100%;top: 00%;">
          <a tabindex="-1" href="#">2nd level dropdown</a>
          <a tabindex="-1" href="#">2nd level dropdown</a></div></div>
   <div class="dropdown2">
    <button class="dropb2"><span style="color: black;">Mettalurgy, Chemicals, Rubber</span><span class="glyphicon glyphicon-chevron-right"></span></button><div class="dropdown-content2" style="left: 100%;top: 00%;">
          <a tabindex="-1" href="#">2nd level dropdown</a>
          <a tabindex="-1" href="#">2nd level dropdown</a></div></div>
          <div class="dropdown2">
    <button class="dropb2"><span style="color: black;">Optimum Quality Electronics</span><span class="glyphicon glyphicon-chevron-right"></span></button><div class="dropdown-content2" style="left: 100%;top: 00%;">
          <a tabindex="-1" href="#">2nd level dropdown</a>
          <a tabindex="-1" href="#">2nd level dropdown</a></div></div>
          <div class="dropdown2">
    <button class="dropb2"><span style="color: black;">Home, Lights & Construction</span><span class="glyphicon glyphicon-chevron-right"></span></button><div class="dropdown-content2" style="left: 100%;top: 00%;">
          <a tabindex="-1" href="#">2nd level dropdown</a>
          <a tabindex="-1" href="#">2nd level dropdown</a></div></div>
    
  </div>
</div>
      <!--<div class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-list"></span>Categories
          <span class="glyphicon glyphicon-chevron-down"></span>
        </a>
      
      </div>
      -->    
      <form class="form-inline" id="forminline1" method="get" action="search_results.php">
          <div class="input-group" style="margin-top: -28px; padding-bottom: 10px; margin-left: 14%;">
            <input type="text" class="form-control" id="form1" size="70" placeholder="Search...">
            <div class="input-group-btn" id="inputbtn1">
              <button type="submit" class="btn btn-default" id="searchbtn1"><span class="glyphicon glyphicon-search"></span>&nbsp;Search&nbsp;&nbsp;</button>
            </div>
          </div>
      </form>

    </div>
  </div>
  </nav>
</div>

  	<!-- slider begins -->
    <!--
    <div id="owl-demo" class="owl-carousel owl-theme" style="height: auto;">
 
        <div class="item"><img style="width: 100%; height: 500px;" src="images/make_it_your_own-2560x1440.jpg" alt="The Last of us"></div>
        <div class="item"><img style="width: 100%; height: 500px;" src="images/meizu_headphones_keyboard_113840_3840x2400.jpg" alt="GTA V"></div>
        <div class="item"><img style="width: 100%; height: 500px;" src="images/movietime-7680x4320.jpg" alt="Mirror Edge"></div>

    </div>
    -->
    <!-- slider ends -->
<!-- slider begins -->       

<!-- slider ends -->    
 

<div class="row2" style="padding-top: 141px;">
  <div class="colm-21">
      <div class="category">
          <h4 class="chead"><span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;CATEGORIES</h4>
          <div class="dropdown" id="drpdwn3">  
            <button class="dropbtn"><a href="#">Sports / Gifts / Toys</a></button>
            <!--<div class="dropdown-content">
              <li><a href="#">Tools</a></li>
              <li><a href="#">Machinery</a></li>
              <li><a href="#">Measurement & Analysis Instruments</a></li>
              <li><a href="#">Mechanical Parts & Fabrication Services</a></li>
            </div>
            -->
            <button class="dropbtn"><a href="#">Mechanical Parts / Tools / Hardware</a></button>
            <button class="dropbtn"><a href="#">Food & Beverage / Agriculture</a></button>
            <button class="dropbtn"><a href="#">Beauty & Personal Care</a></button>
            <button class="dropbtn"><a href="#">Packaging & Printing</a></button><br>
            <button class="dropbtn"><a href="#">Electrical Equipment</a></button>
            <button class="dropbtn"><a href="#">Bags / Shoes & Accessories</a></button>
            <button class="dropbtn"><a href="#">Auto Transportation</a></button>
          </div>   
      </div>
  </div>
  <div class="colm-22">
      <div class="row">
        <div class="col-sm-4 col-xs-12">
            <div class="panel text-center">
                <div class="panel-body">
                  <!--<img src="images/2-8Years-Big-Kids-Girls-Dress-Little.jpg_220x220.jpg">-->
                 
                </div>
                <div class="details">
                		
                  <p class="prod_names"><a href="#">
                    <?php
                      if(mysqli_num_rows($raw_results) > 0) {
                        while($results = mysqli_fetch_array($raw_results)) {
                          echo $results['Name'];
						  echo "frocks for girls";
                        }
                      }
                    ?>
                  </a></p>
                  <p class="prod_discount"><a href="#">Min. 50% off</a></p>
                  <p class="prod_categ"><a href="#">Kid's Wear</a></p>
                </div>
            </div>      
        </div>     
        <div class="col-sm-4 col-xs-12">
          <div class="panel text-center">
                <div class="panel-body">
                  <img src="images/2-8Years-Big-Kids-Girls-Dress-Little.jpg_220x220.jpg">
                </div>
                <div class="details">
                  <p class="prod_names"><a href="#">Frocks for 3-4 Years Girls</a></p>
                  <p class="prod_discount"><a href="#">Min. 50% off</a></p>
                  <p class="prod_categ"><a href="#">Kid's Wear</a></p>
                  
                </div>
            </div>      
        </div>       
        <div class="col-sm-4 col-xs-12">
          <div class="panel text-center">
                <div class="panel-body">
                  <img src="images/2-8Years-Big-Kids-Girls-Dress-Little.jpg_220x220.jpg">
                </div>
                <div class="details">
                  <p class="prod_names"><a href="#">Frocks for 3-4 Years Girls</a></p>
                  <p class="prod_discount"><a href="#">Min. 50% off</a></p>
                  <p class="prod_categ"><a href="#">Kid's Wear</a></p>
                  
                </div>
            </div>         
        </div> 
      </div>
  </div>
</div> 

    <div class="row">
        <div class="col-sm-3 col-xs-12">
            <div class="panel text-center">
                <div class="panel-body">
                  <img src="images/2-8Years-Big-Kids-Girls-Dress-Little.jpg_220x220.jpg">
                </div>
                <div class="details">
                  <p class="prod_names"><a href="#">Frocks for 3-4 Years Girls</a></p>
                  <p class="prod_discount"><a href="#">Min. 50% off</a></p>
                  <p class="prod_categ"><a href="#">Kid's Wear</a></p>
                </div>
            </div>      
        </div>     
        <div class="col-sm-3 col-xs-12">
          <div class="panel text-center">
                <div class="panel-body">
                  <img src="images/2-8Years-Big-Kids-Girls-Dress-Little.jpg_220x220.jpg">
                </div>
                <div class="details">
                  <p class="prod_names"><a href="#">Frocks for 3-4 Years Girls</a></p>
                  <p class="prod_discount"><a href="#">Min. 50% off</a></p>
                  <p class="prod_categ"><a href="#">Kid's Wear</a></p>
                  
                </div>
            </div>      
        </div>       
        <div class="col-sm-3 col-xs-12">
          <div class="panel text-center">
                <div class="panel-body">
                  <img src="images/2-8Years-Big-Kids-Girls-Dress-Little.jpg_220x220.jpg">
                </div>
                <div class="details">
                  <p class="prod_names"><a href="#">Frocks for 3-4 Years Girls</a></p>
                  <p class="prod_discount"><a href="#">Min. 50% off</a></p>
                  <p class="prod_categ"><a href="#">Kid's Wear</a></p>
                  
                </div>
            </div>         
        </div> 
        <div class="col-sm-3 col-xs-12">
          <div class="panel text-center">
                <div class="panel-body">
                  <img src="images/2-8Years-Big-Kids-Girls-Dress-Little.jpg_220x220.jpg">
                </div>
                <div class="details">
                  <p class="prod_names"><a href="#">Frocks for 3-4 Years Girls</a></p>
                  <p class="prod_discount"><a href="#">Min. 50% off</a></p>
                  <p class="prod_categ"><a href="#">Kid's Wear</a></p>
                  
                </div>
            </div>         
        </div> 
  </div>

  <div class="row">
        <div class="col-sm-3 col-xs-12">
            <div class="panel text-center">
                <div class="panel-body">
                  <img src="images/2-8Years-Big-Kids-Girls-Dress-Little.jpg_220x220.jpg">
                </div>
                <div class="details">
                  <p class="prod_names"><a href="#">Frocks for 3-4 Years Girls</a></p>
                  <p class="prod_discount"><a href="#">Min. 50% off</a></p>
                  <p class="prod_categ"><a href="#">Kid's Wear</a></p>
                </div>
            </div>      
        </div>     
        <div class="col-sm-3 col-xs-12">
          <div class="panel text-center">
                <div class="panel-body">
                  <img src="images/2-8Years-Big-Kids-Girls-Dress-Little.jpg_220x220.jpg">
                </div>
                <div class="details">
                  <p class="prod_names"><a href="#">Frocks for 3-4 Years Girls</a></p>
                  <p class="prod_discount"><a href="#">Min. 50% off</a></p>
                  <p class="prod_categ"><a href="#">Kid's Wear</a></p>
                  
                </div>
            </div>      
        </div>       
        <div class="col-sm-3 col-xs-12">
          <div class="panel text-center">
                <div class="panel-body">
                  <img src="images/2-8Years-Big-Kids-Girls-Dress-Little.jpg_220x220.jpg">
                </div>
                <div class="details">
                  <p class="prod_names"><a href="#">Frocks for 3-4 Years Girls</a></p>
                  <p class="prod_discount"><a href="#">Min. 50% off</a></p>
                  <p class="prod_categ"><a href="#">Kid's Wear</a></p>
                  
                </div>
            </div>         
        </div> 
        <div class="col-sm-3 col-xs-12">
          <div class="panel text-center">
                <div class="panel-body">
                  <img src="images/2-8Years-Big-Kids-Girls-Dress-Little.jpg_220x220.jpg">
                </div>
                <div class="details">
                  <p class="prod_names"><a href="#">Frocks for 3-4 Years Girls</a></p>
                  <p class="prod_discount"><a href="#">Min. 50% off</a></p>
                  <p class="prod_categ"><a href="#">Kid's Wear</a></p>
                  
                </div>
            </div>         
        </div> 
  </div>



<div class="footer"> 
<div class="container-fluid text-center">
  <p>Trade Alert - Delivering the latest product trends and industry news straight to your inbox.</p>
   <form class="form-inline">
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Your Email" required>
      <div class="input-group-btn">
        <button type="button"  id="subbtn" class="btn btn-default">Subscribe</button>
      </div>
    </div>
    <p class="h6">We’ll never share your email address with a third-party.</p>
  </form>
  <br>
      
  <div class="row text-left">
    <div class="col-1">
      <h4>Customer Services</h4>
      <div id="choice1">
        <span>Help Center</span><br>
        <span>Contact Us</span><br>
        <span>Report Abuse</span><br>
        <span>submit a dispute</span><br>
        <span>Policies & Rules</span><br>
        <span>Get paid for ypur feedback</span>
      </div>
    </div>
    <div class="col-2">
          <h4>About Us</h4>
           <div id="choice2">
            <span>About landfand.com</span><br>
            <span>About blabla Group</span><br>
            <span>Sitemap</span>
          </div>
    </div>

    <div class="col-3">
           <h4>Buy on landfand.com</h4>
           <div id="choice3">
           <span>All categories</span><br>
           <span>Request for quotation</span><br>
           <span>Wholesaler Market</span>
           </div>
    </div>
      <div class="col-4">
           <h4>Sell on landfand.com</h4>
           <div id="choice4">
           <span>Supplier Memberships</span><br>
           <span>Learning Center</span><br>
           <span>Training Center</span>
           </div>
    </div>
      <div class="col-5">
           <h4>Trade Services</h4>
           <div id="choice5">
           <span>Trade Assurance</span><br>
           <span>Business Identity</span><br>
           <span>Logistics Service</span><br>
           <span>Secure Payment</span><br>
           <span>Inspection Service</span>
           </div>
      </div>
    </div>
  
  </div>
</div>
<!-- javascripts -->
	<script src="js/custom.js"></script>
    <script src="js/plugins/owl.carousel.js"></script>
    <?php
		mysqli_close($dbc);
	?>

</body>
</html>