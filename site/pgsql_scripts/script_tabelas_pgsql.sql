
/****** CORES *****/

CREATE TABLE CA_CORES(

    id serial not null,
    nome varchar (18) not null,
    cd_hex varchar(7) not null

);

alter table CA_CORES
add constraint pk_cor
primary key(id);


/****** MARCAS *****/

CREATE TABLE CA_MARCAS(

    id serial not null,
    nome varchar (20) not null

);

alter table CA_MARCAS
add constraint pk_marca
primary key(id);

/****** CATEGORIAS *****/

CREATE TABLE CA_CATEGORIAS(

    id serial not null,
    nome varchar (25) not null

);

alter table CA_CATEGORIAS
add constraint pk_categoria
primary key(id);

/****** SUBCATEGORIAS *****/

CREATE TABLE CA_SUBCATEGORIAS(

    id serial not null,
    nome varchar (25) not null,
    id_categoria INT not null

);

alter table CA_SUBCATEGORIAS
add constraint pk_subcategoria
primary key(id);


CREATE TABLE CA_PRODUTOS(

    id serial not null,
	
	descricao varchar(400),
	modelo varchar(10),
	
	preco_custo DECIMAL not null,
	preco_venda DECIMAL not null,
	
    cd_barras INT not null,
	cd_referencia INT not null,
      
    unidade VARCHAR(2) not null,
    ncm INT not null,
	
	id_marca INT not null,
	id_subcategoria INT not null

);


/****** REL *****/

CREATE TABLE REL_PRODUTO_COR(

    id serial not null,
    id_produto INT not null,
    id_cor INT not null

);

alter table REL_PRODUTO_COR
add constraint pk_produto_cor
primary key(id);

/****** IMAGENS *****/

CREATE TABLE CA_IMAGENS(

    id serial not null,
    caminho varchar (60) not null, 
    categoria varchar(10) not null,
    id_produto INT not null

);

alter table IMAGENS
add constraint pk_imagem
primary key(id);

/****** USUARIO *****/

CREATE TABLE USUARIOS(

    id serial not null,
	
	nome varchar(75) not null,
	email varchar(70) not null,
    senha varchar(15) not null,
    cpf INT not null,
    
    telefone1 INT,
    telefone2 INT,
    rg INT,
    cartao INT
    
);

alter table USUARIOS
add constraint pk_usuario
primary key(id);
