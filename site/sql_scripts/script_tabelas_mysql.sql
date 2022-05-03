CREATE TABLE CA_CORES(

    id INT PRIMARY KEY AUTO_INCREMENT not null,
    nome varchar (18) not null,
    cd_hex varchar(7) not null

);

CREATE TABLE CA_MARCAS(

    id INT PRIMARY KEY AUTO_INCREMENT not null,
    nome varchar (20) not null

);

CREATE TABLE CA_CATEGORIAS(

    id serial not null,
    nome varchar (25) not null

);

CREATE TABLE CA_SUBCATEGORIAS(

    id serial not null,
    nome varchar (25) not null,
    id_categoria INT not null

);

CREATE TABLE CA_PRODUTOS(

    id INT PRIMARY KEY AUTO_INCREMENT not null,
	
	descricao varchar(500),
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

CREATE TABLE CA_IMAGENS(

    id INT PRIMARY KEY AUTO_INCREMENT not null,
    caminho varchar (70) not null, 
    categoria varchar(10) not null,
    id_produto INT not null

);

CREATE TABLE REL_PRODUTO_COR(

    id INT PRIMARY KEY AUTO_INCREMENT not null,
    id_produto INT not null,
    id_cor INT not null

);


CREATE TABLE USUARIOS(

    id INT PRIMARY KEY AUTO_INCREMENT not null,
	
	nome varchar(75) not null,
	email varchar(70) not null,
    senha varchar(15) not null,
    cpf INT not null,
    
    telefone1 INT,
    telefone2 INT,
    rg INT,
    cartao INT
    
);
