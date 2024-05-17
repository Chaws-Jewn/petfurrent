<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



## ------------------------ Migrating tables -------------------------------------- ##
If there is an error upon migration (php artisan migrate)

## Please follow the steps:
1. run 'php artisan migrate'

## Add 'is_admin' field to the users table:
1. create migration file for users table:
    php artisan make:migration add_is_admin_to_users_table

2. After successfully creating the migration file, go to database/migration/create_dogs_table 
    Insert the following start from Line 16:
            $table->boolean('is_admin')->default(0);
    Save it.


## If error occurs for dogs and adopts tables, follow the following:
1. create migration file for dogs table:
    php artisan make:migration create_dogs_table

2. After successfully creating the migration file, go to database/migration/create_dogs_table 
    Insert the following start from Line 16:
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->string('breed')->nullable();
            $table->string('gender')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
    Save it.

3. Then create a migration file for adding a column 'deleted_at' to dogs table
        php artisan make:migration add_deleted_at_to_dogs_table

4. After successfully creating the migration file, go to database/migration/deleted_at_to_dogs_table 
    Insert the following start in Line 16:
            $table->softDeletes();
    Save it.

5. create migration file for creating adopts table:
    php artisan make:migration create_adopts_table

7. After successfully creating the migration file, go to database/migration/create_adopts_table 
    Insert the following start from Line 16:
            $table->foreignId('user_id')->constrained();
            $table->foreignId('dogs_id')->constrained();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('phone_number');
            $table->string('email_address');
            $table->string('house_number');
            $table->string('street');
            $table->string('city');
            $table->string('adopt_status')->default('Pending');
    Save it.

8. Then create a migration file for adding a column 'deleted_at' to adopts table
        php artisan make:migration add_deleted_at_to_dogs_table

9. After successfully creating the migration file, go to database/migration/add_deleted_at_to_adopts_table
    Insert the following start in Line 16:
            $table->softDeletes();
    Save it.


## You also need to modify the data type of phone_number field in adopts table:
10. create migration file for modifying data type in adopts table:
    php artisan make:migration modify_phone_number_data_type_in_adopts_table

11. After successfully creating the migration file, go to database/migration/modify_phone_number_data_type_in_adopts_table
    Insert the following start from Line 16:
            $table->bigInteger('phone_number')->change();
    Save it.


## After creating the migration files
1. Run 'php artisan migrate' again.
2. Refresh your phpmyadmin


