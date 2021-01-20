DROP DATABASE IF EXISTS php_assignmentdb;

CREATE DATABASE php_assignmentdb;

USE php_assignmentdb;

CREATE TABLE items(
	SKU varchar(255) UNIQUE,
	Product_Name varchar(255),
	Price decimal(10, 2),
	Product_type varchar(255),
	Type_attribute varchar(255)
);

INSERT INTO items (SKU, Product_Name, Price, Product_type, Type_attribute) VALUES ('007', 'KAKISI', 420.69, 'DVD', '69MB');
INSERT INTO items (SKU, Product_Name, Price, Product_type, Type_attribute) VALUES ('666', 'Terminator', 332, 'Book', '1000KG');
