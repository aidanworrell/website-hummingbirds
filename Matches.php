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
    <title> Matches </title>
</head>

<body>
<?php include("partials/nav.php") ?>
<h2 class="players-page"> Matches & Results </h2>
<div class="col-md-12">
    <div id="btnContainer">
        <button class="btn list-view_btn"><i class="fa fa-bars"></i> List</button>
        <button class="btn grid-view_btn"><i class="fa fa-th-large"></i> Grid</button>
        <!--        <button class="btn masonry-view_btn"><i class="fa fa-th-large"></i> Masonary</button>-->
    </div>
</div>

<!--<div class="list-group">-->
<!--    <div class="list-view">-->
<!--        <a href="#" class="list-group-item">First item</a>-->
<!--        <a href="#" class="list-group-item">Second item</a>-->
<!--        <a href="#" class="list-group-item">Third item</a>-->
<!--    </div>-->
<!--</div>-->


<div class="masonry">
    <div class="row">
        <div class="view-toggle grid-view col-md-3">
            <a href="Matchespageitem.php"> <h5>Matches </h5></a>
            <!--                    <img class="masimg" src="assets/images/Counterstrike.jpeg">-->
        </div>
        <div class="view-toggle grid-view col-md-3">
            <a href="Matchespageitem.php">  <h5>Matches </h5></a>
        </div>
        <div class="view-toggle grid-view col-md-3">
            <a href="Matchespageitem.php"> <h5>Matches </h5> </a>
        </div>
        <div class="view-toggle grid-view col-md-3">
            <a href="Matchespageitem.php"> <h5> Matches </h5></a>
        </div>
        <div class="view-toggle grid-view col-md-3">
            <a href="Matchespageitem.php"> <h5>Matches </h5> </a>
        </div>
        <div class="view-toggle grid-view col-md-3">
            <a href="Matchespageitem.php"> <h5>Matches </h5></a>
        </div>
        <div class="view-toggle grid-view col-md-3">
            <a href="Matchespageitem.php"> <h5>Matches</h5> </a>
        </div>
        <div class="view-toggle grid-view col-md-3">
            <a href="Matchespageitem.php"> <h5>Matches</h5></a>
        </div>
        <div class="view-toggle grid-view col-md-3">
            <a href="Matchespageitem.php"> <h5>Matches</h5> </a>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div id="btnContainer2">
        <button class="played-view_btn"><i class="fa fa-bars"></i> Upcoming Games</button>
        <button class="final-view_btn"><i class="fa fa-th-large"></i> Results</button>
        <button class="showall-view_btn"><i class="fa fa-th-large"></i> Show All</button>
    </div>
</div>

<div class="masonry">
    <div class="row">
        <div class="view-toggle played-view col-md-3">
            <h5> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen . </h5>
        </div>
        <div class="view-toggle played-view col-md-3">
            <h5> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen . </h5>
        </div>
        <div class="view-toggle played-view col-md-3">
            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen . </h5>
        </div>
        <div class="view-toggle played-view col-md-3">
            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen . </h5>
        </div>
        <div class="view-toggle played-view col-md-3">
            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen . </h5>
        </div>
        <div class="view-toggle played-view col-md-3">
            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen . </h5>
        </div>
        <div class="view-toggle played-view col-md-3">
            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen . </h5>
        </div>
        <div class="view-toggle next-view col-md-3">
            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen . </h5>
        </div>
        <div class="view-toggle next-view col-md-3">
            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen . </h5>
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

</body>
<script src="./dist/app.js"></script>
<script src="assets/js/modal.js"></script>