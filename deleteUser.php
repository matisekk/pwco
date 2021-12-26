<?php
session_start();
require_once 'includes/dbh.inc.php';

if(isset($_GET['deleteUser'])) {	
    echo("weszlo");
	$username = $GET["deleteUser"];

    $filter = ['telefon' => $username];
    $bulkWrite = new MongoDB\Driver\BulkWrite;

    $bulkWrite->delete($filter);
    $db->executeBulkWrite('filmy.klienci', $bulkWrite);
    echo("przeszlo");
    header("spisKlientow.inc.php");
}
?>