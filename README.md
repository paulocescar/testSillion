# SillionBack

Install Laravel (https://laravel.com/docs/10.x/installation)

## Requerimentos
Laravel (https://laravel.com/docs/10.x/installation)
composer: latest version
php 8.0: https://www.php.net/manual/pt_BR/install.php
mysql: lastest version


## Intalação
Copiei o projeto pelo link: 
git clone [https://github.com/paulocescar/SillionFront.git
](https://github.com/paulocescar/testSillion.git)

Na pasta raiz do projeto alterar 
.env.example para .env
configurar 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=example_app
DB_USERNAME=root
DB_PASSWORD=

adicionar a seguinte variavel de ambiente no .env
RANDOM_API_URL="https://random-data-api.com/api"

criar um banco de dados mysql com nome de example_app

composer install
php artisan migrate



## Development server
php artisan serve

Obs: certificar por 8000

