<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## About SWA

SWA is simple travelblog application based on Laravel 5.3 php framework

## Version v2.0

## Installation

$ composer create-project --prefer-dist laravel/laravel laravel5  
$ composer require laravelcollective/html "^5.3.0"  
  
add LaravelCollective ServiceProvider and 'aliases' в config\app.php  
Scaffolf Auth  
$ php artisan make:auth  
  
Set environment variables for database(.env)  

$ php artisan migrate  

set laravel5/public as a domain folder
