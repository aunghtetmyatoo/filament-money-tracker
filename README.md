<p align="center">
	<a href="#"  target="_blank" title="logo">
		<img src="/public/brands/logo.png" alt="logo" width="340px">
	</a>
</p>

<br>

<p align="center">
	<img src="https://img.shields.io/badge/version project-1.0-brightgreen" alt="version project">
    <img src="https://img.shields.io/badge/Php-8.1-informational" alt="stack php">
    <img src="https://img.shields.io/badge/Laravel-10.46-informational&color=brightgreen" alt="stack laravel">
    <img src="https://img.shields.io/badge/Filament-3.2-informational" alt="stack Filament">
    <img src="https://img.shields.io/badge/TailwindCss-3.1-informational" alt="stack Tailwind">
	<a href="https://opensource.org/licenses/GPL-3.0">
		<img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="GPLv3 License">
	</a>
</p>

## Overview

This is a multi account money tracker. It is a simple application that allows you to track your money in multiple accounts and categories. It is written in PHP (Laravel Framework) and Filament v3.

## Features

-   Multi Account (Tenants)
-   Multi Currency
-   Wallets
-   Categories
-   Budgets
-   Goals
-   Debts
-   Transactions
-   Reports

## Installation

1. Clone the repository

```ssh
git clone https://github.com/aunghtetmyatoo/filament-money-tracker.git
```

3. Switch to the repo folder

```
cd filament-money-tracker
```

2. Install all the dependencies using composer

```ssh
composer install
```

3. Copy the example env file and make the required configuration changes in the .env file

```ssh
cp .env.example .env
```

4. Generate a new application key

```ssh
php artisan key:generate
```

5. Run the database migrations with seeder (Set the database connection in .env before migrating)

```ssh
php artisan migrate --seed
```

6. Run the application

```ssh
php artisan serve
```

7. Browse the application

> Url: [http://localhost:8000/](http://localhost:8000/)

8. Login with the following credentials:

-   Email: `ahmo@money.app`
-   Password: `12345678`
