<?php

require './usuarioController.php';

$user = $_GET['param'];

$usuario = new UsuarioController();
$usuario->getOneUser($user);
$usuario->updateUserController($user);



