<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Listado de usuarios</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <td scope="col">Usuario</td>
                <td scope="col">Contraseña</td>
                <td scope="col">email</td>
                <td scope="col">acciones</td>
            </tr>

        </thead>
        <tbody>
            <?php
            require_once 'controller/usuarioController.php';

            $usuarios = new usuarioController();
            $users = $usuarios->getAllUser();
            foreach ($users as $user) {

            ?>
                <tr>
                    <td> <?php echo $user['nombre']  ?> </td>
                    <td> <?php echo $user['contraseña']  ?> </td>
                    <td> <?php echo $user['email'] ?> </td>
                    <td><a href="<?php echo '/MVCPHPBASIC/model/handler.php?action=getOneUser&param='.$user['id']?>"> Edita </a></td>
                    <td>Eliminar</td>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>