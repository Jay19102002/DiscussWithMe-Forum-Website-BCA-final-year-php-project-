<?php
$showerror = "false";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "./dbconnect.php";
    $user_email = $_POST['signupEmail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupCPassword'];

    // check whether this email exists
    $existSql = "SELECT * FROM `users` WHERE user_email = '$user_email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);

    if ($numRows > 0) {
        $showerror =  'This Email is already registered! Please login.';
    } 
    else {
        if ($pass == $cpass) {
            // $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `user_email`, `user_pass`, `timestamp`) VALUES ('$user_email', '$pass', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            // echo $result;
            if ($result) {
                $showAlert = true;
                header("Location: /DiscussWithMe/index.php?signupsuccess=true");
                exit();
            }
        } 
        else {
            $showerror = "Passwords do not match.";
            
        }
    }
    header("Location: /DiscussWithMe/index.php?signupsuccess=false&error=$showerror");
    
    
}
?>