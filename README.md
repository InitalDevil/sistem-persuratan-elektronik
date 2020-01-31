# Sistem Persuratan Elektronik

Sistem persuratan dan disposisi secara elektronik berbasis website

## Prerequisites

* [XAMPP](https://www.apachefriends.org/download.html) - Server Lokal (Gunakan versi terbaru)
* [Composer](https://getcomposer.org/download/) - PHP Dependency Manager

## Installation

#### Clone the repository

```bash
git clone https://github.com/InitalDevil/sistem-persuratan-elektronik
```

#### Open your project

```bash
cd '\path\to\your\project'
```

#### Installing Laravel Dependencies

```bash
composer install
```

#### Copy .env

Windows
```bash
copy .env.example .env 
```
Linux
```bash
cp .env.example .env 
```

#### Generate key

```bash
php artisan key:generate
```

#### Update these setting in .env file:

* DB_DATABASE (your local database, i.e. "sisg")
* DB_USERNAME (your local db username, i.e. "root")
* DB_PASSWORD (your local db password, i.e. "")

#### Run your server

Use XAMPP or run these

```bash
php artisan serve
```
and open it on your browser with url localhost:8000 or 127.0.0.1:8000

#### Migrate your database

```bash
php artisan migrate
```
## Other Notes

**Laravel Docs:**

[https://laravel.com/docs/6.x](https://laravel.com/docs/6.x)

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
