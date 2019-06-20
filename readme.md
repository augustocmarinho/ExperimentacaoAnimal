cp .env.example .env
Editar .env com os dados de acesso ao Banco de dados (observar o driver)

composer install
php artisan migrate
php artisan serve
