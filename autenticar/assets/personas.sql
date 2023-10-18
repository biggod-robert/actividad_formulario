create schema tour_people;
use tour_people;

create table registro(
	Id bigint not null,
	nombre varchar(50) not null,
	apellido varchar(50) not null,
	fecha_nacimiento date null,
    edad int not null,
    correo varchar(100) not null,
	contraseña varchar(50) not null,
	PRIMARY KEY (id)
);

select * from registro;

create table inicio(
	Id bigint not null,
    correo varchar(100) not null,
	contraseña varchar(50) not null,
	PRIMARY KEY (Id)
);


SELECT * FROM registro WHERE nombre AND contraseña;