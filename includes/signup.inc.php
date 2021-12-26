<?php

if (isset($_POST["submit"])) {

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $ulica = $_POST["ulica"];
    $numer = $_POST["numer"];
    $miasto = $_POST["miasto"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
     }

    createUser($db, $username, $pwd, $imie, $nazwisko, $ulica, $numer, $miasto);
}
else {
    header("location: ../signup.php");  //takie proste zabezpieczenie zeby uzytkownik nie mogl wejsc tu uzywajac localhost/signup.inc.php
    exit();
}