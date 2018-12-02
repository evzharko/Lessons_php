# Lessons_php

https://habr.com/post/346086/

https://phptoday.ru/post/gotovim-lokalnuyu-sredu-docker-dlya-razrabotki-na-php

#Composer in docker
docker run --rm --interactive --tty -v $PWD:/app -u $(id -u):$(id -g) composer install

#Artisan in docker
docker run --rm -v $PWD:/var/www -u $(id -u):$(id -g) lessonsphp_php php artisan make:auth

#Если ругаеться на папаку с логами
sudo sudo chmod -R o+w www/php27.com/storage/
