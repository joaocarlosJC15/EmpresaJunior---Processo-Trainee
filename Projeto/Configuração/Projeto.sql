Create database Projeto;

Use Projeto;

Create table Cliente(
   ID_cliente integer auto_increment,
   Nome varchar(200) not null,
   Email varchar(200) not null,
   CPF varchar(40) not null,
   Data_nascimento varchar(40) not null,
   Sexo varchar(15) not null,
   Foto longtext null,
   PRIMARY KEY (ID_cliente)
   );
Create table Telefone(
   Telefone varchar(50),
   ID_cliente integer not null,
   PRIMARY KEY(Telefone,ID_cliente),
   FOREIGN KEY (ID_cliente)
   REFERENCES Cliente (ID_cliente)
   );

Create table Endereco(
   ID_endereco integer auto_increment,
   Rua varchar(100) not null,
   Numero varchar(40) not null,
   Complemento varchar(40) null,
   Bairro varchar(100) not null,
   CEP varchar(40) not null,
   Cidade varchar(50) not null,
   Estado varchar(20) not null,
   ID_cliente integer not null,
   PRIMARY KEY (ID_endereco),
   FOREIGN KEY (ID_cliente)
   REFERENCES Cliente (ID_cliente)
   );

Create table Usuario(
   Usuario varchar(100),
   Senha varchar(100),
   PRIMARY KEY (Usuario,Senha)
      );

Insert Into Usuario values("root","12345");
