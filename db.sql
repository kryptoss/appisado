
create database if not exists pisado;
use pisado;
create table delegados(titulacion int(2) NOT NULL auto_increment ,nia NOT NULL varchar(255));
create table pisados(id int(6) NOT NULL auto_increment, fecha timestamp, titulacion int(2), asignatura varchar(255), contenido text);
create table mensajes(pisado int(6) ,fecha timestamp, contenido text);
create table titulaciones(id int(2) auto_increment, nombre varchar(255) );
create table sesiones(cookie varchar(255), nia varchar(255) );
