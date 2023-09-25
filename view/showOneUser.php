<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Listado de usuarios</title>
</head>

<body>
    <h1>Ingreso al la vista de un alumno</h1>

    <form action="<?php echo '/MVCPHPBASIC/controller/handler.php?param='.$user['id']?>" method="POST"> 
    <!-- //aca antes estaba enviando el metodo y el id pero ahora solo envie el id ya que en el handler defino el metodo y le paso ese id -->
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $user['nombre'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputPassword1" value="<?php echo $user['email'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="contraseña" class="form-control" id="exampleInputPassword1" value="<?php echo $user['contraseña'] ?>">
        </div>
       
        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

  


</body>

</html>