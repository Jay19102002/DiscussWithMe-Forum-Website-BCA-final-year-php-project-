<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "./dbconnect.php";
    $email = $_POST['loginEmail'];
    $pass = $_POST['loginPass'];

    $sql = "SELECT * FROM `users` WHERE user_email='$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    
    if ($numRows == 1) {
        $row = mysqli_fetch_assoc($result);
        if($pass == $row['user_pass']){
            session_start();
            $_SESSION["login"] = true;
            $_SESSION["sno"] = $row['sno'];
            $_SESSION["useremail"] = $email;
            echo "logged in " . $email;
        }
        header("Location: /DiscussWithMe/index.php");
        
    } 
}

?>
