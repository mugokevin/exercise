<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CAT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="row justify-content-center">
    <form action="lala.php" method="POST">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="name" class="form-control" placeholder="please enter your first name">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="surname" class="form-control" placeholder="please enter your last name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="please enter your email">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="mobile" class="form-control" placeholder="please enter your number">
        </div>
        <div class="form-group">
            <label >Location</label>
            <input type="text" name="location" class="form-control" placeholder="please enter your location">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">add</button>
        </div>

    </form>
</div>


</body>

</html>