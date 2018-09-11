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
INSERT INTO `php27`.`products` (`short_name`, `full_name`, `lable`, `price`, `old_price`, `img`, `date_create`)

VALUES ('hype grey shirt', 'hype grey shirt', 'NULL', 19.50, 0, 'images/product_2.jpg', NOW())
    VALUES ('long sleeve jacket', 'long sleeve jacket', 'NULL', 32.20, 0, 'images/product_3.jpg', NOW()),
    VALUES ('denim men shirt', 'denim men shirt', 'NULL', 59.90, 0, 'images/product_4.jpg', NOW());
