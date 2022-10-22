#### Installation Steps

1. Clone the repo : `git clone https://github.com/syahrizal-alisadikin/laravel-bootcamp-22-october-22.git`
2. `$ cd laravel-bootcamp-22-october-22`
3. `$ composer install`
4. `$ cp .env.example .env`
5. `$ php artisan key:generate`
6. Create new MySQL database for this application  
(with simple command: `$ mysqladmin -urootuser -p create laravel_new`)
7. Set database credentials on `.env` file
8. `$ php artisan migrate`
9. `$ php artisan storage:link`
10. `$ npm install && npm run dev` (not close npm run dev)
11. `$ php artisan serve` (open new tab terminal)


Starting Laravel development server: http://127.0.0.1:8000
