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
<title> Contact </title>
</head>
<body>
<!--navbar-->
<?php include("partials/nav.php") ?>
<!--navbar ends-->
<h2 class="humming"> Humming Birds </h2>
<!--contact form-->

<h2 class="contact"> Contact us!</h2>
<div class="container">
    <form action="/">
<!--The 'required' tags at the end of each line are for validation so if the user has not entered the correct details or the correct amount it will not let them continue-->
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name" required>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name" required>
        <label for="femail">Email</label>
        <input type="email" id="femail" name="email" placeholder="Enter your Email" required>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">
    </form>
</div>
<!--contact form ends-->



<script src="./dist/app.js"></script>
</body>
