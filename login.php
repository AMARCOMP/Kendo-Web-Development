<?php

    session_start();
    $error = '';

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['emailid']) || empty($_POST['pswd'])) {
            $error = "Username or Password field is empty. Please fill them.";
            echo $error;
        }
        else {
            $username = $_POST['emailid'];
            $password = $_POST['pswd'];
            
            
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
            
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            
            $username = test_input($username);
            $password = test_input($password);
            $newpassword = md5($password.'kendo_tech_8409113092A036');
            
            $query = "SELECT * FROM subscribers WHERE username='$username' AND password='$newpassword'";
            $raw_results = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($bdc));
            //$results = mysqli_fetch_array($raw_results);
            
            $rows = mysqli_num_rows($raw_results);
            
            if($rows == 1) {
                $_SESSION["login_user"] = $username;
                header("Location: profile.php");
            }
            else {
                //$error = "Username or Password is invalid.";
                //echo $error;
                header("Location: index.php?input_error=1");
            }
        }
        mysqli_close($dbc);
    }
?>