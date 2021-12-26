<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
 require_once 'includes/dbh.inc.php';

if(isset($_POST['Submit'])) {	
	$username = $_POST["username"];
    $pwd = $_POST["haslo"];
		
	// checking empty fields
	$errorMessage = '';
	
		if (empty($username)) {
			$errorMessage .=  'Login nie może być pusty <br />';
		}

		if (empty($pwd)) {
			$errorMessage .= 'Hasło nie może być puste <br />';
		}
	}
	
	if ($errorMessage) {
		// print error message & link to the previous page
		echo '<span style="color:red">'.$errorMessage.'</span>';
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";	
	} else {
		//insert data to database table/collection named 'users'
		//$db->klienci->insert($user);

		$hashPwd = password_hash($pwd, PASSWORD_BCRYPT);
		$bulkWrite = new MongoDB\Driver\BulkWrite;
		$doc = ['telefon' => $username, 'hasloHash' => $hashPwd];
		$bulkWrite->insert($doc);
		$db->executeBulkWrite('filmy.klienci', $bulkWrite);
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='Moj-Blog.php'>View Result</a>";
	}
?>
</body>
</html>
