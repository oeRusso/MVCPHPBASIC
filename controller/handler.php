<?php

require './usuarioController.php';

$user = $_GET['param'];

$usuario = new UsuarioController();
$usuario->getOneUser($user);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoge los datos del formulario en un arreglo
    $userData = [
        'id' => $user,
        'nombre' => $_POST['nombre'],
        'email' => $_POST['email'],
        'contraseña' => $_POST['contraseña']
    ];

    // Llama al método updateUserController para realizar la actualización
    $usuarioController = new UsuarioController();
    $result = $usuarioController->updateUserController($userData);

    if ($result) {
        // La actualización fue exitosa
        echo "Usuario actualizado correctamente.";
    } else {
        // Hubo un error en la actualización
        echo "Hubo un error al actualizar el usuario.";
    }
}

$usuario->updateUserController($user);



