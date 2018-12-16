# Lessons_php

https://habr.com/post/346086/

https://phptoday.ru/post/gotovim-lokalnuyu-sredu-docker-dlya-razrabotki-na-php

#Composer in docker
* Linux
docker run --rm --interactive --tty -v $PWD:/app -u $(id -u):$(id -g) composer install
* Windows
docker run --rm --interactive --tty -v %cd%:/app composer install

#Artisan in docker
* Linux
docker run --rm -v $PWD:/var/www -u $(id -u):$(id -g) lessonsphp_php php artisan make:auth
* Windows
docker run --rm -v %cd%:/var/www lessons_php_php php artisan make:auth

#Если ругаеться на папаку с логами
sudo chmod -R o+w www/php27.com/storage/

#Генерация ключа для файла с окружением
docker run --rm -v $PWD:/var/www -u $(id -u):$(id -g) lessonsphp_php php artisan key:generate