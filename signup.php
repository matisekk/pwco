<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rejestracja</title>
</head>
<body>
<?php
session_start();
include 'bootstrap.inc.php';
include 'nav.inc.php';
?>
<div id="registration-form" class="center">
    <section class="signup-form">
        <h1 class="display-4">Rejestracja</h1>
        <form action="includes/signup.inc.php" method="post">
        <div class="form-group">
            <input type="text" name="uid" class="form-control" placeholder="Nr. telefonu:"><br>
            <input type="password" class="form-control" name="pwd" placeholder="Wpisz hasło:"><br>
            <input type="password" class="form-control" name="pwdrepeat" placeholder="Wpisz hasło ponownie:"><br>
            <input type="text" class="form-control" name="imie" placeholder="Imię:"><br>
            <input type="text" class="form-control" name="nazwisko" placeholder="Nazwisko:"><br>
            <input type="text" class="form-control" name="ulica" placeholder="Ulica:"><br>
            <input type="text" class="form-control" name="numer" placeholder="Numer ulicy:"><br>
            <input type="text" class="form-control" name="miasto" placeholder="Miasto:"><br>
            <button type="submit" class="btn btn-primary mb-2" name="submit">Zarejestruj</button><br>
        </div>
     </form>

        <?php
        if (isset($_GET["error"])) {
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
                echo "<p>Użytkownik został utworzony!</p>";
            }
        }
        ?>
    </section>
</div>
</body>
</html>