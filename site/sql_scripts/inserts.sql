/****** INSERTS CORES *****/

insert into CA_CORES(nome, cd_hex) values ('Vermelho','#FF0000');
insert into CA_CORES(nome, cd_hex) values ('Vermelho Escuro','#8B0000');
insert into CA_CORES(nome, cd_hex) values ('Vermelho Claro','#d33a3a');

insert into CA_CORES(nome, cd_hex) values ('Azul','#0000FF');
insert into CA_CORES(nome, cd_hex) values ('Azul Escuro','#00008B');
insert into CA_CORES(nome, cd_hex) values ('Azul Claro','#BFEFFF');

insert into CA_CORES(nome, cd_hex) values ('Verde','#00FF00');
insert into CA_CORES(nome, cd_hex) values ('Verde Escuro','#006400');
insert into CA_CORES(nome, cd_hex) values ('Verde Claro','#90EE90');

insert into CA_CORES(nome, cd_hex) values ('Amarelo','#FFFF00');
insert into CA_CORES(nome, cd_hex) values ('Amarelo Queimado','#FFD700');
insert into CA_CORES(nome, cd_hex) values ('Amarelo Claro','#EEE8AA');

insert into CA_CORES(nome, cd_hex) values ('Rosa','#FF69B4');
insert into CA_CORES(nome, cd_hex) values ('Rosa Escuro','#8B0A50');
insert into CA_CORES(nome, cd_hex) values ('Rosa Claro','#FF82AB');

insert into CA_CORES(nome, cd_hex) values ('Marrom','#CD661D');
insert into CA_CORES(nome, cd_hex) values ('Marrom Escuro','#8B4513');
insert into CA_CORES(nome, cd_hex) values ('Marrom Claro','#CD853F');

insert into CA_CORES(nome, cd_hex) values ('Marrom','#CD661D');
insert into CA_CORES(nome, cd_hex) values ('Marrom Escuro','#8B4513');
insert into CA_CORES(nome, cd_hex) values ('Marrom Claro','#CD853F');

insert into CA_CORES(nome, cd_hex) values ('Laranja','#FF7F00');
insert into CA_CORES(nome, cd_hex) values ('Laranja Escuro','#EE7621');
insert into CA_CORES(nome, cd_hex) values ('Laranja Claro','#EE7942');

insert into CA_CORES(nome, cd_hex) values ('Roxo','#A020F0');
insert into CA_CORES(nome, cd_hex) values ('Roxo Escuro','#551A8B');
insert into CA_CORES(nome, cd_hex) values ('Roxo Claro','#AB82FF');

insert into CA_CORES(nome, cd_hex) values ('Cinza','#BEBEBE');
insert into CA_CORES(nome, cd_hex) values ('Cinza Escuro','#696969');
insert into CA_CORES(nome, cd_hex) values ('Cinza Claro','#EEE9E9');

insert into CA_CORES(nome, cd_hex) values ('Branco','#000000');
insert into CA_CORES(nome, cd_hex) values ('Preto','#FFFFFF');

/****** INSERTS MARCAS *****/

insert into CA_MARCAS(nome) values ('NVIDIA');
insert into CA_MARCAS(nome) values ('AMD Radeon');

insert into CA_MARCAS(nome) values ('Philips');
insert into CA_MARCAS(nome) values ('DELL');

insert into CA_MARCAS(nome) values ('Lacoste');
insert into CA_MARCAS(nome) values ('Hering');

insert into CA_MARCAS(nome) values ('Levis');
insert into CA_MARCAS(nome) values ('Dolce & Gabbana');

insert into CA_MARCAS(nome) values ('Nike');
insert into CA_MARCAS(nome) values ('Adidas');

insert into CA_MARCAS(nome) values ('Levis');
insert into CA_MARCAS(nome) values ('Dolce & Gabbana');

insert into CA_MARCAS(nome) values ('Nike');
insert into CA_MARCAS(nome) values ('Adidas');

insert into CA_MARCAS(nome) values ('Brastemp');
insert into CA_MARCAS(nome) values ('Consul');

/****** INSERTS CATEGORIAS *****/

insert into CA_CATEGORIAS(nome) values ('Informática');
insert into CA_CATEGORIAS(nome) values ('Vestuário');
insert into CA_CATEGORIAS(nome) values ('Eletrodomésticos');

/****** INSERTS SUBCATEGORIAS *****/

insert into CA_SUBCATEGORIAS(nome, id_categoria) values ('Placa de Vídeo', 1);
insert into CA_SUBCATEGORIAS(nome, id_categoria) values ('Monitor', 1);
insert into CA_SUBCATEGORIAS(nome, id_categoria) values ('Teclado', 1);

insert into CA_SUBCATEGORIAS(nome, id_categoria) values ('Camiseta', 2);
insert into CA_SUBCATEGORIAS(nome, id_categoria) values ('Camisa', 2);

insert into CA_SUBCATEGORIAS(nome, id_categoria) values ('Calça', 2);
insert into CA_SUBCATEGORIAS(nome, id_categoria) values ('Bermuda', 2);

insert into CA_SUBCATEGORIAS(nome, id_categoria) values ('Sapatênis', 2);
insert into CA_SUBCATEGORIAS(nome, id_categoria) values ('Sapato', 2);
insert into CA_SUBCATEGORIAS(nome, id_categoria) values ('Tênis', 2);
insert into CA_SUBCATEGORIAS(nome, id_categoria) values ('Meia', 2);

insert into CA_SUBCATEGORIAS(nome, id_categoria) values ('Geladeira', 3);
insert into CA_SUBCATEGORIAS(nome, id_categoria) values ('Micro-Ondas', 3);
insert into CA_SUBCATEGORIAS(nome, id_categoria) values ('Fogão', 3);
insert into CA_SUBCATEGORIAS(nome, id_categoria) values ('Máquina de Lavar', 3);

/****** SELECTS *****/

SELECT * FROM CA_CORES

SELECT * FROM CA_MARCAS

SELECT * FROM CA_CATEGORIAS

SELECT * FROM CA_SUBCATEGORIAS

SELECT * FROM CA_IMAGENS

SELECT * FROM CA_PRODUTOS

/*

update CA_CORES set nome = 'Branco' WHERE id = 28

*/

