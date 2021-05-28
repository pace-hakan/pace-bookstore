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

**Clone the project:**
```
git clone git@github.com:pace-hakan/pace-bookstore.git
```

**Go into the folder application:**
```
cd pace-bookstore
```

**Copy the .env.example file to .env in the root folder:**
```
cp .env.example .env
```
+ Open the .env file and change the database credentials according to your config.
+ To get dependencies run:
```
composer install
```
+ Run:
```
php artisan key:generate
```
+ Run:
```
php artisan migrate
```
+ Run:
```
php artisan db:seed
```

You are ready to go.


