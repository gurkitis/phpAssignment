create table items(
	SKU varchar(255) UNIQUE,
	Product_Name varchar(255),
	Price decimal(10, 2),
	Product_type varchar(255),
	Type_attribute varchar(255)
);

USE php_assignmentDB;
INSERT INTO Items (SKU, Product_Name, Price, Product_type, Type_attribute) VALUES ('007', 'KAKISI', 420.69, 'DVD', '69MB');
INSERT INTO Items (SKU, Product_Name, Price, Product_type, Type_attribute) VALUES ('666', 'Terminator', 332, 'Book', '1000KG');

select * from Items;