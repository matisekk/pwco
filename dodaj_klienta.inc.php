<body>

<div class="card"> 
    <h1 class="display-4">Dodaj klienta</h1>
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
</div>
</body>