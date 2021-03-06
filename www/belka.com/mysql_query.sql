/*Создать базу данных*/
CREATE SCHEMA belka;

/*Создать таблицу для авторизации в админке*/
CREATE TABLE admin_users
(
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email varchar(25) NOT NULL,
    password varchar(50) NOT NULL,
    is_active tinyint(1) NOT NULL
);
/*Создать уникальный индекс для таблице*/
CREATE UNIQUE INDEX admin_users_id_uindex ON admin_users (id);

/*Создать таблицу для авторизации в пользователей*/
CREATE TABLE users
(
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email varchar(25) NOT NULL,
    password varchar(50) NOT NULL
);
CREATE UNIQUE INDEX users_id_uindex ON users (id);

/*Мой пароль "123" в md5*/
/* 202cb962ac59075b964b07152d234b70 */

/*Добавить пользователей в админку*/
INSERT INTO admin_users (email, password, is_active)

VALUES
    ('i.belka@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
    ('ev.zharko@gmail.com', '202cb962ac59075b964b07152d234b70', 1);

/*Таблица с постами*/
CREATE TABLE posts
(
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    data_create date NOT NULL,
    title varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
    body text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
    is_active int,
    view int,
    images varchar(255)
);
CREATE UNIQUE INDEX posts_id_uindex ON posts (id);

