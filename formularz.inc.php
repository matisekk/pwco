<?php
include 'bootstrap.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz</title>
</head>
<body>
<form>
    <div class="form-group">
        <label for="email">Podaj adres e-mail</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com">
    </div>
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="First name/Nickname">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Last name">
        </div>
    </div>
    <div class="form-row align-items-center">
        <div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option selected>Wybierz...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="3">4</option>
                <option value="3">5</option>
            </select>
        </div>
        <div class="col-auto my-1">
            <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                <label class="custom-control-label" for="customControlAutosizing">Oceń Bloga oraz zapamiętaj mój wybór</label>
            </div>
        </div>
        <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    <div class="form-group">
        <label for="komentarz">Komentarz:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
</form>

</body>
</html>
