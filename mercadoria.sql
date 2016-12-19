create database teste_on_Line;
use teste_on_Line;

create table mercadoria(cod_mercadoria  int not null auto_increment primary key,
						tipo_mercadoria varchar(20),
                        nome_mercadoria varchar(20),
                        quantidade int,
                        preco double,
                        venda double
						);
                        
 select * from mercadoria;                       
 insert into mercadoria(tipo_mercadoria,nome_mercadoria,quantidade,preco,tipo_do_negocio) values('eletro domestico','geladeira','1','3000','compra');
