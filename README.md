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
- Create a new model and migrations
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
