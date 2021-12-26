<?php
session_start();
include 'bootstrap.inc.php';
include 'nav.inc.php';
include 'includes/dbh.inc.php';

$array = json_decode(json_encode($klienci->toArray(),true), true);    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klienci</title>
    <style>

.container {
  padding: 2rem 0rem;
}

h4 {
  margin: 2rem 0rem 1rem;
}

.table-image {
  td, th {
    vertical-align: middle;
  }
}
</style>
</head>
<body>
<div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID klienta</th>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">Adres</th>
            <th scope="col">Telefon</th>
            <th scope="col">Akcje</th>
          </tr>
        </thead>
        <?php foreach($array as $item) : ?>
        <form action="includes/rent.inc.php" method="get">
        <tbody>
          <tr>
            <td scope="row"><?php print($item["id_klienta"]) ?></input></td>
            <td><?php print($item["imie"]) ?></td>
            <td><?php print($item["nazwisko"]) ?></td>
            <td><?php foreach($item["adres"] as $element) print($element . " ") ?></td>
            <td><?php print($item["telefon"]) ?></td>
            <td> 
                <button type="submit" name="deleteUser" value="<?php print($item["telefon"]) ?>" input="id" class="btn btn-danger">Usuń użytkownika<i class="fas fa-edit"></i></button>    
            </td>
          </tr>
        </tbody>
        </form>
        <?php endforeach; ?>
      </table>
      <?php
      if (isset($_GET["error"])) {
            if ($_GET["error"] == "activerent") {
                echo ('<div class="alert alert-danger" role="alert"><p>Ten użytkownik ma aktywne wypożyczenie! Nie można go usunać.</p></div>');
            }
            if ($_GET["error"] == "emptyinput") {
              echo "<p>Wymagane jest wypełnienie wszystkich pól!</p>";
          } else if ($_GET["error"] == "invaliduid") {
              echo "<p>Wpisz poprawny nick!</p>";
          } else if ($_GET["error"] == "invalidemail") {
              echo "<p>Wpisz poprawny nick!</p>";
          } else if ($_GET["error"] == "passwordsdontmatch") {
              echo "<p>Wpisz poprawny email!</p>";
          } else if ($_GET["error"] == "stmtfailed") {
              echo "<p>Ups, coś poszło nie tak! Odśwież stronę i spróbuj ponownie</p>";
          } else if ($_GET["error"] == "usernametaken") {
              echo "<p>Nick jest zajęty!</p>";
          } else if ($_GET["error"] == "none") {
              echo ('<div class="alert alert-danger" role="alert"><p>Użytkownik został utworzony!</p></div>');
          }
          }
        ?>
      <?php
        include 'dodaj_klienta.inc.php';
        ?>
    </div>
  </div> 
</body>
</html>
