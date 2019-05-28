drop database if exists tecnologia;
create database tecnologia default character set utf8 default collate utf8_general_ci;
use tecnologia;

create table users (
    id          int primary key auto_increment,
    name        varchar(255),
    telefone    varchar(50),
    cidade      varchar(50),
    telefone    varchar(50),
    estado      varchar(50),
    email       varchar(100),
    info        varchar(50),
    tipo        varchar(50),
    cpf         varchar(100),
    cnpj         varchar(100),
    is_admin    boolean
);

drop user if exists 'raj';
create user if not exists "raj" identified with mysql_native_password by "raj";
grant all privileges on tecnologia.* to "raj";