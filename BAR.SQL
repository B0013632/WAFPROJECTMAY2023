drop database if exists bar;
 create database bar;
 use bar;
 create table employees(
     id integer auto_increment,
     firstname varchar(30),
     surname varchar(30),
     employeetype varchar(12),
     dateofbirth date,
	 pps varchar(12),
	 full_time boolean not null default 0,
     created_at datetime,
     updated_at datetime,
     deleted_at datetime,
     primary key(id)
 );

 
 CREATE TABLE customers (
    id INT AUTO_INCREMENT,
    firstname VARCHAR(30),
    surname VARCHAR(30),
    email VARCHAR(50),
    phone VARCHAR(20),
    vip BOOLEAN NOT NULL DEFAULT 0,
    comments VARCHAR(100),
	created_at datetime,
    updated_at datetime,
    deleted_at datetime,
    PRIMARY KEY (id)
);
 
 
  create table tables (
    id int auto_increment,
    capacity INT,
  	booked boolean not null default 0,
	created_at datetime,
    updated_at datetime,
    deleted_at datetime,
    primary key (id)
 );
 
 create table reservations (
    id int AUTO_INCREMENT,
    table_id int,
    customer_id int,
    reservationDate date,
    reservationTime time,
    partySize int,
    specialRequests varchar(255),
	 created_at datetime,
    updated_at datetime,
    deleted_at datetime,
    primary key (id),
    foreign key (customer_id) references customers(id),
    foreign key (table_id) references tables(id)
);

 create table orders (
    id int auto_increment,
    customer_id int,
    employee_id int,
	order_description varchar(100),
    table_id int,
    order_date date,
    order_time time,
	created_at datetime,
    updated_at datetime,
    deleted_at datetime,
    total decimal(10,2),
    primary key (id),
    foreign key (customer_id) references customers(id),
    foreign key (employee_id) references employees(id),
    foreign key (table_id) references tables(id)
 );
 
 
 DROP VIEW IF EXISTS event;
CREATE VIEW event AS
SELECT CONCAT(customers.firstname, " ", customers.surname) AS title, 
       CONCAT(reservations.reservationDate, "T", reservations.reservationTime) AS start, 
       CONCAT(reservations.reservationDate, "T", ADDTIME(reservations.reservationTime, '02:00:00')) AS end, 
       CONCAT("Table ", tables.id, ": ", reservations.specialRequests) AS specialRequest, 
       reservations.id AS reservation_id,
       tables.id AS table_id
FROM reservations
INNER JOIN customers ON reservations.customer_id = customers.id
INNER JOIN tables ON reservations.table_id = tables.id;


 
  create table drinks (
 id int auto_increment,
 name varchar(30),
 description varchar(30),
 alcohol DECIMAL(3,3),
 price decimal(18,3),
 image varchar(30),
 created_at datetime,
 updated_at datetime,
 deleted_at datetime,
 primary key(id)
 );
 
 
 create table orderdetail (
 id int auto_increment,
 drinkid int,
 orderid int,
 quantity int,
 subtotal decimal(18,3),
 created_at datetime,
 updated_at datetime,
 deleted_at datetime,
 primary key(id),
 foreign key(drinkid) references drinks(id),
 foreign key(orderid) references orders(id)
 );
 
 INSERT INTO drinks (name, description, alcohol, price, image, created_at, updated_at, deleted_at)VALUES ('Mojito', 'Refreshing cocktail', 0.08, 8.99, 'mojito.jpg', NOW(), NOW(), NULL);
 INSERT INTO drinks (name, description, alcohol, price, image, created_at, updated_at, deleted_at)VALUES ('Cosmopolitan', 'Classic vodka-based cocktail', 0.20, 9.99, 'cosmopolitan.jpg', NOW(), NOW(), NULL);
 INSERT INTO drinks (name, description, alcohol, price, image, created_at, updated_at, deleted_at)VALUES ('Old Fashioned', 'Timeless bourbon cocktail', 0.35, 10.99, 'old_fashioned.jpg', NOW(), NOW(), NULL);
 INSERT INTO drinks (name, description, alcohol, price, image, created_at, updated_at, deleted_at)VALUES ('Piña Colada', 'Creamy tropical cocktail ', 0.10, 7.99, 'pina_colada.jpg', NOW(), NOW(), NULL);
 INSERT INTO drinks (name, description, alcohol, price, image, created_at, updated_at, deleted_at)VALUES ('Margarita', 'Tequila-based cocktail', 0.25, 8.49, 'margarita.jpg', NOW(), NOW(), NULL);
 INSERT INTO drinks (name, description, alcohol, price, image, created_at, updated_at, deleted_at)VALUES ('Martini', 'Elegant gin', 0.30, 11.99, 'martini.jpg', NOW(), NOW(), NULL);
 INSERT INTO drinks (name, description, alcohol, price, image, created_at, updated_at, deleted_at)VALUES ('Sangria', 'Spanish wine punch', 0.05, 6.99, 'sangria.jpg', NOW(), NOW(), NULL);
 INSERT INTO drinks (name, description, alcohol, price, image, created_at, updated_at, deleted_at)VALUES ('Mint Julep', 'Classic bourbon cocktail', 0.40, 9.49, 'mint_julep.jpg', NOW(), NOW(), NULL);

 insert into orderdetail(drinkid,orderid,quantity) values (1,2,2);
 insert into orderdetail(drinkid,orderid,quantity) values (1,2,2);shoppingcart
 
 insert into employees (firstname,surname,employeetype,dateofbirth,pps,full_time) values ('oliver','kerr','Bartender','2000-01-31', '12345678B', true);
 insert into employees (firstname,surname,employeetype,dateofbirth,pps,full_time) values ('morgan','bartlett','Bartender','1985-10-28', '43215678E', true);
 insert into employees (firstname,surname,employeetype,dateofbirth,pps,full_time) values ('rebecca','house','Bartender','1993-08-01', '98765678D', true);
 insert into employees (firstname,surname,employeetype,dateofbirth,pps,full_time) values ('leslie','hammond','Cleaner','1999-03-03', '12625378F', false);
 insert into employees (firstname,surname,employeetype,dateofbirth,pps,full_time) values ('axel','gibson','Bartender','2007-09-29', '17955678T', false);
 insert into employees (firstname,surname,employeetype,dateofbirth,pps,full_time) values ('bo','bradshaw','Manager','1979-12-19', '1123678Y', TRUE);
 
 insert into customers (firstname, surname, email, phone, vip, comments)values ( 'John', 'Smith', 'john.smith@example.com', '0892321234', true, 'Prefers outdoor seating');
 insert into customers (firstname, surname, email, phone, vip, comments)values ( 'Jane', 'Doe', 'jane.doe@example.com', '0873456335', false, null);
 insert into customers (firstname, surname, email, phone, vip, comments)values ( 'Eoin', 'Connors', 'eoinconnors@example.com', '082712534', false, null);
 insert into customers (firstname, surname, email, phone, vip, comments)values ( 'Liam', 'Davids', 'liamdavids@example.com', '089571234', true, '5 drink maximum');
 insert into customers (firstname, surname, email, phone, vip, comments)VALUES ('John', 'Smith', 'john.smith@example.com', '0892321234', true, 'Prefers outdoor seating');
 insert into customers (firstname, surname, email, phone, vip, comments)VALUES ('Mary', 'Taylor', 'mary.taylor@example.com', '0892325678', false, 'Allergic to nuts');
 insert into customers (firstname, surname, email, phone, vip, comments)VALUES ('Robert', 'Johnson', 'robert.johnson@example.com', '0892323456', false, 'No special requirements');
 insert into customers (firstname, surname, email, phone, vip, comments)VALUES ('Emily', 'Davis', 'emily.davis@example.com', '0892329876', true, 'Needs wheelchair access');
 insert into customers (firstname, surname, email, phone, vip, comments)VALUES ('William', 'Brown', 'william.brown@example.com', '0892326666', false, 'Prefers non-smoking area');
 insert into customers (firstname, surname, email, phone, vip, comments)VALUES ('Elizabeth', 'Garcia', 'elizabeth.garcia@example.com', '0892321111', true, 'Vegetarian');
 insert into customers (firstname, surname, email, phone, vip, comments)VALUES ('Michael', 'Wilson', 'michael.wilson@example.com', '0892322222', false, 'Prefers spicy food');
 insert into customers (firstname, surname, email, phone, vip, comments)VALUES ('Linda', 'Martinez', 'linda.martinez@example.com', '0892324444', false, 'No special requirements');
 insert into customers (firstname, surname, email, phone, vip, comments)VALUES ('David', 'Anderson', 'david.anderson@example.com', '0892328888', true, 'Gluten-free');
 insert into customers (firstname, surname, email, phone, vip, comments)VALUES ('Barbara', 'Hernandez', 'barbara.hernandez@example.com', '0892329999', false, 'Prefers quiet area');
 
 insert into tables ( capacity, booked)values ( 2, false);
 insert into tables ( capacity, booked)values ( 2, false);
 insert into tables ( capacity, booked)values ( 2, true);
 insert into tables ( capacity, booked)values ( 3, true);
 insert into tables ( capacity, booked)values ( 3, true);
 insert into tables ( capacity, booked)values ( 4, false);
 insert into tables ( capacity, booked)values ( 4, false);
 insert into tables ( capacity, booked)values ( 4, true);
 insert into tables ( capacity, booked)values ( 4, true);
 insert into tables ( capacity, booked)values ( 6, true);
 insert into tables ( capacity, booked)values ( 6, true);
 insert into tables ( capacity, booked)values ( 6, true);
 insert into tables ( capacity, booked)values ( 6, true);
 insert into tables ( capacity, booked)values ( 8, false);
 insert into tables ( capacity, booked)values ( 8, true);
 insert into tables ( capacity, booked)values ( 8, true);
 
 insert into orders (customer_id, employee_id, table_id, order_description, order_date, order_time, total)values ( 1, 3, 2, 'Two Vodkas', '2023-04-30', '18:30:00', 16.00); 
 insert into orders (customer_id, employee_id, table_id, order_description, order_date, order_time, total)values ( 2, 2, 1, 'Three Gins', '2023-04-30', '19:00:00', 24.00);
 insert into orders (customer_id, employee_id, table_id, order_description, order_date, order_time, total)values ( 3, 1, 4, 'Four Tequilias', '2023-04-30', '20:00:00', 40.00); 
 insert into orders (customer_id, employee_id, table_id, order_description, order_date, order_time, total)values ( 4, 4, 3, 'Eight Coronas', '2023-04-30', '20:30:00', 40.00);
 
  insert into reservations ( table_id, customer_id, reservationDate, reservationTime, partySize, specialRequests)values ( 1, 2, '2023-05-01', '19:00:00', 4, 'Window seat preferred');
 insert into reservations ( table_id, customer_id, reservationDate, reservationTime, partySize, specialRequests)values ( 2, 2, '2023-05-03', '18:30:00', 6, NULL);
 insert into reservations ( table_id, customer_id, reservationDate, reservationTime, partySize, specialRequests)values ( 3, 1, '2023-05-05', '20:00:00', 2, 'Anniversary celebration');
 
 alter table employees add column userid bigint UNSIGNED;
 alter table employees add constraint FK_employee_user foreign key(userid) references users(id);
 ALTER TABLE employees add constraint FK_employee_user_unique UNIQUE (userid); 

