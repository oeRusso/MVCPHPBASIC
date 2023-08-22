<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de usuarios</title>
</head>

<body>
    <table>
        <thead>
            <tr>Usuario</tr>
            <tr>Contraseña</tr>
            <tr>Nombre Real</tr>
        </thead>
        <tbody>
            <?php
            require_once '../controller/usuarioController.php';

            $usuarios = new usuarioController();
            $usuarios->getAllUser();
            foreach ($usuarios as $user) {
            ?>
            <tr>
                <td>  $user['nombre'] </td>
                <td>  $user['email'] </td>
                <td>  $user['contraseña'] </td>
            </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>