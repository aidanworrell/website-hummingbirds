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
    <title> Shop </title>
</head>
<body>
<!--navbar-->
<?php include("partials/nav.php") ?>
<!--navbar ends -->


<h2 class="humming"> Humming Birds </h2>
<!--price button high-->
<button type="button" class="btn btn-primary shop-page-high mx-auto"> high price</button>
<!--price button low-->
<button type="button" class="btn btn-primary  shop-page-low mx-auto"> Low price</button>
<!--a-z button-->
<button type="button" class="btn btn-primary shop-page-az mx-auto"> a-z</button>
<!--z-a button-->
<button type="button" class="btn btn-primary shop-page-za mx-auto"> z-a</button>


<!-- The sidebar -->
<div class="d-flex" id="wrapper">
    <div id="sidebar-wrapper">
        <div class="sidebar">
            <a class="active" href="">Shop</a>


            <!--            <div class="store-item"data-price="50">-->
            <!--                -->
            <!--            </div>-->
            <!--            Dropdowns for Sidenav-->
            <select>
                <option>
                    Essentials
                </option>
                <option>
                    Tops & Hoodies
                </option>
                <option>
                    Bottoms
                </option>
                <option>
                    Accessories
                </option>
            </select>
            <select>
                <option>
                    Equipment
                </option>
                <option>
                    Headphones
                </option>
                <option>
                    Gaming Chairs
                </option>
                <option>
                    Pc Equipment
                </option>
            </select>
            <select>
                <option>
                    Team Jersey
                </option>
                <option>
                    Spain Jersey
                </option>
                <option>
                    France Jersey
                </option>
                <option>
                    Germany Jersey
                </option>
            </select>
            <select>
                <option>
                    Clothing
                </option>
                <option>
                    T-shirts
                </option>
                <option>
                    Hoodies
                </option>
                <option>
                    Bottoms
                </option>
                <option>
                    Beanies
                </option>
                <option>
                    Socks
                </option>

            </select>
            <select>
                <option>
                    Accessories
                </option>
                <option>
                    Masks
                </option>
                <option>
                    Flags
                </option>
                <option>
                    Phone Cases
                </option>
                <option>
                    Scarves
                </option>
                <option>
                    Bags
                </option>
            </select>
            <select>
                <option>
                    Sale
                </option>
                <option>
                    Long Sleeve T
                </option>
                <option>
                    Custom Pro Player Jersey
                </option>
            </select>
<!--            search bar-->
            <div class="search">
                <form action="#">
                    <input type="search" id="search-bar"
                           placeholder=" Search Store"
                           name="search">
<!--                    search bar ends-->



<!--                    <button>-->
<!--                        <i class="fa fa-search"-->
<!--                           style="font-size: 18px;">-->
<!--                        </i>-->
<!--                    </button>-->
                </form>
            </div>
        </div>
    </div>

    <!--    Side NavBar ends here -->

    <!-- Page content -->
    <!--  -->

    <div id="page-content-wrapper" class="m-2">
        <div class="container-fluid">
            <!--            <div class="shop-wrapper">-->
            <!--                <div class="row">-->
            <!--                    <div class="col-lg-4 shop-item col-md-8 mb-12 mb-md-0 "data-price="60">-->
            <!--                        <h5> Team Jersey </h5>-->
            <!--                        <img src="assets/images/jersey2.jpeg">-->
            <!--                    </div>-->
            <!--                    <div class="col-lg-4 shop-item col-md-8 mb-12 mb-md-0" data-price="35">-->
            <!--                        <h5> Backpacks </h5>-->
            <!--                        <img src="assets/images/Backpack.jpeg">-->
            <!--                    </div>-->
            <!--                    <div class="col-lg-4 shop-item col-md-8 mb-12 mb-md-0"data-price="10">-->
            <!--                        <h5> Mousemats </h5>-->
            <!--                        <img src="assets/images/mousepad04.jpeg">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->

            <!--            <div class="row">-->
            <!--                <div class="col-lg-4 shop-item col-md-8 mb-12 mb-md-0" data-price="15">-->
            <!--                    <h5 class="store"> Mugs</h5>-->
            <!--                    <img src="assets/images/hoodies.jpeg">-->
            <!--                </div>-->
            <!--                <div class="col-lg-4 shop-item col-md-8 mb-12 mb-md-0" data-price="5">-->
            <!--                    <h5 class="store"> Drinkware </h5>-->
            <!--                    <img src="assets/images/beanie.jpeg">-->
            <!--                </div>-->
            <!--                <div class="col-lg-4 shop-item col-md-8 mb-12 mb-md-0" data-price="150">-->
            <!--                    <h5 class="store"> Gaming Chairs</h5>-->
            <!--                    <img src="assets/images/chair.jpeg">-->
            <!--                </div>-->
            <!--            </div>-->


            <!--            <div class="row">-->
            <!--                <div class="col-lg-4 shop-item col-md-8 mb-12 mb-md-0" data-price="45">-->

            <!--                    <img src="assets/images/mask.jpeg">-->
            <!--                    <h5 class="store2"> Hoodies </h5>-->

            <!--                </div>-->
            <!--                <div class="col-lg-4 shop-item col-md-8 mb-12 mb-md-0" data-price="10">-->

            <!--                    <img src="assets/images/Flag1_New.jpeg">-->
            <!--                    <h5 class="store2"> Beanies </h5>-->
            <!--                </div>-->
            <!--                <div class="col-lg-4 shop-item col-md-8 mb-12 mb-md-0" data-price="1.99">-->

            <!--                    <img src="assets/images/Sale.png">-->
            <!--                    <h5 class="store2"> Sale </h5>-->

            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->

            <div class="shop-wrapper justify-content-center ">
                <div class="store-item view-toggle-shop grid-view-shop " data-price="45">
                    <div class="hoodie-item">
                        <h5 class="card-text">Hoodie</h5>
                        <h5 class="card-text">£45.00</h5>
                        <img src="assets/images/g2hoodie.png">
                    </div>
                </div>

                <div class="store-item view-toggle-shop grid-view-shop " data-price="70">
                    <div class="coat-item">
                        <h5 class="card-text">Coat</h5>
                        <h5 class="card-text">£70.00</h5>
                        <img src="assets/images/esportscoat.jpg">

                    </div>
                </div>
                <div class="store-item view-toggle-shop grid-view-shop " data-price="15">
                    <div class="equipment-item">
                        <h5 class="card-text">Equipment</h5>
                        <h5 class="card-text">£15.00</h5>
                        <img src="assets/images/headphones.jpeg">
                    </div>
                </div>
                <div class="store-item view-toggle-shop grid-view-shop " data-price="50">
                    <div class="jersey-item">
                        <h5 class="card-text">Jersey</h5>
                        <h5 class="card-text">£50.00</h5>
                        <img src="assets/images/jersey.png">
                    </div>
                </div>
                <div class="store-item view-toggle-shop grid-view-shop " data-price="12.99">
                    <div class="bag-item">
                        <h5 class="card-text">Bags </h5>
                        <h5 class="card-text">£12.99</h5>
                        <img src="assets/images/esportsbag.jpeg">
                    </div>
                </div>
                <div class="store-item view-toggle-shop grid-view-shop " data-price="10">
                    <div class="phoneCase-item">
                        <h5 class="card-text">Phone Case</h5>
                        <h5 class="card-text">£10.00</h5>
                        <img src="assets/images/phonecase.jpeg">
                    </div>
                </div>
                <div class="store-item view-toggle-shop grid-view-shop " data-price="2">
                    <div class="keyring-item">
                        <h5 class="card-text">Keyring</h5>
                        <h5 class="card-text">£2.00</h5>
                        <img src="assets/images/keyring.jpg">
                    </div>
                </div>
                <div class="store-item view-toggle-shop grid-view-shop " data-price="25">
                    <div class="flag-item">
                        <h5 class="card-text">Team Flag </h5>
                        <h5 class="card-text">£25.00</h5>
                        <img src="assets/images/Flag1_New.jpeg">
                    </div>
                </div>
                <div class="store-item view-toggle-shop grid-view-shop " data-price="20">
                    <div class="mousemat-stores">
                        <h5 class="card-text">Mousemat</h5>
                        <h5 class="card-text">£20</h5>
                        <img src="assets/images/mousemat.jpg">
                    </div>
                </div>
            </div>
        </div>



    <!--Pagination -->
    <div class="pagination_section">
        <a href="#"><< Previous</a>
        <a href="#" title=""> 1 </a>
        <a href="#" title=""> 2 </a>
        <a href="#" title=""> 3 </a>
        <a href="#" title="" class="active"> 4 </a>
        <a href="#" title=""> 5 </a>
        <a href="#">Next >></a>
    </div>
    <!--Page Content ends here-->

    <!--<div-->
    <!--        class="grid-item-shop">-->
    <!--</div>-->


</div>
</div>
<script src="./dist/app.js"></script>
</body>