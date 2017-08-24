## About BitslerBOT
BitslerBOT is a PHP tool designed betting automatically to maximize the chance of winning in gambling on [Bitsler.com](https://www.bitsler.com/?ref=hiroyuki123). There are 4 games in [Bitsler.com](https://www.bitsler.com/?ref=hiroyuki123), including: *Dice*, *Roullete*, *Multicolor* & *CaraYCruz*.

## Screenshots
![screenshot - 210817 - 05 40 41b](https://image.prntscr.com/image/0qLBwnoXS4mAPrLGi2jM8w.jpg)

## [Video GET Access Token](https://www.facebook.com/fikrimaulana85/videos/vb.100006820473204/2006557206248276/?type=2&theater)

## Installation
```
git clone https://github.com/Hiroyuki48/BitslerBOT.git
```

## Recommended PHP Version:
BitslerBOT required **PHP 5+**, and currently tested on **PHP 7.0.17-2** *(CLI)*.

## Configuration
>[bit.config.php](https://github.com/Hiroyuki48/BitslerBOT/blob/master/bit.config.php)
```php
   $user = "..."; your Bitsler username
   $token = "..."; SHA512. Go to www.bitsler.com & login, in console browser (PRESS F12) type: console.log(access_token)
   #$persen = "...."; example "80.00" for dice mode remove #
   #$pilihan = "true-true-true-false"; for CaraYCruz remove #
   #$api = "http://smaalazhaar.sch.id/modul/bd.php"; for dice mode remove #
   #$api = http://smaalazhaar.sch.id/modul/bs.php"; for CaraYCruz remove #
```

## Usage
```
$ php bot.php
```

## License
**BitslerBOT** is licensed under the MIT. Take a look at the [LICENSE](https://github.com/Hiroyuki48/BitslerBOT/blob/master/LICENSE) for more information.

## Version
**Current version is 1.0** (Beta) and still development.
