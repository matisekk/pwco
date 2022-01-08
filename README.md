# PWCO Project
<p align="center">
  <a href="https://repository-images.githubusercontent.com" target="blank"><img src="https://repository-images.githubusercontent.com/448045/f7709980-bb45-11e9-8bdd-10f7c50787fc" width="320" alt="PHPUNIT Logo" /></a>
</p>

## Description
## Project Target
- Celem projektu jest umożliwienie wypożyczania ulubionych filmów w internecie.

Projekt wypożyczalni. Zasady działania:
- istnieją dwa rodzaje kont: użytkownicy oraz administrator,
- program zawiera 3 rodzaje informacji:
• lista możliwych do wypożyczenia filmów (Tytuł filmu, Gatunek, reżyser, czas trwania, ocena w
skali od 1 do 10, krótki opis filmu, aktorzy, data dodania filmu do kolekcji)
• lista klientów wypożyczalni ( imię, nazwisko, adres, telefon, data rejestracji)
• lista wypożyczeń dla danego klienta (Dane klienta, Tytuł filmu, data i godzina wypożyczenia,
data i godzina planowanego zwrotu, data i godzina faktycznego zwrotu)
- każdy klient może wypożyczyć maksymalnie 3 filmy naraz. Film wypożyczany jest na okres 2 dni.
- zwroty wypożyczeń obsługuje administrator
- administrator ma możliwość dodawania nowych filmów, usuwania ich oraz modyfikowania
- administrator ma możliwość dodawania nowych użytkowników, usuwania ich oraz modyfikowania
- rejestracja i logowanie
- brak możliwości usunięcia użytkownika z aktywnym wypożyczeniem
## Installation

```bash
$ php composer-setup.php --install-dir=bin --filename=composer
```

## Running the app

```bash
# development

# XAMPP
$ git clone htdocs

# open your app
$ localhost/wypozyczalnia/index.php

# production heroku
$ https://wypozyczalnia-pwco.herokuapp.com/
```

## Test

```bash
# unit tests
$ ./wypozyczalnia/bin/phpunit test
# alternative way to tests
$ ./wypozyczalnia/bin/phpunit --testdox test
```

## Support

PHP SUPPORT. If you'd like to join them, please visit https://www.php.net/support.php.

## Stay in touch

- Author - [Mateusz Przewoźnik]
- Author - [Jakub Bryniarski]
