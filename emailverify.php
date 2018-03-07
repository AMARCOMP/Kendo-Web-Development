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

    $token = $_GET['verifyID_token'];
    $sql_time = "SELECT * FROM verification WHERE verifyid='$token'";
    $raw_results = mysqli_query($dbc, $sql_time) or die(mysqli_error());
    $results = mysqli_fetch_array($raw_results);
    $requestTime = $results['requesttime'];
    $emailId = $results['emailid'];

    $currentTime = time();
    $timeDiff = $currentTime - $requestTime;
    if($timeDiff > 86400) {
        echo 'Verification link has expired. Please <a href="index.php">sign up</a> again.';
    }
    else {
        $new_sql = "SELECT * FROM login WHERE username='$emailId'";
        $raw_results = mysqli_query($dbc, $new_sql) or die(mysqli_error());
        $results = mysqli_fetch_array($raw_results);
        
        $name = $results['name'];
        $username = $results['username'];
        $newpassword = $results['password'];
        $password = md5($newpassword.'kendo_tech_8409113092A036');
        $contact = $results['contact'];
        $userType = $results['userType'];
        
        $query = "INSERT INTO subscribers (name, username, password, contact, usertype) VALUES ('$name', '$username', '$password', '$contact', '$userType')";
        
        $new_result = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($dbc));
        
        if($new_result) {
            $sql = "DELETE FROM login WHERE username='$emailId'";
            $raw_results = mysqli_query($dbc, $sql);
            
            header("Location: index.php?verified=1");
        }
        else {
            echo "Something went wrong!";
        }        
    }
    
    $sql = "DELETE FROM verification WHERE verifyid='$token'";
    $results = mysqli_query($dbc, $sql);
    
    mysqli_close($dbc);
?>