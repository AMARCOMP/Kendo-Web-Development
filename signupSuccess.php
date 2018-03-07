<!DOCTYPE html>
<html>
<head>
	<title>Kendo</title>
    <!-- sweetAlert plugins -->
    <script src="sweetAlert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="sweetAlert/dist/sweetalert.css">


    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<?php

	echo '<script>
			setTimeout(function() {
				swal({
					title: "Congratulaions!",
					text: "Email verified, wait while you are redirected to login page.",
					type: "success",
					confirmButtonText: "Ok"
				}, 2000);
			})
		  </script>';

?> 

</body>
</html>