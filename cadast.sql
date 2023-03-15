drop database inserir;
create database inserir;
use inserir;

create table inserir_cadastro (nome varchar (255),
cep varchar(255),
logradouro varchar (255),
numero int,
bairro varchar(255),
estado varchar (255),
telefone varchar (20),
celular varchar (255),
email varchar (255) primary key,
usuario varchar (255) ,
senha varchar (255),
foto varchar (255) null );





create table doacoes (id int NOT NULL AUTO_INCREMENT primary key,
leite int,
roupas int,
tempo int,
email varchar (255));

create table chat1(
email varchar (30) not null ,
mensagem text not null);

select * from chat1;
select * from inserir_cadastro;

select * from doacoes;
