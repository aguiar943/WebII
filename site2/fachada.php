<?php

#Carrega os objetos

include 'model/Cor.php';
include 'model/Subcategoria.php';
include 'model/Marca.php';
include 'model/Produto.php';
include 'model/Imagem.php';
include 'model/Usuario.php';
include 'model/Fornecedor.php';
include 'model/Compra.php';

include 'dao/CoresDao.php';
include 'dao/SubcategoriasDao.php';
include 'dao/MarcasDao.php';
include 'dao/ProdutosDao.php';
include 'dao/UsuarioDao.php';
include 'dao/FornecedorDao.php';
include 'dao/ComprasDao.php';

include 'dao/DaoFactory.php';
include 'dao/PostgresDaoFactory.php';
include 'dao/Auth.php';

include 'header.php';

$factory = new PostgresDaofactory();

?>