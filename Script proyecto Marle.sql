create database php_mysql_crud;
use php_mysql_crud;

CREATE TABLE usuario(
id int auto_increment not null primary key,
nombre varchar(50), 
direccion varchar(256),
telefono varchar(10),
mail varchar(80), 
comentario varchar(256)
);

select * from usuario;

insert into usuario(nombre, direccion, telefono, mail, comentario)
values ("Lalo", "Region 95 Calle 111 entre calle 16 y 18", "9984233521", "IAmJackex@gmail.com"," La verdad es que comento que no me siento bien con la situación actual pues creo que...");

drop table usuario;