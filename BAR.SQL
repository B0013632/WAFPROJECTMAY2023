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
    id int ,
    capacity INT,
  	booked boolean not null default 0,
	created_at datetime,
    updated_at datetime,
    deleted_at datetime,
    primary key (id)
 );
 
 create table reservations (
    reservation_id int AUTO_INCREMENT,
    table_id int,
    customer_id int,
    reservationDate date,
    reservationTime time,
    partySize int,
    specialRequests varchar(255),
	created_at datetime,
    updated_at datetime,
    deleted_at datetime,
    primary key (reservation_id),
    foreign key (customer_id) references customers(id),
    foreign key (table_id) references tables(id)
);

 create table orders (
    id int auto_increment,
    customer_id int,
    employee_id int,
	descriptionn varchar(100),
    table_id int,
    order_date date,
    order_time time,
    total decimal(10,2),
    primary key (id),
    foreign key (customer_id) references customers(id),
    foreign key (employee_id) references employees(id),
    foreign key (table_id) references tables(id)
 );
 insert into employees (firstname,surname,employeetype,dateofbirth,pps,full_time) values ('oliver','kerr','bartender','2000-01-31', '12345678B', true);
 insert into employees (firstname,surname,employeetype,dateofbirth,pps,full_time) values ('morgan','bartlett','bartender','1985-10-28', '43215678E', true);
 insert into employees (firstname,surname,employeetype,dateofbirth,pps,full_time) values ('rebecca','house','bartender','1993-08-01', '98765678D', true);
 insert into employees (firstname,surname,employeetype,dateofbirth,pps,full_time) values ('leslie','hammond','bartender','1999-03-03', '12625378F', false);
 insert into employees (firstname,surname,employeetype,dateofbirth,pps,full_time) values ('axel','gibson','bartender','2007-09-29', '17955678T', false);
 insert into employees (firstname,surname,employeetype,dateofbirth,pps,full_time) values ('bo','bradshaw','manager','1979-12-19', '1123678Y', TRUE);
 
 insert into customers (firstname, surname, email, phone, vip, comments)values ( 'John', 'Smith', 'john.smith@example.com', '0892321234', true, 'Prefers outdoor seating');
 insert into customers (firstname, surname, email, phone, vip, comments)values ( 'Jane', 'Doe', 'jane.doe@example.com', '0873456335', false, null);
 insert into customers (firstname, surname, email, phone, vip, comments)values ( 'Eoin', 'Connors', 'eoinconnors@example.com', '082712534', false, null);
 insert into customers (firstname, surname, email, phone, vip, comments)values ( 'Liam', 'Davids', 'liamdavids@example.com', '089571234', true, '5 drink maximum');

 insert into tables (id, capacity, booked)values (1, 6, true);
 insert into tables (id, capacity, booked)values (2, 6, true);
 insert into tables (id, capacity, booked)values (3, 6, false);
 insert into tables (id, capacity, booked)values (4, 6, true);
 
 insert into orders (customer_id, employee_id, table_id, descriptionn, order_date, order_time, total)values ( 1, 3, 2, 'Two Vodkas', '2023-04-30', '18:30:00', 16.00); 
 insert into orders (customer_id, employee_id, table_id, descriptionn, order_date, order_time, total)values ( 2, 2, 1, 'Three Gins', '2023-04-30', '19:00:00', 24.00);
 insert into orders (customer_id, employee_id, table_id, descriptionn, order_date, order_time, total)values ( 3, 1, 4, 'Four Tequilias', '2023-04-30', '20:00:00', 40.00); 
 insert into orders (customer_id, employee_id, table_id, descriptionn, order_date, order_time, total)values ( 4, 4, 3, 'Eight Coronas', '2023-04-30', '20:30:00', 40.00);
 
 insert into reservations (reservation_id, table_id, customer_id, reservationDate, reservationTime, partySize, specialRequests)values (1, 1, 2, '2023-05-01', '19:00:00', 4, 'Window seat preferred');
 insert into reservations (reservation_id, table_id, customer_id, reservationDate, reservationTime, partySize, specialRequests)values (2, 2, 2, '2023-05-03', '18:30:00', 6, NULL);
 insert into reservations (reservation_id, table_id, customer_id, reservationDate, reservationTime, partySize, specialRequests)values (3, 3, 1, '2023-05-05', '20:00:00', 2, 'Anniversary celebration');