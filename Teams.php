<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dist/main.css"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title> Team </title>
</head>
<body>

<?php include("partials/nav.php") ?>
<h2 class="humming"> Humming Birds </h2>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <div class="card">
                <a href="Players.php">
                    <img src="assets/images/Counterstrike.jpeg" class="card-img-top" alt="counterstrike"></a>
                <div class="card-body">
                    <h5 class="card-title"><u>Counterstrike</u></h5>
                    <p class="card-text">
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <div class="card">
                <a href="Players.php">
                    <img src="assets/images/rocketleague.jpg" class="card-img-top" alt="rocketleague"></a>
                <div class="card-body">
                    <h5 class="card-title"><u> Rocket League </u></h5>
                    <p class="card-text">
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-8 mb-12 mb-md-0">
            <div class="card">
                <a href="Players.php">
                    <img src="assets/images/overwatch.png" class="card-img-top" alt="overwatch"></a>
                <div class="card-body">
                    <h5 class="card-title"><u> Overwatch</u></h5>
                    <p class="card-text">
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-8 mb-12 mb-md-0">
            <div class="card">
                <a href="Players.php">
                    <img src="assets/images/valorant.png" class="card-img-top" alt="valorant"></a>
                <div class="card-body">
                    <h5 class="card-title"><u>Valorant</u></h5>
                    <p class="card-text">
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-8 mb-12 mb-md-0">
            <div class="card">
                <a href="Players.php">
                    <img src="assets/images/warzone.jpeg" class="card-img-top" alt="warzone"></a>
                <div class="card-body">
                    <h5 class="card-title"><u> Warzone </u></h5>
                    <p class="card-text">
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pagination_section">
    <a href="#"><< Previous</a>
    <a href="#" title=""> 1 </a>
    <a href="#" title=""> 2 </a>
    <a href="#" title=""> 3 </a>
    <a href="#" title="" class="active"> 4 </a>
    <a href="#" title=""> 5 </a>
    <a href="#">Next >></a>
</div>

<script src="./dist/app.js"></script>
</body>

