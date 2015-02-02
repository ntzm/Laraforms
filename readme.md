# Laraforms

Laraforms is a simple survey platform with an easy-to-use material design interface.

## Installation

### Dependencies

To be able to install Laraforms, you will need:

- Composer

- NodeJS and npm

- Bower

- Gulp

### Method

Clone repository

```
git clone https://github.com/natzim/Laraforms.git
```

```
cd Laraforms
```

Install Laravel and Laravel's dependencies

```
composer install
```

Install bower, elixir and gulp

```
npm install
```

Download Font Awesome and Bootstrap

```
bower install
```

Run gulp to create resources

```
gulp
```

Edit the .env file with variables to your configuration

```
vim .env
```

Run the migrations

```
php artisan migrate
```