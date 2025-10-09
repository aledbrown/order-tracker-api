### About
- Laravel 12 Backend Practical Test (30 minutes)

### Requirements
- Laravel ^12.33.0
- PHP 8.3.26
- SQLite

### Process
- Create a new Laravel project
- php artisan install:api
- Turn on PINT inspection in PHPStorm
- Use default SQLite database
- Remote web front end views and update / web route
- Create models and migrations
- php artisan make:model Customer -m
- php artisan make:model Order -m
- php artisan make:model OrderItem -m
- Migrate DB
- Setup Model Relationships
- Make a seeder for setting up test order
- php artisan make:seeder TestDataSeeder
- Add to DatabaseSeeder
- php artisan db:seed
- Create php artisan make:resource OrderResource
- Create route and controller
- php artisan make:controller Api/OrderController
- Add route to api.php
- Test in browser and Postman
- https://order-tracker-api.test/api/orders/1

### Setup Information
- For macOS running Laravel Herd (correct at time of writing)
- Open Terminal.app on macOS then run the following commands
>- cd ~/Herd
>- git clone git@github.com:aledbrown/order-tracker-api.git
>- cd order-tracker-api
>- cp .env.example .env
>- optional: set APP_ENV=production and APP_DEBUG=false
>- touch database/database.sqlite
>- composer install
>- php artisan key:generate
>- php artisan migrate:refresh --seed
>- Open Herd > Sites and add an SSL Certificate to order-tracker-api.test

### Run Information
>- Using Postman
>- GET
>- https://order-tracker-api.test/api/orders/1
>- Accept: application/json
