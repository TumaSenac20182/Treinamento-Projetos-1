create database projetosenac2018;
 use projetosenac2018;
 
 create table tb_login
 (
    id_login int not null auto_increment primary key , 
    email varchar(150) not null,
    nome varchar(100) not null,
    senha varchar(250) not null    
 );
 
 insert into tb_login (email,nome,senha) values("gustavo@teste.com","Gustavo","123456");
 
 select*from tb_login;