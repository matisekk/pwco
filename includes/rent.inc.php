<?php
session_start();
require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (isset($_GET["rent"])) {
    $tytul = $_GET["rent"];

    $userId = $_SESSION["userid"];

    $filter = ['telefon' => $userId];
    $query = new MongoDB\Driver\Query($filter);
    $cursor = $db ->executeQuery('filmy.klienci', $query);
    $user = $cursor->toArray()[0];
    $clientID =  $user -> id_klienta;
    /*if(gettype($clientID) == "string") {
        echo("works");
        $clientID = intval($id);
    }*/

    echo($clientID);

    $filter = ['id_klienta' => $clientID];
    $query = new MongoDB\Driver\Query($filter);
    $cursor = $db ->executeQuery('filmy.wypozyczenia', $query);
    $count = count($cursor->toArray());
    echo date(DATE_RFC2822);
    $NewDate=Date(DATE_RFC2822, strtotime('+2 days'));
    echo ($NewDate);

    if($count === 3) {
        echo nl2br("Możesz mieć maksymalnie 3 wypożyczenia");
        header("location: ../wypozyczFilmy.inc.php?error=limit");
        exit();
    }  
    else {
        $bulkWrite = new MongoDB\Driver\BulkWrite;
        $doc = ['id_klienta' => $clientID, 'tytul' => $tytul, 'data_wypozyczenia' => date(DATE_RFC2822),
                'planowana_data_zwrotu' => $NewDate];
        $bulkWrite->insert($doc);
        $db->executeBulkWrite('filmy.wypozyczenia', $bulkWrite);


        $filter = ['tytul' => $tytul];
        $query = new MongoDB\Driver\Query($filter);
        $cursor = $db ->executeQuery('filmy.filmy', $query);
        $movie = $cursor->toArray();

        $bulkWrite = new MongoDB\Driver\BulkWrite;
        $update = ['$set' => ['wypozyczony' => true]];
        $options = ['multi' => false, 'upsert' => false];
        $bulkWrite->update($filter, $update, $options);
        $db->executeBulkWrite('filmy.filmy', $bulkWrite);

        header("location: ../wypozyczenia_uzytkownika.php");
    }
}

if (isset($_GET["delete"])) {
    
    $username = $_GET["delete"];
    
        $filter = ['tytul' => $username];
        $bulkWrite = new MongoDB\Driver\BulkWrite;
    
        $bulkWrite->delete($filter);
        $db->executeBulkWrite('filmy.filmy', $bulkWrite);
    
    header("location: ../wypozyczFilmy.inc.php");
}

if (isset($_GET["more"])) {
    
    $username = $_GET["more"];
    
    $_SESSION["movieId"] = $username;
    
    header("location: ../detail.php");
}

if (isset($_GET["back"])) {
    
    header("location: ../wypozyczFilmy.inc.php");
}
    
if(isset($_GET['deleteUser'])) {	
	$username = $_GET["deleteUser"];

    $rent = $wypozyczenia->toArray();
    $clientsList[] = [];

    foreach($rent as $item) {
        if(($item -> id_klienta) === $username) {
            header("location: ../spisKlientow.inc.php?error=activerent");
            exit();
        } 
    }

    var_dump($clientsList);

    $filter = ['telefon' => $username];
    $bulkWrite = new MongoDB\Driver\BulkWrite;

    $bulkWrite->delete($filter);
    $db->executeBulkWrite('filmy.klienci', $bulkWrite);
    echo("przeszlo");
    header("location: ../spisKlientow.inc.php");
}

if(isset($_GET['returnMovie'])) {	
	$username = $_GET["returnMovie"];

    $filter = ['tytul' => $username];
    $bulkWrite = new MongoDB\Driver\BulkWrite;

    $bulkWrite->delete($filter);
    $db->executeBulkWrite('filmy.wypozyczenia', $bulkWrite);

    $filter = ['tytul' => $username];
        $query = new MongoDB\Driver\Query($filter);
        $cursor = $db ->executeQuery('filmy.filmy', $query);
        $movie = $cursor->toArray();

        $bulkWrite = new MongoDB\Driver\BulkWrite;
        $update = ['$set' => ['wypozyczony' => false]];
        $options = ['multi' => false, 'upsert' => false];
        $bulkWrite->update($filter, $update, $options);
        $db->executeBulkWrite('filmy.filmy', $bulkWrite);
    
    header("location: ../spisWypozyczen.inc.php");
}

if(isset($_POST['searchTitle'])) {	
	$title = $_POST["title"];
    $_SESSION["movieId"] = $title;

    header("location: ../detail.php");
}
?>