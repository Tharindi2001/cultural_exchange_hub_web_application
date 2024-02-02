CREATE DATABASE cultural_exchange;

USE cultural_exchange;

CREATE TABLE user(

email VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL);

SELECT * FROM user;

CREATE TABLE orders(
id INT PRIMARY KEY AUTO_INCREMENT,
item VARCHAR(100),
qty INT,
total_price INT,
unit_price INT);

SELECT* FROM orders;








