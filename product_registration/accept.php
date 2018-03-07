<?php

DEFINE ('DBUSER', 'root'); 
DEFINE ('DBPW', ''); 
DEFINE ('DBHOST', 'localhost'); 
DEFINE ('DBNAME', 'trial');

date_default_timezone_set("Asia/Kolkata");	
$datetime=date('YmdHis');


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$dbc = mysqli_connect(DBHOST,DBUSER,DBPW);
if (!$dbc) {
    die("Database connection failed: " . mysqli_error($dbc));
    exit();
}

$dbs = mysqli_select_db($dbc, DBNAME);
if (!$dbs) {
    die("Database selection failed: " . mysqli_error($dbc));
    exit(); 
}
$base= "base/user1";    // user name will be taken from the distributor registration table
$base_img_address=$base.'/image/'.$datetime;
$base_details_address= $base.'/product_details/'.$datetime;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $productname = test_input($_POST["product_name"]);
   $companyname = test_input($_POST["company_name"]);
   $producttype = test_input($_POST["product_type"]);
   $querymail= test_input($_POST["query_mail"]);
   $quantity= test_input($_POST["quantity"]);
   $productdescription = test_input($_POST["product_description"]);

// accessing the files semt
   if($_FILES["icon_img"]["error"] > 0){
    echo "Error: " . $_FILES["icon_img"]["error"] . "<br>";
}


else{
    
    move_uploaded_file($_FILES["icon_img"]["tmp_name"], $base_img_address."icon.dev");
}


if($_FILES["main_img"]["error"] > 0){
    echo "Error: " . $_FILES["main_img"]["error"] . "<br>";
}


else{
    
    move_uploaded_file($_FILES["main_img"]["tmp_name"], $base_img_address."main.dev");
}


//echo "$productname";
  
}





$query ="INSERT INTO product (Name,Image_address,Main_image,Details_file,Quantity,timestamp_upload) VALUES ('$productname','$base_img_address','$base_img_address','$base_details_address','$quantity','$datetime')";
$result = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($dbc)); 

echo "<center><h1><br>Product Registered<br></h1></center>";

 

mysqli_close($dbc); 


?>