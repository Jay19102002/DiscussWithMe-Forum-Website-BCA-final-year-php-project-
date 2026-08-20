<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DiscussWithMe - Coding Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

    body {
        height: 100vh;
        width: 100vw;
        background-color: #F2F3F7;

    }

    .contact {
        height: fit-content;
        width: 100%;
        margin-top: 5rem;
        padding-bottom: 10rem;
    }
    
    .container {
        height: 50%;
        width: 35%;
        position: relative;
        padding: 20px;
        border-radius: 20px;
        box-shadow: -5px -5px 9px #ffff, 5px 5px 7px #DAE2EC;
        
    }
    .incontainer{
        box-shadow:inset -5px -5px 9px #ffff,inset 5px 5px 7px #DAE2EC;
        border-radius: 20px;
        padding: 40px;
        background-color: #EDEFF3;
    }
</style>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'partials/dbconnect.php';

        $username = $_POST['username'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // check whether this email exists
        $sql = "INSERT INTO `contact` (`usename`, `email`, `message`, `time`) VALUES ('$username', '$email', '$message', current_timestamp());";
        $result = mysqli_query($conn, $sql);
    }
    ?>
    <?php 
    include 'partials/dbconnect.php';
    include 'partials/header.php'; ?>

    <div class="contact">

        <h1 class="text-center fw-semibold">Contact Us</h1>
        <div class="container my-3">

        <div class="incontainer">

            <?php
            if ($result) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your message is sent.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
            
            echo '<form action="' . $_SERVER["REQUEST_URI"] . '" method="post">
            <div class="modal-body">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Your name" style="box-shadow: -5px -5px 9px #ffffff73, 5px 5px 7px #5e687949;">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" style="box-shadow: -5px -5px 9px #ffffff73, 5px 5px 7px #5e687949;">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Concern</label>
            <textarea class="form-control" id="message" name="message" rows="3" placeholder="message" style="box-shadow: -5px -5px 9px #ffffff73, 5px 5px 7px #5e687949;"></textarea>
            </div>
            <button class="btn btn-success px-5" type="submit" style="box-shadow:inset -2px -2px 5px #ffffff73,inset 5px 5px 7px #5e687949;">Send</button>
            
            </form>';
            
            ?>
            </div>
        </div>
    </div>

    <?php include 'partials/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>