<?php

require '../controller/usuarioController.php';

$user = $_GET['param'];

$usuario = new UsuarioController();
$usuario->getOneUser($user);