create database ProjetoTurma20181;

use ProjetoTurma20181;

create table tb_logprof(
  id int primary key auto_increment,
  email varchar(200) not null,
  senha varchar(50) not null
);

create table tb_logaluno(
  id int primary key auto_increment,
  email varchar(200) not null,
  senha varchar(50) not null
);
