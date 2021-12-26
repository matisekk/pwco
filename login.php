<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'bootstrap.inc.php';
    ?>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>
<?php
include 'nav.inc.php';
?>
<div id="login-form" class="center">
    <section class="signup-form">
        <h1 class="display-4">Zaloguj się</h1>
        <form action="includes/login.inc.php" method="post">
            <input type="text" class="form-control" name="uid" placeholder="Podaj imię lub Email:"><br>
            <input type="password" class="form-control" name="pwd" placeholder="Wpisz hasło:"><br>
            <button type="submit" class="btn btn-primary mb-2" name="submit">Zaloguj się</button><br>
        </form>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Wymagane jest wypełnienie wszystkich pól!</p>";
            } else if ($_GET["error"] == "wronglogin") {
                echo "<p>Niepoprawny nick/email!</p>";
            }
        }
        ?>
    </section>
</div>

</body>
</html>