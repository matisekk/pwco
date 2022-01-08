# PWCO Project
<p align="center">
  <a href="https://repository-images.githubusercontent.com" target="blank"><img src="https://repository-images.githubusercontent.com/448045/f7709980-bb45-11e9-8bdd-10f7c50787fc" width="320" alt="PHPUNIT Logo" /></a>
</p>

[circleci-image]: https://repository-images.githubusercontent.com/448045/f7709980-bb45-11e9-8bdd-10f7c50787fc
[circleci-url]: https://repository-images.githubusercontent.com/448045/f7709980-bb45-11e9-8bdd-10f7c50787fc

  <p align="center">A progressive <a href="https://repository-images.githubusercontent.com" target="_blank">PHP</a> framework for building efficient and scalable server-side applications.</p>
    <p align="center">
<a href="https://www.npmjs.com/~nestjscore" target="_blank"><img src="https://img.shields.io/npm/v/@nestjs/core.svg" alt="NPM Version" /></a>
<a href="https://www.npmjs.com/~nestjscore" target="_blank"><img src="https://img.shields.io/npm/l/@nestjs/core.svg" alt="Package License" /></a>
<a href="https://www.npmjs.com/~nestjscore" target="_blank"><img src="https://img.shields.io/npm/dm/@nestjs/common.svg" alt="NPM Downloads" /></a>
<a href="https://circleci.com/gh/nestjs/nest" target="_blank"><img src="https://img.shields.io/circleci/build/github/nestjs/nest/master" alt="CircleCI" /></a>
<a href="https://coveralls.io/github/nestjs/nest?branch=master" target="_blank"><img src="https://coveralls.io/repos/github/nestjs/nest/badge.svg?branch=master#9" alt="Coverage" /></a>
<a href="https://discord.gg/G7Qnnhy" target="_blank"><img src="https://img.shields.io/badge/discord-online-brightgreen.svg" alt="Discord"/></a>
<a href="https://opencollective.com/nest#backer" target="_blank"><img src="https://opencollective.com/nest/backers/badge.svg" alt="Backers on Open Collective" /></a>
<a href="https://opencollective.com/nest#sponsor" target="_blank"><img src="https://opencollective.com/nest/sponsors/badge.svg" alt="Sponsors on Open Collective" /></a>
  <a href="https://paypal.me/kamilmysliwiec" target="_blank"><img src="https://img.shields.io/badge/Donate-PayPal-ff3f59.svg"/></a>
    <a href="https://opencollective.com/nest#sponsor"  target="_blank"><img src="https://img.shields.io/badge/Support%20us-Open%20Collective-41B883.svg" alt="Support us"></a>
  <a href="https://twitter.com/nestframework" target="_blank"><img src="https://img.shields.io/twitter/follow/nestframework.svg?style=social&label=Follow"></a>
</p>
  <!--[![Backers on Open Collective](https://opencollective.com/nest/backers/badge.svg)](https://opencollective.com/nest#backer)
  [![Sponsors on Open Collective](https://opencollective.com/nest/sponsors/badge.svg)](https://opencollective.com/nest#sponsor)-->

## Description

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
$ git clone

# watch mode
$ npm run start:dev

# production mode
$ npm run start:prod
```

## Test

```bash
# unit tests
$ npm run test

# e2e tests
$ npm run test:e2e

# test coverage
$ npm run test:cov
```

## Support

Nest is an MIT-licensed open source project. It can grow thanks to the sponsors and support by the amazing backers. If you'd like to join them, please [read more here] https://www.php.net/support.php.

## Stay in touch

- Author - [Mateusz Przewoźnik](https://kamilmysliwiec.com)
- Author - [Jakub Bryniarski](https://nestjs.com/)
- PHP-Source - [@php](https://www.php.net/)

## License

PHP is [MIT licensed](LICENSE).
