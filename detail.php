<?php
    session_start();
    include 'nav.inc.php';
    include 'bootstrap.inc.php';  
    require_once 'includes/dbh.inc.php';  

    $filter = ['tytul' => $_SESSION["movieId"]];
    $query = new MongoDB\Driver\Query($filter);
    $cursor = $db ->executeQuery('filmy.filmy', $query);
    $array = json_decode(json_encode($cursor->toArray(),true), true); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wypożycz film</title>
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
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Tytuł</th>
            <th scope="col">Reżyser</th>
            <th scope="col">Ocena</th>
            <th scope="col">Gatunek</th>
            <th scope="col">Zakupione</th>
            <th scope="col">Aktorzy</th>
            <th scope="col">Akcje</th>
          </tr>
        </thead>
        <?php foreach($array as $item) : ?>
        <form action="includes/rent.inc.php" method="get">
        <tbody>
          <tr>
            <td scope="row"><?php print($item["tytul"]) ?></input></td>
            <td><?php print($item["rezyser"]) ?></td>
            <td><?php print($item["ocena"] !== null ? $item["ocena"] : "Brak oceny") ?></td>
            <td><?php print($item["gatunek"]) ?></td>
            <td><?php print($item["zakupione"]) ?></td>
            <td><?php foreach($item["aktorzy"] as $element) print($element . ", ") ?></td>
            <td><?php print($item["streszczenie"]) ?></td>
                <td> 
                    <button type="rent" name="back" value="<?php print($item["tytul"]) ?>" input="id" class="btn btn-info">Powrót<i class="fas fa-edit"></i></button>    
                </td>
          
          </tr>
        </tbody>
        </form>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
</body>
</html>