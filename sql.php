<?php 

// sql statements to memorize

// GROUP BY  
'SELECT customer, COUNT(*) AS goods FROM customers GROUP BY customer HAVING COUNT(*) >= 1'
// customers and number of goods in the table per customer 


// JOINS 
// table1 = customer, table2 = purchases 
'SELECT table1.customer, table2.purchases FROM table1, table2 WHERE 
table1.id = table2.id '
// including LEFT OUTER JOIN tablename ON columns loads all elements on left even if right is NULL 
// including RIGHT OUTER JOIN tablename ON columns loads all elements on right even if left is NULL 



// UNION 
// type 2 separate queries and use UNION to join them 
'SELECT customer FROM customers 
UNION 
SELECT customerage FROM customers '


// TEXT SEARCH 
'SELECT customer FROM customers MATCH(customername) AGAINST('Philip ')';
// loads customers whose names are Philip  


// CREATE TABLE 
'CREATE TABLE prices(
	id int NOT NULL AUTO_INCREMENT, 
	pricename varchar(30), 
	prices int, 
	PRIMARY KEY(id) 
);'


// VIEWS
// views are temporary tables created from queries 
'CREATE VIEW AS customerdatatosell 
SELECT customer FROM customers WHERE customerage > 20 ' 


?>