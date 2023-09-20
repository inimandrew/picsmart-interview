# Setup

# Installation Process
- Install composer on local machine
- Install dependencies
```sh
    composer install 
```
- create a .env file from .env.example
```sh
    cp .env.example .env 
```
- Generate app key
```sh
    php artisan key:generate
```
- Start up App
```sh
    ./vendor/bin/sail up
```
