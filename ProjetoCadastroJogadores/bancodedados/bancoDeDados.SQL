create database cadastro;
  use cadastro;
    create table Tb_funcionarios
    (
      id_funcionario int primary key not null auto_increment ;
      nome varchar(250) not  null ;
      cargo varchar(100) not null;
      endereco varchar(250) not null;
      contato varchar(100) not null;
      eMail  varchar(100) not null;

    )

    create table Tb_endereco_jogador
    (
      id_endereco_jogador int primary key not null auto_increment ;
      logradouro varchar(250) not null ;
      numero int  not null;
      CEP varchar(100) not null;
      bairro  varchar(100) not null;
      cidade  varchar(100) not null;
      UF  varchar(100) not null;

    )

    create table Tb_endereco_funcionario
    (
      id_endereco_funcionario int primary key not null auto_increment ;
      logradouro varchar(250) not null ;
      numero int  not null;
      CEP varchar(100) not null;
      bairro  varchar(100) not null;
      cidade  varchar(100) not null;
      UF  varchar(100) not null;

    )

    create table Tb_jogador
    (
      id_jogador int primary key not null auto_increment ;
      nome varchar(250) not  null ;
      dataNascimento varchar(100) not null;
      sexo varchar(50) not null;
      endereco varchar(100) not null;
      contato  varchar(100) not null;
      categoria  varchar(100) not null;
      presente int ;
    )

    create table Tb__categorais
    (
      id_categorais int primary key not null auto_increment ;
      sub11 int;
      sub13 int;
      sub15 int;
      sub17 int;
    )

    create table Tb__treinos
    (
      id_treinos int primary key not null auto_increment ;
      data varchar(10);
      hora varchar(10);
      totalJogos int;
      presenca varchar(10);
      falta varchar(10);
      jogo varchar(10);
      nomeJogador varchar(100);
    )

    create table Tb__presenca
    (
      id_presenca int primary key not null auto_increment ;
      nome  varchar(10);
      totalTreino varchar(10);
      percentualTreinos int;
      percentualJogos int;
    )

    create table Tb__jogos
    (
      id_jogos int primary key not null auto_increment ;
      data varchar(10);
      hora varchar(10);
      Jogos int;
      presenca varchar(10);
      falta varchar(10);
      nomeJogador varchar(100);
    )
