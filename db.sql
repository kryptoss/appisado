
create database if not exists pisado;
use pisado;
create table delegados(FOREIGN KEY titulacion REFERENCES titulaciones(id) ,nia NOT NULL varchar(255));
create table pisados(id int(6) NOT NULL auto_increment, fecha timestamp,FOREIGN KEY  titulacion REFERENCES titulaciones(id) , asignatura varchar(255), contenido text);
create table mensajes(FOREIGN KEY pisado REFERENCES pisados(id) ,fecha timestamp, contenido text, bool checked default 0);
create table titulaciones(id int(2) NOT NULL auto_increment, nombre varchar(255) );
create table sesiones(cookie varchar(255), FOREIGN KEY nia REFERENCES delegados(nia) );
