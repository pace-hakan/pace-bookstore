# Pace Bookstore

## Table of Contents
* [General Info](#general-info)
* [Technologies Used](#technologies-used)
* [How to Install](#how-to-install)

###
## General Info
This is a Laravel project to demonstrate my Laravel skills and knowledge.

#
## Technologies Used
Project is created with:
* Laravel 7.0
* PHP 7 or above
* Bootstrap 4.0


## How to Install
To run this project on your localhost;

+Clone the project
+Go into the folder application
+Copy the .env.example file to .env in the root folder
+Open the .env file and change the database credentials according to your config
+To get dependencies run
+Run
```
git clone git@github.com:pace-hakan/pace-bookstore.git
cd pace-bookstore
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
```

You are ready to go.
