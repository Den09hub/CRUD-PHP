create database crud_reservas;

use crud_reservas;

select * from Espaco;

create table Espaco (
	id_esp int auto_increment not null,
    nome varchar(150) not null,
    tipo varchar(150) not null,
    capacidade int not null,
    primary key(id_esp)
);

create table Usuarios (
	id_user int auto_increment not null,
    nome_user varchar(150) not null,
    email varchar(150) not null,
    telefone varchar(45) not null,
    primary key (id_user)
);

select * from Usuarios;