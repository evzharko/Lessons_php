/*Создаем базу*/
CREATE SCHEMA php27;

/*Создаем таблицу с для товаров*/
CREATE TABLE products
(
  id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  short_name varchar(200),
  full_name varchar(200),
  lable varchar(20),
  price int NOT NULL,
  old_price int NOT NULL,
  img varchar(255)
);
CREATE UNIQUE INDEX products_id_uindex ON products (id);

/*Модифицируем таблицу*/
ALTER TABLE products ADD new_column int NULL;