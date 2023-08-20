create database luxestoque;
use luxestoque;

create table geladeira(
codigo int not null primary key,
marca varchar(45) not null,
fabricante varchar(45) not null,
dimensao varchar(45) not null,
capacidade varchar(45) not null,
tipo varchar(45) not null,
peso varchar(45) not null,
voltagem varchar(45) not null,
cor varchar(45) not null,
consumo varchar(45) not null,
portas int not null,
prateleiras int not null,
tipoprateleiras varchar(45) not null,
preco float not null,
quantidade int not null,
quantidademin int not null
);

create table freezer(
codigo int not null primary key,
marca varchar(45) not null,
fabricante varchar(45) not null,
dimensao varchar(45) not null,
capacidade varchar(45) not null,
tipo varchar(45) not null,
peso varchar(45) not null,
voltagem varchar(45) not null,
cor varchar(45) not null,
consumo varchar(45) not null,
portas int not null,
prateleiras int not null,
tipoprateleiras varchar(45) not null,
congelamentorapido varchar(45) not null,
controletemperatura varchar(45) not null,
ambiente varchar(45) not null,
duplafuncao  varchar(45) not null,
gavetas varchar(45) not null,
preco float not null,
quantidade int not null,
quantidademin int not null
);

create table usuario(
id int not null auto_increment primary key,
email varchar(70) not null,
senha varchar(20) not null
);

create table contato(
id int not null auto_increment primary key,
nome varchar(45) not null,
email varchar(100) not null,
assunto varchar(100) not null,
mensagem varchar(255) not null
);


