<?php
    $db = new MongoDB\Driver\Manager("mongodb+srv://".$_ENV['MONGODB_USER'].":".$_ENV['MONGODB_PASSWORD']."@cluster0.gqf0q.mongodb.net");
    $query = new MongoDB\Driver\Query([]);
    
    $filmy = $db -> executeQuery("filmy.filmy", $query);
    $klienci = $db -> executeQuery("filmy.klienci", $query);
    $wypozyczenia = $db -> executeQuery("filmy.wypozyczenia", $query);
?>
