<?php

if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // if (emptyInputLogin($username, $pwd) !== false) {
    //     header("location: ../signup.php?error=emptyinput");
    //     exit();
    // }

    loginUser($db, $username, $pwd);

}
else {
    header("location: ../login.php");
    echo ('logowanie sie nie powiodlo');
    exit();
}