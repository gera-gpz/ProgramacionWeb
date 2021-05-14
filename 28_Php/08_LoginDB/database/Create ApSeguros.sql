create database apseguros;
use apseguros;

create table cusuario
( idUsuario smallint not null auto_increment,
  nombre    varchar(30),
  apPaterno varchar(30),
  apMaterno varchar(30),
  login     varchar(10),
  password  varchar(32),
  PRIMARY KEY(idUsuario)
);

select * from cusuario;

insert into cusuario (nombre,apPaterno,apMaterno,login,password)
values ('Gerardo','Pineda','Zapata','gerardop','740a2db1cb3e7c2b90d2b363bb4988c1');   /*gpineda*/

insert into cusuario (nombre,apPaterno,apMaterno,login,password)
values ('Adolfo','Perez','Gutierrez','adolfop','2801d271c539286ca17a54c81aec9e18');   /*aperez*/

insert into cusuario (nombre,apPaterno,apMaterno,login,password)
values ('Fernanda','Pineda','Perez','fernandap','09d49a630977476a2c4fb6f2c6334d0a');  /*fpineda*/

insert into cusuario (nombre,apPaterno,apMaterno,login,password)
values ('Brenda ','Juarez','Juarez','brendaj','9d53c93cd250d745d5128fc922eb6256');    /*bjuarez*/

insert into cusuario (nombre,apPaterno,apMaterno,login,password)
values ('Sergio','Zamora','Solana','sergioz','2752773168c1b9a438941d6cf6fad5ae');     /*szamora*/

insert into cusuario (nombre,apPaterno,apMaterno,login,password)
values ('Silvia','Roldan','Garcia','silviar','8d8b1040f9408f0cb5f7f1fff8bfc463');     /*sroldan*/
