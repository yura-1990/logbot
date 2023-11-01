<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://projectlogourl.svg" width="400" alt="App logo"></a></p>

# About Project

## Requirements

1. PHP 8.1
2. MYSQL 8.0.30
3. Composer 2.2.4

### Installation

1. Clone the repository
2. Run `composer install`
3. Run `cp .env.example .env`
4. Run `php artisan key:generate`
5. Run `php artisan jwt:secret`
6. Run `php artisan migrate` or `php artisan migrate --seed`
7. Run `php artisan db:seed`
8. Run `php artisan serve`
9. Open [http://localhost:8000](http://localhost:800) in your browser

### Packages

4. [Laravel Telescope](https://laravel.com/docs/telescope)
5. [Debugbar for Laravel](https://github.com/barryvdh/laravel-debugbar)

### how to make a bot to get the token
1. Open tg and search `BotFathe`, it looks like the picture below
![image](https://github.com/yura-1990/logbot/assets/72699632/e025087a-11b5-4a4e-8d1e-8bb5c810bf92)
2. Give a name for your bot
![image](https://github.com/yura-1990/logbot/assets/72699632/f1909ef0-1e39-4077-88a4-27a3619e215e)
3. At the end you will get a message, in which there is info
![image](https://github.com/yura-1990/logbot/assets/72699632/63351035-614f-4bfb-80a4-ad1e8a930c68)
4. Take the token and past the token to .env file of the project




