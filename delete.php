<?php
require_once("includes/dbh.inc.php");

if(isset($_POST['Submit'])) {	
	$username = $_POST["username"];
//getting id of the data from url

    $filter = ['telefon' => $username];
    $bulkWrite = new MongoDB\Driver\BulkWrite;

    $bulkWrite->delete($filter);
    $db->executeBulkWrite('filmy.klienci', $bulkWrite);

//redirecting to the display page (index.php in our case)
header("Location:spisKlientow.inc.php");
}
?>

