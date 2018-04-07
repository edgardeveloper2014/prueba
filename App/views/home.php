
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
      <h1>bienvenido usuario  </h1>
      <button class="btn btn-primary" id="demo">Mostrar Tabla</button>
      <script>
        $(document).ready(function () {
           $("#demo").click(function () {
               $.post("http://localhost/prueba/public/home/usuarios", function (externo) {
                   $("#mostrar-tabla").html(externo);
               })
           });
        })
      </script>
      <div id="mostrar-tabla"></div>
    </div>
  </body>
</html>