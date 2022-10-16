<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Getting started
## Installation

Please check the official laravel installation guide for server requirements before you start. Official Documentation

Clone the repository
```
git clone https://github.com/Radia16/API-Task-with-API-Documentation.git

```
Install all the dependencies using composer
```
composer install
```
Copy the example env file and make the required configuration changes in the .env file
```
cp .env.example .env
```
Generate a new application key
```
php artisan key:generate
```
Run the database migrations (Set the database connection in .env before migrating)
```
php artisan migrate
```
Start the local development server
```
php artisan serve
```
You can now access the server at http://127.0.0.1:8000
## TL;DR command list
```
git clone https://github.com/Radia16/API-Task-with-API-Documentation.git
composer install
cp .env.example .env
php artisan key:generate
```
## SQL file download
Download this zip file and than extract this file.And  this file import your xampp.Then serve. 

Make sure you set the correct database connection information before running the migrations Environment variables
```
php artisan migrate
php artisan serve
```


## API Documentation
This is api documentation https://documenter.getpostman.com/view/23897171/2s847BVGTu
### Folders
```
app - Contains all the Eloquent models
app/Http/Controllers/OrderController - Contains all the Order controllers
app/Http/Controllers/PassportAuthController - Contains all the Auth controllers
app/Exceptions/Handler - Contains different types of Exception
app/Http/Resources/OrderResource - Contains all the Api Resource
database/migrations - Contains all the database migrations
app/Providers/RouteServiceProvider - Contains Custom route set
routes - Contains all the api routes defined in api.php file 
```
## Environment variables
.env - Environment variables can be set in this file
Note : You can quickly set the database information and other variables in this file and have the application fully working.
## Testing API
Run the laravel development server
```
php artisan serve
```
The api can now be accessed at
```
http://localhost:8000/api
```
Api Documentation
```
https://documenter.getpostman.com/view/23897171/2s847BVGTu
```
