<?php


include_once('model/Usuario.php');
include 'model/Cor.php';
include 'model/Subcategoria.php';
include 'model/Marca.php';
include 'model/Produto.php';

include_once('dao/UsuarioDao.php');
include 'dao/CoresDao.php';
include 'dao/SubcategoriasDao.php';
include 'dao/MarcasDao.php';
include 'dao/ProdutosDao.php';
/* include 'dao/Auth.php'; */

include_once('dao/DaoFactory.php');
include_once('dao/PostgresDaoFactory.php');

include 'header.php';

$factory = new PostgresDaofactory();


?>
