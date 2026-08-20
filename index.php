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
        background-color: #F2F3F7;
    }
    .col-md-4 .card img:hover{
        transform: scale(1.05);
        transition-duration: .5s;
    }
    .col-md-4 .card {
        overflow: hidden;
    }
    .carousel-item{
        transition:all 0.5s ease ;
    }
    
</style>
<body>
    <?php include 'partials/dbconnect.php' ?>
    <?php include 'partials/header.php' ?>
    
    <!-- slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/DiscussWithMe/images/caro/caro1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/DiscussWithMe/images/caro/caro2.jpg" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item">
                <img src="/DiscussWithMe/images/caro/caro3.jpg" class="d-block w-100 " alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- category container -->
    <div class="container my-3" >
        <h1 class="text-center my-3" style="text-shadow: 0px 0px 10px #d8d8d8;">DiscussWithMe - Categories</h1>
        <div class="row">
            <!-- fetch all categories -->
            <!-- use a loop to iterate through categories -->
            <?php 
            $sql = "SELECT * FROM `categories`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                // echo $row['category_id'];
                // echo $row['category_name'];
                $id = $row['category_id'];
                $cat = $row['category_name'];
                $desc = $row['category_description'];
                echo ' 
                <div class="col-md-4" >
                <div class="card m-2" style="width: 18rem; box-shadow: -10px -10px 10px #ffff, 10px 10px 10px #5e687949; border-radius:30px;">
                    <img src="/DiscussWithMe/images/img'.$id.'.jpg" class="card-img-top" alt="...">
                    <div class="card-body" style="box-shadow:inset -5px -5px 9px #ffff,inset 5px 5px 7px #5e687949;">
                        <h5 class="card-title"><a href="./threadlist.php?catid='. $id .'">' . $cat . '</a></h5>
                        <p class="card-text">'. substr($desc ,0,100) .'...</p>
                        <a href="./threadlist.php?catid='. $id .'" class="btn btn-primary" style="box-shadow:inset -2px -2px 5px #ffffff73,inset 5px 5px 7px #5e687949;">View Threads</a>
                    </div>
                </div>
                </div>';
            }
            ?>
            
        

        </div>
    </div>

    <?php include 'partials/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>