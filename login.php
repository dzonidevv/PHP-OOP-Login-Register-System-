<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dzoni Dev">
    <meta name="description" content="This is PHP Object Oriented Login/Register System">
    <meta name="keywords" content="php, oop, system, login, register">
    <!-- Website Title -->
    <title>PHP OOP Login/Register System | by Dzoni Dev</title>
    <!-- Website Image -->
    <link rel="icon" href="img/elephant.png">
    <!-- CSS Style -->
    <link rel="stylesheet" href="styles/style.css">
    <!-- Bootstrap v.5 Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>




<ul class="topnav">
  <li><a class="active" href="index.php">Dzoni Dev</a></li>
  <li class="right"><a href="login.php">Login</a></li>
  <li class="right"><a href="register.php">Register</a></li>
</ul>



<div id="wrapper">
<div id="logindiv">

<h2>Login Now!</h2>
<img 
class="avatar-img"
height="70"
src="img/avatar.png" 
title="Not available">
<form action="includes/login.inc.php" method="post">
    <input type="text" name="uid" placeholder="Enter your username">
    <br>
    <input type="password" name="pwd" placeholder="Enter your password">
    <br>
    <button class="button-custom" type="submit" name="submit">Login</button>
</form>

</div>
</div>




<!-- Footer -->
<footer>
<?php echo "<p>Copyright &copy; 2021-" . date("Y") . " by DzoniDev</p>"; ?>
</footer>


<!-- Bootstrap v.5 Scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- Removing Form Resumbission -->
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</body>

</html>