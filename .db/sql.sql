create database if not exists livecadu;

use livecadu;

create table user(
id int not null  auto_increment,
email varchar(100) not null,
passworduser varchar(100) not null,
role varchar(100) not null,
primary key(id),
unique(email)
);

insert into user(email,passworduser,role)values('admin@admin.com','senha@123','admin');
insert into user(email,passworduser,role)values('user@user.com','1234','user');