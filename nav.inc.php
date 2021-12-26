
<nav class="navbar navbar-expand-sm bg-light">
    <?php if  (isset($_SESSION["useruid"]) && ($_SESSION["userid"] === 'admin')) {
        print('<a class="navbar-brand" href="spisWypozyczen.inc.php">Wypożyczenia</a>');
        print('<a class="navbar-brand" href="spisKlientow.inc.php">Klienci</a>');
    } ?>
     <?php 
        if(isset($_SESSION["useruid"])) {
            print('<a class="navbar-brand" href="wypozyczFilmy.inc.php">Wypożyczanie filmów</a>');
            print('<a class="navbar-brand" href="wypozyczenia_uzytkownika.php">Moje wypożyczenia</a>');
        }
    ?>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <?php
            if  (isset($_SESSION["useruid"])) {
                echo "<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Wyloguj się</a></li>";
            }
            else {
                echo "<li class='nav-item'><a class='nav-link' href='signup.php'>Rejestracja</a></li>";
                echo "<li class='nav-item'><a class='nav-link' href='login.php'>Logowanie</a></li>";
            }
            ?>
        </ul>
    </div>
</nav>

