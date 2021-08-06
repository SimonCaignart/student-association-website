# Student Association Website
The goal of this school project was to create a website with user and event management, as well as an online store, for the school's student association.

## Project Setup

Install Composer https://getcomposer.org/download/

Launch a MySQL Database (5.7.34) and PHP My Admin

Create a database with the name found in the .env file (hidden)

Run 
```
composer install
```

Run
```
php artisan key:generate
```


Run
```
php artisan migrate
```

Run
```
php artisan db:seed
```
Run
```
php artisan serve
```
