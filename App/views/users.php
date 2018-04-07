
<html lang="es">
  <head>
    <title><?php echo $title ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="clientes , evaz, desarrollo web" name="keywords"/>
    <meta content="aplicación de manejo de clientes" name="description"/>
    <link href="http://localhost/prueba/public/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="http://localhost/prueba/public/css/material-kit.css" rel="stylesheet"/>
    <script type="text/javascript" src="http://localhost/prueba/public/js/jquery.min.js"></script>
  </head>
  <body>
    <div class="main">
      <h1>Lista de Usuarios</h1>
      <table class="table table-hover table-striped">
        <thead>
          <th>Id</th>
          <th>Nombre de Usuario</th>
          <th>Nombre</th>
          <th>Apellido</th>
        </thead>
        <tbody><?php foreach ($users as $user):?>
          <tr>
            <td><?php echo $user["id"] ?></td>
            <td><?php echo $user["user_name"] ?></td>
            <td><?php echo $user["first_name"] ?></td>
            <td><?php echo $user["last_name"] ?></td>
          </tr><?php endforeach;?>
        </tbody>
      </table>
    </div>
  </body>
</html>