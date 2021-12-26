<?php
session_start();
include 'bootstrap.inc.php';
include 'nav.inc.php';
require_once 'includes/dbh.inc.php';
$id = $_SESSION["id_klienta"];
/*if(gettype($id) === "string") {
    echo("works");
    $id = intval($id);
}*/
    

//gettype($id);    

$filter = ['id_klienta' => $id];
$query = new MongoDB\Driver\Query($filter);
$cursor = $db ->executeQuery('filmy.wypozyczenia', $query);
$array = json_decode(json_encode($cursor->toArray(),true), true); 
?>

<div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Tytuł</th>
            <th scope="col">Data wypożyczenia</th>
            <th scope="col">Planowana data zwrotu</th>
            <th scope="col">ID wypożyczającego</th>
            
          </tr>
        </thead>
        <?php foreach($array as $item) : ?>
        <form action="includes/rent.inc.php" method="get">
        <tbody>
          <tr>
            <td scope="row"><?php print($item["tytul"]) ?></input></td>
            <td><?php print($item["data_wypozyczenia"]) ?></td>
            <td><?php print($item["planowana_data_zwrotu"]) ?></td>
            <td><?php print($item["id_klienta"]) ?></td>
          </tr>
        </tbody>
        </form>
        <?php endforeach; ?>
      </table>
    </div>
  </div>     
