create database valemobi;
use valemobi;

create table cadastrar_produtos(cod int not null,
			  nome_produto varchar(45),
              tipo_produto varchar(45),
              quantidade int,
              preco varchar(45),
              tipo_negocio varchar(45));

select * from cadastrar_produtos;