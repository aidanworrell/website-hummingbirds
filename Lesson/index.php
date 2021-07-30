<?php
include_once ("Vehicle.php");
include_once ("Car.php");

$bmw = new Car();
var_dump($bmw->getTyreNumber());

include_once("DayClass.php");
include_once("User.php");
include_once("Admin.php");
$monday = new DayClass();
$tuesday = new DayClass();

$monday->setDay(1);
$monday->setImage("https://i.pinimg.com/originals/44/98/74/449874c404c6c19eb132f00147625db5.jpg");
$tuesday->setDay(2);
$tuesday->setImage("https://uproxx.com/wp-content/uploads/2021/02/wednesday-addams-feat.jpg?w=710");


$joel = new Admin();
$joel->setFirstName("Joel");
$joel->setLastName("Reid");
$joel->setDay($monday);

$jason = new User();
$jason->setFirstName("Jason");
$jason->setLastName("Muxlow");
$jason->setDay($tuesday);

var_dump($joel->getFullName());
var_dump($joel->getDay()->getDayName());
var_dump($joel->getStatus());

$users = [
    $joel,
    $jason
];

foreach ($users as $user) {
    if($user->getFirstName() == "Joel") {
        print_r("We have Joel");
    }
}

//die();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <h1><?=$_GET['name']?></h1>
 <p>Today is <?= date("l", strtotime($_GET['date'])); ?></p>

 <?php

// $link = [
//     'https://i.pinimg.com/originals/44/98/74/449874c404c6c19eb132f00147625db5.jpg',
//     'https://uproxx.com/wp-content/uploads/2021/02/wednesday-addams-feat.jpg?w=710',
//     'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAaJeVY3FuCz9LGnxGOQGXY1GKtHaYC30kVz9BwzlfPJ_GzNjBHtF9yBjt_0sod0YGeVs&usqp=CAU'
// ];
//
//
//
//
// $warehouse = [
//     ['T-shirt', 'image', '£23.99']
// ];

foreach ($users as $user){
    echo "<hr>";
    echo '<img src="'.$user->getDay()->getImage().'">';
}
 ?>


<script>

</script>
</body>
</html>

