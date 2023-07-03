create database students;
use students;
create table students(
firstname char(50),
lastname char(50),
program varchar(255),
course char(100),
nrc varchar(11),
fees int
);

insert into students values('Makoba','Ngulube','BIT','PHP',252585/46/1,3000);
insert into students values('Tumelo','Banda','BFA','ASP',252540/46/1,7000);
insert into students values('Melissa','Mwala','BIT','SQL',202056/46/1,4000);