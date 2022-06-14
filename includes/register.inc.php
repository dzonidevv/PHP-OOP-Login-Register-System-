<?php 


if (isset($_POST['submit'])) {
    
    // Grabbing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];
    $email = $_POST['email'];

    include "../classes/dbh.classes.php";
    include "../classes/register.classes.php";
    include "../classes/register-contr.classes.php";

    $signup = new RegisterContr($uid, $pwd, $pwdRepeat, $email);


    $signup->signupUser();

    header("location: ../index.php?error=none");



}








; ?>
