create database usuarios;

use usuarios;

 create table tb_usuarios
  (
    id_usuario int  not null auto_increment primary key,
    nome varchar(104) not null,
    senha varchar(256) not null,
   /* timestanp é um comando para pegar a data do sistema do usuario */
    dt_cadastro timestamp not null
  );
