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

/*Добавить товар в админку*/
CREATE TABLE php27.products
(
  id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  short_name varchar(200),
  full_name varchar(200),
  lable varchar(20),
  price float NOT NULL,
  old_price float NOT NULL,
  img varchar(255),
  create_date date
);
CREATE UNIQUE INDEX products_id_uindex ON php27.products (id);
INSERT INTO php27.products (id, short_name, full_name, lable, price, old_price, img, create_date) VALUES (1, 'hype grey shirt', 'hype grey shirt', 'NULL', 20, 0, 'product_2.jpg', '2018-09-11');
INSERT INTO php27.products (id, short_name, full_name, lable, price, old_price, img, create_date) VALUES (2, 'long sleeve jacket', 'long sleeve jacket', 'NULL', 32, 0, 'product_3.jpg', '2018-09-11');
INSERT INTO php27.products (id, short_name, full_name, lable, price, old_price, img, create_date) VALUES (3, 'denim men shirt', 'denim men shirt', 'NULL', 60, 0, 'product_4.jpg', '2018-09-11');