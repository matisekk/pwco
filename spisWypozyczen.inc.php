<?php
session_start();
include 'bootstrap.inc.php';
include 'nav.inc.php';
require_once 'includes/dbh.inc.php';

$array = json_decode(json_encode($wypozyczenia->toArray(),true), true); 
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
            
            <td>
                <?php if  (isset($_SESSION["useruid"]) && ($_SESSION["userid"] === 'admin'))
                    print('<button type="submit" name="returnMovie" value="' . $item["tytul"] .'" input="id" class="btn btn-danger">Dokonaj zwrotu<i class="fas fa-edit"></i></button>'); 
                ?>   
            </td>
          </tr>
        </tbody>
        </form>
        <?php endforeach; ?>
      </table>
    </div>
  </div>     
