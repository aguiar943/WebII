<?php


include_once('model/Usuario.php');
include_once('dao/UsuarioDao.php');
include_once('dao/DaoFactory.php');
include_once('dao/PostgresDaoFactory.php');

include 'header.php';

$factory = new PostgresDaofactory();


?>
