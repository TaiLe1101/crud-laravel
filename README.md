# HOW TO SETUP

## Installation

#### STEP 1 (connect DB)

```bash
Clone file .env.example to .env and connect your DB
```

#### STEP 2

```bash
composer install (if error -> run again)
```

#### STEP 3

```bash
php artisan migrate
php artisan db:seed
php artisan cms:theme:assets:publis
```

#### STEP 4

```bash
php artisan serve
```
