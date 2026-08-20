<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DiscussWithMe - Coding Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body{
        text-shadow: 0px 0px 7px grey;
        background-color: #F2F3F7;
        overflow-x: hidden;
    }
    .box{
        display: flex;
    }
</style>
<body>
    <?php 
    include 'partials/dbconnect.php';
    include 'partials/header.php'; ?>
    <h1 class="text-center my-3">About DiscussWithMe</h1>
    <img src="./images/caro/caro3.jpg" alt="">

    <div class="container1 m-5 rounded " style="height: 200px; position:relative;" >
        <h1 class="text-center my-5 p-5 text-success" style="text-shadow:0px 0px 50px green;">The ultimate coding forum for beginners and experts alike</h1>
    </div>

    <div class="container2 m-5 rounded" style="box-shadow: -5px -5px 9px #ffff, 5px 5px 7px #5e687949; padding:20px;">
        <h2 class="text-center my-5">Welcome to DiscussWithMe, the premier coding forum based in India. Our platform is designed to bring together coding enthusiasts from all over the world to discuss, share and learn from each other's experiences. Whether you're a beginner or an experienced coder, DiscussWithMe is the perfect place to connect with like-minded individuals and expand your knowledge in the field of coding.</h2>
    </div>
    <div class="container2 m-5 rounded" style="box-shadow: -5px -5px 9px #ffff, 5px 5px 7px #5e687949; padding:20px;">
        <h2 class="text-center my-5">Our mission is to create a supportive and collaborative community where members can freely exchange ideas, seek advice, and stay updated on the latest trends in coding. Join us today and be a part of our growing community of passionate coders!</h2>
    </div>
    <div class="container2 m-5 rounded" style="box-shadow: -5px -5px 9px #ffff, 5px 5px 7px #5e687949; padding:20px;">
        <h2 class="text-center my-5">Our forum is a place where you can learn new coding skills, get feedback on your projects, and connect with other passionate coders from around the world. Whether you are a beginner or a seasoned developer, you will find something useful and interesting here.</h2>
    </div>

    <div class="container3 m-5 rounded " style="box-shadow: -5px -5px 9px #ffff, 5px 5px 7px #5e687949; padding:20px;">
        <h3 class="text-center my-5">By joining our forum, you will get access to: - A friendly and supportive community of coders who are eager to help and learn from each other - A rich library of coding resources, tutorials, and guides for various languages and frameworks - A weekly coding challenge that will test your skills and creativity - A monthly coding event where you can showcase your projects and win prizes - And much more!</h3>
    </div>
    <hr>
    <h2 class="text-center">User Review</h2>
    <div class="box">
    <div class="container4 m-5 rounded w-50" style="box-shadow: -5px -5px 9px #ffff, 5px 5px 7px #5e687949; padding:20px; background:cyan;">
        <h4 class="text-center my-5">Don’t just take our word for it, here’s what some of our members have to say: - ‘This forum has been a lifesaver for me. I learned so much from the tutorials and the feedback I received from other members. Thanks to this forum, I was able to land my dream job as a web developer.’</h4> <p class="fw-italic">- John, web developer</p> 
    </div>

    <div class="container5 m-5 rounded w-50" style="box-shadow: -5px -5px 9px #ffff, 5px 5px 7px #5e687949; padding:20px; background:cyan;">
    <h4 class="text-center my-5">‘I love this forum because it’s not just about coding, it’s about having fun and making friends. I met some amazing people here who share my passion for coding and who inspire me every day. This forum is more than a community, it’s a family.’</h4> <p class="fw-italic">- Lisa, app developer</p>
    </div>
    </div>

    <div class="container6 m-5 rounded ">
        <h5 class="text-center my-5">Ready to join the best coding forum online? Click here to <a href="./index.php">Sign up</a> for free and start your coding journey today!</h5>
    </div>

    <?php include 'partials/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>