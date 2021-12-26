<?php
    $db = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $query = new MongoDB\Driver\Query([]);
    
    $filmy = $db -> executeQuery("filmy.filmy", $query);
    $klienci = $db -> executeQuery("filmy.klienci", $query);
    $wypozyczenia = $db -> executeQuery("filmy.wypozyczenia", $query);
?>