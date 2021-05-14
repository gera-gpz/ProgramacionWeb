
-- drop database ejemplo;
create database ejemplo;
use ejemplo;

-- ----------------------------------------------
-- Tabla clientes
-- ----------------------------------------------
-- drop table clientes;
create table clientes
(	id_cliente  integer,
    nombre		varchar(50),
    direccion	varchar(50),
    telefono	varchar(15)
);

insert into clientes() values(1,"Gerardo Pineda","Jalisco 726","718 2757");
insert into clientes() values(2,"Adolfo Perez","Campeche 1836","715 7816");
insert into clientes() values(3,"Fabian Pineda","Washington 913","714 4844");
insert into clientes() values(4,"Norma Cruz","Anacanes 2526","714 3313");
insert into clientes() values(5,"Carlos Alvarez","Guerrero 2301","151 4740");



select * from clientes