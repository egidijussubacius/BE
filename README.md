<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Clone repo to your PC.
Open VsCode (without any folder) use terminal ( navigate to wanted folder (where composer.phar is located) for example cd c: , cd "program files/ampps/www"
run php composer.phar create-project laravel/laravel for example "test"
from "test" folder copy vendor folder and put to cloned repo folder.
Choice your created folder using VsCode
Run php ../composer.phar require laravel/ui (or php composer.phar require laravel/ui (it's depend on where the file is located)
Rename .env.example ----> .env or just use existing .env file
Configurate .env settings by you.
[DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE="enter_your_DB_name" DB_USERNAME=root DB_PASSWORD="enter_your_password"]

Create "new Schema" with Mysql workbench ( must be same as in DB DATABASE = "enter_your_DB_name")
Run php artisan migrate
Run php artisan serve
For first time it will ask to "Generate App Key", just press the button and let's roll :)
Register with your email.
Goodluck for using ;)
