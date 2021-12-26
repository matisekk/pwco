<?php
session_start();

function invalidEmail($email) {
    $result;
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $result = true;
     }
     else {
         $result = false;
     }
     return $result;
 }

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function createUser($db, $username, $pwd, $imie, $nazwisko, $ulica, $numer, $miasto) {

    $hashPwd = password_hash($pwd, PASSWORD_BCRYPT);
    $bulkWrite = new MongoDB\Driver\BulkWrite;
    $doc = ['telefon' => $username, 'haslo' => $pwd,'hasloHash' => $hashPwd, 'imie' => $imie,
            'nazwisko' => $nazwisko, 'adres' => [$ulica, $numer, $miasto], 'id_klienta' => $username];
    $bulkWrite->insert($doc);
    $db->executeBulkWrite('filmy.klienci', $bulkWrite);
    
    if($_SESSION["userid"] == 'admin')
        header("location: ../spisKlientow.inc.php?error=none");
    else
        header("location: ../signup.php?error=none");
    exit();
    }

function emptyInputLogin($email, $pwd) {
     $result;
     if (empty($email) || empty($pwd)) {
         $result = true;
     }
     else {
         $result = false;
     }
     return $result;
 }

function loginUser($db, $username, $pwd) {

    $filter = ['telefon' => $username];
    $query = new MongoDB\Driver\Query($filter);
    $cursor = $db ->executeQuery('filmy.klienci', $query);



    if($cursor != null && !$cursor -> isDead())
    {
        $document = $cursor->toArray()[0];
        $passFromDB = $document -> hasloHash;
        $telefon = $document -> telefon;
        $id_klienta = $document -> id_klienta;
        $checkPwd = password_verify($pwd, $passFromDB);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
         $_SESSION["userid"] = $telefon;
         $_SESSION["useruid"] =["usersUid"];
         $_SESSION["id_klienta"] = $id_klienta;
        header("location: ../wypozyczFilmy.inc.php");
        exit();
    }
    }
    else
    {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

}
?>