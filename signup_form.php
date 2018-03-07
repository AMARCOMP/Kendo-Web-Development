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

    if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['fullname'];
            $username = $_POST['emailid'];
            $contact = $_POST['contact'];
            $password = $_POST['pswd'];
            $userType = $_POST['usertype'];
    }

    $query = "INSERT INTO login (name, username, password, contact, userType) VALUES ('$name', '$username', '$password', '$contact', '$userType')";

    $result = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($dbc));

    if($result) {
        $link_verify_id = md5($username.'kendo_tech_8409113092A036');
        
        $tm = time();
        
        $query2 = "INSERT INTO verification (emailid, verifyid, requesttime) VALUES ('$username', '$link_verify_id', '$tm')";
        
        $result2 = mysqli_query($dbc, $query2) or trigger_error("Query MySQL Error: " . mysqli_error($bdc));
        
        if($result2) {
            
            require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();           //not necessary                           // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'kendotechnologies@gmail.com';                 // SMTP username
$mail->Password = 'devendra990';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // 586 is used if some problem occurs ; 476 port for ssl.                                   // TCP port to connect to

$mail->setFrom('kendotechnologies@gmail.com', 'Kendo_ Group');
$mail->addAddress($username, 'client');     // Add a recipient
$mail->addAddress($username);               // Name is optional
$mail->addReplyTo('kendotechnologies@gmail.com', 'Kendo');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Verification link by Kendo';

            
            $mail->Body = '<!DOCTYPE html>
<html>
<head>
	<title>Email Confirmation</title>

	<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
  
    #main-page {
    	padding: 5% 15%;
    }

    #main-page img {
    	width: 100%;
    }

    #text-block {
    	padding: 5% 0;
    }

    footer {
    	padding: 5%;
	    background-color: #5f5252;
	    color: white;
    }

    footer a {
    	text-decoration: none;
        color: #2196F3;
    }

  </style>


</head>
<body>
  <div class="container">
    <div id="main-page">
      <div class="text-center" id="image-block">	
        <img src="images/emailImage.png">
      </div>
      <div id="text-block">
        <p>Hello User,</p>
        <p>Thank you for signing up with Kendo.You are all set to make your first transaction through the portal. All you need to do now is click the link given below to confirm your Kendo account.</p><br>
        <p><a href="localhost/New Folder/emailverify.php?verifyID_token='.$link_verify_id.'">localhost/New Folder/emailverify.php?verifyID_token='.$link_verify_id.'</a></p><br>

        <p>Please note that for the proper functioning of your account you need to confirm your account through the link given above.</p><br>
        <p>Kind Regards,</p>
        <p>Team Kendo</p>
        <hr>
      </div>
      <footer class="text-center">
      	<p>If you did not sign up for an account with Kendo, you can disregard this email.</p>
      	<p><a href="http://www.kendo.co.in" style="color: #2196f3;">www.kendo.co.in</a></p>
      </footer>
    </div>
  </div>
</body>
</html>';
            
            $mail->AltBody = 'Email Verification Data';
            
            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }
            else {
                header('Location: index.php?submitted=1');
            }
        }
    }
    
    mysqli_close($dbc);
?>