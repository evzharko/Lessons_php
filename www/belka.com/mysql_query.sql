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

/*Мой пароль "123" в md5*/
202cb962ac59075b964b07152d234b70

/*Добавить пользователей в даминку*/
INSERT INTO admin_users (email, password, is_active)

    VALUES
        ('i.delka@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
        ('ev.zharko@gmail.com', '202cb962ac59075b964b07152d234b70', 1);

