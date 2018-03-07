

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
            <a href="index.php" class="btn btn-default">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="btn btn-default">Contact</a>
          </li> 
          <li class="nav-item">
            <a href="#" class="btn btn-default">About Us</a>
          </li>
          <li class="nav-item">
            <div class="popover-markup" id="forlogin">
              <a href="#" class="trigger btn btn-default" id="loginbtn" data-placement="bottom">Login</a>
              
                <div class="head hide">Login to your account</div>
                <div class="content hide">
                    <form id="loginform" method="POST" action="login.php">
                      <div class="form-group">
                        <label id="uname" for="username">Email ID</label>
                        <input type="email" class="form-control" id="username" name="emailid" placeholder="Email id" required>
                      </div>
                      <div class="form-group">
                        <label id="pwd" for="pswd">Password</label>
                        <input type="password" class="form-control" id="pswd" placeholder="*****" name="pswd" required>
                      </div>
                      <p>
                        <a>Forgot Password?</a>
                        <button type="submit" class="btn btn-primary">Login</button>
                      </p>
                    </form>     
                </div>
               
            </div> 
          </li>
          <li class="nav-item" style="margin-right: 0;">
            <div class="popover-markup" id="forsignup">
              <a href="#" class="trigger btn btn-default" id="signupbtn" data-placement="bottom">Signup</a>
              
                <div class="head hide" style="margin-bottom: 2%;">
                  <p>Make retailing effortless</p>
                  <p style="margin-bottom: -3%;">Sign up now</p>
                </div>
                <div class="content hide">
                    <form id="signupform" method="POST" action="signup_form.php">
                      <div class="form-group">
                        <label for="fullname">Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter full name" required> 
                      </div>
                      <div class="form-group">
                        <label for="emailid">Email ID</label>
                        <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email id" value="" required>
                      </div>
                      <div class="form-group">
                        <label for="contact">Contact Number</label>
                        <input type="number" class="form-control" id="contact" name="contact" placeholder="Phone number" value="" required>
                      </div>
                      <div class="form-group">
                        <label for="pswd">Password</label>
                        <input type="password" class="form-control" id="pswd" name="pswd" placeholder="*****" value="" required>
                      </div>
                      <fieldset class="form-group">
                        <p>User type:</p>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="usertype" id="retailer" value="Retailer" checked>
                            Retailer
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="usertype" id="seller" value="Seller">&nbsp;Seller
                          </label>
                        </div>
                      </fieldset>
                      <p>
                        <button type="submit" class="btn btn-primary" id="signup" name="signup" aria-describedby="btntext">Sign Up</button>
                        <small id="btntext" class="form-text text-muted" style="margin-left: 10%;">It's free!</small>
                      </p>
                    </form>    
                </div>
              
            </div>  
          </li>
         
            
            
            <script type="text/javascript">
              $(document).ready(function() {
                  
                  
                  
                $('#forlogin>#loginbtn, #forsignup>#signupbtn').popover({   
                  html: true,
            
                  title: function() {
                    return $(this).parent().find('.head').html();
                  },
                  content: function() {
                    return $(this).parent().find('.content').html();
                  }
                   // $('.popover').html(sform);
                });
                $('.popover-markup>.trigger').on('click',function(e) {
                  $('.popover-markup>.trigger').not(this).popover('hide');
                });
                  
                                
                /*  
                $('#signup').click(function() {
                   $('#signupform').addClass('hide'); 
                });  */
 
              });
            </script>

        </ul>
      </div>
     
    </div>
  </nav>
  


